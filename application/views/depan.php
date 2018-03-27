<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-default navbar-utama" role="navigation">
      <div class="container">
        
        <div class="navbar-header">          
          <a class="navbar-brand" href="<?php echo base_url();?>">          
          <strong>SISTEM INFORMASI CERDAS</strong>
          </a>
        </div>
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="<?php echo base_url();?>">Beranda</a></li>
            <li><a href="<?php echo base_url();?>">Petunjuk Penggunaan</a></li>
            <li><a href="<?php echo base_url();?>">Tentang</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login</a>
              <ul class="dropdown-menu tipe-kanan dropdown-menu-login">
                <li>
                  <div class="row">
                    <div class="col-md-12">
                      <form name="login" method="POST" action="<?php echo base_url(); ?>index.php/login/getlogin">
                        <input required class="form-control" type="text" name="username" placeholder="Username">
                        <br />
                        <input required class="form-control" type="password" name="password" placeholder="Password">
                        <br />                        
                        <button type="submit" class="btn btn-lg btn-block btn-info">Login</button>
                        <br />
                        <!-- <small><a href="" class="link2 pull-right text-muted lupa-pass"><i class="fa fa-lock text-muted"></i> Lupa Password?</a></small> -->
                      </form>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container">
      <div class="row">
      <div class="col-md-12">
        <div class="ukuran500 tengah">
          <div class="head-depan tengah">
            <div class="row">
              <div class="col-md-3">
                <img class="img-thumbnail img-responsive margin-b10" src="<?php echo base_url();?>assets/img/logo-SMA.png" width="100" height="100" alt="Logo SMA Karangan" />
              </div>
              <div class="col-md-9">
                
                  <h3 class="judul-head"><?php echo $title;?></h3>
                  <p><?php echo $sub;?></p>             
                
              </div>
            </div>
            <hr class="hr1 margin-b-10" />
          </div>
        </div>

        <div class="ukuran450 tengah margin-b50">
          <div class="login-container">            
            <div id="output"></div>
            <div class="form-box">
              <form name="login" method="POST" action="<?php echo base_url();?>index.php/login/getlogin">
                <legend><h3 class="text-center">Login</h3></legend>
                <div class="left-inner-addon2">
                  <input required name="username" class="input-lg form-control" type="text" placeholder="Username">
                </div>
                <div class="left-inner-addon2">
                  <input required name="password" type="password" class="input-lg form-control" placeholder="Password">
                </div>
                <?php
                $info= $this->session->flashdata('info');
                if(!empty($info))
                {
                    echo $info;
                }
                ?>
                <div class="form-group">
                  <button class="btn btn-info btn-lg btn-block login" type="submit">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-hover-dropdown.js"></script>
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
  </body>
</html>

