    <section class="content-header ">
      <h1>
        Dashboard
        <small>Penilaian Juri</small>
      </h1>
    </section>
    <section class="content">
  
        <div class="row">
 <?=$this->session->flashdata('pesan')?>
 <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <div class="table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No Peserta</th>
                  <th>Nama Peserta</th>
                  
                  <th><center>Action</center></th>
                </tr>
                </thead>
                
                <tbody>
                  <?php 
                  $no = 0 +1;
                  foreach ($row as $d) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                   <td><?php $nama_peserta = $this->db->where('id',$d->id_peserta)->get('tbl_peserta')->row()->nama; ?><?php echo $nama_peserta?></td>
                  
                  <td class="text-center">
                  <?php

                   if($d->status!='Y') {
                   ?>
                  <a class='btn btn-success btn-xs' href="<?php echo base_url("index.php/juri/nilai"); ?>/<?php echo $d->id ;?>"><span class="fa fa-check-square-o"></span> Nilai</a> 
                  <?php }else{ ?>
                  <a class='btn btn-danger btn-xs'> Sudah</a> 
                  <?php }?>
                    </td>
                  
                </tr>
                <?php } ?>
                </tbody>
                
              </table>
              </div>
          </div>
        </div>
        </div>
        </div>
