<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" type="image/x-icon" href="<?= base_url() ?>/assets/front/images/favicon.ico" />
  <title><?= $judul; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <style>
  #more {display: none;}
  </style>

  <script>
  function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }
  </script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="assets/front/css/load-more.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900">
  <link rel="stylesheet" href="assets/front/fonts/icomoon/style.css">

  <link rel="stylesheet" href="assets/front/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/front/css/jquery-ui.css">
  <link rel="stylesheet" href="assets/front/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/front/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/front/css/bootstrap-datepicker.css">


  <link rel="stylesheet" href="assets/front/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="assets/front/css/aos.css">

  <link rel="stylesheet" href="assets/front/css/style.css">

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="site-navbar-wrap">
      <div class="site-navbar-top">
        <div class="container py-3">
          <div class="row align-items-center">
            <div class="col-6">
              <div class="d-flex ml-auto">
                <a href="#" class="d-flex align-items-center">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="site-navbar">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-2">
              <h1 class="mb-0 site-logo"><a href="<?= base_url(); ?>home">Ruang Respons</a></h1>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li><a href="<?= base_url(); ?>home">Home</a></li>
                    <li><a href="<?= base_url(); ?>projects">Projects</a></li>
                    <li><a href="<?= base_url(); ?>designer">Designer</a></li>
                    <li><a href="<?= base_url(); ?>about">About Us</a></li>
                    <li><a href="<?= base_url(); ?>contact">Contact Us</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
</head>