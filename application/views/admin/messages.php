<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Berita</h3>
                <hr>
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                <?php if ($this->session->flashdata('flash')) : ?>
                <?php endif; ?>
                <a href="<?= base_url('') ?>admin/designer/addItem" class="btn btn-primary">Tambah Berita Baru</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Berita</th>
                            <th>Menu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php foreach ($messages as $msg) : ?>
                            <tr>
                                <td><?php echo $nomor ?></td>
                                <td><?php echo $msg['txt_news'] ?></td>
                                <td>
                                    <a href="<?= base_url('') ?>admin/designer/detailItem/<?= $msg['id_news'] ?>" class="btn btn-primary">Detail</a>
                                    <a href="<?= base_url('') ?>admin/designer/updateItem/<?= $msg['id_news'] ?>" class="btn btn-warning">Ubah</a>
                                    <a href="<?= base_url('') ?>admin/designer/deleteItem/<?= $msg['id_news'] ?>" class="btn btn-danger tombol-hapus">Hapus</a>
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