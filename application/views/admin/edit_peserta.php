    <section class="content-header">
      <h1>
        Data Peserta Takbir Keliling
        <small> </small>
      </h1>
    
    </section>


    <!-- Main content -->
    <section class="content">
    <div class="row">
        
      <div class="col-xs-12 aksi">

        <form name='autoSumForm' id="form1" role="form" action="<?php echo base_url();?>index.php/administrator/update_peserta" method="post" enctype="multipart/form-data">
          <div class="panel panel-default" >
            <div class="panel-heading">
              <div class="row ">
                <div class="col-md-6 col-sm-6 col-xs-12" ">
                  <span class="help-block text-muted small-font" >Nama Peserta</span>
                  <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $id; ?>" placeholder="Nama Kepala Keluarga" />
                  <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $nama; ?>" placeholder="Nama Kepala Keluarga" />
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <span class="help-block text-muted small-font" >Nomor Urut Peserta</span>
                  <input type="text" id="no_urut" name="no_urut" class="form-control" placeholder="Nomor Urut Peserta" value="<?php echo $no_urut; ?>" onFocus="startCalc();" onBlur="stopCalc();" />
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

       
   