<div class="site-blocks-cover overlay inner-page" style="background-image: url(assets/front/images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-10">
            <!-- <span class="sub-text">Desainer Kami</span> -->
            <h1>Designer</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <?php var_dump($designer); ?> -->

<div class="site-section">
  
    <div class="container">
      <div class="row">
      <?php foreach ($designer as $designer) : ?>
        <div class="col-lg-4 col-md-6 mb-4 project-entry">
          <a href="#" class="d-block figure">
          <img src="<?= base_url() . 'assets/front/images/' . $designer['foto'] ?>" alt="Image" class="img-fluid" width="100px" height="250px">
          </a>
          <div class="social">
						<a href="#"><span class="icon-facebook"></span></a>
						<a href="#"><span class="icon-twitter"></span></a>
						<a href="#"><span class="icon-instagram"></span></a>
					</div>
          <h3 class="mb-0"><?php echo $designer['nama']; ?></a></h3>
          <span class="text-muted"><?php echo $designer['deskripsi']; ?></span>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  
</div>