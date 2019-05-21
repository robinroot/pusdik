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


<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<div class="content">
    <div class="block">
        <div class="pont">
        <?php if($message != 0 && $message != -1){ ?>
            <div class="alert alert-success">
                <strong>Well done!</strong> Operasi berhasil...
            </div>
        <?php }else if($message == 0){ ?>
            <div class="alert alert-error">
                <strong>Oh snap (-_-") !</strong> terjadi kesalahan...
            </div>
        <?php } ?>

    <div class="row-fluid">
        <div class="span12">
            <div class="block">
                <div class="head-dblue">
                <h4 id="Tcomment">Tabel comment</h4>
                </div>




   <br>
    <div class="table-responsive">
       <table id="example" class="table table-hover" style="width:100%">
            <thead class="thead-light">
                <tr>
                    <th width="1px">#</th>
                    <th scope="col" width="25%">Judul Kontent</th>
                    <th scope="col" width="10%">pengirim</th>
                    <th scope="col" width="9%">Status</th>
                    <th scope="col" width="40%">Komentar</th>
                    <th scope="col" width="80">Actions</th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach($comment as $c){ ?>
                <tr>
                    <td>
                        <input type="checkbox" name="order[]" value="528" />
                    </td>
                    <td>
                        <a href="#"><?php echo $c['nama_berita']; ?></a>
                    </td>
                    <td>
                        <a href="mailto:<?php echo $c['email']; ?>"><?php echo $c['pengirim']; ?></a>
                    </td>
                    <?php if(strtolower($c['status']) == "pending"){ ?>
                        <td width="25"><span class="badge badge-danger">Pending</span></td>
                    <?php }else{ ?>
                        <td><span class="badge badge-success">Publish</span></td>
                    <?php  } ?>
                    <td>
                        <?php echo $c['isi']; ?>
                    </td>
                    <td>
                        <?php if(strtolower($c['status']) == "pending"){ ?>
                            <a href="<?php echo base_url(); ?>Dashboard/publishingcomment/<?php echo $c['id_comment']; ?>" class="button-green glyphicon glyphicon-ok" title="terbitkan" onclick="return confirm('yakin terbitkan komentar ini ?')">
                                <div class="icon"><span class="ico-checkmark"></span></div>
                            </a>
                        <?php }else{?>
                            <a href="#" class="button-blue" title="balas">
                                <div class="icon"><span class="ico-reply"></span></div>
                            </a>
                        <?php } ?>
                        <a href="<?php echo base_url(); ?>dashboard/deletingcomment/<?php echo $c['id_comment']; ?>" class="button-red" title="hapus" onclick="return confirm('yakin hapus komentar ini ?')">
                            <div class="icon"><span class="ico-remove"></span></div>
                        </a>
                    </td>
                </tr>
                                    <?php } ?>
            </tbody>
        </table>
    </div>
            </div>
        </div>
 </div>
</div>
</div>
</div>
