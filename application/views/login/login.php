<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no">
    <link href="<?php echo base_url();?>assets/login/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/login/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/login/style.css" rel="stylesheet" />
	<title>Login</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-md-9 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
                <?php
                $info = $this->session->flashdata('info');
                if(!empty($info)){echo $info;}
                ?>
            <h5 class="card-title text-center">Login Page</h5>
            <form method="post" action="<?php echo base_url('gerbang/login');?>">
                <label for="inputUsername">Username</label>
                <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="username" required/>
                </div>


                <div class="form-group">
                  <label for="inputPassword">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>




              <button class="btn btn-lg active btn-primary text-uppercase" type="submit">Login</button>

              <hr class="my-5">

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



<script src="<?php echo base_url();?>assets/dashboard/js/core/jquery.min.js"></script>
</body>
</html>
