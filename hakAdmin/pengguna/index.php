<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pengguna</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengguna</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Pengguna</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">Tambah</button>
                <div  class="modal fade" id="modal" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3> Tambah Data Pengguna </h3>
                      </div>
                      <div class="modal-body">
                        <form action="tambahpengguna.php" method="post">
                          <div class="form-group row">
                            <label for="inputTanggal" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                              <input type="date" class="form-control" id="inputTanggal" name="tanggal">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                              <input type="Nama" class="form-control" id="inputNama" name="nama">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                              <input type="Username" class="form-control" id="inputUsername" name="username">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                              <input type="Alamat" class="form-control" id="inputAlamat" name="alamat">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputTelepon" class="col-sm-2 col-form-label">Telepon</label>
                            <div class="col-sm-10">
                              <input type="Telepon" class="form-control" id="inputTelepon" name="telepon">
                            </div>
                          
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary" value="kirim"  name="kirim">
                        <button class="btn btn-primary" data-dismiss="modal">Batal</button>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </form>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Nomer</th>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Action</th>
                  </tr>
                  <?php
                    include "koneksi.php";
                    $no=1;
                    $sql = mysqli_query ($koneksi, "SELECT*FROM pengguna");
                    while ($sql2= mysqli_fetch_array($sql)){
                    ?>

                    <tr>
                      <td align=center><?php echo $no++; ?></td>
                      <td align=center><?php echo $sql2 ['tanggal']; ?></td>
                      <td align=center><?php echo $sql2 ['nama']; ?></td> 
                      <td align=center><?php echo $sql2 ['username']; ?></td>  
                      <td align=center><?php echo $sql2 ['alamat']; ?></td> 
                      <td align=center><?php echo $sql2 ['telepon']; ?></td> 

                      <td align="center">
                                      <a href="#edit<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
              <a href="#del<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                      </td>
                  </tr>

                </thead>
                </tbody>
                <?php
                  }
                  ?>
              </div>
              </table>

        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>