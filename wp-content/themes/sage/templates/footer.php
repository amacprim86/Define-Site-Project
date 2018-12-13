<?php
/**
 * Template Name: Footer Template
 */
?>

<footer class="define_f">
  <div class="f_wrap">
    <div class="f_left">
      <h2><?php the_field('title_-_left', 125); ?></h2>

      <?php if( have_rows('sources', 125) ): ?>
        <?php while( have_rows('sources', 125) ): the_row();

      // vars
      $src = get_sub_field('source', 125);
      ?>

      <h3><?php echo $src; ?></h3>
        <?php endwhile; ?>
      <?php endif; ?>

    </div>
    <div class="f_right">
      <img src="<?php the_field('logo_image_-_right', 125); ?>" class="">

      <?php if( have_rows('right_content', 125) ): ?>
        <?php while( have_rows('right_content', 125) ): the_row();

      // vars
      $link = get_sub_field('link', 125);
      $content = get_sub_field('content', 125);
      ?>

      <a href="<?php echo $link; ?>" target="_blank"><h3><?php echo $content; ?></h3></a>
        <?php endwhile; ?>
      <?php endif; ?>

    </div>
  </div>

<!-- Additional SCRIPT FILES -->

<script src="/wp-content/themes/sage/assets/scripts/smoothscroll_anchor.js"></script>
<script src="/wp-content/themes/sage/assets/scripts/waypoints.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>

</footer>
