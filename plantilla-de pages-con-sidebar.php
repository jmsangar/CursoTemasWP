<?php
	/*
Template Name: Plantilla con sidebar
*/
?>
<?php get_header( );?>
<body>
	
<h1>Título de la página</h1>
<?php the_post(); ?>
<?php the_content(); ?>
<a href="<?php bloginfo(home); ?>">IR AL INICIO"</a>
<script src="<?php bloginfo(template_url); ?>/js/jquery-1.8.3-min.js"></script>


	<?php include("sidebar.php");?>
</body>
</html>
