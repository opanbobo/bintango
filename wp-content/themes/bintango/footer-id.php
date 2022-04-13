<?php wp_footer();?>
    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <img src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="BintanGo" class="img-fluid mb-3">
            <h4>All-in-One CreatorSpace</h4>
            <p>Download aplikasi untuk memulai karir anda sebagai Kreator. Berkolaborasi dengan Brands dan kembangkan Fans anda.</p>
            <div class="row mb-4">
              <div class="col-6">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/icon-ps.png" alt="" class="img-fluid"></a>
              </div>
              <div class="col-6">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/icon-as.png" alt="" class="img-fluid"></a>
              </div>
            </div>
          </div>
          <div class="col-md-8 offset-md-1">
            <div class="row">
              <div class="col-md-3 col-6">
                <h4 class="mb-2 mb-md-4">Informasi</h4>
                <ul class="nav flex-column">
                  <!-- <li class="nav-item"><a class="nav-link" href="<?php echo get_page_link( get_page_by_title( 'Tentang Kami' ) ); ?>">Tentang Kami</a></li> -->
                  <li class="nav-item"><a class="nav-link" href="https://fan.bintango.com/condition">Syarat & Ketentuan</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://fan.bintango.com/privacy">Kebijakan Privasi</a></li>
                </ul>
              </div>
              <div class="col-md-3 col-6">
                <h4 class="mb-2 mb-md-4">BintanGO</h4>
                <ul class="nav flex-column">
                  <li class="nav-item"><a class="nav-link" href="<?php echo get_page_link( get_page_by_title( 'untuk kreator' ) ); ?>">Untuk Kreator</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo get_page_link( get_page_by_title( 'untuk bisnis' ) ); ?>">Untuk Bisnis</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo get_page_link( get_page_by_title( 'untuk pengemar' ) ); ?>">Untuk Penggemar</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://www.techinasia.com/companies/bintango">Karir</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://blog.bintango.com/page/">Blogs</a></li>
                </ul>
              </div>
              <div class="col-md-6">
                <h4 class="mb-2 mb-md-4 mt-4 mt-md-0">PT Stargo Digital Indonesia</h4>
                <ul class="address-list">
                <?php
                $address = get_field('address_column', 67);  ?>
                  <li><?php echo $address['email']; ?></li>
                  <li><?php echo $address['phone']; ?></li>
                  <li><?php echo $address['location']; ?></li>  
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-12 footer-bottom">
            <ul class="list-inline">
              <li class="list-inline-item">
                  <a href="https://www.instagram.com/bintango.id/"><img src="<?php bloginfo('template_url'); ?>/images/icon-instagram.svg" alt="instagram"></a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/BintanGO-103117912016613"><img src="<?php bloginfo('template_url'); ?>/images/icon-facebook.svg" alt="instagram"></a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.linkedin.com/company/bintango/mycompany/"><img src="<?php bloginfo('template_url'); ?>/images/icon-linkedin-in.svg" alt="instagram"></a>
                </li>
                <li class="list-inline-item">
                  <a href="https://wa.me/+6281280777870"><img src="<?php bloginfo('template_url'); ?>/images/icon-whatsapp.svg" alt="instagram"></a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.youtube.com/channel/UC1mXYoi8BWp5gU2lAmEjDDQ/featured"><img src="<?php bloginfo('template_url'); ?>/images/icon-youtube.svg" alt="instagram"></a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.tiktok.com/@bintango.id?lang=en"><img src="<?php bloginfo('template_url'); ?>/images/icon-tiktok.svg" alt="instagram"></a>
                </li>
            </ul>
            <p>&copy; Copyright 2021 - PT Stargo Digital Indonesia</p>
          </div>
        </div>
      </div>
    </footer>

    
    <script src="<?php bloginfo('template_url'); ?>/scripts/vendor.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/scripts/main.js"></script>
  </body>
</html>