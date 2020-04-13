</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
   <div class="container my-auto">
      <div class="copyright text-center my-auto">
         <span>Copyright &copy; <?= date('Y') ?> Muhammad Irfan Permana - PMII Komisariat UNU Kaltim </span>
      </div>
   </div>
</footer>
<!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
   <i class="zmdi zmdi-chevron-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.0.7/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.0.7/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.0.7/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.0.7/vendor/chart.js/Chart.min.js"></script>

<!-- dataTables -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<!-- sweetalert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.9/dist/sweetalert2.all.min.js"></script>
<script>
   function logout() {
      Swal.fire({
         text: "Apakah yakin ingin keluar dari sistem database PKC Kaltimra?",
         icon: 'warning',
         showCancelButton: true,
         confirmButtonColor: '#4e73df',
         cancelButtonColor: '#5a5c69',
         confirmButtonText: 'Ya, keluar',
         cancelButtonText: 'Tidak, batal',
      }).then((result) => {
         if (result.value) {
            window.location.href = "<?= site_url('auth/logout') ?>"
         }
      });
   }
</script>