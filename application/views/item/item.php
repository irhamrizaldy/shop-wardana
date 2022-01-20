<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="<?= base_url('') ?>admin/item/addItem" class="btn btn-primary">Tambah Barang</a>
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                <?php if ($this->session->flashdata('flash')) : ?>
                <?php endif; ?>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php foreach ($item as $barang) : ?>
                            <tr>
                                <td><?php echo $nomor ?>.</td>
                                <td><?php echo $barang['nama_barang'] ?></td>
                                <td>Rp. <?php echo $barang['harga_barang'] ?></td>
                                <td><?php echo $barang['stok_barang'] ?></td>
                                <td>
                                    <a href="<?= base_url('') ?>admin/item/detailItem/<?= $barang['id'] ?>" class="btn btn-primary">Detail</a>
                                    <!-- <a href="<?= base_url('') ?>admin/item/updateItem/<?= $barang['id'] ?>" class="btn btn-warning tombol-update">Ubah</a> -->
                                    <a href="<?= base_url('') ?>admin/item/deleteItem/<?= $barang['id'] ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                                </td>
                            </tr>
                            <?php $nomor++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>