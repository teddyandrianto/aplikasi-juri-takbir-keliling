    <section class="content-header">
      <h1>
        Penilaian Untuk  
        <?php 
        $id =  $this->uri->segment(3); 
        $id_peserta = $this->db->where('id',$id)->get('tbl_nilai')->row()->id_peserta;
        $nama_peserta = $this->db->where('id',$id_peserta)->get('tbl_peserta')->row()->nama; ?><b><?php echo $nama_peserta?>
        </b><small> </small>
      </h1>
    
    </section>


    <!-- Main content -->
    <section class="content">
    <div class="row">
        
      <div class="col-xs-12 aksi">

        <form name='autoSumForm' id="form1" role="form" action="<?php echo base_url();?>index.php/juri/proses_addnilai" method="post" enctype="multipart/form-data">
          <div class="panel panel-default" >
            <div class="panel-heading">
              <div class="row ">
                 <div class="col-md-2 col-sm-4 col-xs-12" ">
                  <span class="help-block text-muted small-font" >Kekompakan</span>
                  <input type="hidden" id="id_peserta" name="id_peserta" class="form-control" value="<?php echo $this->uri->segment(3);?>" />
                    <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $id ;?>" />
                  <input type="text" id="kekompakan" name="kekompakan" class="form-control" value="<?php echo $kekompakan; ?>" placeholder="Nilai Kekompakan" />
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12">
                  <span class="help-block text-muted small-font" >Dekorasi</span>
                  <input type="text" id="dekorasi" name="dekorasi" class="form-control" value="<?php echo $dekorasi; ?>" placeholder="Nilai Dekorasi" />
                </div>
                 <div class="col-md-2 col-sm-4 col-xs-12" ">
                  <span class="help-block text-muted small-font" >Sound</span>
                  <input type="text" id="sound" name="sound" class="form-control" value="<?php echo $sound; ?>" placeholder="Nilai Sound" />
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12">
                  <span class="help-block text-muted small-font" >Gema Takbir</span>
                  <input type="text" id="gematakbir" name="gematakbir" class="form-control" value="<?php echo $gematakbir; ?>" placeholder="Nilai Gema Takbir" />
                </div>
                 <div class="col-md-2 col-sm-4 col-xs-12">
                  <span class="help-block text-muted small-font" >Tema</span>
                  <input type="text" id="tema" name="tema" class="form-control" value="<?php echo $tema; ?>" placeholder="Nilai Tema" />
                </div>
                 <div class="col-md-3 col-sm-12 col-xs-12">
                 <br>

                   <button class="btn btn-success btn-block" type="submit" value="Click Me!" onclick="submitForms()" />Save Nilai</button>
                </div>
                  </form>
                  </div>
                  </div>
                  </div></div></div>
               
        
