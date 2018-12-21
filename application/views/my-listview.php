
            <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?= $labelHeader;?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">

                <div class="col-lg-4">

                        <div class="col-lg-6  ">
                          <h4>Jumlah Portfolio :</h4>
                          <p class="breadcrumb text-center"> 14</p>
                          <a class="btn btn-primary" href="<?= site_url("my/setform/").$labelSetform ;?>"><i class="fa fa-plus-square-o fa-fw"></i> CREATE</a>
                         </div>
                </div>

            </div>

            <hr>


            <div class="row">
              <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Portfolio</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                        <th scope="row">1</th>
                        <td>xxxx</td>
                        <td>xx-xx-xxxx</td>
                        <td>@Delete @Suspend @Notice @Edit</td>
                  </tr>
                </tbody>
                </table>
            </div>

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
