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
             <?php if ($_SESSION['sesiadmin']['foto'] == '') {?>
              <img src="<?php echo base_url('assets');?>/photo-profile/not-profile-admin.png" class="profile-user-img img-responsive img-rounded" alt="Profile picture">
             <?php }else{ ?>
          <img src="<?php echo base_url('assets');?>/photo-profile/<?=$_SESSION['sesiadmin']['foto'];?>" class="profile-user-img img-responsive img-circle" alt="Profile picture">
           <?php } ?>
              
              <h3 class="profile-username text-center"><?=$_SESSION['sesiadmin']['nama'];?></h3>
              <p class="text-muted text-center">Admin</p>
            </div>
            <form role="form" action="<?php echo base_url();?>index.php/administrator/update_image" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group col-md-12">
                  <center>
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
                  </center>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-9">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li><a href="<?php echo base_url('index.php/administrator/profile'); ?>" >Tentang</a></li>
                <li><a href="<?php echo base_url('index.php/administrator/setting'); ?>" >Settings</a></li>
              </ul>
           