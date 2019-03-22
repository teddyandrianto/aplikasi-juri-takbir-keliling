<section class="content">
<div class="row">
<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <center>
            <br>
              <h3 class="box-title "><b>PENJURIAN TAKBIR KELILING 1438 H</b></h3>
              <h3><b>DESA CILANDAK</b></h3>
              </center>
              <br>
              <div class="col-md-3 ">
              <h5><b>Nama Juri&nbsp;&nbsp;&nbsp;:</b>&nbsp;<?php echo $data_juri->nama?></h5>
              <h5><b>Perwakilan&nbsp;:</b>&nbsp;<?php echo $data_juri->perwakilan?></h5>

              <div class="col-md-1 aksi">
                 
                 <button class="btn btn-default print " onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                 </div>

                </div>
                 <div class="col-md-2 col-lg-offset-7" > <h5><b>ID Juri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>&nbsp;<?php echo $data_juri->id?></h5>
                </div>
                
                </div>
                    <!-- /.box-header -->
            <div class="box-body">
            <div class="table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
               
                  <th>Nama Peserta</th>
                  <th>Kekompakan</th>
                  <th>Dekorasi</th>
                  <th>Sound</th>
                  <th>Gema Takbir</th>
                  <th>Tema</th>
                  <th>Total Point</th>
                
                </tr>
                </thead>
                
              
                <tbody>
                <?php 
                $no = 0 + 1;
                foreach ($row as $d) {?>
                <tr>
                  <td><?php echo $no++;?></td>
                  <td><?php $nama_peserta = $this->db->where('id',$d->id_peserta)->get('tbl_peserta')->row()->nama; ?><?php echo $nama_peserta?></td>
                  <td><?php echo $d->kekompakan;?></td>
                  <td><?php echo $d->dekorasi;?></td>
                  <td><?php echo $d->sound;?></td>
                  <td><?php echo $d->gematakbir;?></td>
                  <td><?php echo $d->tema;?></td>
                  <td><?php echo ($d->kekompakan+$d->dekorasi+$d->sound+$d->gematakbir+$d->tema);?></td>
                </tr>
                 
                <?php } ?>
                </tbody>
               
                  </table>
                
                </center>

            </div>
     <div class="col-xs-3 pull-right">
              <center>
              <h5 class="box-title "><B>&nbsp;&nbsp;&nbsp;&nbsp;Juri Takbir Keliling </b></h5>
              <br>
              <br>
              <h5 class="box-title "><B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<?php echo $data_juri->nama?>)</b></h5>
              </center>
              </div>
          </div>
        </div>
      </div>
 
      </div>
      </div>

    
  </section>


            