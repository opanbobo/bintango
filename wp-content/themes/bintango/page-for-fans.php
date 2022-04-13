<?php get_header();?>
<?php
/*
Template Name: for fans Page
*/
?>
    
    <div class="bg-assets bg-assets--wrapper">
      <div class="bg-assets bg-assets--one">
        <img src="<?php bloginfo('template_url'); ?>/images/blurred.png">
      </div>
      <div class="bg-assets bg-assets--two">
        <img src="<?php bloginfo('template_url'); ?>/images/blurred.png">
      </div>
      <div class="bg-assets bg-assets--three">
        <img src="<?php bloginfo('template_url'); ?>/images/blurred.png">
      </div>
    </div>

    <section class="fansbanner">
      <div class="container">
        <div class="row">
        <?php
        $topSectionFans = get_field('top_section');  ?>
          <div class="col-md-7 text-white text-center mx-auto">
            <h1><?php echo $topSectionFans['title']; ?></h1>
            <p><?php echo $topSectionFans['subtitle']; ?></p>            
            <a class="btn btn__light btn--large text--tiger text-uppercase mt-5" href="https://fan.bintango.com/" target="_new">Explore Marketplace</a>
          </div>          
        </div>
      </div>
    </section>

    <section class="videoshoutout videoshoutout--right">
      <div class="wrapper"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-3 align-self-center">
            <?php
            $vss1 = get_field('video_shoutout_section');  ?>
            <h3 class="title"><?php echo $vss1['title']; ?></h3>
            <p><?php echo $vss1['desc']; ?></p>  
          </div>  
          <div class="col-md-8 offset-md-1">
            <div class="row">
              <?php 
              $tai = get_field('img_video_shoutout_1');
              if( $tai ) {
                foreach( $tai as $taix ) { 
              ?> 
              <div class="col-12 text-center">
                <img src="<?php echo esc_url( $taix['img']['url'] ); ?>" alt="" class="img-fluid">
              </div>
              <?php 
              } 
            }
          ?>
              <!-- <div class="col-4 text-center">
                <img src="images/mockup.png" alt="" class="img-fluid">
              </div>
              <div class="col-4 text-center">
                <img src="images/mockup.png" alt="" class="img-fluid">
              </div> -->
            </div>
          </div>   
        </div>
      </div>
    </section>

    <section class="videofeatured">
      <div class="container">
        <div class="col-md-10 mx-auto text-center mb-5">
          <h1>Featured Moment 💖</h1>
          <!-- <video controls width="100%" poster="images/cover.jpg">
            <source src="<?php bloginfo('template_url'); ?>/images/video/landscape.mp4" type="video/mp4">          
            Sorry, your browser doesn't support embedded videos.
          </video>   -->
          <?php
        $fVideo = get_field('featured_video');  ?>
          <div class="embed-responsive embed-responsive-16by9 yuotube-rounded">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $fVideo['video']; ?>"></iframe>
          </div>  
        </div>
        <div class="col-md-12 mb-5">
          <div class="row">
          <?php 
          $fVideoColumn = get_field('featured_video_column');
          if( $fVideoColumn ) {
            foreach( $fVideoColumn as $fVideoColumns ) { 
            ?> 
            <div class="col-md-3 col-6">
              <h6 class="text-center"><?php echo $fVideoColumns['title']; ?></h6>
              <div class="embed-responsive embed-responsive-16by9 yuotube-rounded h-100">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $fVideoColumns['video']; ?>"></iframe>
              </div>  
            </div>
            <?php 
              } 
            }
          ?>
          </div>
        </div>
      </div>
    </section>

    <section class="videoshoutout videoshoutout--left mt-5">
      <div class="wrapper"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-3 align-self-center text-white">
          <?php
          $vss2 = get_field('video_shoutout_section_2');  ?>
            <h3 class="title"><?php echo $vss2['title']; ?></h3>
            <p><?php echo $vss2['desc']; ?></p>  
          </div>  
          <div class="col-md-8 offset-md-1">
            <div class="row">
            <?php 
          $ivs2 = get_field('img_video_shoutout_2');
          if( $ivs2 ) {
            foreach( $ivs2 as $ivs2x ) { 
            ?> 
              <div class="col-12 text-center">
                <img src="<?php echo esc_url( $ivs2x['img']['url'] ); ?>" alt="" class="img-fluid">
              </div>
              <?php 
              } 
            }
          ?>
            </div>
          </div>       
        </div>
      </div>
    </section>

    <section class="testimonial2">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mt-5">
            <h1 class="text-center">Why they 💖 1-on-1 Video Call </h1>
            <div class="slider-testi2">
            <?php 
          $sForFans = get_field('for_fans_sliders');
          if( $sForFans ) {
            foreach( $sForFans as $sForFansx ) { 
            ?> 
              <div class="slider-item">
                <div class="card">
                  <div class="card-body">
                    <img src="<?php echo esc_url( $sForFansx['img']['url'] ); ?>" alt="" class="img-fluid">
                    <div class="testi-detail">
                      <h4 class="title"><?php echo $sForFansx['nama']; ?></h4>
                      <h5><?php echo $sForFansx['job']; ?></h5>
                      <p><?php echo $sForFansx['desc']; ?></p>
                    </div>
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
      </div>
    </section>

    <section class="videoshoutout videoshoutout--center">
      <div class="wrapper"></div>
      <div class="container">
        <div class="row">       
        <?php
        $efs = get_field('end_fans_section');  ?>    
          <div class="col-md-4 offset-md-1 align-self-center text-center text-md-left order-md-2">
            <h1 class="mt-5"><?php echo $efs['title']; ?></h1>
            <a href="https://bintango.com/" class="btn btn__tiger mb-5" target="_new">Explore Marketplace</a>
          </div>    
          <div class="col-md-5 offset-md-1 order-md-1">
            <img src="<?php echo esc_url( $efs['img']['url'] ); ?>" alt="" class="img-fluid mobile">
          </div>    
        </div>
      </div>
    </section>

    <section class="faq">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="mb-3">Frequently asked questions</h1>
            <ul>
            <?php 
            $faq = get_field('faq_group', 615);
            if( $faq ) {
            foreach( $faq as $faqs ) { 
            ?> 
              <li>
                <p><strong><?php echo $faqs['ask']; ?></strong></p>
                <p><?php echo $faqs['question']; ?></p>
              </li>
              <?php 
                } 
              }
            ?>
            </ul>
          </div>
        </div>
      </div>
    </section>

 <?php get_footer();?> 
