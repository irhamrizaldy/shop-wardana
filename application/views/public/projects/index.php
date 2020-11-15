    <div class="site-blocks-cover overlay inner-page" style="background-image: url(assets/front/images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-10">
            <span class="sub-text">Our Awesome</span>
            <h1>Projects</h1>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>

<!-- <div class="load-more-container"> -->
<div class="site-section"> 
  <div class="container">
    <div class="row">
    
    <!-- <input type="checkbox" id="load-more"/> -->
      <?php foreach ($produk as $produk) : ?>
        <div class="col-lg-4 col-md-6 mb-4 project-entry">
          <a href="#" class="d-block figure">
            <img src="<?= base_url() . 'assets/front/images/tab1/' . $produk['gambar'] ?>" alt="Image" class="img-fluid" width="1600px" height="1200px">
          </a>
          <h3 class="mb-0"><?php echo $produk['nama_desain']; ?></a></h3>
          <span class="text-muted"><?php echo $produk['deskripsi']; ?></span>
        </div>
      <?php endforeach; ?>
      <!-- <label class="load-more-btn" for="load-more">
        <span class="unloaded">LOAD MORE</span>
        <span class="loaded">VIEW LESS</span>
      </label> -->
    </div>
    </div>
  </div>
</div>


    <!-- <span id="dots">...</span><span id="more">
            </span></p>
            <button onclick="myFunction()" id="myBtn">Read more</button> -->