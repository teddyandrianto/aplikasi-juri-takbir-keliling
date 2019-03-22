 <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->

              <div class="tab-pane">
                <form class="form-horizontal" action="<?=base_url('index.php/juri/update_juri');?>" method="post">
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control"  disabled placeholder="Username" value="<?=$_SESSION['sesijuri']['username'];?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Juri</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Name" value="<?=$_SESSION['sesijuri']['nama'];?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Update Profile</button>
                    </div>
                  </div>
                </form>

              </div>


                <div class="tab-pane">
                <form class="form-horizontal" action="<?=base_url('index.php/juri/update_password');?>" method="post">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Password Lama</label>

                    <div class="col-sm-10">
                      <input type="Password" class="form-control" id="password_lama" name="password_lama" placeholder="Masukan Password Lama" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Password Baru</label>

                    <div class="col-sm-10">
                      <input type="Password" class="form-control" id="password_baru" name="password_baru" placeholder=" Masukan Password Baru" >
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Update Password</button>
                    </div>
                  </div>
                </form>

              </div>
               <?=$this->session->flashdata('pesan')?>


              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->

