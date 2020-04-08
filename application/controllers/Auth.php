<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	// fungsi tampil view login
	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
			'required' => '%s harus diisi.',
			'valid_email' => '%s login harus valid'

		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', [
			'required' => '%s harus diisi.'
		]);

		// jika gagal
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('v_login');
		}
		// jika berhasil
		else {
			$this->_proses_login();
		}
	}

	// fungsi proses login
	private function _proses_login()
	{
		$email      = $this->input->post('email', TRUE);
		$password   = $this->input->post('password', TRUE);
		$user 		= $this->auth_model->get_where_email(['email_user' => $email]);

		// jika data user ditemukan
		if ($user) {
			// cek password jika sama
			if (password_verify($password, $user['pass_user'])) {
				// buat session
				$data_session = array(
					'id_user' 		=> $user['id_user'],
					'name_user' 	=> $user['name_user'],
					'email_user' 	=> $user['email_user'],
					'cabang_id' 	=> $user['cabang_id'],
					'level_user'	=> $user['level_user']
				);

				$this->session->set_userdata($data_session);

				// redirect sesuai dengan level user
				if ($user['level_user'] == 1) {
					redirect(site_url('admin/beranda'));
				} elseif ($user['level_user'] == 2) {
					redirect(site_url('korcab/beranda'));
				} elseif ($user['level_user'] == 3) {
					redirect(site_url('cabang/beranda'));
				}
			}
			// jika password tidak sama
			else {
				$this->session->set_flashdata('alert_login', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><small><strong>Password salah !</strong> silakan coba lagi.</small><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				// redirect
				redirect(site_url('auth'));
			}
		}
		// jika data tidak ditemukan
		else {
			$this->session->set_flashdata('alert_login', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><small>akun anda belum terdaftar disistem saat ini !</small><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			// redirect
			redirect(site_url('auth'));
		}
	}

	// fungsi logout 
	public function logout()
	{
		// penghapusan session 
		$this->session->sess_destroy();

		redirect(site_url('auth'));
	}

	// fungsi atur profil
	public function profil($id_user)
	{
		$this->form_validation->set_rules('name_user', 'Nama lengkap', 'required|trim', [
			'required' => '%s harus diisi.'
		]);
		$this->form_validation->set_rules('email_user', 'Email', 'required|trim|valid_email', [
			'required' => '%s harus diisi.',
			'valid_email' => '%s harus valid'

		]);

		// jika gagal
		if ($this->form_validation->run() == FALSE) {
			// load view
			$parsing['header_cabang'] 	= $this->cabang_model->all();
			$parsing['user'] 				= $this->user_model->where($id_user);
			$this->load->view('v_profil', $parsing);
		}
		// jika berhasil
		else {
			$this->_ganti_profil($id_user);
		}
	}

	// fungsi ganti profil
	private function _ganti_profil($id_user)
	{
		$this->user_model->update_profil($id_user);

		// buat session baru
		$user = $this->user_model->where($id_user);
		$data_session = array(
			'id_user' 		=> $user->id_user,
			'name_user' 	=> $user->name_user,
			'email_user' 	=> $user->email_user,
			'cabang_id' 	=> $user->cabang_id,
			'level_user'	=> $user->level_user
		);

		$this->session->set_userdata($data_session);

		// alert jika berhasil
		$this->session->set_flashdata('alert_profil', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Selamat !</strong> Pengaturan profil anda sudah diperbarui.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

		// redirect
		redirect(site_url('atur-profil/' . $user->id_user));
	}

	// fungsi atur profil
	public function ubah_password($id_user)
	{
		$this->form_validation->set_rules('pass1', 'Password baru', 'required|trim|min_length[6]', [
			'required' => '%s harus diisi.',
			'min_length' => 'minimal 6 karakter untuk password baru.'
		]);
		$this->form_validation->set_rules('pass2', 'Ulangi password', 'required|trim|matches[pass1]', [
			'required' => '%s harus diisi.',
			'matches' => 'Password baru dan ulangi password harus sama'
		]);

		// jika gagal
		if ($this->form_validation->run() == FALSE) {
			$parsing['header_cabang'] 	= $this->cabang_model->all();
			$this->load->view('v_ubah_password', $parsing);
		}
		// jika berhasil
		else {
			$this->_ganti_password($id_user);
		}
	}

	// fungsi ganti profil
	private function _ganti_password($id_user)
	{
		// proses ganti password
		$this->user_model->update_password($id_user);

		// alert jika berhasil
		$this->session->set_flashdata('alert_password', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Selamat !</strong> password baru anda sudah diperbarui.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

		// redirect
		redirect(site_url('ubah-password/' . $id_user));
	}
}
