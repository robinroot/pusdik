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
<div class="container">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Berita</th>
                <th>Visitor</th>
            </tr>
        </thead>
        <tbody>
        	<?php $no=1; foreach($post as $p){ ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $p['nama_berita'];?></td>
                <td><?php echo $p['count'];?></td>
            </tr>
        <?php }?>            
        </tbody>
        <tfoot>
            <tr>
                <th>No.</th>
                <th>Nama Berita</th>
                <th>Visitor</th>
            </tr>
        </tfoot>
    </table>



    
 </div>
    <script>
    	$(document).ready(function() {
    $('#example').DataTable();
} );
    </script>

                                    