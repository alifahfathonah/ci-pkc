<?php $this->load->view('layout/backend/header') ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Ubah Artikel
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form class="form-horizontal" action="<?php echo site_url('artikel/update/'.$artikel->id_artikel) ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="txt_nama" class="col-md-2 control-label">Judul Artikel</label>
                        <div class="col-md-8">
                            <input type="text" name="txt_nama" id="txt_nama" class="form-control" value="<?php echo $artikel->nama_artikel ?>"> 
                            <br>
                            <img width="200" height="180" src="<?php echo base_url('asset/gambar/'.$artikel->gambar_artikel) ?>"><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="img_artikel" class="col-md-2 control-label">Gambar</label>
                        <div class="col-md-10">
                            <input type="file" name="img_artikel" id="img_artikel" class="form-control"> 
                            <i>Gambar harus beresolusi 400 x 270</i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_isi" class="col-md-2 control-label">Isi Artikel</label>
                        <div class="col-md-10">
                            <textarea name="txt_isi" id="txt_isi" cols="30" rows="10" class="form-control"><?php echo $artikel->isi_artikel ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan Perubahan</button>
                            <a href="<?php echo site_url('artikel') ?>" class="btn btn-warning"><i class="fa fa-undo"></i> Batal</a>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>

<?php $this->load->view('layout/backend/footer') ?>

<script>
    $(function(){
        CKEDITOR.replace('txt_isi'); 
    });
</script>
</body>
</html