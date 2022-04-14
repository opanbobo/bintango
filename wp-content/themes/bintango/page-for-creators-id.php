<?php get_header('id');?>
<?php
/*
Template Name: for creators Page Indonesia
*/
?>
    <div class="bg-assets bg-assets--wrapper">
      <div class="bg-assets bg-assets--four">
        <img src="<?php bloginfo('template_url'); ?>/images/ellipse.png">
      </div>
      <div class="bg-assets bg-assets--five">
        <img src="<?php bloginfo('template_url'); ?>/images/ellipse.png">
      </div>
      <div class="bg-assets bg-assets--three">
        <img src="<?php bloginfo('template_url'); ?>/images/ellipse.png">
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row">
        <?php
        $welcomeFC = get_field('welcome_section');  ?>
          <div class="col-md-6">
            <h1><?php echo $welcomeFC['title']; ?></h1>
            <h3 class="subtitle"><?php echo $welcomeFC['shortdesc']; ?></h3>
            <div class="row">
              <div class="col-md-4 text-center">
                <img src="<?php echo esc_url( $welcomeFC['qrcode']['url'] ); ?>" alt="" class="img-fluid mx-auto">
              </div>
              <div class="col-md-7 align-self-center px-md-0">
                <a class="btn btn__tiger btn-block text-uppercase" href="<?php echo $welcomeFC['url']; ?>">Dapatkan Aplikasinya Sekarang</a>
              </div>
            </div>
          </div> 
          <div class="col-md-6 align-self-center mt-5 mt-md-0">
            <!-- <video controls width="100%" poster="images/cover.jpg">
              <source src="<?php bloginfo('template_url'); ?>/images/video/landscape.mp4" type="video/mp4">          
              Sorry, your browser doesn't support embedded videos.
            </video>             -->

            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9 yuotube-rounded">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $welcomeFC['youtube']; ?>"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="testimonial">
      <div class="container">
        <div class="row">
        <?php
        $BeforeSliders = get_field('before_sliders');  ?>
          <div class="col-md-12 text-white text-center">
            <h1 class="title"><?php echo $BeforeSliders['title']; ?></h1>
            <p><?php echo $BeforeSliders['desc']; ?></p>
          </div>          
        </div>
      </div>
      <div class="container-fluid px-0">
        <div class="col-md-12 px-0">
          <div class="slider-testimonial">
          <?php 
          $sCreators = get_field('sliders_creators');
          if( $sCreators ) {
            foreach( $sCreators as $sCreatorsS ) { 
            ?> 
            <div class="slider-item">
              <div class="card">
                <div class="card-body">
                  <img src="<?php echo esc_url( $sCreatorsS['img']['url'] ); ?>" alt="">
                  <h5 class="title"><?php echo $sCreatorsS['nama']; ?></h5>
                  <h6><?php echo $sCreatorsS['job']; ?></h6>
                  <p><?php echo $sCreatorsS['shortdesc']; ?></p>
                </div>
              </div>
            </div>
            <?php 
              } 
            }
          ?>
          </div>
        </div>
        <div class="col-12 text-center mt-5">
          <a href="<?php echo get_page_link( get_page_by_title( 'for business' ) ); ?>" class="btn btn--mid btn__tiger">Bergabunglah dengan Komunitas</a>
        </div>
      </div>
    </section>

    <section class="creatorspace">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1>Tujuan kami adalah untuk mempermudah kamu menjalankan bisnis, sehingga kamu dapat fokus pada apa yang terbaik untuk kamu.</h1>
            <p>Lihat apa yang dapat dilakukan Creator Tools untuk kamu dan bisnis kamu</p>
          </div>
          <!-- TAB PANE  -->
          <div class="col-md-12 tab-wrapper">
            <div class="row">              
              <div class="col-md-9 order-md-2">
                <div class="tab-content" id="v-pills-tabContent">
                  <?php
                  $i = 1;
                  $href = 1;
                  $control = 1;
                  $listScroll = get_field('column_list_scroll', 573);
                  if( $listScroll ) {
                  foreach( $listScroll as $listScrollX ) { 
  
                  if($i === 1){
                    $class = 'active ';
                  } else {
                    $class = '';
                  }
                  
                  ?>
                  <div class="tab-pane fade show <?php echo $class;?>" id="v-pills-tools<?php echo $i++;?>" role="tabpanel" aria-labelledby="v-pills-tools<?php echo $href++;?>-tab">
                    <h2 class="title"><?php echo $listScrollX['subtitle']; ?></h2>
                    <p><?php echo $listScrollX['desc']; ?></p>
                    <img src="<?php echo esc_url( $listScrollX['img']['url'] ); ?>" alt="" class="img-fluid">
                  </div>
                  <?php 
                    } 
                  }
                ?>
                </div>
              </div>
              <div class="col-md-3 order-md-1">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <?php 
                  $i = 1;
                  $href = 1;
                  $tools = 1;
                  $listScroll = get_field('column_list_scroll',573);
                  if( $listScroll ) {
                  foreach( $listScroll as $listScrollX ) { 

                  if($i === 1){
                    $class = 'active show';
                  } else {
                    $class = '';
                  }
                ?> 
                  <a class="nav-link <?php echo $class;?>" id="v-pills-tools<?php echo $i++;?>-tab" data-toggle="pill" href="#v-pills-tools<?php echo $href++;?>" role="tab" aria-controls="v-pills-tools<?php echo $tools++;?>" aria-selected="true"><?php echo $listScrollX['title']; ?></a>
                  <?php 
                    } 
                  }
                ?>
                </div>
              </div>
            </div>
          </div>       
        </div>
        
        <div class="row">
          <div class="col-md-12">
            <div class="card">
            <?php
            $verifiedC = get_field('verified_creators');  ?> 
              <div class="card-body">
                <h1 class="mb-4"><?php echo $verifiedC['title']; ?></h1>
                <div class="row">
                  <div class="col-md-8">
                    <img src="<?php echo esc_url( $verifiedC['img']['url'] ); ?>" alt="" class="img-fluid">
                  </div>
                  <div class="col-md-4 align-self-center">
                    <p><strong> <?php echo $verifiedC['subtitle']; ?></strong></p>
                  </div>
                  <div class="col-12 my-5">
                    <?php echo $verifiedC['desc']; ?>
                  </div>
                  <div class="col-12 text-center">
                    <a href="<?php echo $verifiedC['link']; ?>" class="btn btn--large btn__tiger mb-4">Bergabunglah dengan Komunitas</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="creatorfeatured">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white text-center text-md-left">Featured creators</h1>
            <nav>
              <div class="nav nav-tabs" id="featured-creator" role="tablist">
              <?php 
                $i = 1;
                $href = 1;
                $control = 1;
                $fCreators = get_field('featured_creators');
                if( $fCreators ) {
                foreach( $fCreators as $fCreatorsX ) { 

                if($i === 1){
                  $class = 'active ';
                } else {
                  $class = '';
                }
                ?> 
                <a class="nav-link <?php echo $class;?>" id="creator-<?php echo $i++;?>" data-toggle="tab" href="#creator-detail-<?php echo $href++;?>" role="tab" aria-controls="creator-detail-<?php echo $control++;?>" aria-selected="true">
                  <img src="<?php echo esc_url( $fCreatorsX['thumbnail']['url'] ); ?>" alt="" class="img-fluid ">
                </a>
                <?php 
                    } 
                  }
                ?>
              </div>
            </nav>
          </div>
          <div class="col-md-4">            
            <div class="tab-content" id="nav-tabContent">
            <?php 
                $i = 1;
                $href = 1;
                $fCreators = get_field('featured_creators');
                if( $fCreators ) {
                foreach( $fCreators as $fCreatorsX ) { 

                if($i === 1){
                  $class = 'active show';
                } else {
                  $class = '';
                }
              ?> 
              <div class="tab-pane fade <?php echo $class;?>" id="creator-detail-<?php echo $i++;?>" role="tabpanel" aria-labelledby="creator-<?php echo $href++;?>">
                <img src="<?php echo esc_url( $fCreatorsX['img_phone']['url'] ); ?>" alt="" class="img-fluid">
                <a href="https://<?php echo $fCreatorsX['link']; ?>" class="btn btn-dark mt-3  mt-md-5"><?php echo $fCreatorsX['link']; ?></a>
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
      <div class="wrapper rounded-0"></div>
      <div class="container">
        <div class="row">     
        <?php
        $afterF = get_field('after_featured');  ?>      
          <div class="col-md-5 offset-md-1 align-self-center text-center text-md-left order-md-2">
            <h1 class="mt-5 col-md-10"><?php echo $afterF['title']; ?></h1>
            <a href="<?php echo $afterF['link']; ?>" class="btn btn--large btn__tiger mb-5">Daftar Sekarang sebagai Kreator</a>
          </div>    
          <div class="col-md-6 order-md-1">
            <img src="<?php echo esc_url( $afterF['img']['url'] ); ?>" alt="" class="img-fluid mobile">
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
            $faq = get_field('faq_group', 532);
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

<?php get_footer('id');?>