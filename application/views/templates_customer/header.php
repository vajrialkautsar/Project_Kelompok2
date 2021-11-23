
<!doctype html>
<html lang="en">

  <head>
    <title>Car Rent &mdash; Free Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets_shop/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets_shop/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets_shop/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets_shop/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets_shop/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets_shop/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets_shop/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets_shop/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets_shop/css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="<?php echo base_url()?>assets/assets_shop/index.html">CarRent</a>
              </div>
            </div>

            <div class="col-9 text-right">
              

              <span class="d-inline-block d-lg-none"><a href="<?php echo base_url()?>assets/assets_shop/" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto">
                  <li class=""><a href="<?php echo base_url('customer/dashboard') ?>" class="nav-link">BERANDA</a></li>
                  <li><a href="<?php echo base_url('customer/data_mobil')?>" class="nav-link">MOBIL</a></li>
                  <li><a href="<?php echo base_url('customer/transaksi')?>" class="nav-link">TRANSAKSI</a></li>
                  <li><a href="<?php echo base_url('register')?>" class="nav-link">REGISTER</a></li>
                  <?php if($this->session->userdata('nama')) { ?>
                    <li><a href="<?php echo base_url('auth/logout')?>" class="nav-link">WELCOME <?php echo $this->session->userdata('nama') ?><span> | LOGOUT</span></a></li>
                  <?php } else { ?>
                    <li><a href="<?php echo base_url('auth/login')?>" class="nav-link">LOGIN</a></li>
                  <?php } ?>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>