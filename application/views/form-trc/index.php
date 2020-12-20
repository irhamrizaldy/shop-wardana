<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Transaksi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="assets/form-template/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/form-template/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/form-template/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/form-template/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/form-template/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/form-template/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/form-template/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/form-template/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="contact1">
        <div class="container-contact1">
            <div class="contact1-pic js-tilt" data-tilt>
                <img src="assets/form-template/images/img-01.png" alt="IMG">
            </div>

            <form class="contact1-form validate-form" action="<?= base_url('') ?>form/addtrc" enctype="multipart/form-data" method="post">
                <span class="contact1-form-title">
                    Form Transaksi
                </span>
                <div class="wrap-input1 validate-input">
                    <input class="input1" type="text" name="nama" placeholder="Nama">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input">
                    <input class="input1" type="text" name="kontak" placeholder="Telepon">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input">
                    <input class="input1" type="text" name="alamat" placeholder="Alamat">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input">
                    <textarea class="input1" name="pesanan" placeholder="Pesanan"></textarea>
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input">
                    <input type="file" class="form-control" name="img">
                    <span class="shadow-input1"></span>
                </div>

                <div class="container-contact1-form-btn">
                    <button class="contact1-form-btn" name="submit" value="Submit">
                        <span>
                            Kirim
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="assets/form-template/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/form-template/vendor/bootstrap/js/popper.js"></script>
    <script src="assets/form-template/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/form-template/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/form-template/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

    <!--===============================================================================================-->
    <script src="assets/form-template/js/main.js"></script>

</body>

</html>