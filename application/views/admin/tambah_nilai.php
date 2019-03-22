    <section class="content-header">
      <h1>
        Data Nilai
        <small> </small>
      </h1>
    
    </section>


    <!-- Main content -->
    <section class="content">
    <div class="row">
        
      <div class="col-xs-12 aksi">

        <form name='autoSumForm' id="form1" role="form" action="<?php echo base_url();?>index.php/administrator/proses_addnilai" method="post" enctype="multipart/form-data">
          <div class="panel panel-default" >
            <div class="panel-heading">
              <div class="row ">
                <div class="col-md-2 col-sm-4 col-xs-12">
                  <span class="help-block text-muted small-font" >ID Juri</span>
                  <select class="form-control" id="nama_juri" name="nama_juri" class="form-control"">
                  <?php foreach ($juri as $l) { ?>
                      <option><?php echo $l->nama ;?></option>
                     <?php } ?>
                  </select>
                </div>
                 <div class="col-md-2 col-sm-4 col-xs-12">
                  <span class="help-block text-muted small-font" >ID peserta</span>
                  <select class="form-control" id="nama_peserta" name="nama_peserta" class="form-control">
                  <?php foreach ($peserta as $d) { ?>
                      <option><?php echo $d->nama ;?></option>
                     <?php } ?>
                  </select>
                </div>
                 <div class="col-md-2 col-sm-4 col-xs-12" ">
                  <span class="help-block text-muted small-font" >Kekompakan</span>
                  <input type="text" id="kekompakan" name="kekompakan" class="form-control" placeholder="Nilai Kekompakan" />
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12">
                  <span class="help-block text-muted small-font" >Dekorasi</span>
                  <input type="text" id="dekorasi" name="dekorasi" class="form-control" placeholder="Nilai Dekorasi" />
                </div>
                 <div class="col-md-2 col-sm-4 col-xs-12" ">
                  <span class="help-block text-muted small-font" >Sound</span>
                  <input type="text" id="sound" name="sound" class="form-control" placeholder="Nilai Sound" />
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12">
                  <span class="help-block text-muted small-font" >Kerapihan</span>
                  <input type="text" id="kerapihan" name="kerapihan" class="form-control" placeholder="Nilai Kerapihan" />
                </div>
                 <div class="col-md-2 col-sm-4 col-xs-12">
                  <span class="help-block text-muted small-font" >Tema</span>
                  <input type="text" id="tema" name="tema" class="form-control" placeholder="Nilai Tema" />
                </div>
                 <div class="col-md-3 col-sm-12 col-xs-12">
                 <br>

                   <button class="btn btn-success btn-block" type="submit" value="Click Me!" onclick="submitForms()" />Input</button>
                </div>
                  </form>
                  </div>
                  </div>
                  </div></div>
               
        
