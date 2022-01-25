<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <!-- <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li> -->
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?= base_url('admin') ?>" class="nav-link">Home</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
    <li class="nav-item">
      <?php if (isset($_SESSION['uname'])) { ?>
        <!-- <span class="hidden-xs">Hi, <?= ($_SESSION['uname']) ?></span> -->
        <span>
          <a class="nav-link" href="<?= base_url() ?>admin/login/auth/logout">Logout</a>
        </span>
      <?php } ?>
    </li>
  </ul>
</nav>
<!-- /.navbar -->