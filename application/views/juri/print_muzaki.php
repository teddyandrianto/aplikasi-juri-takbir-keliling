<section class="content">
<div class="row">
<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <center>
              <h3 class="box-title "><b>Tabel Muzaki <?php echo($_SESSION['sesiamilin']['upz_zakat']) ;?></b></center></h3>
              <div class="col-md-1 aksi">
                 
                 <button class="btn btn-default print " onclick="window.print();"><i class="fa fa-print"></i> Print</button>

                </div>
                </div>
                    <!-- /.box-header -->
            <div class="box-body">
            <div class="table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                
                <tr>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">KEPALA KELUARGA</th>
                    <th rowspan="2">JIWA</th>
                    <th colspan="2"><center>ZAKAT</center></th>
                    <th colspan="2"><center>INFAQ</center></th>    
                </tr>
                <tr>
                  <th><center>BERAS</center></th>
                  <th><center>UANG</center></th> 
                  <th><center>BERAS</center></th> 
                  <th><center>UANG</center></th>
                </tr>
                </thead>
                
                <tbody>
                <?php 
                $no = $this->uri->segment('3') + 1;
                foreach ($row as $d) {?>
                <tr>
                  <td><?php echo $no++;?></td>
                  <td><?php echo $d->kepala_kel;?></td>
                  <td><?php echo $d->jum_kel;?> Orang</td>
                  <?php if($set->satuan_beras=='Kg'){ ?>
                          <td><?php echo $d->beras/$set->beras_lt*$set->beras_kg?> <?php echo $set->satuan_beras;?></td>
                      <?php }else if ($set->satuan_beras='Lt'){ ?>
                          <td><?php echo $d->beras;?> <?php echo $set->satuan_beras;?></td>
                       <?php };?>   
                  <td>Rp <?php echo $d->uang;?></td>
                  <td><?php echo $d->beras_infaq;?> Lt</td>
                  <td>Rp <?php echo $d->uang_infaq;?></td>
                </tr>
                 
                <?php } ?>
                </tbody>
                <tbody>
                  <td colspan="2"><b><center>JUMLAH TOTAL</center></b></td>
                  <td><b><?php echo $sum->jiwa_total;?></b></td>
                  <td><b><?php echo $sum->beras_zakat;?></b></td>
                  <td><b><?php echo $sum->uang_zakat;?></b></td>
                  <td><b><?php echo $sum->beras_infaq;?></b></td>
                  <td><b><?php echo $sum->uang_infaq;?></b></td>
                </tbody>
                  </table>
                  </div>
                </center>
            </div>
  
          </div>
        </div>
      </div>

    
  </section>


            