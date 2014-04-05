<?php get_header(page); ?>

  <?php get_template_part(sidebar) ?>
  
  <article class="content">
    <h1><?php the_post();?>
    <?php the_title();?></h1>
    
    <section>
     
      <p><?php the_content(); ?></p>
    
    </section>
  <!-- end .content -->
  </article>
  
  <?php get_template_part(aside) ?>
  
  <?php get_footer(); ?>
