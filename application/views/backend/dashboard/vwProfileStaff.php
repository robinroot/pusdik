<div class="breadcrumbs">
  <?php
        $sukses = $this->session->flashdata('sukses');
        if(!empty($sukses)){
          echo $sukses;
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
                    <li class=""><a href="<?php echo site_url('/dashboard')?>">Dashboard</a></li>
                    <li class="active"><?php echo $title ?></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container">
  <!-- form user info -->

                  <?php foreach ($list->result() as $lists) {?>

                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">User Information</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" method="post" action="<?= base_url('staff/savechange')?>" role="form" autocomplete="off">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">First name</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="<?php echo $lists->nama;?>" name="nama">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="email" name="email" value="<?php echo $lists->email;?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Username</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" name="username" value="<?php echo $lists->username;?>">
                                    </div>
                                </div>
                                <br>
                                <h4><b>UBAH PASSWORD</b></h4>
                                <br>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Password Lama</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="password" id="old_password" name="opassword">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Password Baru</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" id="new" type="password" name="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Konfirmasi</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" id="confirm" type="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-9">
                                        <input type="reset" class="btn btn-danger" value="reset">
                                        <input type="submit" id="submit" class="btn btn-success" value="Save Changes">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php }?>

                    <script>
                    $(document).ready(function(){
                      // cek event change id old_password
                      $('#old_password').change(function(){
                        var fopassword = $('#old_password').val();
                        //mengirimkan old_password dan mengecek ke database ketersediaanya.
                        $.ajax({
                          method: "POST",
                          dataType: 'json',
                          url: "<?php echo base_url(); ?>staff/check_account",
                          data: { opassword: fopassword} ,
                          success:function(data){
                            //jika tersedia maka ambil data. data yang dikirimkan controller berupa nilai TRUE or FALSE
                            document.getElementById("new").disabled = data;
                            document.getElementById("confirm").disabled = data;
                            //fungsinya untuk memanipulasi input text id new dan confirm
                          }
                        });
                      });
                      //fungsi ini digunakan untuk cek kesamaan nilai antara inputan new dan confirm
                      $('#confirm').change(function(){
                        var fnew = $('#new').val();
                        var fconfirm = $('#confirm').val();
                        if(fnew==fconfirm){
                          document.getElementById("submit").disabled = false;
                        }else{
                          document.getElementById("submit").disabled = true;
                        }
                      });
                    });
</script>

                    <!-- /form user info -->
</div>
