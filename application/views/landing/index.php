  <!DOCTYPE html>
  <html class="full" lang="en">
  <!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

  <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Login | Gema Takbir</title>

      <link rel="shortcut icon" href="<?php echo base_url();?>assets/web/img/icon.png">
      <link href="<?php echo base_url();?>assets/web/css/bootstrap.css" rel="stylesheet">
      <link href="<?php echo base_url();?>assets/web/css/font-awesome.css" rel="stylesheet">
      <link href="<?php echo base_url();?>assets/web/css/nav.css" rel="stylesheet">
      <link href="<?php echo base_url();?>assets/web/css/the-big-picture.css" rel="stylesheet">
       <script src="<?php echo base_url();?>assets/web/js/jquery.js"></script>
      <script src="<?php echo base_url();?>assets/web/js/bootstrap.js"></script>

    

  </head>

  <body>

     <div class="container">
    <div class="row">
    <?=$this->session->flashdata('pesan')?>   
      <div class="col-sm-6 col-lg-offset-1 " style="margin-top: 20px;">

        <img class="img-responsive profile-user-img" src="<?php echo base_url();?>/assets/web/img/logotak.png" width="300px">
      </div>
     <br>    
      <div class="col-md-4 col-sm-6 col-xs-12 " style="margin-top: -10px;" >    
                  <div class="well" style="box-shadow: 5px 5px 4px #999999;">
                  

                      <ul class="nav nav-tabs">
                          <li class="active "><a href="#login" data-toggle="tab" aria-expanded="true">Login Juri</a></li>
                          <li class=""><a href="#create" data-toggle="tab" aria-expanded="false">Login Admin</a></li>          
                      </ul>

                      <div class="tab-content ">
                          <div class="tab-pane active in" id="login">
                            
                            <form style="margin-top: 20px;" action="<?php echo base_url('index.php/juri/Login')?>" method= "POST" >
                              
                              <div style="margin-bottom: 25px" class="input-group">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                          <input id="username" type="text" class="form-control" name="username"  placeholder="Masukan Username">                                        
                                      </div> 
                              <div style="margin-bottom: 25px" class="input-group">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                          <input id="password" type="password" class="form-control" name="password"  placeholder="Masukan Password">                                        
                                      </div> 
                               <button type="submit" class="btn btn-success btn-block">Masuk</button>
                            </form>
                          </div>

                      <div class="tab-pane fade" id="create">
                                          
                            <form style="margin-top: 20px;" action="<?php echo base_url('index.php/administrator/login')?>" method= "POST" >
                           
                              <div style="margin-bottom: 25px" class="input-group">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                          <input id="username" type="text" class="form-control" name="username"  placeholder="Masukan Username">                                        
                                      </div> 
                              <div style="margin-bottom: 25px" class="input-group">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                          <input id="password" type="password" class="form-control" name="password"  placeholder="Masukan Password">                                        
                                      </div> 
                               <button type="submit" class="btn btn-success btn-block">Masuk</button>
                            </form>
                      </div>
                      </div>
                    
      
      </div>
    </div>
  </div>
         <!-- Page Content -->

      
  </body>

  </html>
