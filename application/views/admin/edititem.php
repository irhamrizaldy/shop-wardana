<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Ubah Barang</h3>
                <hr>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <form class="form-horizontal form-label-left" action="<?= base_url('') ?>admin/item/updateitem" enctype="multipart/form-data" method="post">
                    <?php foreach ($item as $item) : ?>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Nama Barang
                            </label>
                            <div class="col-md-7 col-sm-6 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12" name="nama_barang" value="<?= $item['nama_barang']; ?>">
                                <small class="form-text text-danger"><?= form_error('nama_barang'); ?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Harga Barang
                            </label>
                            <div class="col-md-7 col-sm-6 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12" name="harga_barang" value="<?= $item['harga_barang']; ?>">
                                <small class="form-text text-danger"><?= form_error('harga_barang'); ?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Stok Barang
                            </label>
                            <div class="col-md-7 col-sm-6 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12" name="stok_barang" value="<?= $item['stok_barang']; ?>">
                                <small class="form-text text-danger"><?= form_error('stok_barang'); ?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Gambar
                            </label>
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <input type="file" class="form-control col-md-7 col-xs-12" name="gambar_barang">
                                <small class="form-text text-danger"><?= form_error('gambar_barang'); ?></small>
                                <p class="help-text">* Ukuran Gambar Maximal 2 Mb.</p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <hr>

                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success" name="submit" value="Submit">Submit</button>
                            <a href="<?= base_url('') ?>/admin/item" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>