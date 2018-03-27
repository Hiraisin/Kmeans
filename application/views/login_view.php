<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
  <link rel="icon" href="<?php echo base_url();?>assets/img/logo.png">
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/css/sb-admin.css" rel="stylesheet">
  <script type="text/javascript">
  function cekform()
  {     
     if(!$("#username").val())
     {
         alert("maaf username tidak boleh kosong");
         $("#username").focus();
         return false;
     }
     if(!$("#password").val())
     {
         alert("maaf password tidak boleh kosong");
         $("#password").focus();
         return false;
     }
    
  }
  </script>
  
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
          <form name="login" method="POST" action="<?php echo base_url(); ?>index.php/login/getlogin" onsubmit="return cekform();">
          <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="InputPassword1">Password</label>
            <input class="form-control" id="password" name="password" type="password" placeholder="Password">
            <?php
            $info= $this->session->flashdata('info');
            if(!empty($info))
            {
                echo $info;
            }
            ?>
          </div>
            <button type="submit" class="btn btn-block btn-primary"> Login</button>          
        </form>
              </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
