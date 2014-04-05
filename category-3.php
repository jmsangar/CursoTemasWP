<?php get_header( );?>
<body class="villanos">
	
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- post -->
    <p><?php the_title()?></p>
    <?php endwhile; ?>
    <!-- post navigation -->
    <?php else: ?>
    <!-- no posts found -->
    <?php endif; ?>

</body>
</html>