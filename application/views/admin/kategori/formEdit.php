  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Produk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Produk</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Data Produk</h3>
              </div>
              <!-- form start -->
              <form name="sentMessage"  method="post" action="<?php echo site_url('kategori/edit_produk');?>" enctype="multipart/form-data">
              <select class="form-control" name="kategori">
							<option value="<?php echo $produk->idKat; ?>"> <?php echo $kategori->namaKat?></option>
						 </select>
                            <p class="help-block text-danger"></p>
                        </div>
                      <input type="hidden" name="idProduk" class="form-control" id="name" placeholder="Nama"
                          required="required" data-validation-required-message="Please enter your name" value="<?= $produk->idProduk?>"/>
                        <div class="control-group">
                            <input type="text" name="namaProduk" class="form-control" id="name" placeholder="Nama Produk"
                                required="required" data-validation-required-message="Please enter your name" value="<?= $produk->namaProduk?>"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="file" name="gambar" class="form-control" id="emfail" placeholder="Gambar Produk"
                                required="required" data-validation-required-message="Please enter your photo" value="<?= $produk->foto?>"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" name="hargaProduk" class="form-control" id="name" placeholder="Harga Produk"
                                required="required" data-validation-required-message="Please enter your price" value="<?= $produk->harga?>"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" name="jumlahProduk" class="form-control" id="name" placeholder="Stok Produk"
                                required="required" data-validation-required-message="Please enter your stock"value="<?= $produk->stok?>"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" name="beratProduk" class="form-control" id="name" placeholder="Berat Produk"
                                required="required" data-validation-required-message="Please enter your weight" value="<?= $produk->berat?>"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="3" id="message" name="deskripsi" placeholder="Deskripsi"
                                required="required"
                                data-validation-required-message="Please enter your description"> <?php echo $produk->deskripsiProduk ?></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info float-right">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
