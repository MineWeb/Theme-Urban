       <?php
$form_input = array('title' => $Lang->get('THEME__UPLOAD_LOGO'));

if(isset($config['logo']) && $config['logo']) {
  //$logo = explode('/', $config['logo']);
  //$form_input['img'] = '/img/uploads/theme_logo.png';
  $form_input['img'] = $config['logo'];
  $form_input['filename'] = 'theme_logo.png';
}
?>

        <div class="box-header with-border">
          <h3 class="box-title"><?= $Lang->get('THEME__CUSTOMIZATION') ?></h3>
        </div>

        <div class="container">
          <div class="row">
                <div class="col-lg-12">
                    <div style="width: 95%;" class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form method="post" enctype="multipart/form-data" data-ajax="false">

                                      <h2>Parametres Généraux</h2>

                                      <div class="form-group">
                                        <label><?= $Lang->get('THEME__FAVICON_URL') ?></label>
                                        <input type="text" class="form-control" name="favicon_url" value="<?= $config['favicon_url'] ?>">
                                      </div>

                                        <div class="form-group">
                                            <label>IP de votre serveur <small>(Afficher sur le slider)</small></label>
                                            <input type="text" class="form-control" name="slide_ip" value="<?= $config['slide_ip'] ?>">
                                        </div>

                                      <h3>Parametres Particules <small>(Barre de menu)</small></h3>

                                      <div class="form-group">
                                          <label>Nombres de particules <small>0 pour les desactiver (Par default 500)</small></label>
                                          <input type="text" class="form-control" name="nbrp" value="<?= $config['nbrp'] ?>">
                                          <label>Vitesse des particules <small>0 pour desactiver les mouvements (Par default 1)</small></label>
                                          <input type="text" class="form-control" name="vp" value="<?= $config['vp'] ?>">
                                          <label>Effet au survol de la souris <small>(grab = attirance de trait, bubble = faire disparaitre)</small></label>
                                          <input type="text" class="form-control" name="effectp" value="<?= $config['effectp'] ?>">
                                          <label>Couleur des particules <small>(Ecriver l'hexadecimal sans le # - Ex: ffffff (blanc))</small></label>
                                          <input style="border-color:#<?= $theme_config['colorpart'] ?>;" type="text" class="form-control" name="colorpart" value="<?= $config['colorpart'] ?>">                                         

                                      </div>

                                      <h2>Partie 1 <small>(Sous le slider)</small></h2>

                                      <div class="form-group">
                                          <label>Image <small>(.png, .jpg, .gif = 350 x 255 px)</small></label>
                                          <input type="text" class="form-control" name="img_accueil" value="<?= $config['img_accueil'] ?>">
                                      </div>

                                      <div class="form-group">
                                          <label>Titre</label>
                                          <input type="text" class="form-control" name="title_accueil" value="<?= $config['title_accueil'] ?>">
                                      </div>

                                      <div class="form-group">
                                          <label>Texte</label>
                                          <textarea class="form-control" name="text_accueil" rows="3"><?= $config['text_accueil'] ?></textarea>
                                      </div>

                                      <div class="form-group">
                                          <label>Texte Bouton</label>
                                          <input type="text" class="form-control" name="text_btnacc" value="<?= $config['text_btnacc'] ?>">
                                          <label>Lien Bouton</label>
                                          <input type="text" class="form-control" name="lien_btnacc" value="<?= $config['lien_btnacc'] ?>">
                                      </div>

                                      <h3>Fonction de la partie "Rejoindre"</h3>

                                      <div class="form-group">
                                          <label>Texte visites du site</label>
                                          <input type="text" class="form-control" name="info_visite" value="<?= $config['info_visite'] ?>">
                                          <small>Icon fa-</small>
                                          <input type="text" class="form-control" name="fa_visite" value="<?= $config['fa_visite'] ?>">
                                      </div>

                                      <div class="form-group">
                                          <label>Texte Inscrit du site</label>
                                          <input type="text" class="form-control" name="info_inscrit" value="<?= $config['info_inscrit'] ?>">
                                          <small>Icon fa-</small>
                                          <input type="text" class="form-control" name="fa_inscrit" value="<?= $config['fa_inscrit'] ?>">
                                      </div>

                                      <div class="form-group">
                                          <label>Texte Joueurs connecter</label>
                                          <input type="text" class="form-control" name="info_co" value="<?= $config['info_co'] ?>">
                                          <small>Icon fa-</small>
                                          <input type="text" class="form-control" name="fa_co" value="<?= $config['fa_co'] ?>">
                                      </div>

                                      <h4>Fonction Discord</h4>

                                        <div class="form-group">
                                            <label>ID de votre Discord</label>
                                            <input type="text" class="form-control" name="discord" value="<?= $config['discord'] ?>">
                                        </div>

                                      <h3>Fonctions Slider de la Boutique</h3>

                                        <div class="form-group">
                                            <label style="color:#6E3F8C">Slider 1<small>(.png, .jpg = 1170 x 300 px)</small></label>
                                            <input style="border-color:#6E3F8C" type="text" class="form-control" name="slide_shop1" value="<?= $config['slide_shop1'] ?>">
                                        </div>

                                        <div class="form-group">
                                            <label style="color:#6E3F8C">Slider 2<small>(.png, .jpg = 1170 x 300 px)</small></label>
                                            <input style="border-color:#6E3F8C" type="text" class="form-control" name="slide_shop2" value="<?= $config['slide_shop2'] ?>">
                                        </div>

                                        <div class="form-group">
                                            <label style="color:#6E3F8C">Slider 3<small>(.png, .jpg = 1170 x 300 px)</small></label>
                                            <input style="border-color:#6E3F8C" type="text" class="form-control" name="slide_shop3" value="<?= $config['slide_shop3'] ?>">
                                        </div>

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">

                                  <h3>Fonctions partie "Nos serveurs"</h3>

                                  <div class="form-group">
                                      <label>Titre</label>
                                      <input type="text" class="form-control" name="title_serv" value="<?= $config['title_serv'] ?>">
                                  </div>

                                      <h4>Partie 1</h4>

                                      <div class="form-group">
                                          <label style="color:#C1A029">Image<small>(.png, .jpg, .gif = 350 x 210 px)</small></label>
                                          <input style="border-color:#C1A029" type="text" class="form-control" name="img_serv1" value="<?= $config['img_serv1'] ?>">
                                      </div>
                                      <div class="form-group">
                                          <label style="color:#C1A029">Titre</label>
                                         <input style="border-color:#C1A029" type="text" class="form-control" name="titre_serv1" value="<?= $config['titre_serv1'] ?>">
                                      </div>
                                      <div class="form-group">
                                          <label style="color:#C1A029">Texte</label>
                                          <textarea style="border-color:#C1A029" class="form-control" name="text_serv1" rows="3"><?= $config['text_serv1'] ?></textarea>
                                      </div>

                                      <h4>Partie 2</h4>

                                      <div class="form-group">
                                          <label style="color:#476FBA">Image<small>(.png, .jpg, .gif = 350 x 210 px)</small></label>
                                          <input style="border-color:#476FBA" type="text" class="form-control" name="img_serv2" value="<?= $config['img_serv2'] ?>">
                                      </div>
                                      <div class="form-group">
                                          <labe style="color:#476FBA"l>Titre</label>
                                         <input style="border-color:#476FBA" type="text" class="form-control" name="titre_serv2" value="<?= $config['titre_serv2'] ?>">
                                      </div>
                                      <div class="form-group">
                                          <label style="color:#476FBA">Texte</label>
                                        <textarea style="border-color:#476FBA" type="text" class="form-control" name="text_serv2" rows="3"><?= $config['text_serv2'] ?></textarea>
                                      </div>

                                      <h4>Partie 3</h4>

                                      <div class="form-group">
                                          <label style="color:#4CE558">Image<small>(.png, .jpg, .gif = 350 x 210 px)</small></label>
                                          <input style="border-color:#4CE558" type="text" class="form-control" name="img_serv3" value="<?= $config['img_serv3'] ?>">
                                      </div>
                                      <div class="form-group">
                                          <label style="color:#4CE558">Titre</label>
                                         <input style="border-color:#4CE558" type="text" class="form-control" name="titre_serv3" value="<?= $config['titre_serv3'] ?>">
                                      </div>
                                      <div class="form-group">
                                          <label style="color:#4CE558">Texte</label>
                                          <textarea style="border-color:#4CE558" class="form-control" name="text_serv3" rows="3"><?= $config['text_serv3'] ?></textarea>
                                      </div>

                                      <h4>Partie 4</h4>

                                      <div class="form-group">
                                          <label style="color:#D3484A">Image<small>(.png, .jpg, .gif = 350 x 210 px)</small></label>
                                          <input style="border-color:#D3484A" type="text" class="form-control" name="img_serv4" value="<?= $config['img_serv4'] ?>">
                                      </div>
                                      <div class="form-group">
                                          <label style="color:#D3484A">Titre</label>
                                         <input style="border-color:#D3484A" type="text" class="form-control" name="titre_serv4" value="<?= $config['titre_serv4'] ?>">
                                      </div>
                                      <div class="form-group">
                                          <label style="color:#D3484A">Texte</label>
                                          <textarea style="border-color:#D3484A" class="form-control" name="text_serv4" rows="3"><?= $config['text_serv4'] ?></textarea>
                                      </div>

                                      <?= $this->element('form.input.upload.img', $form_input) ?>


                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>

            <div class="row">
              <div class="col-md-12">



                <input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden">

                <button class="btn btn-primary" type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
                <a href="<?= $this->Html->url(array('controller' => 'theme', 'action' => 'index', 'admin' => true)) ?>" type="button" class="btn btn-default"><?= $Lang->get('GLOBAL__CANCEL') ?></a>

              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
  $('#addFeature').on('click', function(e) {
    e.preventDefault();

    var i = $(this).attr('data-i');
    i = parseInt(i) + 1;

    var append = '<hr>';

    append += '<div id="feature-'+i+'">';

      append += '<button style="color:#a94442;" type="button" class="btn btn-link pull-right delete-feature" data-id="'+i+'">Supprimer</button>';

      append += '<div class="form-group">';
        append += '<label>Titre</label>';
        append += '<input type="text" class="form-control" name="homepage_features['+i+'][title]">';
      append += '</div>';

      append += '<div class="form-group">';
        append += '<label>Icône <small><a href="http://fontawesome.io/icons/">Liste des icônes disponibles</a></small></label>';
        append += '<div class="input-group">';
          append += '<span class="input-group-addon">fa fa-</span>';
          append += '<input type="text" class="form-control" name="homepage_features['+i+'][icon]">';
        append += '</div>';
      append += '</div>';

      append += '<div class="form-group">';
        append += '<label>Message</label>';
        append += '<input type="text" class="form-control" name="homepage_features['+i+'][message]">';
      append += '</div>';

    append += '</div>';

    $('#features').append(append);
    $(this).attr('data-i', i);

    deleteFeature();

  });

  function deleteFeature() {
    $('.delete-feature').unbind('click');
    $('.delete-feature').on('click', function(e) {
      e.preventDefault();

      var id = $(this).attr('data-id');
      var el = $('#feature-'+id);

      $(el).slideUp(150, function() {
        $(this).remove();
      });
    })
  }

  deleteFeature();
</script>
