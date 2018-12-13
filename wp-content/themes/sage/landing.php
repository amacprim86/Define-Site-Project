<?php
/**
 * Template Name: landing Template
 */
?>

<!-- DESKTOP HEADER (Over 1000px) -->
<div class="define_headr">
  <img src="<?php the_field('hero_logo'); ?>" class="header-logo">
  <div class="h-right">
    <p class="h-snippet"><?php the_field('hero_snippet'); ?>
    </p>
    <a href="" class="hero_btn1"><?php the_field('hero_button_1'); ?>
    </a>
    <a href="" class="hero_btn2"><?php the_field('hero_button_2'); ?>
    </a>
  </div>
</div>
<!-- MOBILE HEADER (Under 1000px) -->
<div class="define_mobile">
  <img src="<?php the_field('hero_logo'); ?>" class="header-logo">
  <div class="h-right">
    <p class="h-snippet"><?php the_field('hero_snippet'); ?>
    </p>
    <div class="hamburger">
      <img src="/wp-content/uploads/2018/12/menu-button.png" class="ham">
    </div>
  </div>
</div>

<div class="navmobile_menu">
   <div class="pretty_padding">
     <a href="" class="hero_btn1"><?php the_field('hero_button_1'); ?></a>
     <a href="" class="hero_btn2"><?php the_field('hero_button_2'); ?></a>
  </div>
</div>

<div class="sec-1" style="background-image: url(<?php the_field('section_1_-_background_image'); ?>);">
  <h1 class="sec1 os-animation" data-os-animation="slideInLeft" data-os-animation-delay="0s"><?php the_field('section_1_-_title'); ?></h1>
  <h2 class="sec1"><?php the_field('section_1_-_subtitle'); ?></h2>
  <h2 class="line_2"><?php the_field('section_1_-_subtitle2'); ?></h2>
  <hr class="divide">
  <h1 class="sec2_title os-animation" data-os-animation="slideInLeft" data-os-animation-delay="0s"><?php the_field('section_2_-_title'); ?></h1>
  <div class="col-3_wrap">

    <?php if( have_rows('deductibles') ): ?>
      <?php while( have_rows('deductibles') ): the_row();

    // vars
    $textarea = get_sub_field('column');
    ?>

    <div class="col-text">
      <?php echo $textarea; ?>
    </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <hr class="divide">
  <div class="chart">
    <div class="ch-1"><?php the_field('chart_title'); ?></div>
      <div class="ch-2">
      <?php if( have_rows('chart') ): ?>
        <?php while( have_rows('chart') ): the_row();

      // vars
      $c1 = get_sub_field('col-1');
      $c2 = get_sub_field('col-2');
      $c3 = get_sub_field('col-3');
      ?>

      <div class="cell-contain">
        <div class="c1"><p><?php echo $c1; ?></p>
        </div>
        <div class="c2"><p><?php echo $c2; ?></p>
        </div>
        <div class="c3"><p><?php echo $c3; ?></p>
        </div>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
      </div>

  </div>
  <h1 class="last os-animation" data-os-animation="slideInLeft" data-os-animation-delay="0s"><?php the_field('section_2_-_title_below_chart'); ?></h1>
</div>

<div class="sec-3">
  <h1 class="os-animation" data-os-animation="slideInLeft" data-os-animation-delay="0s"><?php the_field('section_3_-_title'); ?></h1>
  <div class="sec3-tiles">
    <?php if( have_rows('section_3_-_tiles') ): ?>
      <?php while( have_rows('section_3_-_tiles') ): the_row();

    // vars
    $s3_image = get_sub_field('image');
    $s3_title = get_sub_field('title');
    $s3_snip = get_sub_field('snippet');
    ?>

    <div class="s3-tile os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.21s">
      <img src="<?php echo $s3_image; ?>" class="s3-img">
      <h2><?php echo $s3_title; ?></h2>
      <?php echo $s3_snip; ?>
    </div>
    <?php endwhile; ?>
  <?php endif; ?>
  </div>
