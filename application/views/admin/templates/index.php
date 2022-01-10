<?php $this->load->view('admin/templates/head'); ?>

<!DOCTYPE html>
<html>

<?php $this->load->view('admin/templates/head'); ?>

<body class="hold-transition skin-red sidebar-mini">
  <div class="wrapper">

    <?php $this->load->view('admin/templates/header'); ?>

    <!-- Left side column. contains the logo and sidebar -->

    <?php $this->load->view('admin/templates/sidebar'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"><?= $judul ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>admin">Home</a></li>
                <li class="breadcrumb-item active"><?= $judul ?></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Content Header (Page header) -->
      <!-- <section class="content-header">
        <h1>
          <?php echo $judul ?> -->
      <!-- <small>Control panel</small> -->
      <!-- </h1>

      </section> -->

      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <?php $this->load->view($content); ?>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php $this->load->view('admin/templates/footer');  ?>


</body>

</html>