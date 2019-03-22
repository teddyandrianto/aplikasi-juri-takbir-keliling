    <section class="content-header">
      <h1>
        User Profile
      </h1>
      
    </section>
    <section class="content">

      <div class="row">
        <div class="col-md-3">
          <div class="box box-primary">
            <div class="box-body box-profile">
             <?php if ($_SESSION['sesijuri']['foto'] == '') {?>
              <img src="<?php echo base_url('assets');?>/photo-profile/not-profile.png" class="profile-user-img img-responsive img-rounded" alt="User profile picture">
             <?php }else{ ?>
              <img class="profile-user-img img-responsive img-rounded" src="<?php echo base_url('assets');?>/photo-profile/<?=$_SESSION['sesijuri']['foto'];?>" alt="User profile picture">
                <?php } ?>
              <h3 class="profile-username text-center"><?=$_SESSION['sesijuri']['nama'];?></h3>

              <p class="text-muted text-center">Juri</p>
            </div>
            <form role="form" action="<?php echo base_url();?>index.php/amilin/update_image" method="post" enctype="multipart/form-data">
              <div class="box-body">
               <div class="form-group col-md-12"><center>
                   <label>Ubah Photo Profile</label>
            <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-warning">
                        Browse&hellip; <input type="file" name="filefoto" style="display: none;" multiple>
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>
                      <span class="help-block">
                          Unggah Photo dari komputer
                      </span>
                </div>
                
              <div class="box-footer ">
              <center>
                 <button type="Submit" name="btnSubmite" class="btn btn-success">Update Photo</button>
              </center>
              </div>
              </div></center>
            </form>
            </div>
          </div>
        
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li><a href="<?php echo base_url('index.php/juri/profile'); ?>" >Tentang</a></li>
              <li><a href="<?php echo base_url('index.php/juri/setting'); ?>" >Settings</a></li>
            </ul>
           