<!-- Main Content -->
<div id="content" class="site-content">
  <div class="block-header">
    <!-- Cart -->
    <?php if (isset($_SESSION['username'])) { ?>
      <div class="block-cart dropdown">
        <div class="cart-title">
          <i class="fa fa-shopping-basket" aria-hidden="true"></i>
          <!-- <span class="cart-count">2</span> -->
        </div>

        <div class="dropdown-content">
          <div class="cart-content">
            <table>
              <tbody>
                <?php foreach ($this->cart->contents() as $items) : ?>
                  <tr>
                    <td class="product-image">
                      <a href="product-detail-left-sidebar.html">
                        <img src="assets/front/img/product/7.jpg" alt="Product">
                      </a>
                    </td>
                    <td>
                      <div class="product-name">
                        <a href="product-detail-left-sidebar.html"><?php echo $items['name']; ?></a>
                      </div>
                      <div>
                        <?= $items['qty'] ?> x <span class="product-price"><?= $items['price']; ?></span>
                      </div>
                    </td>
                    <td class="action">
                      <a class="remove" href="<?= base_url(); ?>cart/delete/<?= $items['rowid']; ?>">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </a>
                    </td>
                  </tr>
                <?php endforeach; ?>
                <tr>
                  <td colspan="3">
                    <div class="cart-button">
                      <a class="btn btn-primary" href="<?= base_url() ?>cart" title="View Cart">View Cart</a>
                      <a class="btn btn-primary" href="<?= base_url() ?>checkout" title="Checkout">Checkout</a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    <?php } else { ?>
    <?php } ?>

    <!-- My Account -->
    <div class="my-account dropdown toggle-icon">
      <div class="dropdown-toggle" data-toggle="dropdown">
        <i class="zmdi zmdi-menu"></i>
      </div>
      <div class="dropdown-menu">
        <!-- <div class="item">
          <a href="#" title="Log in to your customer account"><i class="fa fa-cog"></i>My Account</a>
        </div> -->
        <?php if (isset($_SESSION['username'])) { ?>
          <div class="item">
            <a><i class="fa fa-user"></i>Selamat datang, <b><?= ($_SESSION['nama_pembeli']) ?></b></a>
          </div>
          <div class="item">
            <a href="<?= base_url() ?>login/logout" title="Logout"><i class="fa fa-sign-out"></i>Logout</a>
          </div>
        <?php } else { ?>
          <div class="item">
            <a href="<?= base_url() ?>login" title="Log in to your customer account"><i class="fa fa-sign-in"></i>Login</a>
          </div>
          <div class="item">
            <a href="<?= base_url() ?>register" title="Register Account"><i class="fa fa-user"></i>Register</a>
          </div>
        <?php } ?>
        <!-- <div class="item">
          <a href="#" title="My Wishlists"><i class="fa fa-heart"></i>My Wishlists</a>
        </div> -->
        <!-- <div class="item">
          <div class="language switcher">
            <a href="#" title="Language English" class="active"><img src="assets/front/img/language-en.jpg" alt="Language English"></a>
            <a href="#" title="Language French"><img src="assets/front/img/language-fr.jpg" alt="Language French"></a>
            <a href="#" title="Language Deutsch"><img src="assets/front/img/language-de.jpg" alt="Language Deutsch"></a>
          </div>

          <div class="currency switcher">
            <a href="#" title="USD" class="active">USD</a>
            <a href="#" title="EUR">EUR</a>
            <a href="#" title="GBP">GBP</a>
          </div>
        </div> -->
      </div>
    </div>
  </div>

  <!-- Slideshow -->
  <div class="section slideshow">
    <div class="tiva-slideshow-wrapper">
      <div id="tiva-slideshow" class="nivoSlider">
        <a href="#">
          <img class="img-responsive" src="assets/front/img/slideshow/home5-slideshow-1.jpg" alt="Slideshow Image">
        </a>
        <a href="#">
          <img class="img-responsive" src="assets/front/img/slideshow/home5-slideshow-2.jpg" alt="Slideshow Image">
        </a>
        <a href="#">
          <img class="img-responsive" src="assets/front/img/slideshow/home5-slideshow-3.jpg" alt="Slideshow Image">
        </a>
      </div>
    </div>
  </div>


  <!-- Product - Our Products -->
  <div class="section products-block product-tab tab-2">
    <div class="block-title">
      <div class="sub-title">Fresh From Our Farm</div>
      <h2 class="title">Our <span>Products</span></h2>
    </div>

    <div class="block-content">
      <div class="container">
        <!-- Tab Navigation -->
        <div class="tab-nav">
          <ul>
            <li class="active">
              <a data-toggle="tab" href="#all-products">
                <img src="assets/front/img/product/product-category-0.png" alt="All Product">
                <span>All Products</span>
              </a>
            </li>
            <li>
              <a data-toggle="tab" href="#vegetables">
                <img src="assets/front/img/product/product-category-1.png" alt="Vegetables">
                <span>Vegetables</span>
              </a>
            </li>
            <li>
              <a data-toggle="tab" href="#fruits">
                <img src="assets/front/img/product/product-category-2.png" alt="Fruits">
                <span>Fruits</span>
              </a>
            </li>
            <li>
              <a data-toggle="tab" href="#bread">
                <img src="assets/front/img/product/product-category-3.png" alt="Bread">
                <span>Bread</span>
              </a>
            </li>
            <li>
              <a data-toggle="tab" href="#juices">
                <img src="assets/front/img/product/product-category-4.png" alt="Juices">
                <span>Juices</span>
              </a>
            </li>
            <li>
              <a data-toggle="tab" href="#tea">
                <img src="assets/front/img/product/product-category-5.png" alt="Tea">
                <span>Tea</span>
              </a>
            </li>
          </ul>
        </div>

        <!-- Tab Content -->
        <div class="tab-content">
          <!-- All Products -->
          <div role="tabpanel" class="tab-pane fade in active" id="all-products">
            <div class="products owl-theme owl-carousel">
              <?php foreach ($item as $barang) : ?>
                <div class="product-group">
                  <div class="product-item">
                    <div class="product-image">
                      <a href="product-detail-left-sidebar.html">
                        <img class="img-circle" height="150px" src="<?= base_url() . 'assets/front/upload/' . $barang['gambar_barang'] ?>" alt="Product Image">
                      </a>
                    </div>
                    <br />
                    <div class="product-title">
                      <a href="product-detail-left-sidebar.html">
                        <!-- Organic Strawberry Fruits -->
                        <?php echo $barang['nama_barang'] ?>
                      </a>
                    </div>

                    <div class="product-rating">
                      <div class="star on"></div>
                      <div class="star on"></div>
                      <div class="star on "></div>
                      <div class="star on"></div>
                      <div class="star"></div>
                    </div>

                    <div class="product-price">
                      <span class="sale-price">Rp. <?php echo $barang['harga_barang'] ?></span>
                      <!-- <span class="base-price">$90.00</span> -->
                    </div>

                    <div class="product-buttons">
                      <a class="add-to-cart" href="<?= base_url(); ?>cart/add/<?= $barang['id']; ?>">
                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                      </a>

                      <a class="add-wishlist" href="#">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                      </a>

                      <a class="quickview" href="#">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>