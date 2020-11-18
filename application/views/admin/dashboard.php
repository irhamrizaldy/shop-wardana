<!-- <?php var_dump($pelanggan); ?> -->
<?php
if ($data_trc) {
    foreach ($data_trc as $total) {
?>
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-orange">
                    <div class="inner">

                        <h3><?php echo $total->total ?></h3>

                        <p>Riwayat Transaksi</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="<?= base_url() ?>admin/item" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
    <?php
    }
}
    ?>

    <?php
    if ($data_item) {
        foreach ($data_item as $total) {
    ?>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?php echo $total->total ?></h3>
                        <p>Daftar Barang Dagangan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="<?= base_url() ?>admin/designer" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
    <?php
        }
    }
    ?>
    <?php
    if ($news) {
        foreach ($news as $total) {
    ?>
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-orange">
                        <div class="inner">

                            <h3><?php echo $total->total ?></h3>

                            <p>Berita</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="<?= base_url() ?>admin/messages" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
        <?php
        }
    }
        ?>