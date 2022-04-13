<?php get_header('id');
/*
Template Name: aboutus Page Indonesia
*/
?>

    <div class="bg-assets bg-assets--wrapper">
      <div class="bg-assets bg-assets--one">
        <img src="<?php bloginfo('template_url'); ?>/images/ellipse.png">
      </div>
    </div>

    <section class="aboutbanner">
      <div class="container-fluid">
        <div class="row">
        <?php
        $topSection = get_field('top_section');  ?>
          <div class="col-md-5 pl-md-5 align-self-center">
            <h4><?php echo $topSection['title']; ?></h4>
            <h1><?php echo $topSection['subtitle']; ?></h1>
          </div>
          <div class="col-md-7 px-0">
            <img src="<?php echo esc_url( $topSection['img']['url'] ); ?>" alt="" class="img-fluid">
          </div>
        </div>
      </div>
      <div class="container my-5 pt-md-5">
      <?php
        $afts = get_field('after_top_section');  ?>
        <div class="col-md-10 mx-auto text-center">
          <?php echo $afts['title']; ?>
          <p><?php echo $afts['shortdesc']; ?></p>
        </div>
      </div>
    </section>

    <section class="aboutbelieve">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1 class="title mb-5">Apa yang kami percaya</h1>
          </div>          
        </div>
      </div>
      <div class="container-fluid px-0">
        <div class="col-md-12 px-0">
          <div class="slider-about">
          <?php 
          $sAbout = get_field('slider_about');
          if( $sAbout ) {
            foreach( $sAbout as $sAbouts ) { 
            ?> 
            <div class="slider-item">
              <div class="card">
                <div class="card-body">
                  <img src="<?php echo esc_url( $sAbouts['img']['url'] ); ?>" alt="">
                  <?php echo $sAbouts['title']; ?>
                  <p><?php echo $sAbouts['shortdesc']; ?></p>
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
    </section>

    <section class="aboutstory">
      <div class="wrapper"></div>
      <div class="container">
        <div class="row">
        <?php
        $oStory = get_field('our_story');  ?>
          <div class="col-md-7 text-white">
            <h1 class="title"><?php echo $oStory['title']; ?></h1>
            <?php echo $oStory['desc']; ?>
          </div>
          <div class="col-md-5 align-self-center">
            <img src="<?php echo esc_url( $oStory['img']['url'] ); ?>" alt="" class="img-fluid aboutimg">
          </div>
        </div>
      </div>
    </section>

<?php get_footer('id');?>