<section id="main-slider">

        <div class="owl-carousel">
    <?php
          foreach ($search_slider as $k => $v) {
                echo '<div class="item" style="background-image:url('.$v['Slider']['url_img'].');">';
                    echo '<div class="slider-inner">';
                        echo '<div class="container">';
                            echo '<div class="row">';
                                echo '<div class="col-sm-6">';
                                    echo '<div class="carousel-content">';
                                       echo '<h1 class="slider-ip">'.$theme_config['slide_ip'].'</h1>';
                                         echo '<h3 class="text-slide">'.before_display($v['Slider']['title']).'</h3>';
                                        echo '<p>'.before_display($v['Slider']['subtitle']).'</p>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
          }
        ?>
    
        </div><!--/.owl-carousel-->

    </section><!--/#main-slider-->