</div>

<div class="sec-4">
  <div class="s4_text-area">
    <h1 class="os-animation" data-os-animation="slideInLeft" data-os-animation-delay="0s"><?php the_field('section_4_-_title'); ?></h1>
    <?php the_field('section_4_-_snippet'); ?>
  </div>
</div>

<div class="sec-5" style="background-image: url(<?php the_field('section_5_-_background_image'); ?>);">
  <div class="sec5-contain">
    <h1 class="sec5 os-animation" data-os-animation="slideInLeft" data-os-animation-delay="0s"><?php the_field('section_5_-_title'); ?></h1>
    <div class="sec5-r">

      <?php if( have_rows('section_5_-_assets') ): ?>
        <?php while( have_rows('section_5_-_assets') ): the_row();

      // vars
      $s5_image = get_sub_field('image');
      $s5_snip = get_sub_field('snippet');
      ?>

      <div class="asset">
        <img src="<?php echo $s5_image; ?>">
        <?php echo $s5_snip; ?>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
    </div>
  </div>
</div>

<div class="sec-6">
  <h1 class="os-animation" data-os-animation="slideInLeft" data-os-animation-delay="0s"><?php the_field('section_6_-_title'); ?></h1>
  <div class="col-3_wrap">


    <?php if( have_rows('section_6_-_3_column') ): ?>
      <?php while( have_rows('section_6_-_3_column') ): the_row();

    // vars
    $s6_title = get_sub_field('title');
    $s6_textarea = get_sub_field('snippet');
    ?>

    <div class="col-text">
      <h3><?php echo $s6_title; ?></h3>
      <?php echo $s6_textarea; ?>
    </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>

<div class="sec-7">
  <div class="s7_text-area">
    <h1 class="os-animation" data-os-animation="slideInLeft" data-os-animation-delay="0s"><?php the_field('section_7_-_title'); ?></h1>
    <?php the_field('section_7_-_snippet'); ?>
  </div>
</div>

<div class="sec-8" style="background-image: url(<?php the_field('section_8_-_background_image'); ?>);">
  <div class="s8_container">
    <h1 class="os-animation" data-os-animation="slideInLeft" data-os-animation-delay="0s"><?php the_field('section_8_-_title'); ?></h1>
    <div class="sec3-tiles">
      <?php if( have_rows('section_8_-_tiles') ): ?>
        <?php while( have_rows('section_8_-_tiles') ): the_row();

      // vars
      $s3_image = get_sub_field('image');
      $s3_snip = get_sub_field('snippet');
      ?>

      <div class="s3-tile os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.21s">
        <img src="<?php echo $s3_image; ?>" class="s3-img">
        <?php echo $s3_snip; ?>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
    </div>
  </div>
</div>

<div class="sec-9">
  <div class="sec9-contain">
    <h1 class="sec9 os-animation" data-os-animation="slideInLeft" data-os-animation-delay="0s"><?php the_field('section_9_-_title'); ?></h1>
    <div class="sec9-r">

      <?php if( have_rows('section_9_-_how_it_works') ): ?>
        <?php while( have_rows('section_9_-_how_it_works') ): the_row();

      // vars
      $s9_image = get_sub_field('display_text');
      $s9_snip = get_sub_field('snippet');
      ?>

      <div class="asset">
        <h4><?php echo $s9_image; ?></h4>
        <?php echo $s9_snip; ?>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
    <?php the_field('section_9_-_details_1'); ?>
    <?php the_field('section_9_-_details_2'); ?>
    </div>
  </div>
  <h2><?php the_field('section_9_-_bottom_title'); ?></h2>
  <img src="<?php the_field('section_9_-_bottom_image'); ?>" class="s9_bi">
</div>






<!-- NAV Dropdown on-scroll Function -->
<script>
$('.hamburger').click(function(){
$('.navmobile_menu').toggleClass('show', 1000 );
});

$("#ham").click(function() {
$('.transform').toggleClass('transform-active', 1000 );
});
</script>
