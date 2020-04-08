<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <title><?php echo TITLE_BAR ?></title>
</head>

<body>
   <div class="container">
      <div class="row mt-3">
         <div class="col-lg-12">
            <div class="col-lg-6">
               <div class="card text-white bg-info mb-3">
                  <div class="card-header">
                     <h3>
                        <img class="text-left" src="<?php echo base_url('asset/favicon.png') ?>" width="75" height="70">
                        Kartu Tanda Anggota
                     </h3>
                  </div>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-8">
                           <table>
                              <tr>
                                 <th scope="col"><small>Nama</small> : <small><?php echo $kartu_anggota->nama_anggota ?></small></th>
                              </tr>
                              <tr>
                                 <th scope="col"><small>TTL</small> : <small><?php echo $kartu_anggota->tempat_anggota . ', ' . $kartu_anggota->tgl_anggota ?></small></th>
                              </tr>
                              <tr>
                                 <th scope="col"><small>Alamat</small> : <small><?php echo $kartu_anggota->alamat_anggota ?></small></th>
                              </tr>
                              <tr>
                                 <th scope="col"><small>Kampus</small> : <small><?php echo $kartu_anggota->kampus_anggota ?></small></th>
                              </tr>
                              <tr>
                                 <th scope="col"><small>Komisariat</small> : <small><?php echo $kartu_anggota->nama_komisariat ?></small></th>
                              </tr>
                              <tr>
                                 <th scope="col"><small>Rayon</small> : <small><?php echo $kartu_anggota->nama_rayon ?></small></th>
                              </tr>
                           </table>
                        </div>
                        <div class="col-4">
                           <img src="<?= optimage(base_url('asset/gambar/anggota/' . $kartu_anggota->foto_anggota)) ?>" height="160" width="100%" class="rounded float-left"> <br>
                           <table>
                              <tr>
                                 <th scope="col"><small>Tahun MAPABA</small> : <small><?php echo $kartu_anggota->angkatan_mapaba ?></small></th>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="card-footer bg-warning text-center">
                     PMII PKC KALTIMRA
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>

</html>