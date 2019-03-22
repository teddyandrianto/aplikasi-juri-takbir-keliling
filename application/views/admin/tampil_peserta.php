

      <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <div class="table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No Urut Peserta</th>
                  <th>ID Peserta</th>
                  <th>Nama Peserta</th>
                  
                  <th><center>Action</center></th>
                </tr>
                </thead>
                
                <tbody>
                  <?php foreach ($row as $d) { ?>
                <tr>
                  <td><?php echo $d->no_urut; ?></td>
                  <td><?php echo $d->id; ?></td>
                  <td><?php echo $d->nama ; ?></td>
                  <td class="text-center"><a class='btn btn-warning btn-xs' href="<?php echo base_url("index.php/administrator/edit_peserta"); ?>/<?php echo $d->id ;?>"><span class="fa fa-cogs"></span> Edit</a> 
                    <a href="<?php echo base_url("index.php/administrator/delete_peserta"); ?>/<?php echo $d->id;?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a></td>
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