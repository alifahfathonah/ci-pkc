<!-- Nav Item - Dashboard -->
<li class="nav-item active">
   <a class="nav-link" href="<?= site_url('korcab/beranda') ?>">
      <i class="zmdi zmdi-layers"></i>
      <span>Beranda</span>
   </a>
</li>
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading text-grey">
   Master
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item active">
   <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
      <i class="zmdi zmdi-city"></i>
      <span>Data Cabang</span>
   </a>
   <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
         <?php
         foreach ($header_cabang as $cabang) :
            if ($cabang->nama_cabang != "Bukan Cabang") :
         ?>
               <a class="collapse-item" href="<?= site_url('korcab/cabang/' . $cabang->id_cabang) ?>"><?= $cabang->nama_cabang ?></a>
         <?php
            endif;
         endforeach;
         ?>
      </div>
   </div>
</li>
<li class="nav-item active">
   <a class="nav-link" href="<?= site_url('korcab/komisariat') ?>">
      <i class="zmdi zmdi-balance"></i>
      <span>Data Komisariat</span>
   </a>
</li>
<li class="nav-item active">
   <a class="nav-link" href="<?= site_url('korcab/rayon') ?>">
      <i class="zmdi zmdi-flag"></i>
      <span>Data Rayon</span>
   </a>
</li>
<li class="nav-item active">
   <a class="nav-link" href="<?= site_url('korcab/anggota') ?>">
      <i class="zmdi zmdi-accounts"></i>
      <span>Data Anggota</span>
   </a>
</li>
<li class="nav-item active">
   <a class="nav-link" href="<?= site_url('korcab/kopri') ?>">
      <i class="zmdi zmdi-female"></i>
      <span>Data Kopri</span>
   </a>
</li>
<li class="nav-item active">
   <a class="nav-link" href="<?= site_url('korcab/alumni') ?>">
      <i class="zmdi zmdi-graduation-cap"></i>
      <span>Data Alumni</span>
   </a>
</li>
<li class="nav-item active">
   <a class="nav-link" href="<?= site_url('korcab/pengguna') ?>">
      <i class="zmdi zmdi-account-box"></i>
      <span>Data Pengguna</span>
   </a>
</li>