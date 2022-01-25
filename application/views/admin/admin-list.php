<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="<?= base_url() ?>admin/login/auth/registration" class="btn btn-primary">Tambah Admin</a>
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
                            <th>Password</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php foreach ($admin as $admins) : ?>
                            <tr>
                                <td><?php echo $nomor ?>.</td>
                                <td><?php echo $admins['uname'] ?></td>
                                <td><?php echo $admins['password'] ?></td>
                                <td><?php echo ($admins['is_active'] == 1) ? 'Aktif' : 'Nonaktif' ?></td>
                                <td>
                                    <a href="<?= base_url('') ?>admin/admin/deleteAdmin/<?= $admins['id'] ?>" class="btn btn-danger tombol-hapus">Hapus</a>
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