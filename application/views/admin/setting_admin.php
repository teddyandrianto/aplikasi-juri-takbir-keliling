          <div class="tab-content">
            <div class="active tab-pane" id="activity">
              <div class="tab-pane">
                <form class="form-horizontal" action="<?=base_url('index.php/administrator/update_admin');?>" method="post">
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Username" name="username" placeholder="Username" value="<?=$_SESSION['sesiadmin']['username'];?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Name" value="<?=$_SESSION['sesiadmin']['nama'];?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="Password" class="form-control" id="Password" name="password" placeholder="Password Wajib di isi ">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Update Profile</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </section>

