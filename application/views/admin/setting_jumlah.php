 <section class="content-header">
      <h1>
        Managemet
        <small>Dosen</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('index.php/administrator'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
         
      </ol>
    </section>
    <section class="content">
    <div class="row">
      <div class="col-sm-6">
        <div class="box box-primary ">
            <div class="box-body box-profile"><div class="box-header">
              <h3 class="box-title">Setting Presentase</h3>
              <hr>
            </div>
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
                <form class="form-horizontal" action="<?=base_url('index.php/administrator/update_setting_app');?>" method="post">
                  <div class="form-group">%
                    <label for="inputEmail" class="col-sm-5 control-label">Presentase Mustahik</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="pres_mus" name="pres_mus" placeholder="Username" value="<?php echo $pres_mus; ?>">
                    </div>
                  </div>
                  <div class="form-group">%
                    <label for="inputName" class="col-sm-5 control-label ">Presentase Amilin Mushollah</label>
                    <div class="col-sm-3">
                      <input type="number" class="form-control" id="pres_amilin1" name="pres_amilin1" placeholder="Name" value="<?php echo $pres_amilin1; ?>">
                    </div>
                  </div>
                  <div class="form-group">%
                    <label for="inputSkills" class="col-sm-5 control-label ">Presentase Amilin Desa</label>
                    <div class="col-sm-3">
                      <input type="number" class="form-control" id="pres_amilin2" name="pres_amilin2" placeholder="Email" value="<?php echo $pres_amilin2; ?>">
                    </div>
                  </div>
                  <div class="form-group">%
                    <label for="inputSkills" class="col-sm-5 control-label">Presentase Fisabililah</label>
                    <div class="col-sm-3">
                      <input type="number" class="form-control" id="pres_fis" name="pres_fis" placeholder="Email" value="<?php echo $pres_fis; ?>">
                    </div>
                  </div>
                  <div class="form-group">%
                    <label for="inputSkills" class="col-sm-5 control-label">Presentase Kecamatan</label>
                    <div class="col-sm-3">
                      <input type="number" class="form-control" id="pres_kec" name="pres_kec" placeholder="Email" value="<?php echo $pres_kec; ?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputSkills" class="col-md-5 control-label">Beras Per Jiwa</label>
                    <div class="col-sm-3">
                      <select class="form-control" id="satuan_beras" name="satuan_beras" class="form-control"">
                        <?php if ($satuan_beras==Kg) { echo "<option>Kg</option>";echo "<option>Lt</option>";
                        }else if ($satuan_beras==Lt) { echo "<option>Lt</option>";echo "<option>Kg</option>";} ?>
                      </select>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputSkills" class="col-sm-5 control-label">Beras Per Jiwa</label>
                    <div class="col-sm-3">
                      <input type="number" class="form-control" id="beras_perorang" name="beras_perorang" placeholder="Email" value="<?php echo $beras_perorang; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-5 control-label">Uang Per Jiwa</label>
                      <div class="col-sm-3">
                        <input type="number" class="form-control" id="uang_perorang" name="uang_perorang" placeholder="Email" value="<?php echo $uang_perorang; ?>"">
                      </div>
                  </div>
                  <div class="form-group">  
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Update Profile</button>     
                    </div>
                  </div>
                </form>
       </div></div></div></div></div>

             <div class="col-sm-6">
              <div class="box box-primary ">
            <div class="box-body box-profile"><div class="box-header">
              <h3 class="box-title">Tabel Jumlah Mustahik Dan Amilin Tiap UPZ</h3>
                       </div>
                <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama UPZ</th>
                  <th>Jumlah Amilin</th>
                  <th>jumlah Mustahik</th>
                  <th><center>Action</center></th>
                </tr>
                </thead>
                
                <tbody>
               
                <tr>
                  <td><?php echo $row->id;?></td>
                  <td><?php echo $d['upz_zakat']; ?></td>
                  <td><?php echo $d['upz_zakat']; ?></td>
                  <td><?php echo $d['upz_zakat']; ?></td>
                  <td class="text-center"><a class='btn btn-success btn-xs' href="<?php echo base_url("index.php/administrator/edit_muzaki"); ?>/"><span class="fa fa-eye"></span> Edit</a> 
                    <a href="<?php echo base_url("index.php/administrator/delete_muzaki"); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash-o"></span> Delete</a></td>
                </tr>
            



                </tbody>
                
              </table>
          </div>
            </div>
            </div>
        <div class="box box-primary ">
            <div class="box-body box-profile"><div class="box-header">
              <h3 class="box-title">Setting Presentase</h3>
              <hr>
            </div>
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
                <form class="form-horizontal" action="<?=base_url('index.php/administrator/update_setting_app');?>" method="post">
                  <div class="form-group">%
                    <label for="inputEmail" class="col-sm-5 control-label">Jumlah Mustahik</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="pres_mus" name="pres_mus" placeholder="Username" value="<?php echo $pres_mus; ?>">
                    </div>
                  </div>
                  <div class="form-group">%
                    <label for="inputName" class="col-sm-5 control-label ">Jumlah Amilin Mushollah</label>
                    <div class="col-sm-3">
                      <input type="number" class="form-control" id="pres_amilin1" name="pres_amilin1" placeholder="Name" value="<?php echo $pres_amilin1; ?>">
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
        
    </section>

</div>


</section>
