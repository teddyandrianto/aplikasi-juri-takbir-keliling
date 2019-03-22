<!DOCTYPE html>
<html class="full" lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EL-GORITMA</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/demo.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/the-big-picture.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="landing-text navbar-header">
                
                <a class="navbar-brand landing-text" href="<?php echo base_url();?>">EL GORITMA</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            
                 <ul class="nav navbar-nav navbar-right">
                    <li>
                     <div onclick="window.location.href='<?php echo base_url(); ?>daftar'" style="margin-top: 7px;" class="btn btn-warning">Daftar</div>
                    </li>
                </ul>
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container" style="margin-top: 150px;">
        <div class="row">
            
            <?=$this->session->flashdata('pesan')?>
            <div class="col-lg-4 col-lg-offset-4">
                <div class="well well-center">

                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#login" data-toggle="tab" aria-expanded="true">Login Mahasiswa</a></li>
                        <li class=""><a href="#create" data-toggle="tab" aria-expanded="false">Login Dosen</a></li>          
                    </ul>

                    <div class="tab-content ">
                        <div class="tab-pane active in" id="login">
                          
                          <form style="margin-top: 20px;" action="<?php echo base_url('index.php/student/Login')?>" method= "POST" >
                          <div class="form-group form-group-md">
                            <label for="exampleInputName">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                          </div>
                             <button type="submit" class="btn btn-success btn-block">Masuk</button>
                          </form>
                        </div>

                    <div class="tab-pane fade" id="create">
                                        
                          <form style="margin-top: 20px;" action="<?php echo base_url('index.php/teacher/login')?>" method= "POST" >
                          <div class="form-group form-group-md">
                            <label for="exampleInputName">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                          </div>
                             <button type="submit" class="btn btn-success btn-block">Masuk</button>
                          </form>
                    </div>
                    </div>
                      </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

</body>

</html>

    
     