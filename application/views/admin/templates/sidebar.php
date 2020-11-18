<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?= base_url('') ?>assets/img/admin/User-icon.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <?php if (isset($_SESSION['email'])) { ?>
          <p><?= ($_SESSION['nama']) ?></p>
          <a><i class="fa fa-circle text-success"></i> Online</a>
        <?php } else { ?>
          <p>Anon</p>
          <a><i class="fa fa-circle text-failed"></i> Offline</a>
        <?php } ?>
      </div>
    </div>
    <!-- search form -->

    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="">
        <a href="<?= base_url() ?>admin/home">
          <i class="fa fa-dashboard"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="">
        <a href="<?= base_url() ?>admin/trc">
          <i class="fa fa-cubes"></i>
          <span>Riwayat Transaksi</span>
        </a>
      </li>
      <li class="">
        <a href="<?= base_url() ?>admin/item">
          <i class="fa fa-exchange"></i>
          <span>Barang Dagang</span>
        </a>
      </li>
      <li class="">
        <a href="<?= base_url() ?>admin/news">
          <i class="fa fa-book"></i>
          <span>Berita</span>
        </a>
      </li> -->


      <!-- <li class="header">SETTING</li>
      <li><a href="#"><i class="fa fa-gears"></i> <span>Edit Profile</span></a></li>
    </ul> -->
  </section>
  <!-- /.sidebar -->
</aside>