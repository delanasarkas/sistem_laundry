<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Transaksi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Transaksi</li>
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
          <h3 class="card-title">Transaksi</h3>

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
                        <h3> Tambah Data Transaksi </h3>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group row">
                            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                              <input type="Nama" class="form-control" id="inputNama">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputTelepon" class="col-sm-2 col-form-label">Telepon</label>
                            <div class="col-sm-10">
                              <input type="Telepon" class="form-control" id="inputTelepon">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputTgl" class="col-sm-2 col-form-label">Tgl Transaksi</label>
                            <div class="col-sm-10">
                              <input type="Tgl" class="form-control" id="inputTgl">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputPaket" class="col-sm-2 col-form-label">Paket</label>
                            <div class="col-sm-10">
                              <input type="Paket" class="form-control" id="inputPaket">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputStaorder" class="col-sm-2 col-form-label">Status Order</label>
                            <div class="col-sm-10">
                              <input type="Staorder" class="form-control" id="inputStaorder">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputHarga" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                              <input type="Harga" class="form-control" id="inputHarga">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputBerat" class="col-sm-2 col-form-label">Berat</label>
                            <div class="col-sm-10">
                              <input type="Berat" class="form-control" id="inputBerat">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputTotal" class="col-sm-2 col-form-label">Total</label>
                            <div class="col-sm-10">
                              <input type="Total" class="form-control" id="inputTotal">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputPembayaran" class="col-sm-2 col-form-label">Pembayaran</label>
                            <div class="col-sm-10">
                              <input type="Pembayaran" class="form-control" id="inputPembayaran">
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
                    <th scope="col">Nomor</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Tgl Transaksi</th>
                    <th scope="col">Paket</th>
                    <th scope="col">Status Order</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Berat</th>
                    <th scope="col">Total</th>
                    <th scope="col">Pembayaran</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Ali Marzuki</td>
                    <td>08979984852</td>
                    <td>14 Juni 2020</td>
                    <td>Satuan</td>
                    <td>Baru</td>
                    <td>6000</td>
                    <td>2kg</td>
                    <td>12000</td>
                    <td>Lunas</td>
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