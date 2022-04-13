<?php get_header('id');?>
<?php
/*
Template Name: Home Page Indonesia
*/
?>
    <?php
    $intro = get_field('home_group');  ?>
    <div class="section section--home">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 mx-auto text-center">
            <h1><?php echo $intro['headline']; ?></h1>
            <a href="#BuiltForCreator" class="btn btn__medium btn--light text--tiger mt-5 mb-2">Temukan Sekarang</a>
          </div>
          <div class="col-md-12 px-0">
            <img src="<?php bloginfo('template_url'); ?>/images/banner.jpg" alt="" class="img-fluid mx-auto w-100">
          </div>
        </div>
      </div>
    </div>

    <section id="BuiltForCreator" class="forcreator">
      <div class="container">
        <div class="row">
          <div class="col-md-7 text-white">
            <h1 class="title">Dibuat untuk Kreator</h1>
            <h3 class="subtitle">Ubah passion mu Menjadi Pendapatan  </h3>
            <p>All‑in‑One CreatorSpace untuk #GrowBeyond sebagai Content Creator dengan berbagai fitur yang pastinya memberikan banyak keuntungan buat kamu.</p>
          </div>          
        </div>
      </div>
      <div class="container">
        <div class="col-md-12 px-0">
          <div class="row">
            <div class="col-12 slides">
              <?php 
              $rows = get_field('home_sliders_creators');
              if( $rows ) {
                foreach( $rows as $row ) { 
                ?>
                <div class="col-md-4 slides-item">
                  <div class="card">
                    <div class="card-body text-center text-md-left">
                      <div class="emoji">
                        <img src="<?php echo esc_url( $row['home_creators_img']['url'] ); ?>" alt="">
                      </div>
                      <h6 class="title"><strong><?php echo $row['home_creators_title']; ?></strong></h6>
                      <p><?php echo $row['home_creators_desc']; ?></p>
                    </div>
                  </div>
                </div>
                <?php 
                  } 
                }
              ?>
            </div>
          </div>
        </div>
        <div class="col-12 text-center mt-5">
          <a href="<?php echo get_page_link( get_page_by_title( 'for creators' ) ); ?>" class="btn btn--large btn__tiger">bergabung dengan komunitas</a>
        </div>
      </div>
    </section>

    <section class="forfans">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <img src="<?php bloginfo('template_url'); ?>/images/phone.png" alt="" class="img-fluid img-tab1">
            <img src="<?php bloginfo('template_url'); ?>/images/phone-2.png" alt="" class="img-fluid img-tab2 d-none">
          </div>   
          <?php
            $bff = get_field('home_built_for_fans');  
          ?>
          <div class="col-md-7 align-self-center">
            <h1 class="title"><?php echo $bff['title']; ?></h1>
            <h3 class="subtitle"><?php echo $bff['subtitle']; ?></h3>
            <p><?php echo $bff['shortdesc']; ?></p>
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                  <span>Video Shoutout</span>
                </a>
                <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                  <span>1-on-1 Video Call</span>
                </a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <p><?php echo $bff['video_shoutout']; ?></p>
              </div>
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <p><?php echo $bff['video_call']; ?></p>
              </div>
            </div>

            <a href="https://fan.bintango.com/" class="btn btn--large btn__tiger" target="_new">JELAJAHI MARKETPLACE/PASAR</a>

          </div>       
        </div>
      </div>
    </section>

    <section class="forbusiness">
      <div class="wrapper"></div>
      <div class="container">
        <div class="row">
        <?php
          $bfb = get_field('home_built_for_business');  
        ?>
          <div class="col-md-7 text-white mb-5">
            <h1 class="title"><?php echo $bfb['title']; ?></h1>
            <h3 class="subtitle"><?php echo $bfb['subtitle']; ?></h3>
            <p><?php echo $bfb['shortdesc']; ?></p>
          </div> 
          <div class="col-md-12">
            <div class="slider-business">
            <?php 
          $bfbSliders = get_field('home_bfb_sliders');
          if( $bfbSliders ) {
            foreach( $bfbSliders as $isibfb ) { 
            ?> 
              <div class="slider-item">
                <div class="col-md-5">
                  <img src="<?php echo esc_url( $isibfb['img']['url'] ); ?>" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 offset-md-1 align-self-center mt-3">
                  <h4 class="title"><?php echo $isibfb['title']; ?></h4>
                  <p class="text-white"><?php echo $isibfb['shortdesc']; ?></p>
                </div>
              </div>
          <?php 
              } 
            }
          ?>
            </div>
          </div>
          <div class="col-12 text-center">
            <a href="<?php echo get_page_link( get_page_by_title( 'for business' ) ); ?>" class="btn btn--large btn__tiger">BERKOLABORASI DENGAN KAMI</a>
          </div>
        </div>
      </div>
    </section>

    

<?php get_footer('id');?>