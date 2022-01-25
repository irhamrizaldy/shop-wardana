<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Barang Baru</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form class="form-horizontal form-label-left" action="<?= base_url('') ?>admin/item/post" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control">
                        <small class="form-text text-danger"><?= form_error('nama_barang'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="harga_barang">Harga</label>
                        <input type="text" name="harga_barang" class="form-control">
                        <small class="form-text text-danger"><?= form_error('harga_barang'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="stok_barang">Stok</label>
                        <input type="text" name="stok_barang" class="form-control">
                        <small class="form-text text-danger"><?= form_error('stok_barang'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="gambar_barang">Gambar</label>
                        <div>
                            <input type="file" name="gambar_barang">
                            <small class="form-text text-danger"><?= form_error('gambar_barang'); ?></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-success" name="submit" value="Submit">Submit</button>
                            <a href="<?= base_url('') ?>admin/item" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>