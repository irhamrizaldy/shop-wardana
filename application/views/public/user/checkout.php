<!-- Main Content -->
<div id="content" class="site-content">
    <!-- Breadcrumb -->
    <div id="breadcrumb">
        <div class="container">
            <h2 class="title">Shopping Cart</h2>

            <ul class="breadcrumb">
                <li><a href="#" title="Home">Home</a></li>
                <li><span>Shopping Cart</span></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="page-checkout">
            <div class="row">
                <div class="checkout-left col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <?php if (isset($_SESSION['username'])) { ?>
                        <p>Hai <b><?= ($_SESSION['nama_pembeli']) ?></b>, lanjutkan pembayaran anda</p>
                    <?php } else { ?>
                        <p>Returning customer? <a class="login" href="user-login.html">Click here to login</a>.</p>
                    <?php } ?>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form action="<?= base_url() ?>checkout/checkout" id="formshipping" method="post" class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label>First Name</label>
                                            <input type="text" value="<?= ($_SESSION['fname']) ?>" class="form-control" disabled>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Last Name</label>
                                            <input type="text" value="<?= ($_SESSION['lname']) ?>" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Address </label>
                                            <input type="text" name="alamat" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <input type="submit" value="Place Order" name="proceed" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checkout-right col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <h4 class="title">Cart Total</h4>
                    <table class="table cart-total">
                        <tbody>
                            <tr class="shipping">
                                <th>
                                    Shipping
                                </th>
                                <td>
                                    Free Shipping<input type="hidden" value="free_shipping" class="shipping-method" name="shipping_method">
                                </td>
                            </tr>
                            <tr class="cart-subtotal">
                                <th>
                                    <strong>Total Barang Belanja</strong>
                                </th>
                                <td>
                                    <strong><span class="amount"><?= $this->cart->total_items(); ?></span></strong>
                                </td>
                            </tr>
                            <tr class="total">
                                <th>
                                    <strong>Harga Total</strong>
                                </th>
                                <td>
                                    <strong><span class="amount">Rp. <?= $this->cart->format_number($this->cart->total()); ?></span></strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>