    <section class="content-header">
      <h1>
        Managemen Juri
        <small>Preview</small>
      </h1>
    </section>
    <section class="content">
      <div class="row">
      <?=$this->session->flashdata('pesan')?>   
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Juri</h3>
            </div>
            <form role="form" action="<?php echo base_url();?>index.php/administrator/proses_addjuri" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputUername">Username</label>
                   <input type="hidden" class="form-control" id="code_wilayah" name="code_wilayah" value="<?php echo $_SESSION['sesiadmin']['id'] ;?>" placeholder="Enter Nama">
                  <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Juri</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama ">
                </div>
             
              <div class="form-group">
                  <label for="exampleInputEmail1">Perwakilan</label>
                <select class="form-control" id="perwakilan" name="perwakilan" class="form-control">
                  <?php foreach ($peserta as $d) { ?>
                      <option><?php echo $d->nama ;?></option>
                     <?php } ?>
                  </select>
                </div>
              <div class="box-footer">
                <button type="Submit" name="btnSubmite" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
       </div>
  </div>
  </section>
  </div>