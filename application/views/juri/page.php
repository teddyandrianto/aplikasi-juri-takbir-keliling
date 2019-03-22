
    <script>
function sum() {
      var txtFirstNumberValue = document.getElementById('beras').value;
      var txtSecondNumberValue = document.getElementById('uang').value;
      var result = parseInt(txtFirstNumberValue/<?php echo $set->beras_lt;?>) + parseInt(txtSecondNumberValue/<?php echo $set->uang_perorang ?>);
      if (!isNaN(result)) {
         document.getElementById('jum_kel').value = result;
      }
}
</script>
<section class="content">
<div class="row">
      <div class="col-xs-12 aksi">

        <form name='autoSumForm' id="form1" role="form" action="<?php echo base_url();?>index.php/amilin/proses_addmuzaki" method="post" enctype="multipart/form-data">
          <div class="panel panel-default" >
            <div class="panel-heading">
              <div class="row ">
                <div class="col-md-6 col-sm-6 col-xs-12" ">
                  <span class="help-block text-muted small-font" >Kepala Keluarga</span>
                  <input type="text" id="kepala_kel" name="kepala_kel" class="form-control" placeholder="Nama Kepala Keluarga" />
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <span class="help-block text-muted small-font" >Jumlah Keluarga</span>
                  <input type="text" id="jum_kel" name="jum_kel" class="form-control" placeholder="Jumlah Keluarga" onFocus="startCalc();" onBlur="stopCalc();" />
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                  <span class="help-block text-muted small-font" >Beras Zakat</span>
                  <input type="text" id="beras" name="beras" class="form-control" placeholder="<?php echo $set->satuan_beras;?>"  onkeyup="sum();" onFocus="startCalc();" onBlur="stopCalc();" />
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12" >
                  <span class="help-block text-muted small-font" >Uang Zakat</span>
                  <input type="number" id="uang" name="uang" class="form-control" placeholder="Rp" onFocus="startCalc();"  onkeyup="sum();"  onBlur="stopCalc();" />
                </div>
                 <div class="col-md-3 col-sm-6 col-xs-12">
                  <span class="help-block text-muted small-font" >Beras Infaq</span>
                  <input type="text" id="beras_infaq" name="beras_infaq" class="form-control" placeholder="<?php echo $set->satuan_beras;?>" onFocus="startCalc();" onBlur="stopCalc();" />
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                  <span class="help-block text-muted small-font" >Uang Infaq</span>
                  <input type="number" id="uang_infaq" name="uang_infaq" class="form-control" placeholder="Rp" onFocus="startCalc();" onBlur="stopCalc();" />
                </div>
                 <div class="col-md-3 col-sm-2 col-xs-12">
                 <br>
                   <button class="btn btn-success btn-block" type="submit" value="Click Me!" onclick="submitForms()" />Input</button>
                </div>
                  </form>
                  </div>
                  </div>
                  </div></div>
               
        
<div class="col-xs-12 aksi">
      <div class="box">
      <div class="box-header">
      <h3 class="box-title ">Pencarian Data Muzaki</h3>

      <form name='autoSumForm' id="form1" role="form" action="<?php echo base_url();?>index.php/amilin/cari_data_nama" method="post" enctype="multipart/form-data">
      <br>
           <div class="input-group col-md-5 col-sm-5 col-xs-5">
            <input type="text" id="cari2" name="cari2" placeholder="Cari Denga Nama" class="form-control"/>
            <span class="help-block input-group-addon">
                <i class="fa fa-search"></i>
            </span>
          </div>
        </form>
      </div></div></div>
      <div class="col-xs-12">
        <?=$this->session->flashdata('pesan')?>
      </div>
      <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <center>
              <h3 class="box-title "><b>Tabel Muzaki <?php echo($_SESSION['sesiamilin']['upz_zakat']) ;?></b></center></h3>
              
              <hr><div class="row">
                <div class="col-md-2 col-sm-4 col-xs-6 ">
                  <span class="help-block text-muted small-font" > Total Beras Infaq </span>
                  <input type="text" id="beras_total" name="beras_total" class="form-control" placeholder="<?php echo $sum->beras_infaq;?>" onFocus="startCalc();" onBlur="stopCalc();" />
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                  <span class="help-block text-muted small-font" > Total Uang Infaq </span>
                  <input type="text" id="uang_total" name="uang_total" class="form-control"  placeholder="<?php echo $sum->uang_infaq;?>" onFocus="startCalc();" onBlur="stopCalc();" />
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 ">
                  <span class="help-block text-muted small-font" > Total Beras Zakat </span>
                  <?php if($set->satuan_beras=='Kg') {?>
                  <input type="text" id="beras_total" name="beras_total" class="form-control" placeholder="<?php echo $sum->beras_zakat/$set->beras_lt*$set->beras_kg;?> <?php echo $set->satuan_beras;?>" onFocus="startCalc();" onBlur="stopCalc();" />
                  <?php } else if ($set->satuan_beras=='Lt') {?>
                      <input type="text" id="beras_total" name="beras_total" class="form-control" placeholder="<?php echo $sum->beras_zakat;?> <?php echo $set->satuan_beras;?>" onFocus="startCalc();" onBlur="stopCalc();" />
                  <?php } ?>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                  <span class="help-block text-muted small-font" > Total Uang zakat </span>
                  <input type="text" id="uang_total" name="uang_total" class="form-control"  placeholder="<?php echo $sum->uang_zakat;?> " onFocus="startCalc();" onBlur="stopCalc();" />
                </div>
           
                <div class="col-md-2 col-sm-4 col-xs-6 pull-right">
                  <span class="help-block text-muted small-font" > Total Muzaki </span>
                  <input type="text" id="jiwa_total" name="jiwa_total" class="form-control" placeholder="<?php echo $sum->beras_zakat/4+$sum->uang_zakat/12000;?>" onFocus="startCalc();" onBlur="stopCalc();" />
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 pull-right">
                  <span class="help-block text-muted small-font" > Total Wajib Zakat</span>
                  <input type="text" id="jiwa_total" name="jiwa_total" class="form-control" placeholder="<?php echo $sum->jiwa_total;?>" onFocus="startCalc();" onBlur="stopCalc();" />
                </div>
                </div>
            </div>
