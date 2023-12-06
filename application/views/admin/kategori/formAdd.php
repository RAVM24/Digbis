  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Tambah Produk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Produk</li>
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
              <form class="form-horizontal" method="post" action="<?php echo site_url('kategori/add_Produk');?>" enctype="multipart/form-data">
					<div class="control-group">
                      <select class="form-control" name="kategori">
                          <?php foreach($kategori as $val){?>
                          <option value="<?php echo $val->idkat; ?>"><?php echo $val->namaKat;?></option>
                          <?php } ?>
                        </select>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" name="namaProduk" class="form-control" id="name" placeholder="Nama Produk"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>				
                        <div class="control-group">
                            <input type="file" name="gambar" class="form-control" id="emfail" placeholder="Gambar Produk"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
						<div class="control-group">
                            <input type="text" name="hargaProduk" class="form-control" id="name" placeholder="Harga Produk"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
						<div class="control-group">
                            <input type="text" name="jumlahProduk" class="form-control" id="name" placeholder="Jumlah Produk"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
						<div class="control-group">
                            <input type="text" name="beratProduk" class="form-control" id="name" placeholder="Berat Produk"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="3" id="message" name="deskripsi" placeholder="Deskripsi"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
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
