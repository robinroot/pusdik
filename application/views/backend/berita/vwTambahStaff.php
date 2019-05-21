<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1><?php echo $title ?></h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right small">
                    <li class=""><a href="<?php echo site_url('/staff')?>">Dashboard</a></li>
                    <li class="active"><?php echo $title ?></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<br/><br/>

        <?php echo form_open_multipart('staff/simpan');
?>
<div class="col-md-8">
<div class="form-group form-group-lg">
<label>Nama berita</label>
<input type="text" name="nama_berita" placeholder="Nama berita" maxlength="98" value="<?php echo set_value('nama_berita') ?>" required class="form-control">
</div>
</div>

<div class="col-md-4">
<div class="form-group form-group-lg">
<label>Status Berita</label>
<select name="status_berita" class="form-control">
    <option value="Publish">Publikasikan</option>
    <option value="Draft">Simpan sebagai Draft</option>
</select>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label>Kategori Berita</label>
<select name="id_kategori_berita" class="form-control">
    <?php foreach($kategori as $kategori) { ?>
    <option value="<?php echo $kategori->id_kategori_berita ?>">
    <?php echo $kategori->nama_kategori_berita ?></option>
    <?php } ?>
</select>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
<label>Jenis Berita</label>
<select name="jenis_berita" class="form-control">
    <option value="Berita">Berita</option>
    <option value="Profil">Profil perusahaan</option>
</select>
</div>
</div>

<div class="col-md-12">

<div class="form-group">
<label>Upload gambar</label>
<input type="file" name="gambar" accept="image/*" class="form-control">
</div>

<div class="form-group">
<label>Keterangan</label>
<textarea name="keterangan" class="form-control" placeholder="Keterangan" id="ckeditor"><?php echo set_value('keterangan') ?></textarea>
</div>

<div class="form-group">
<input type="submit" name="submit" value="Simpan Data" class="btn btn-primary btn-lg">
<input type="reset" name="reset" value="Reset" class="btn btn-default btn-lg">
</div>

</div>


<?php echo form_close() ?>

 <!--    <script src="<?php echo base_url().'assets/jquery/jquery-2.2.3.min.js'?>"></script> -->

    <script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
    <script type="text/javascript">
      $(function () {
        CKEDITOR.replace('ckeditor');
      });
    </script>
