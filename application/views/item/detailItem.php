<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Detail Barang</h3>
                <hr>
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                <?php if ($this->session->flashdata('flash')) : ?>
                <?php endif; ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php foreach ($details as $detail) : ?>
                    <div class="col-md-5 col-sm-6">
                        <!-- <img src="<?= base_url('') ?>assets/front/images/<?= $detail['img'] ?>" width="350px" height="350px"> -->
                        <img src="<?= base_url() . 'assets/front/images/' . $detail['img'] ?>" width="350px" height="350px">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <table class="table table-striped">
                            <tr>
                                <td>Nama Barang</td>
                                <td>: <?= $detail['nm_itm'] ?></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>: <?= $detail['prc_itm'] ?></td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td>: <?= $detail['desc_itm'] ?></td>
                            </tr>
                        </table>
                    <?php endforeach; ?>
                    <a href="#" class="btn btn-default" onclick="window.history.go(-1)">Kembali</a>
                    <a href="<?= base_url('') ?>item/updateItem/<?= $detail['id_itm'] ?>" class="btn btn-warning">Edit</a>
                    </div>
            </div>
        </div>
    </div>
</div>