	<aside >
        <h4>Menú general</h4>
             <ul class="navlist">
                 <li> <?php 
                        $defaults = array(
                        'theme_location' => 'sidebar_menu',
						'menu'            => '',
						'container'       => 'div',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'depth' => 2
                        );
                        wp_nav_menu($defaults);
                        ?>
                 </li>
                </ul>
                
                <h4>Blog_noticias</h4>
             <ul class="navlist">
                 <li> <?php 
                        $defaults = array(
                        'theme_location' => 'blog',
						'menu'            => '',
						'container'       => 'div',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'depth' => 2
                        );
                        wp_nav_menu($defaults);
                        ?>
                 </li>
                </ul>
      </aside>