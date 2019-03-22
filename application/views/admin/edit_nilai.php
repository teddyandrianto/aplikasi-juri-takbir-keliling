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

        <form name='autoSumForm' id="form1" role="form" action="<?php echo base_url();?>index.php/administrator/update_nilai" method="post" enctype="multipart/form-data">
          <div class="panel panel-default" >
            <div class="panel-heading">
              <div class="row ">
                <div class="col-md-3 col-sm-6 col-xs-12" ">
                  <span class="help-block text-muted small-font" >id_juri</span>
                  <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $id; ?>" placeholder="Nama Kepala Keluarga" />
                  <input type="text" id="id_juri" name="id_juri" class="form-control" value="<?php echo $id_juri; ?>" placeholder="Nama Kepala Keluarga" />
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                  <span class="help-block text-muted small-font" >id_peserta</span>
                  <input type="text" id="id_peserta" name="id_peserta" class="form-control" placeholder="Nomor Urut Peserta" value="<?php echo $id_peserta; ?>" onFocus="startCalc();" onBlur="stopCalc();" />
                </div>
                 <div class="col-md-3 col-sm-6 col-xs-12">
                  <span class="help-block text-muted small-font" >Kekompakan</span>
                  <input type="text" id="kekompakan" name="kekompakan" class="form-control" placeholder="Nilai Kekompakan" value="<?php echo $kekompakan; ?>" onFocus="startCalc();" onBlur="stopCalc();" />
                </div>
                 <div class="col-md-3 col-sm-6 col-xs-12">
                  <span class="help-block text-muted small-font" >Dekorasi</span>
                  <input type="text" id="dekorasi" name="dekorasi" class="form-control" placeholder="Nilai Dekorasi" value="<?php echo $dekorasi; ?>" onFocus="startCalc();" onBlur="stopCalc();" />
                </div>
                 <div class="col-md-3 col-sm-6 col-xs-12">
                  <span class="help-block text-muted small-font" >Sound</span>
                  <input type="text" id="sound" name="sound" class="form-control" placeholder="Nilai Sound" value="<?php echo $sound; ?>" onFocus="startCalc();" onBlur="stopCalc();" />
                </div>
                 <div class="col-md-3 col-sm-6 col-xs-12">
                  <span class="help-block text-muted small-font" >Gema Takbir</span>
                  <input type="text" id="gematakbir" name="gematakbir" class="form-control" placeholder="Nilai gematakbir" value="<?php echo $gematakbir; ?>" onFocus="startCalc();" onBlur="stopCalc();" />
                </div>
                 <div class="col-md-3 col-sm-6 col-xs-12">
                  <span class="help-block text-muted small-font" >Tema</span>
                  <input type="text" id="tema" name="tema" class="form-control" placeholder="Nilai" value="<?php echo $tema; ?>" onFocus="startCalc();" onBlur="stopCalc();" />
                </div>
                
                
                
                 <div class="col-md-2 col-sm-12 col-xs-12">
                 <br>
                   <button class="btn btn-success btn-block" type="submit" value="Click Me!" onclick="submitForms()" />Update</button>
                </div>
              
              </div>
            </div>
          </div>

        </form>
        </div>

       
   