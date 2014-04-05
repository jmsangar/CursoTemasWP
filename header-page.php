<!doctype html>
<html lang="en" class="page">
<head>
	<meta charset="utf-8">
	<title><?php bloginfo("title"); ?></title>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>"
	<?php wp_head(); ?>
</head>
<body>
	<div class="container">
    
  <header>
      <h1 style="text-align: center; font-size: 50px; color: #99CC00;">Consulting Empresarial</h1>
      <h1 style="text-align: center; font-size: 50px; color: #99CC00;">Asesores & Abogados</h1>
      <ul class="nav">
        <li> <?php 
	 		$defaults = array(
			'theme_location' => 'header_menu',
			);
			wp_nav_menu($defaults);
	 ?>
     </li>
        
    </ul>
  </header>

	