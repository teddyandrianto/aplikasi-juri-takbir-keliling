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

        <form name='autoSumForm' id="form1" role="form" action="<?php echo base_url();?>index.php/administrator/proses_addpeserta" method="post" enctype="multipart/form-data">
          <div class="panel panel-default" >
            <div class="panel-heading">
              <div class="row ">
                <div class="col-md-6 col-sm-6 col-xs-12" ">
                  <span class="help-block text-muted small-font" >Nama Peserta</span>
                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Pesrta" />
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <span class="help-block text-muted small-font" >Nomor Urut Peserta</span>
                  <input type="text" id="no_urut" name="no_urut" class="form-control" placeholder="Nomor Urut Peserta" />
                </div>
              
                 <div class="col-md-3 col-sm-12 col-xs-12">
                 <br>
                   <button class="btn btn-success btn-block" type="submit" value="Click Me!" onclick="submitForms()" />Input</button>
                </div>
                  </form>
                  </div>
                  </div>
                  </div></div>
               
        
