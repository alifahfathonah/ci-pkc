<?php $this->load->view('layout/header') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <i class="zmdi zmdi-layers"></i>&nbsp;
            Halaman Beranda
        </h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Anggota</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= number_format($total_anggota) ?> Orang
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="zmdi zmdi-hc-3x zmdi-accounts text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total KOPRI</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= number_format($total_kopri) ?> Orang
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="zmdi zmdi-hc-3x zmdi-female text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Alumni</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= number_format($total_alumni) ?> Orang
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="zmdi zmdi-hc-3x zmdi-graduation-cap text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- jenjang kaderisasi -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark">
                        Grafik Jenjang Kaderisasi Formal
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="gr-kaderisasi"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-3">
                            <i class="zmdi zmdi-circle text-primary"></i> MAPABA
                        </span>
                        <span class="mr-3">
                            <i class="zmdi zmdi-circle text-warning"></i> PKD
                        </span>
                        <span class="mr-3">
                            <i class="zmdi zmdi-circle text-success"></i> PKL
                        </span>
                        <span class="mr-3">
                            <i class="zmdi zmdi-circle text-danger"></i> PKN
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- jenjang kaderisasi KOPRI -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark">
                        Jenjang Kaderisasi KOPRI
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="gr-kopri"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-3">
                            <i class="zmdi zmdi-circle text-primary"></i> KOPRI
                        </span>
                        <span class="mr-3">
                            <i class="zmdi zmdi-circle text-warning"></i> SIG
                        </span>
                        <span class="mr-3">
                            <i class="zmdi zmdi-circle text-success"></i> SKK
                        </span>
                        <span class="mr-3">
                            <i class="zmdi zmdi-circle text-danger"></i> SKKN
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- level kepengurusan-->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark">
                        Data Kepengurusan
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pengurus Cabang
                            <span class="badge badge-success badge-pill">
                                <?= $total_cabang - 1 ?>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pengurus Komisariat
                            <span class="badge badge-warning badge-pill">
                                <?= $total_komisariat ?>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pengurus Rayon
                            <span class="badge badge-primary badge-pill">
                                <?= $total_rayon ?>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?php $this->load->view('layout/footer') ?>
<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Pie Chart Example
    var ctx = document.getElementById("gr-kaderisasi");
    var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["MAPABA", "PKD", "PKL", "PKN"],
            datasets: [{
                data: [<?= $total_mapaba . ', ' . $total_pkd . ', ' . $total_pkl . ', ' . $total_pkn ?>],
                backgroundColor: ['#4e73df', '#f6c23e', '#1cc88a', '#e74a3b'],
                hoverBackgroundColor: ['#4e73df', '#f6c23e', '#1cc88a', '#e74a3b'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });
</script>
<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Pie Chart Example
    var ctx = document.getElementById("gr-kopri");
    var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["KOPRI", "SIG", "SKK", "SKKN"],
            datasets: [{
                data: [<?= $total_kopri_biasa . ', ' . $total_sig . ', ' . $total_skk . ', ' . $total_skkn ?>],
                backgroundColor: ['#4e73df', '#f6c23e', '#1cc88a', '#e74a3b'],
                hoverBackgroundColor: ['#4e73df', '#f6c23e', '#1cc88a', '#e74a3b'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });
</script>
</body>

</html>