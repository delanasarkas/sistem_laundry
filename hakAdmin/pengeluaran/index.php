<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pengeluaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengeluaran</li>
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
          <h3 class="card-title">Pengeluaran</h3>

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
                        <h3> Tambah Data Pengeluaran </h3>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group row">
                            <label for="inputTanggal" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                              <input type="date" class="form-control" id="inputTanggal">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                              <input type="Nama" class="form-control" id="inputNama">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputJumlah" class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="col-sm-10">
                              <input type="Jumlah" class="form-control" id="inputJumlah">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputRincian" class="col-sm-2 col-form-label">Rincian</label>
                            <div class="col-sm-10">
                              <input type="Rincian" class="form-control" id="inputRincian">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputHarga" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                              <input type="Harga" class="form-control" id="inputHarga">
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <input type="submit" value="kirim" class="btn btn-primary">
                        <button class="btn btn-primary" data-dismiss="modal">Batal</button>
                    </div>
                  </div>
                </div>
              </div>

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
                    <th scope="col">Nomer</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Rincian</th>
                    <th scope="col">Harga</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>03 April 2020</td>
                    <td>Plastik dan pewangi</td>
                    <td>2</td>
                    <td>pcs</td>
                    <td>12000</td>
                    
                  </tr>
                </tbody>
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