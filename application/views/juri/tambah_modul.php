    <section class="content-header">
      <h1>
        Data Modul Pembelajaran
        <small>Dosen</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Modul Pembelajaran</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url();?>teacher/proses_addmodul" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group col-md-2">
                   <label for="sel1">No Urut</label>
                      <select class="form-control" name="urutan" id="urutan">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                      </select>
                      <br>
                </div>
                <div class="form-group col-md-10">
                  <label for="exampleInputNama">Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul" placeholder="Enter Judul Modul">
                </div>
                <div class="form-group col-md-10">
                   <label>Inputkan File .pdf</label>
            <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-warning">
                        Browse&hellip; <input type="file" name="filepdf" style="display: none;" multiple>
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>
                      <span class="help-block">
                          Ambil Data PDF dari komputer anda
                      </span>
                </div>

                <div class="box-footer col-md-12">
                <div class="pull-right ">    
                <button type="Submit" name="btnSubmite" class="btn btn-success">Upload Modul</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
      
       </div>

    <!-- /.content -->
  </div>
  </section>