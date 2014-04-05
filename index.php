<?php get_header(); ?>

<div class="container">
 
  <div class="sidebar1">
    
    <aside>
       <p><STRONG>CEV Consulting Empresarial.</STRONG></p>
      <p>Honorio Lozano, 35  1º</p>
      <p>28400 Collado Villalba</p>
      
      <p>Si tiene alguna consulta o desea concertar una cita, nuestro horario es de lunes. a jueves, mañana de 9:00 a 13:30, tarde de 15:00 a 17:30. Viernes de 8:00 a 13:30.</p>
      <p>Puede ponerse en contacto con nosotros a través de este número de teléfono: 918499920</p>
      
      <p>o bien utilice directamente nuestro Formulario de contacto</p>
    </aside>
  <!-- end .sidebar1 -->
  </div>
  <div class="content">
  
      <article class="content">
        <h1><?php the_post();?>&nbsp;
        <?php the_title();?></h1>
        <section>
         
          <p><?php the_content(); ?></p>
        </section>
        <section>
          
    
      </article>
  <!-- end .content -->
  </div>
      <?php get_template_part(aside); ?>
  <footer>
    <small>Este footer contiene la declaración position:relative; para dar a Internet Explorer 6 hasLayout para footer y provocar que se borre correctamente. Si no es necesario proporcionar compatibilidad con IE6, puede quitarlo.</small>
    <address>
      Contenido de dirección
    </address>
  </footer>
  <!-- end .container --></div>
</body>
</html>