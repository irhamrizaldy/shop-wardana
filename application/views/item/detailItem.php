<div class="row">
    <?php foreach ($details as $detail) : ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>
        <div class="col-12 col-sm-6">
            <div class="col-12">
                <img src="<?= base_url() . 'assets/front/images/' . $detail['gambar_barang'] ?>" width="500px" height="400px">
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <h3 class="my-3"><?= $detail['nama_barang'] ?></h3>
            <hr>
            <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                    Rp. <?= $detail['harga_barang'] ?>
                </h2>
                <h4 class="mt-0">
                    <small>Stok: <?= $detail['stok_barang'] ?> </small>
                </h4>
            </div>
        <?php endforeach; ?>
        </div>
</div>