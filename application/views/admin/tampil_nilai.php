
     
   
      <div class="col-xs-12">
        <?=$this->session->flashdata('pesan')?>
      </div>  
      <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <div class="table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Juri</th>
                  <th>Nama Peserta</th>
                  <th>Kekompakan</th>
                  <th>Dekorasi</th>
                  <th>Sound</th>
                  <th>Gema Takbir</th>
                  <th>Tema</th>
                  <th>Status</th>
                  <th><center>Action</center></th>
                </tr>
                </thead>
                
                <tbody>
                  <?php 
                  $no = 0 + 1;foreach ($row as $d) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <
                  <td><?php echo $d->kekompakan; ?></td>
                  <td><?php echo $d->dekorasi; ?></td>
                  <td><?php echo $d->sound; ?></td>
                  <td><?php echo $d->gematakbir; ?></td>
                  <td><?php echo $d->tema; ?></td>
                  <td><?php echo $d->status; ?></td>
                  <td class="text-center"><a class='btn btn-info btn-xs' href="<?php echo base_url("index.php/administrator/reset_status"); ?>/<?php echo $d->id ;?>"><span class="fa fa-refresh"></span> Reset</a>
                    <a class='btn btn-warning btn-xs' href="<?php echo base_url("index.php/administrator/edit_nilai"); ?>/<?php echo $d->id ;?>"><span class="fa fa-cogs"></span> Edit</a> 
                    <a href="<?php echo base_url("index.php/administrator/delete_nilai"); ?>/<?php echo $d->id;?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a></td>
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