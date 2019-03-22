<section class="content">
<div class="row">
<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <center>
              <h3 class="box-title "><b>Tabel Penjurian Tabir Keliling</b></center></h3>
              <br>
             

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
                  <td><?php echo $d->nama?></td>
                  <td><?php echo $d->total_kekompakan;?></td>
                  <td><?php echo $d->total_dekorasi;?></td>
                  <td><?php echo $d->total_sound;?></td>
                  <td><?php echo $d->total_gematakbir;?></td>
                  <td><?php echo $d->total_tema;?></td>
                  <td><?php echo ($d->total_kekompakan+$d->total_dekorasi+$d->total_sound+$d->total_gematakbir+$d->total_tema);?></td>
                </tr>
                 
                <?php } ?>
                </tbody>
               
                  </table>
                
                </center>

            </div>
 
          </div>
        </div>
      </div>
 
      </div>
      </div>

    
  </section>


            