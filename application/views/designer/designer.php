<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Barang Dagang</h3>
                <hr>
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');
                                                        ?>"></div>
                <?php if ($this->session->flashdata('flash')) : ?>
                <?php endif; ?>
                <a href="<?= base_url('') ?>admin/designer/addItem" class="btn btn-primary">Tambah Barang Dagang Baru</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th width="19%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php foreach ($item as $produk) : ?>
                            <tr>
                                <td><?php echo $nomor ?></td>
                                <td><?php echo $produk['nm_itm'] ?></td>
                                <td><?php echo $produk['prc_itm'] ?></td>
                                <td>
                                    <a href="<?= base_url('') ?>admin/designer/detailItem/<?= $produk['id_itm'] ?>" class="btn btn-primary">Detail</a>
                                    <a href="<?= base_url('') ?>admin/designer/updateItem/<?= $produk['id_itm'] ?>" class="btn btn-warning">Ubah</a>
                                    <a href="<?= base_url('') ?>admin/designer/deleteItem/<?= $produk['id_itm'] ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                                </td>
                            </tr>
                            <?php $nomor++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>