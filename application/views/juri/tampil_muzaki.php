
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
                foreach ($muzaki as $d) {?>
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
                  <td class="text-center"><a class='btn btn-warning btn-xs' href="<?php echo base_url("index.php/amilin/edit_muzaki"); ?>/<?php echo $d->id;?>"><span class="fa fa-cogs"></span> Edit</a> 
                   </td>
                </tr>
                 
                <?php } ?>



                </tbody>
                  </table>
                  </div>
                  <div class="box-footer clearfix">
            
                <center>
                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                
                  <?php echo $this->pagination->create_links();?>
                </div>
                </center>
            </div>
  
          </div>
        </div>
      </div>
    </div>
    
  </section>


            