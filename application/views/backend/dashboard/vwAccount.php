<div class="breadcrumbs">
  <?php
        $berhasil = $this->session->flashdata('berhasil');
        $ggl = $this->session->flashdata('gagal');
        if(!empty($berhasil)){
          echo $berhasil;
        }else{
          echo $ggl;
        }
        ?>
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1><?php echo $title;?></h1>
            </div>



        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right small">

                    <li class=""><a href="<?php echo site_url('/dashboard')?>">Dashboard</a></li>
                    <li class="active"><?php echo $title ?> </li>
                </ol>
            </div>
        </div>
    </div>
</div>

<br><br>
<div class="col-sm-2">
    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah</button>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <!-- <h4 class="modal-title" id="myModalLabel">Tambah Kategori Berita</h4> -->
            </div>
            <div class="modal-body">

<?php
// Validasi
echo validation_errors('<div class="alert alert-success">','</div>');

// Form
echo form_open('dashboard/add_account');
?>

<div class="form-group">
  <label>Nama user</label>
    <input type="text" name="nama" placeholder="Nama" required class="form-control">
</div>

<div class="form-group">
  <label>Email user</label>
    <input type="text" name="email" placeholder="Email" required class="form-control">
</div>

<div class="form-group">
  <label>Akses Level</label>
    <select class="form-control" name="level">
      <option value="admin">Admin</option>
      <option value="staff">Staff</option>
    </select>
</div>

<div class="form-group">
  <label>Username</label>
    <input type="text" name="username" placeholder="username" required class="form-control">
</div>

<div class="form-group">
  <label>Password</label>
    <input type="password" name="password" placeholder="password" required class="form-control">
</div>


<div class="form-group">

    <div class="modal-footer">
        <button type="submit" name="tambah_akun" class="btn btn-primary" value="Simpan Data">Save changes</button>
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


</div> <br><br> <!-- add data -->


<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<div class="content">
    <div class="block">
        <div class="pont">
                <div class="head-dblue">
                <h4 id="Tcomment">List User</h4>
                </div>
   <br>
       <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%; text-align:center;">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>LEVEL</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                    <?php $x=1; foreach($list->result() as $c){ ?>
                <tr>
                  <td><?php echo $x++;?></td>
                    <td>
                        <a><?php echo $c->nama; ?></a>
                    </td>
                    <td>
                        <?php echo $c->email?>
                    </td>
                    <td>
                        <?php echo $c->akses_level?>
                    </td>
                    <td>
                      <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ModalEdit<?php echo $c->id_user ?>"><i class="fa fa-edit"></i>
                      </button>
                      <div class="modal fade" id="ModalEdit<?php echo $c->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="ModalEdit" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="ModalEdit">Edit Akun</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  </div>
                                  <div class="modal-body">

                      <?php
                      // Validasi
                      echo validation_errors('<div class="alert alert-success">','</div>');

                      // Form
                      echo form_open('dashboard/edit_account/'.$c->id_user);
                      ?>

                      <div class="form-group">
                        <label>Nama User</label>
                        <input type="text" name="nama_user" placeholder="Nama" value="<?php echo $c->nama; ?>" required class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Email User</label>
                        <input type="email" name="email" placeholder="example@mail.com" value="<?php echo $c->email; ?>" required class="form-control">
                      </div>
                      <div class="form-group">
                          <label>Level</label>
                        <select class="form-control" name="level">
                          <?php if($c->akses_level == "admin"){
                            echo "<option value='admin' selected>Admin</option>";
                            echo "<option value='staff'>Staff</option>";
                          }else{
                            echo "<option value='admin'>Admin</option>";
                            echo "<option value='staff' selected>Staff</option>";
                          }?>
                        </select>
                      </div>
                      <div class="form-group">
                          <div class="modal-footer">
                              <button type="submit" name="submit" class="btn btn-primary" value="Simpan Data">Save changes</button>
                          </div>
                      </div>
                      <?php echo form_close() ?>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                  </div>
                              </div>
                          </div>
                      </div>


                      <a href="<?php echo base_url('dashboard/delete_account/'.$c->id_user)?>" class="btn btn-danger btn-sm" title="hapus" onclick="return confirm('yakin hapus akun ini ?')">
                              <i class="fa fa-trash-o"></i>
                          </a>
                      </td>
                </tr>
                                    <?php } ?>
            </tbody>
        </table>


</div>
</div>
</div>
