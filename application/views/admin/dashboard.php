   <section class="content-header ">
      <h1>
        Dashboard
        <small>Total Perolehan Zakat</small>
      </h1>
    </section>
    <section class="content">
  
        <div class="row">
        <div class="col-md-12 aksi">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Progress perolehan Point Peserta Takbir Keliling</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?php foreach ($prog as $p){?>
              <p><?php echo $p->nama ?>             
                <?php echo ($p->total_kekompakan+$p->total_dekorasi+$p->total_sound+$p->total_gematakbir+$p->total_tema)?>  Point </p>
             
              <div class="progress">
              
                   <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($p->total_kekompakan+$p->total_dekorasi+$p->total_sound+$p->total_gematakbir+$p->total_tema)/($sum->kekompakan+$sum->dekorasi+$sum->sound+$sum->gematakbir+$sum->tema)*100;?>%">
                  <span class="sr-only">80% Complete (success)</span>
         
                </div>
              </div>
            <?php } ?>
            </div> 
          </div>
          </div>

          <div class="col-xs-12">
          <div class="box">
            <div class="box-header ">
            <center>
            <br>
              <h3 class="box-title "><b>DATA HASIL PENJURIAN TAKBIR KELILING 1438H</b></h3>
              <br>
                <h3><b>DESA CILANDAK</b></h3>
                </center>
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
                foreach ($prog as $d) {?>
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
                   <div class="col-xs-3 pull-right">
                   <center>
              <h5 class="box-title "><B>&nbsp;&nbsp;&nbsp;&nbsp;KETUA TAKBIR KELILING</b></h5>
              <br>
              <br>
              <h5 class="box-title "><B>&nbsp;&nbsp;&nbsp;(<?php echo $_SESSION['sesiadmin']['nama']; ?>)</b></h5>
              </center>
              </div>

            </div>
 
          </div>

        </div>
      </div>

 
      </div>
         

    
    </div>
       </section>
