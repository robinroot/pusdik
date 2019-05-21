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
                    <li class=""><a href="<?php echo site_url('/dashboard')?>">Dashboard</a></li>
                    <li class="active"><?php echo $title ?></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<br/><br/>
    <?php echo $this->session->flashdata('sukses'); ?>
        <?php echo form_open_multipart('Dashboard/update_profile');?>
<div class="col-md-4">
<div class="form-group form-group-lg">
<label>Jenis Profile</label>
<select name="status_berita" class="form-control">
    <option value="sejarah">Sejarah</option>
    <option value="visimisi">Visi&Misi</option>
    <option value="tugaspokok">Tugas Pokok</option>
</select>
</div>

</div>
<div class="col-md-12">


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
