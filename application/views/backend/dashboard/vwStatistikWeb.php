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
                <th>Hari ini</th>
                <th>Kemarin</th>
                <th>Bulan ini</th>
                <th>Tahun ini</th>
                <th>Sepanjang waktu</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $visitor['day']; ?></td>
                <td><?php echo $visitor['yesterday']; ?></td>
                <td><?php echo $visitor['mounth']; ?></td>
                <td><?php echo $visitor['year']; ?></td>
                <td><?php echo $visitor['sepanjang_waktu']; ?></td>
            </tr>           
        </tbody>
        <tfoot>
            <tr>
                <th>Hari ini</th>
                <th>Kemarin</th>
                <th>Bulan ini</th>
                <th>Tahun ini</th>
                <th>Sepanjang waktu</th>
            </tr>
        </tfoot>
    </table>



    
 </div>
    <script>
    	$(document).ready(function() {
    $('#example').DataTable();
} );
    </script>

                                    