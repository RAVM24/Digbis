<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Edit Produk</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">   
                    <form name="sentMessage"  method="post" action="<?php echo site_url('produk/edit');?>" enctype="multipart/form-data">
                      <input type="hidden" name="idProduk" class="form-control" id="name" placeholder="Nama Produk"
                          required="required" data-validation-required-message="Please enter your name" value="<?= $produk->idProduk?>"/>
                          <div class="control-group">
                         <select class="form-control" name="kategori">
							<?php foreach($kategori as $val){?>
							<option value="<?php echo $val->idkat; ?>"><?php echo $val->namaKat;?></option>
							<?php } ?>
						 </select>
                            <p class="help-block text-danger"></p>
                        </div>
                      <input type="hidden" name="idToko" class="form-control" id="name" placeholder="Nama Toko"
                          required="required" data-validation-required-message="Please enter your name" value="<?= $produk->idToko?>"/>
                        <div class="control-group">
                            <input type="text" name="namaProduk" class="form-control" id="name" placeholder="Nama Produk"
                                required="required" data-validation-required-message="Please enter your name" value="<?= $produk->namaProduk?>"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="file" name="gambar" class="form-control" id="emfail" placeholder="Gambar Produk"
                                required="required" data-validation-required-message="Please enter your photo"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" name="hargaProduk" class="form-control" id="name" placeholder="Harga Produk"
                                required="required" data-validation-required-message="Please enter your price"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" name="jumlahProduk" class="form-control" id="name" placeholder="Stok Produk"
                                required="required" data-validation-required-message="Please enter your stock"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" name="beratProduk" class="form-control" id="name" placeholder="Berat Produk"
                                required="required" data-validation-required-message="Please enter your weight"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="3" id="message" name="deskripsi" placeholder="Deskripsi"
                                required="required"
                                data-validation-required-message="Please enter your description"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMesrsageButton">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
