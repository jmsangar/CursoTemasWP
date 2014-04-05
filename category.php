<?php get_header( );?>

<?php get_template_part(sidebar) ?>
	
    <article class="content">
	<h2><?php the_category(' ');?></h2>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- post -->
	
		<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a>
		</h2>
	<!--Falta arreglar esto-->
	<p><?php the_excerpt();?></p>
	<p><?php the_content("seguir leyendo");?></p>
	
	<p><?php the_excerpt();?>
	</p><a href="<?php the_permalink(); ?>"<continua lenyendo></a>

	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<p>No hay posts</p>
	<?php endif; ?>
</article>
 <?php get_template_part(aside) ?>
<?php get_footer( );?>