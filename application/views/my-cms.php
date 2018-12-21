
            <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Atur <?= $labelname; ?></h1>

                    <h2><?= $labelname; ?></h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->




            <?php if ($identifier == 1) {
    ?>
            <div class="row">
                <div class="col-md-6">
                      <form role="form">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Nama <?= $labelname; ?> </label>
                              <input type="email" class="form-control"   placeholder="Masukkan nama <?= $labelname; ?>">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Tanggal <?= $labelname; ?></label>
                              <input type="date" class="form-control"   >
                            </div>
                            <div class="form-group">
                              <label for="exampleInputFile">File Image <?= $labelname; ?></label>
                              <input type="file" id="exampleInputFile">
                              <p class="help-block">Example block-level help text here.</p>
                            </div>


                            <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>


          <?php
}  ?>
          <?php if ($identifier == 2) {
        ?>
            <div class="row">
                <div class="col-md-6">
                      <form role="form">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Perusahaan</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Jabatan</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputFile">Gambar Perusahaan</label>
                              <input type="file" id="exampleInputFile">
                              <p class="help-block">Example block-level help text here.</p>
                            </div>

                            <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>


          <?php
    }  ?>

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
