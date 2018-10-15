<?= $this->element('slider') ?>
<!--/#cta-->

       <div class="container">
         <div style="margin-top:-3%;" class="featurette" id="about">
          <img style="margin-top:-2%;" class="featurette-image img-circle img-responsive pull-right" src="<?= $theme_config['img_accueil'] ?>">
           <h2 class="featurette-heading"><?= $theme_config['title_accueil'] ?></h2>
         <p class="lead"><?= $theme_config['text_accueil'] ?></p>
         <a href="<?= $theme_config['lien_btnacc'] ?>" class="btn_acc btn btn-default"><?= $theme_config['text_btnacc'] ?></a>
       </div>
     </div>

     <section id="cta" class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
<div style="text-align: center;" class="container">
    <div class="row box-gradient box-red">
    <div class="col-sm-4">
      <i style="margin-bottom: 25px;color: white;" class="fa fa-<?= $theme_config['fa_co'] ?> fa-4x"></i>
      <h2 style="color: #fff;" class="countTo font-raleway counted" data-speed="5000"><?= ($banner_server) ? $banner_server : $Lang->get('SERVER__STATUS_OFF') ?></h2>
      <p style="color: white;"><?= $theme_config['info_co'] ?></p>
    </div>

    <div class="col-sm-4">
      <i style="margin-bottom: 25px;color: white;" class="fa fa-<?= $theme_config['fa_inscrit'] ?> fa-4x"></i>
      <h2 style="color: #fff;" class="countTo font-raleway counted" data-speed="5000"><?= ClassRegistry::init('Users')->find('count') ?></h2>
      <p style="color: white;"><?= $theme_config['info_inscrit'] ?></p>
    </div>

    <div class="col-sm-4">
      <i style="margin-bottom: 25px;color: white;" class="fa fa-<?= $theme_config['fa_visite'] ?> fa-4x"></i>
      <h2 style="color: #fff;" class="font-raleway countTo counted" data-speed="5000" id="visits_count"><?= ClassRegistry::init('Visit')->find('count') ?></h2>
      <p style="color: white;"><?= $theme_config['info_visite'] ?></p>
    </div>
  </div>
</div>
    </section>
<!--/#cta-->
    <div class="container">
        <div style="margin-top:30px;" class="row">
            <div class="col-lg-12">
                <h2 class="page-header"><?= $theme_config['title_serv'] ?></h2>
            </div>
            <div class="col-md-4 text-center">
                  <div class="thumbnail">
                      <img class="img-responsive" src="<?= $theme_config['img_serv1'] ?>" alt="">
                      <div class="caption">
                          <h3><?= $theme_config['titre_serv1'] ?><br>
                          </h3>
                          <p><?= $theme_config['text_serv1'] ?></p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 text-center">
                  <div class="thumbnail">
                      <img class="img-responsive" src="<?= $theme_config['img_serv2'] ?>" alt="">
                      <div class="caption">
                          <h3><?= $theme_config['titre_serv2'] ?><br>
                          </h3>
                          <p><?= $theme_config['text_serv2'] ?></p>
                      </div>
                  </div>
            </div>
            <div class="col-md-4 text-center">
              <div class="discord">
                    <p><iframe src="//discordapp.com/widget?id=<?= $theme_config['discord'] ?>" width="350" height="700" allowtransparency="true" frameborder="0"></iframe></p>
              </div>
            </div>
        </div>
      </div>

      <div class="container">
          <div style="margin-top:-30%;" class="row">
      <div class="col-md-4 text-center">
          <div class="thumbnail">
              <img class="img-responsive" src="<?= $theme_config['img_serv3'] ?>" alt="">
              <div class="caption">
                  <h3><?= $theme_config['titre_serv3'] ?><br>
                  </h3>
                  <p><?= $theme_config['text_serv3'] ?></p>
              </div>
          </div>
      </div>
      <div class="col-md-4 text-center">
          <div class="thumbnail">
              <img class="img-responsive" src="<?= $theme_config['img_serv4'] ?>" alt="">
              <div class="caption">
                  <h3><?= $theme_config['titre_serv4'] ?><br>
                  </h3>
                  <p><?= $theme_config['text_serv4'] ?></p>
              </div>
          </div>
        </div>
      </div>


<section style="margin-top: 50px;" class="bar background-white">

<div class="container">

    <h2 style="text-transform: uppercase;" class="section-title text-center wow fadeInDown">☰=-  <?= $Lang->get('NEWS__LAST_TITLE') ?>  -=☰</h2>

  <div class="news-bloc">

<?php
        if(!empty($search_news)) {

          $i = 0;
          foreach ($search_news as $news) {

            $i++;

            if($i > 4) {
              break;
            }

            echo '<div class="box-news newsposition wow fadeInDown">';
              echo '<div class="box-image-text blog">';
                echo '<div class="content">';
                  echo '<h4><a class="title-news" href="'.$this->Html->url(array('controller' => 'blog', 'action' => $news['News']['slug'])).'">'.cut($news['News']['title'], 15).'</a></h4>';
                    echo '<span class="author entry-author"><i class="fa fa-pencil"></i>&nbsp;';
                      echo $Lang->get('GLOBAL__BY').' <a href="#">'.$news['News']['author'].'</a> '.$Lang->get('NEWS__POSTED_ON') . ' ' . $Lang->date($news['News']['created']);;
                    echo ' </span>';
                    echo '<p class="intro">';
                      echo $this->Text->truncate($news['News']['content'], 800, array('ellipsis' => '...', 'html' => true));
                    echo '<p class="btn-news btn btn-default">';
                      echo '<a style="color:black;" href="'.$this->Html->url(array('controller' => 'blog', 'action' => $news['News']['slug'])).'" class="btn btn-template-main">'.$Lang->get('NEWS__READ_MORE').'</a>';
                    echo '</p>';
                echo '</div>';
              echo '</div>';
            echo '</div>';
            echo '</br>';
          }
        } else {
          echo '<div class="alert alert-danger">'.$Lang->get('NEWS__NONE_PUBLISHED').'</div>';
        }
        ?>
</div>
</div>

        </div>
    </section>
<!--NEWS-->
<?= $Module->loadModules('home') ?>
