<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Form Tambah Toko</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <form name="sentMessage"  method="post" action="<?php echo site_url('toko/validasi_save');?>" enctype="multipart/form-data">
                        <div class="control-group">
                            <input type="text" name="namaToko" class="form-control" placeholder="Nama Toko" value="<?= set_value('namaToko') ?>"/>
                            <?= form_error('namaToko', '<small class="text-danger pl-3">', '</small>'); ?>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="file" name="logo" class="form-control" placeholder="Logo"/>
                            <?= form_error('logo', '<small class="text-danger pl-3">', '</small>'); ?>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="3" name="deskripsi" placeholder="Deskripsi" value="<?= set_value('deskripsi') ?>" ></textarea>
                            <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
