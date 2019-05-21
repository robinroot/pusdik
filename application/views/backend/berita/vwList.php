

<?php $no = ($paging['limit']*$paging['current'])-$paging['limit'];
    $no++;
    if($list->num_rows() > 0 ) { ?>
<br/>
<div class="row">
    <div class="col-sm-12">
        <table class="table table-striped table-bordered table-hover">
            <tr class="bg-red">
                <th style="width:5%;text-align:center">No</th>
                <th style="width:25%;">Gambar</th>
                <th style="width:25%;">Judul Berita</th>
                <th style="width:20%;">Kategori</th>
                <th style="width:15%;">Status - Jenis</th>
                <th style="width:20%;text-align:center">Aksi</th>
            </tr>
            <?php foreach($list->result() as $row){ ?>
            <tr>
                <td align="center"><?php echo $no; ?></td></td>
                <td>
                    <img src="<?php echo base_url('assets/upload/image/thumbs/'.$row->gambar) ?>" class="img img-responsive" width="60">
                </td>
                <td><?php echo $row->nama_berita; ?></td>
                <td><?php echo $row->nama_kategori_berita; ?></td>
                <td><?php echo $row->status_berita." - ".$row->jenis_berita; ?></td>
                <td>
                    <a href="<?php echo base_url('dashboard/edit_berita/'.$row->id_berita);?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>
                    </a>
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Delete<?php echo $row->id_berita ?>"><i class="fa fa-trash-o"></i>
                    </button>
                    <div class="modal fade" id="Delete<?php echo $row->id_berita ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalEdit">Hapus Berita</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <p class="alert alert-success">Yakin ingin menghapus kategori berita ini?</p>
                                </div>
                                <div class="modal-footer">
                                    <a href="<?php echo base_url('dashboard/delete_berita/'.$row->id_berita) ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> Ya, Hapus</a>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <?php $no++; } ?>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-sm-4 col-xs-12" style="margin-top:5px;margin-bottom:10px">
        Showing <?php echo $paging['count_limit'] ?> of <?php echo $paging['count_row'] ?> total rows
    </div>
    <div class="col-sm-8 col-xs-12 pull-right" style="margin-top:5px;margin-bottom:10px">
        <?php echo $paging['list']; ?>
    </div>
</div>
<?php } else { ?>
<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-body">
                <br/>
                <h3 style="font-family:callibri;text-align:center;"><i class="fa fa-warning"></i> No Data Available</h3>
            </div>
        </div>
    </div>
</div>
<?php
    }
    ?>
<input type="hidden" id="current" name="current" value="<?php echo $paging['current'] ?>">

