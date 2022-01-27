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
        <div class="page-cart">
            <div class="table-responsive">
                <table class="cart-summary table table-bordered">
                    <thead>
                        <tr>
                            <th class="width-20">&nbsp;</th>
                            <th class="width-20 text-center">NO</th>
                            <th>Nama Barang</th>
                            <th class="width-100 text-center">Harga</th>
                            <th class="width-100 text-center">Jumlah</th>
                            <th class="width-100 text-center">Sub-Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($this->cart->contents() as $items) : ?>
                            <tr>
                                <td class="product-remove">
                                    <a title="Remove this item" class="remove" href="<?= base_url(); ?>cart/delete/<?= $items['rowid']; ?>">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                                <td><?php echo $i++; ?></td>
                                <td>
                                    <a href="product-detail-left-sidebar.html" class="product-name"><?php echo $items['name']; ?></a>
                                </td>
                                <td class="text-center">
                                    Rp. <?php echo $this->cart->format_number($items['price']); ?>
                                </td>
                                <td>
                                    <div class="product-quantity">
                                        <div class="qty">
                                            <div class="input-group">
                                                <input type="text" name="qty" value="<?= $items['qty'] ?>" data-min="1" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <?= $items['qty'] * $items['price'] ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                    <tfoot>
                        <tr class="cart-total">
                            <td rowspan="3" colspan="3"></td>
                            <td colspan="2" class="text-right">Total Barang Belanja</td>
                            <td colspan="1" class="total text-center"><?= $this->cart->total_items(); ?></td>
                        </tr>
                        <tr class="cart-total">
                            <td colspan="2" class="total text-right">Harga Total</td>
                            <td colspan="1" class="text-center">Rp. <?= $this->cart->format_number($this->cart->total()); ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="checkout-btn">
                <a href="<?= base_url() ?>checkout" class="btn btn-primary pull-right" title="Proceed to checkout">
                    <span>Proceed to checkout</span>
                    <i class="fa fa-angle-right ml-xs"></i>
                </a>
            </div>
        </div>
    </div>
</div>