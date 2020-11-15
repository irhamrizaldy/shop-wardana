<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Ubah Data Designer</h3>
                <hr>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <form class="form-horizontal form-label-left" action="<?= base_url('') ?>designer/updateitem" enctype="multipart/form-data" method="post">

                    <!-- <div class="form-group">
						<label class="col-md-7 col-sm-6 col-xs-12">
							<?php if (validation_errors()) : ?>
								<div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>
							<?php endif; ?>
						</label>

					</div> -->
                    <?php foreach ($item as $item) : ?>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Nama Designer
                            </label>
                            <div class="col-md-7 col-sm-6 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12" name="nama" value="<?= $item['nama']; ?>">
                                <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Foto
                            </label>
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <input type="file" class="form-control col-md-7 col-xs-12" name="foto">
                                <small class="form-text text-danger"><?= form_error('foto'); ?></small>
                                <p class="help-text">* Ukuran Gambar Maximal 2 Mb.</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Deskripsi</label>
                            <div class="col-md-9 col-sm-6">
                                <textarea class="form-control" rows="4" name="deskripsi"><?= $item['deskripsi']; ?></textarea>
                                <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <hr>

                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <!-- <a href="<?= base_url('') ?>/admin/item/updateitem/<?= $item['id_item']; ?>" class="btn btn-success">Submit</a> -->
                            <button type="submit" class="btn btn-success" name="submit" value="Submit">Submit</button>
                            <a href="<?= base_url('') ?>/designer/designer" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>