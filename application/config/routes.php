<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// auth routing
$route['atur-profil/(:num)'] = 'auth/profil/$1';
$route['ubah-password/(:num)'] = 'auth/ubah_password/$1';

// korcab routing
$route['korcab/cabang/(:num)'] = 'korcab/cabang/data/$1';
