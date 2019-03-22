    <section class="content-header">
      <h1>Managemen Amilin
        <small>Preview</small>
      </h1>
    </section>

    <section class="content">
      <div class="row">
      <?=$this->session->flashdata('pesan')?>   
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Amilin</h3>
            </div>
            <form role="form" action="<?php echo base_url();?>index.php/administrator/update_juri" method="post">
              <div class="box-body">
                 <div class="form-group">
                  <label for="exampleInputNama">ID</label>
                  <input type="text" class="form-control" id="id" value="<?php echo $id; ?>" name="id" placeholder="Enter ID">
                </div>
                <div class="form-group">
                  <label for="exampleInputUername">Username</label>
                  <input type="text" class="form-control" id="username" value="<?php echo $username; ?>" name="username" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Juri</label>
                  <input type="text" class="form-control" id="nama" value="<?php echo $nama; ?>" name="nama" placeholder="Enter Nama Juri">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Perwakilan</label>
                  <input type="text" class="form-control" id="perwakilan" value="<?php echo $perwakilan; ?>" name="perwakilan" placeholder="Enter perwakilan">
                </div>
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