<!DOCTYPE html>
<html lang="fr">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $title_for_layout ?> - <?= $website_name ?></title>

    <!-- core CSS -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('responsive.css') ?>
    <?= $this->Html->css('animate.min.css') ?>
    <?= $this->Html->css('owl.carousel.css') ?>
    <?= $this->Html->css('owl.transitions.css') ?>
    <?= $this->Html->css('prettyPhoto.css') ?>
    <?= $this->Html->css('main.css') ?>
    <?= $this->Html->css('mytheme.css') ?>
<!-- core CSS -->
    <link rel="icon" type="image/png" href="<?= $theme_config['favicon_url'] ?>" />
    <style class="cp-pen-styles">#particles-js{ position:absolute; width: 100%; height: 100%;margin-left:-10%;}</style>
    <link href="//fonts.googleapis.com/css?family=Montserrat+Subrayada|Oxygen" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <!--[if lt IE 9]>
    <?= $this->Html->script('html5shiv.js') ?>
    <?= $this->Html->script('respond.min.js') ?>
    <![endif]-->
    <?= $this->Html->script('jquery.js') ?>
</head><!--/head-->


<body id="home" class="homepage">

<!--/header-->
<header id="header">
<?= $this->element('navbar') ?>
</header>
<!--/header-->

<?= $this->fetch('content'); ?>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                <p class="text-left">- Thème par <a href="/" target="blank"> AlexM -</a><?= $Lang->get('GLOBAL__FOOTER') ?></p>
                </div>
                <div class="col-sm-6">
    <ul style="font-size:30px;" class="social-icons">
      <?php
        $howManyBtns = 0;
        $howManyBtns += (!empty($facebook_link));
        $howManyBtns += (!empty($twitter_link));
        $howManyBtns += (!empty($youtube_link));
        $howManyBtns += (!empty($skype_link));
        $howManyBtns += count($findSocialButtons);
        $maxBtnsByLine = 4;
        $howManyBtnsDivided = ceil( $howManyBtns / ceil( $howManyBtns / $maxBtnsByLine ) );
        $col = 12 / $howManyBtnsDivided;

        if(!empty($facebook_link)) {
          echo '<li><a class="facebook" href="'.$facebook_link.'"><i class="fa fa-facebook"></i></a></li>';
        }
        if(!empty($twitter_link)) {
          echo '<li><a class="twitter" href="'.$twitter_link.'"><i class="fa fa-twitter"></i></a></li>';
        }
        if(!empty($youtube_link)) {
          echo '<li><a class="youtube" href="'.$youtube_link.'"><i class="fa fa-youtube"></i></a></li>';
        }
        if(!empty($skype_link)) {
          echo '<li><a class="skype" href="'.$skype_link.'"><i class="fa fa-skype"></i></a></li>';
        }
      ?>
                     </ul>

                    <p>Membres inscrits : <?= ClassRegistry::init('Users')->find('count') ?></p>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

<?= $this->element('modals') ?>

<?= $this->Html->script('jquery.js') ?>
<?= $this->Html->script('bootstrap.min.js') ?>
<?= $this->Html->script('//maps.google.com/maps/api/js?sensor=true') ?>
<?= $this->Html->script('owl.carousel.min.js') ?>
<?= $this->Html->script('mousescroll.js') ?>
<?= $this->Html->script('smoothscroll.js') ?>
<?= $this->Html->script('jquery.prettyPhoto.js') ?>
<?= $this->Html->script('jquery.isotope.min.js') ?>
<?= $this->Html->script('jquery.inview.min.js') ?>
<?= $this->Html->script('wow.min.js') ?>
<?= $this->Html->script('main.js') ?>

<?= $this->Html->script('app.js') ?>
<?= $this->Html->script('form.js') ?>
<script>
// Config FORM/APP.JS

var LIKE_URL = "<?= $this->Html->url(array('controller' => 'news', 'action' => 'like')) ?>";
var DISLIKE_URL = "<?= $this->Html->url(array('controller' => 'news', 'action' => 'dislike')) ?>";

var LOADING_MSG = "<?= $Lang->get('GLOBAL__LOADING') ?>";
var ERROR_MSG = "<?= $Lang->get('GLOBAL__ERROR') ?>";
var INTERNAL_ERROR_MSG = "<?= $Lang->get('ERROR__INTERNAL_ERROR') ?>";
var FORBIDDEN_ERROR_MSG = "<?= $Lang->get('ERROR__FORBIDDEN') ?>"
var SUCCESS_MSG = "<?= $Lang->get('GLOBAL__SUCCESS') ?>";

var CSRF_TOKEN = "<?= $csrfToken ?>";
</script>

<?php if(isset($google_analytics) && !empty($google_analytics)) { ?>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', '<?= $google_analytics ?>', 'auto');
    ga('send', 'pageview');
  </script>
<?php } ?>
<?= (isset($configuration_end_code)) ? $configuration_end_code : '' ?>


</body>

</html>
