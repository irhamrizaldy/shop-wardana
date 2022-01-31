<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
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
                            <th>Username</th>
                            <th>Nama Lengkap</th>
                            <th>Total Transaksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php foreach ($cust as $custs) : ?>
                            <tr>
                                <td><?php echo $nomor ?>.</td>
                                <td><?php echo $custs['username'] ?></td>
                                <td><?php echo $custs['fname'] ?> <?php echo $custs['lname'] ?></td>
                                <td><?php echo $custs['total_order'] ?></td>
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