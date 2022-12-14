

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pembelajaran</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url();?>components/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url();?>components/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url();?>components/bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?=base_url();?>components/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>components/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url();?>components/dist/css/skins/_all-skins.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?=base_url();?>components/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?=base_url();?>components/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>V</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Soal Video</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu 
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url();?>components/dist/img/<?=$avatar;?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=$this->session->userdata('userlogin');?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?=base_url();?>components/dist/img/<?=$avatar;?>" class="img-circle" alt="User Image">

                <p>
                  <?=$this->session->userdata('userlogin');?>
                  <small></small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                </div>
                <div class="pull-right">
                  <a href="<?=base_url();?>login/logout" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>-->

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url();?>components/dist/img/<?=$avatar;?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="white-space: nowrap; width: 12em; overflow: hidden;	text-overflow: ellipsis;"><?=$this->session->userdata('userlogin');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li <?php if($this->uri->segment(2)=="dashboard"){echo 'class="active"';}?>>
        	<a href="<?=base_url();?>admin/dashboardu"><i class="fa fa-dashboard"></i>Beranda</a>
        </li>
          <li class="treeview <?php if($this->uri->segment(2)=="rfid"){echo 'active';}?>">
            <a href="#">
              <i class="fa fa-credit-card"></i>
              <span>Teka Teki</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li <?php if($this->uri->segment(2)=="soal"){echo 'class="active"';}?>>
                <a href="<?=base_url();?>admin/soal"><i class="fa fa-book"></i>Episode 1</a>
              </li>
              <li <?php if($this->uri->segment(2)=="soal"){echo 'class="active"';}?>>
                <a href="<?=base_url();?>admin/soal2"><i class="fa fa-book"></i>Episode 2</a>
              </li>
              <li <?php if($this->uri->segment(2)=="soal"){echo 'class="active"';}?>>
                <a href="<?=base_url();?>admin/soal3"><i class="fa fa-book"></i>Episode 3</a>
              </li>
              <li <?php if($this->uri->segment(2)=="soal"){echo 'class="active"';}?>>
                <a href="<?=base_url();?>admin/soal4"><i class="fa fa-book"></i>Episode 4</a>
              </li>
              <li <?php if($this->uri->segment(2)=="soal"){echo 'class="active"';}?>>
                <a href="<?=base_url();?>admin/soal5"><i class="fa fa-book"></i>Episode 5</a>
              </li>
            </ul>
          </li>

          <li class="treeview <?php if($this->uri->segment(2)=="rfid"){echo 'active';}?>">
            <a href="#">
              <i class="fa fa-credit-card"></i>
              <span>Bilangan Bulat</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li <?php if($this->uri->segment(2)=="soal"){echo 'class="active"';}?>>
                <a href="<?=base_url();?>admin/bilbul"><i class="fa fa-book"></i>Bilangan Bulat</a>
              </li>
              <li <?php if($this->uri->segment(2)=="soal"){echo 'class="active"';}?>>
                <a href="<?=base_url();?>admin/bilbul2"><i class="fa fa-book"></i>Penjumlahan</a>
              </li>
              <li <?php if($this->uri->segment(2)=="soal"){echo 'class="active"';}?>>
                <a href="<?=base_url();?>admin/bilbul3"><i class="fa fa-book"></i>Pengurangan</a>
              </li>
              <li <?php if($this->uri->segment(2)=="soal"){echo 'class="active"';}?>>
                <a href="<?=base_url();?>admin/bilbul4"><i class="fa fa-book"></i>Perkalian 1</a>
              </li>
              <li <?php if($this->uri->segment(2)=="soal"){echo 'class="active"';}?>>
                <a href="<?=base_url();?>admin/bilbul5"><i class="fa fa-book"></i>Perkalian 2</a>
              </li>
              <li <?php if($this->uri->segment(2)=="soal"){echo 'class="active"';}?>>
                <a href="<?=base_url();?>admin/bilbul6"><i class="fa fa-book"></i>Pembagian</a>
              </li>
              <li <?php if($this->uri->segment(2)=="soal"){echo 'class="active"';}?>>
                <a href="<?=base_url();?>admin/bilbul7"><i class="fa fa-book"></i>Kesimpulan</a>
              </li>
            </ul>
          </li>
        
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>