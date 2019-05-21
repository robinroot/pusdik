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
<div class="col-sm-2">
    <a class="btn btn-primary" href="<?php echo base_url('dashboard/tambah_berita');?>">
  <i class="fa fa-plus"></i> Tambah Berita
</a>

</div>
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
        url: '<?php echo base_url() ?>'+'berita/read/'+page,
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
