<header id="header">
        <nav id="main-menu" class="bar-menu navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand-urban navbar-brand home" href="<?= $this->Html->url('/') ?>">
          <?php
          if(isset($theme_config['logo']) && $theme_config['logo']) {
            //echo $this->Html->image($theme_config['logo']);
            echo '<img src="'.$theme_config['logo'].'">';
          } else {
            echo '<p>'.$website_name.'</p>';
          }
          ?>
        </a>
                                    <div id="particles-js"></div>
          <script>particlesJS("particles-js", {"particles":{"number":{"value":<?= $theme_config['nbrp'] ?>,"density":{"enable":true,"value_area":800}},"color":{"value":"#<?= $theme_config['colorpart'] ?>"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":1,"random":true,"anim":{"enable":true,"speed":1,"opacity_min":0,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":4,"size_min":0.3,"sync":false}},"line_linked":{"enable":false,"distance":150,"color":"#<?= $theme_config['colorpart'] ?>","opacity":0.4,"width":1},"move":{"enable":true,"speed":<?= $theme_config['vp'] ?>,"direction":"none","random":true,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":600}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"<?= $theme_config['effectp'] ?>"},"onclick":{"enable":true,"mode":"repulse"},"resize":true},"modes":{"grab":{"distance":100,"line_linked":{"opacity":0.6}},"bubble":{"distance":250,"size":0,"duration":2,"opacity":0,"speed":3},"repulse":{"distance":400,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;
            </script>
                </div>
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll"><a href="<?= $this->Html->url('/') ?>"><?= $Lang->get('GLOBAL__HOME') ?></a></li>
<?php
          if(!empty($nav)) {

            $i = 0;
            foreach ($nav as $key => $value) {

              if(empty($value['Navbar']['submenu'])) {

                echo '<li class="scroll"';
                	echo ($this->params['controller'] == $value['Navbar']['name']) ? ' actived' : '';
                		echo '">';
                  			echo '<a href="'.$value['Navbar']['url'].'"';
                  				echo ($value['Navbar']['open_new_tab']) ? ' target="_blank"' : '';
                  			echo '>';
                    	echo $value['Navbar']['name'];
                  	echo '</a>';
               	echo '</li>';

              } else {

                echo '<li class="dropdown">';
                 	echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">';
                    	echo $value['Navbar']['name'].' <span class="caret"></span>';
                	echo '</a>';
                echo '<ul class="dropdown-menu" role="menu">';
                    $submenu = json_decode($value['Navbar']['submenu']);
                    foreach ($submenu as $k => $v) {

                    echo '<li>';
                        echo '<a href="'.rawurldecode(rawurldecode($v)).'"';
                        	echo ($value['Navbar']['open_new_tab']) ? ' target="_blank"' : '';
                        		echo '>';
                          	echo rawurldecode(str_replace('+', ' ', $k));
                        echo '</a>';
                    echo '</li>';

                    }
                  echo '</ul>';
                echo '</li>';

              }
              $i++;
            }
          }
          ?>
          <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <?php if(!$isConnected) { ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="dropdown" aria-expanded="false">Espace membre<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#" data-toggle="modal" data-target="#login"><span class="hidden-xs text-uppercase"><?= $Lang->get('USER__LOGIN')?></span></a></li>
                            <li><a href="#" data-toggle="modal" data-target="#register"><span class="hidden-xs text-uppercase"><?= $Lang->get('USER__REGISTER')?></span></a></li>
                        </ul>
                    <?php } else { ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?= $user['pseudo'] ?> <img src="<?= $this->Html->url(array('controller' => 'API', 'action' => 'get_head_skin/', 'plugin' => false)) ?>/<?= $user['pseudo'] ?>/16" title="<?= $user['pseudo'] ?>"> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#notifications_modal" onclick="notification.markAllAsSeen(2)" data-toggle="modal"><i class="fa fa-flag"></i> <?= $Lang->get('NOTIFICATIONS__LIST') ?></a><span class="notification-indicator"></span></li>
                            <li><a href="<?= $this->Html->url(array('controller' => 'profile', 'action' => 'index', 'plugin' => null)) ?>" data-toggle="modal"><i class="fa fa-user"></i> <?= $Lang->get('USER__PROFILE') ?></a></li>
                            <li><a href="<?= $this->Html->url(array('controller' => 'user', 'action' => 'logout', 'plugin' => null)) ?>"><i class="fa fa-power-off"></i> <?= $Lang->get('USER__LOGOUT') ?></a></li>
                            <?php if($Permissions->can('ACCESS_DASHBOARD')) { ?>
                            <li><a href="<?= $this->Html->url(array('controller' => '', 'action' => 'index', 'plugin' => 'admin')) ?>"><i class="fa fa-cogs"></i> <?= $Lang->get('GLOBAL__ADMIN_PANEL') ?></a></li>
                        <?php } ?>
                        </ul>
                    <?php } ?>
                </li>
              </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->