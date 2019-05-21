

<div class="breadcrumbs">
  <?php
        $sukses = $this->session->flashdata('sukses');
        $delete = $this->session->flashdata('delete');
        if(!empty($sukses)){
          echo $sukses;
        }

        if (!empty($delete)) {
          echo $delete;
        }
        ?>
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
<div class="col-sm-2">
    <!-- <a href="<?php echo site_url('/kategori_berita/add') ?>" class="btn btn-success"> Tambah</a> -->


    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  <i class="fa fa-plus"></i> Tambah
</button>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Tambah Kategori Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <!-- <h4 class="modal-title" id="myModalLabel">Tambah Kategori Berita</h4> -->
            </div>
            <div class="modal-body">

<?php
// Validasi
echo validation_errors('<div class="alert alert-success">','</div>');

// Form
echo form_open('staff/tambah_kategori_berita');
?>

<div class="form-group">
<label>Nama kategori</label>
<input type="text" name="nama_kategori_berita" placeholder="Nama kategori berita" value="<?php echo set_value('nama_kategori_berita') ?>" required class="form-control">
</div>

<div class="form-group">
<label>Keterangan</label>
<textarea name="keterangan" class="form-control" placeholder="Keterangan"><?php echo set_value('keterangan') ?></textarea>
</div>

<div class="form-group">
<label>Urutan tampil</label>
<input type="number" name="urutan" placeholder="Urutan tampil" value="<?php echo set_value('urutan') ?>" required class="form-control">
</div>

<div class="form-group">

    <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary" value="Simpan Data">Save changes</button>
        <!-- <button type="button" name="reset" class="btn btn-secondary" data-dismiss="modal" value="Reset">Close</button> -->
    </div>
<!-- <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary btn-lg">
<input type="reset" name="reset" value="Reset" class="btn btn-default btn-lg"> -->
</div>


<?php echo form_close() ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


</div> <!--add data-->


<div class="col-sm-2 offset-5">
    <select id="limit" class="form-control" onchange="pageLoad(1)">
        <option value="10">10  rows</option>
        <option value="25" selected >25  rows</option>
        <option value="50">50  rows</option>
    </select>
</div>
<div class="col-sm-3">
    <input type="text" id="search" class="form-control" placeholder="Cari Kategori Berita" onchange="pageLoad(1)" >
</div>

<div class="col-sm-12">
    <div id="dataList"></div>
</div>

<script>
$(document).ready(function(){
    pageLoad(1);
})

function pageLoad(page){
    var limit = $("#limit").val();
    var search = $("#search").val();
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: '<?php echo site_url() ?>'+'staff/read_kategori_berita/'+page,
        data: {limit: limit, search: search},
        beforeSend: function(){
            $("#dataList").html("<br/><center><h2><i class='fa fa-spinner fa-pulse text-green'></i></h2></center>")
        },
        success: function(response){
            $("#dataList").html(response.view);
        }
    })
}
</script>
