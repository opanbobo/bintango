<?php get_header();?>
<?php
/*
Template Name: for business Page
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

    <div class="section py-5">
      <div class="container">
        <div class="row">
        <?php
        $welcomeFB = get_field('top_section');  ?>
          <div class="col-md-6">
            <h1><?php echo $welcomeFB['title']; ?></h1>
            <h3 class="subtitle mb-4"><?php echo $welcomeFB['desc']; ?></h3>
            <a class="btn btn__light btn--large text--tiger text-uppercase" href="https://api.whatsapp.com/send/?phone=6281280777870&text=Halo+saya+mengunjungi+web+BintanGO%2C+dan+ingin+berkolaborasi+dengan+Creator+dong%2C+nama+brand+saya+&app_absent=0" target="_new">Collaborate with Us Now</a>
          </div> 
          <div class="col-md-6 mt-5 mt-md-0">
            <img src="<?php echo esc_url( $welcomeFB['img']['url'] ); ?>" alt="" class="img-fluid">        
          </div>
        </div>
      </div>
    </div>

    <section class="quotes quotes--left">
      <div class="wrapper"></div>
      <div class="container">
        <div class="row">
        <?php
        $quote1 = get_field('quote_section');  ?>
          <div class="col-md-12 text-white text-center">
            <?php echo $quote1['title']; ?>
            <p><?php echo $quote1['source']; ?></p>
          </div> 
        </div>
      </div>
    </section>

    <section class="businessfeature">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5">
            <h1 class="title">Grow your Business </h1>
            <h1>with Creator-Powered Marketing 💪</h1>
            <p>Trusted by 500+ Creators</p>
          </div>          
        </div>
      </div>
      <div class="container-fluid px-0">
        <div class="col-md-12 px-0">
          <div class="slider-feature">
          <?php 
          $sCreatorsFB = get_field('slider_creators');
          if( $sCreatorsFB ) {
            foreach( $sCreatorsFB as $sCreatorsFBx ) { 
            ?> 
            <div class="slider-item">
              <div class="card">
                <div class="card-body">
                  <img src="<?php echo esc_url( $sCreatorsFBx['img']['url'] ); ?>" alt="">
                  <?php echo $sCreatorsFBx['title']; ?>
                  <p><?php echo $sCreatorsFBx['shortdesc']; ?></p>
                </div>
              </div>
            </div>
            <?php 
              } 
            }
          ?>
          </div>
        </div>
        <div class="col-12 text-center">
          <a href="https://api.whatsapp.com/send/?phone=6281280777870&text=Halo+saya+mengunjungi+web+BintanGO%2C+dan+ingin+berkolaborasi+dengan+Creator+dong%2C+nama+brand+saya+&app_absent=0" target="_new" class="btn btn--large btn__tiger">Start a Conversation</a>
        </div>
      </div>
    </section>

    <section class="quotes quotes--right">
      <div class="wrapper"></div>
      <div class="container">
        <div class="row">
        <?php
        $quote2 = get_field('quote_section_2');  ?>
          <div class="col-md-12 text-white text-center">
            <?php echo $quote2['title']; ?>
            <p><?php echo $quote2['source']; ?></p>
          </div> 
        </div>
      </div>
    </section>

    <section class="businesscollab">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-5">
            <h1>Our Latest Collaborations</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 mb-2 mb-md-5">
            <div class="row">
            <?php 
            $sCreatorsFB = get_field('latest_collaborations');
            if( $sCreatorsFB ) {
            foreach( $sCreatorsFB as $sCreatorsFBx ) { 
            ?> 
              <div class="col-md-3 col-6">
                <img src="<?php echo esc_url( $sCreatorsFBx['img']['url'] ); ?>" alt="" class="img-fluid collabs">
              </div>
              <?php
                } 
              }
              ?>
            </div>
          </div>
          <div class="col-md-10 offset-md-2">
            <div class="row">
            <?php 
            $sCreatorsFB = get_field('latest_collaborations_right');
            if( $sCreatorsFB ) {
            foreach( $sCreatorsFB as $sCreatorsFBx ) { 
            ?> 
              <div class="col-md-3 col-6">
                <img src="<?php echo esc_url( $sCreatorsFBx['img']['url'] ); ?>" alt="" class="img-fluid collabs">
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

    <section class="quotes quotes--left">
      <div class="wrapper"></div>
      <div class="container">
        <div class="row">
        <?php
        $quote3 = get_field('quote_section_3');  ?>
          <div class="col-md-12 text-white text-center">
          <?php echo $quote3['title']; ?>
            <p><?php echo $quote3['source']; ?></p>
          </div> 
        </div>
      </div>
    </section>

    <section class="businessclient">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-5">
            <h1>Agencies and Brans who 💖 BintanGO Creators</h1>
          </div>
        </div>
        <div class="row">
        <?php 
        $i = 0;
            $agencies = get_field('agencies');
            if( $agencies ) {
            foreach( $agencies as $agenciesX ) { 
              $i++;
              if($i == 6) { // three items in a row. Edit this to get more or less items on a row
                echo '</div><div class="row">';
                $i = 0;
            }
        ?> 
          <div class="col-6 col-md">
            <img src="<?php echo esc_url( $agenciesX['img']['url'] ); ?>" alt="" class="img-fluid clientlogo">
          </div>
          <?php
              } 
            }
        ?>  
        <div>
      </div>
    </section>

    <section class="testimonial2 pt-0">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="slider-testi2">
            <?php 
            $sAgency = get_field('slider_agencies');
            if( $sAgency ) {
            foreach( $sAgency as $sAgenci ) { 
            ?> 
              <div class="slider-item">
                <div class="card">
                  <div class="card-body">
                    <img src="<?php echo esc_url( $sAgenci['img']['url'] ); ?>" alt="" class="img-fluid">
                    <div class="testi-detail">
                      <h4 class="title"><?php echo $sAgenci['nama']; ?></h4>
                      <h5><?php echo $sAgenci['job']; ?></h5>
                      <p><?php echo $sAgenci['desc']; ?></p>
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

    <section class="businesscontact">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center my-5">
            <img src="<?php bloginfo('template_url'); ?>/images/ellipse.png" alt="" class="img-fluid bg-blur">
            <?php
            $exSection = get_field('excited_section');  ?> 
            <div class="hitus hitus-text">
              <h1><?php echo $exSection['title']; ?></h1>
              <h6><?php echo $exSection['subtitle']; ?></h6>
              <a class="btn btn--large btn__tiger text-uppercase mt-5" href="https://api.whatsapp.com/send/?phone=6281280777870&text=Halo+saya+mengunjungi+web+BintanGO%2C+dan+ingin+berkolaborasi+dengan+Creator+dong%2C+nama+brand+saya+&app_absent=0" target="_new">Hit us with a Message</a>
            </div>
            <img src="<?php bloginfo('template_url'); ?>/images/hit-1.png" alt="" class="hitus hitus-one">
            <img src="<?php bloginfo('template_url'); ?>/images/hit-2.png" alt="" class="hitus hitus-two">
            <img src="<?php bloginfo('template_url'); ?>/images/hit-3.png" alt="" class="hitus hitus-three">
            <img src="<?php bloginfo('template_url'); ?>/images/hit-4.png" alt="" class="hitus hitus-four">
            <img src="<?php bloginfo('template_url'); ?>/images/hit-5.png" alt="" class="hitus hitus-five">
            <img src="<?php bloginfo('template_url'); ?>/images/hit-6.png" alt="" class="hitus hitus-six">
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
            $faq = get_field('faq_group', 613);
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
