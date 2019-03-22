    <section class="content-header">
      <h1>
        Data Muzaki
        <small> </small>
      </h1>
    
    </section>

    <!-- Main content -->
    <section class="content">
       
    <div class="row">
      <div class="col-xs-12">
        <form id="form1" role="form" action="<?php echo base_url();?>index.php/amilin/update_muzaki" method="post" >
          <div class="panel panel-default" >
            <div class="panel-heading">
              <div class="row ">
                <div class="col-md-6 col-sm-6  col-xs-12">
                  <span class="help-block text-muted small-font" > Kepala Keluarga</span>
                  <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $id; ?>">
                  <input type="text" id="kepala_kel" name="kepala_kel" class="form-control" value="<?php echo $kepala_kel; ?>">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <span class="help-block text-muted small-font" > Jumlah </span>
                  <input type="number" id="jum_kel" name="jum_kel" class="form-control" value="<?php echo $jum_kel; ?>">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                  <span class="help-block text-muted small-font" > Beras Zakat</span>
                  <input type="text" id="beras" name="beras" class="form-control" value="<?php echo $beras; ?>" >
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12" >
                  <span class="help-block text-muted small-font" > Uang Zakat</span>
                  <input type="number" id="uang" name="uang" class="form-control" value="<?php echo $uang; ?>" >
                </div>

                 <div class="col-md-3 col-sm-6 col-xs-12" >
                  <span class="help-block text-muted small-font"  > Beras Infaq</span>
                  <input type="text" id="beras_infaq" name="beras_infaq" class="form-control" value="<?php echo $beras_infaq; ?>" >
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                  <span class="help-block text-muted small-font" > Uang Infaq</span>
                  <input type="number" id="uang_infaq" name="uang_infaq" class="form-control" value="<?php echo $uang_infaq; ?>" >
                </div>
                 <div class="col-md-2 col-sm-12 col-xs-12">
                 <br>
                   <button class="btn btn-success btn-block" type="submit">Update</button>
                </div>
              
              </div>
            </div>
          </div>

        </form>
        </div></div>
