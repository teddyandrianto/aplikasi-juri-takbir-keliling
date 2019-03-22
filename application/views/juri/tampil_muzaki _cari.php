

<section class="content">
<div class="row">

<div class="col-xs-12">
      <div class="box">
      <div class="box-header">
      <h3 class="box-title ">Pencarian Data Muzaki</h3>
      <form name='autoSumForm' id="form1" role="form" action="<?php echo base_url();?>index.php/amilin/cari_data_nama" method="post" enctype="multipart/form-data">
      <br>
           <div class="input-group col-md-5 col-sm-4 col-xs-5 pull-right ">
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
              <h3 class="box-title ">Tabel Muzaki </h3>
              

            <!-- /.box-header -->
            <div class="box-body">
            <div class="table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kepala_keluarga</th>
                  <th>Jumlah</th>
                  <th>Beras Zakat</th>
                  <th>Uang Zakat</th>
                  <th>Beras Infaq</th>
                  <th>Uang Infaq</th>
                  <th><center>Action</center></th>
                </tr>
                </thead>
                
                <tbody>
                <?php 
               $no = $this->uri->segment('3') + 1;
                foreach ($tampil as $d) {?>
                <tr>
                  <td><?php echo $no++;?></td>
                  <td><?php echo $d->kepala_kel;?></td>
                  <td><?php echo $d->jum_kel;?> Orang</td>
                  <td><?php echo $d->beras;?> Lt</td>
                  <td>Rp<?php echo $d->uang;?></td>
                  <td><?php echo $d->beras_infaq;?></td>
                  <td><?php echo $d->uang_infaq;?></td>
                  <td class="text-center"><a class='btn btn-warning btn-xs' href="<?php echo base_url("index.php/amilin/edit_muzaki"); ?>/<?php echo $d->id;?>"><span class="fa fa-cogs"></span> Edit</a></td>
                </tr>
                 
                <?php } ?>



                </tbody>
                
              </table>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
  </section>