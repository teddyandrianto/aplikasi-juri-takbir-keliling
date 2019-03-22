<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Juri | Gema Takbir</title>
<link rel="shortcut icon" href="<?php echo base_url();?>assets/web/img/icon.png">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('assets/login');?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/login');?>/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/login');?>/css/AdminLTE.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/login');?>/css/skins-teacher.css">
  <style>
    @media print {
      .aksi {
        display: none;
      }
    }
  </style>
  <script src="<?php echo base_url('assets/login');?>/js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/login');?>/js/jquery-1.10.2.min.js"></script>
  <script src="<?php echo base_url('assets/login');?>/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('assets/login');?>/js/app.js"></script>
  <script src="<?php echo base_url('assets/login');?>/js/bootstrap-filestyle.min.js"></script>
  
  <script type="text/javascript">
  $(function() {

  // We can attach the `fileselect` event to all file inputs on the page
  $(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
  });

  // We can watch for our custom `fileselect` event like this
  $(document).ready( function() {
      $(':file').on('fileselect', function(event, numFiles, label) {

          var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }

      });
  });
  
});
</script>

  </head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 <header class="main-header">
    <a href="<?php echo base_url('amilin'); ?>" class="logo">
     <img class="logo-mini" src="<?php echo base_url();?>/assets/web/img/logo3.png" width="45px" height="45px">
       <img class="logo-lg" src="<?php echo base_url();?>/assets/web/img/logo2.png" width="170px" height="40px">
    </a>
   
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">         
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?php if ($_SESSION['sesijuri']['foto'] == '') {?>
              <img src="<?php echo base_url('assets');?>/photo-profile/not-profile.png" class="user-image" alt="User Image">
               <?php }else{ ?>
               <img src="<?php echo base_url('assets');?>/photo-profile/<?=$_SESSION['sesijuri']['foto'];?>" class="user-image" alt="User Image">
               <?php } ?>
              <span class="hidden-xs"><?=$_SESSION['sesijuri']['nama'];?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
              <?php if ($_SESSION['sesijuri']['foto'] == '') {?>
              <img src="<?php echo base_url('assets');?>/photo-profile/not-profile.png" class="img-circle" alt="User Image">
               <?php }else{ ?>
                <img src="<?php echo base_url('assets');?>/photo-profile/<?=$_SESSION['sesijuri']['foto'];?>" class="img-circle" alt="User Image">
                <?php } ?>
                <p>
                  <?=$_SESSION['sesijuri']['nama'];?>
                
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url('index.php/administrator/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <?php if ($_SESSION['sesijuri']['foto']== '')  { ?>
          <img src="<?php echo base_url('assets');?>/photo-profile/not-profile.png" class="img-rounded" alt="User Image">
          <?php }else{ ?>
           <img src="<?php echo base_url('assets');?>/photo-profile/<?=$_SESSION['sesijuri']['foto'];?>" class="img-circle" alt="User Image">
          <?php } ?>
        </div>
        <div class="pull-left info">
          <p><?=$_SESSION['sesijuri']['nama'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
          <li class="treeview">
            <a href="<?php echo base_url('index.php/juri');?>">
              <i class="fa fa-pie-chart"></i>
              <span>Dashboard</span>
              <span class="pull-right-container">
                <span class="label label-primary  pull-right"></span>
              </span>
            </a>
        </li> 
        
        <li class="treeview">
            <a href="<?= base_url('index.php/juri/Profile');?>">
              <i class="fa fa-cog"></i> <span>Profile</span>
                <span class="pull-right-container">
                  <span class="label label-primary pull-right"></span>
                </span>
            </a>
          </li>

           <li class="treeview">
            <a href="<?= base_url('index.php/juri/print_nilai');?>">
              <i class="fa fa-print"></i> <span>Lihat Nilai</span>
                <span class="pull-right-container">
                  <span class="label label-primary pull-right"></span>
                </span>
            </a>
          </li>
         
       
    </section>
  </aside>
  <div class="content-wrapper">
    