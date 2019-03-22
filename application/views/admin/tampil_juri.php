    <section class="content-header">
      <h1>
        Managemet
        <small>Juri</small>
      </h1>
    </section>
    <section class="content">
      <div class="row">
      <?=$this->session->flashdata('pesan')?>   
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Juri</h3>
              <a href="addjuri" class="btn btn-success pull-right"><b>+</b>Tambah Juri</a>
            </div>
            <div class="box-body">
            <div class="table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>                
                  <th>ID</th>
                  <th>username</th>
                  <th>Nama</th>
                  <th>Perwakilan</th>
                  <th><center>Reset Pass</center></th>
                  <th><center>Action</center></th>
                </tr>
                </thead>
                
                <tbody>
                  <?php 
                  $no = $this->uri->segment('3') + 1; 
                  foreach ($rows as $d) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $d->id; ?></td>
                  <td><?php echo $d->username ; ?></td>
                  <td><?php echo $d->nama; ?></td>
                  <td><?php echo $d->perwakilan ;?></td>
                  <td class="text-center"><a class='btn btn-info btn-xs' href="<?php echo base_url("index.php/administrator/reset_password_juri"  ); ?>/<?php echo $d->id ;?>"><span class="fa fa-refresh"></span> Reset</a> </td>
                  <td class="text-center"><a class='btn btn-warning btn-xs' href="<?php echo base_url("index.php/administrator/edit_juri"); ?>/<?php echo $d->id ;?>"><span class="fa fa-cogs"></span> Edit</a> 
                    <a href="<?php echo base_url("index.php/administrator/delete_juri"); ?>/<?php echo $d->id;?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a></td>
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