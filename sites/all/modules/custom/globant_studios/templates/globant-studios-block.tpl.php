<h2 class="section-title">Testimonios</h2>
<p class="section-subtitle">Nuestros Globers<br> te cuentan más acerca de Globant.</p>
<div class="row">
  <div class="col-md-2 studio bkg-green">
    <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-01">
      <img src="<?php print drupal_get_path('theme', 'globant_recruiting'); ?>/assets/studios/gaming.png" alt="Lorem">
            <span class="studio-overlay">
              Enim eiusmod high life accusamus terry richardson ad squid
              <span class="studio-name">Gaming</span>
            </span>
    </a>
  </div>
  <div class="col-md-2 studio bkg-orange">
    <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-02">
      <img src="<?php print drupal_get_path('theme', 'globant_recruiting'); ?>/assets/studios/quality-engineering.png" alt="Lorem">
            <span class="studio-overlay">
              Enim eiusmod high life accusamus terry richardson ad squid
              <span class="studio-name">Qualit Engineering</span>
            </span>
    </a>
  </div>
  <div class="col-md-2 studio bkg-blue">
    <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-03">
      <img src="<?php print drupal_get_path('theme', 'globant_recruiting'); ?>/assets/studios/ux-and-social.png" alt="Lorem">
            <span class="studio-overlay">
              Enim eiusmod high life accusamus terry richardson ad squid
              <span class="studio-name">UX & Social</span>
            </span>
    </a>
  </div>
  <div class="col-md-2 studio bkg-green">
    <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-04">
      <img src="<?php print drupal_get_path('theme', 'globant_recruiting'); ?>/assets/studios/enterprise-consumerization.png" alt="Lorem">
            <span class="studio-overlay">
              Enim eiusmod high life accusamus terry richardson ad squid
              <span class="studio-name">Enterprise Consumerization</span>
            </span>
    </a>
  </div>
  <div class="col-md-2 studio bkg-violet">
    <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-05">
      <img src="<?php print drupal_get_path('theme', 'globant_recruiting'); ?>/assets/studios/wearables-and-internet-of-the-things.png" alt="Lorem">
            <span class="studio-overlay">
              Enim eiusmod high life accusamus terry richardson ad squid
              <span class="studio-name">Wearables & Internet of Things</span>
            </span>
    </a>
  </div>
  <div class="col-md-2 studio bkg-orange">
    <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-06">
      <img src="<?php print drupal_get_path('theme', 'globant_recruiting'); ?>/assets/studios/digital-content.png" alt="Lorem">
            <span class="studio-overlay">
              Enim eiusmod high life accusamus terry richardson ad squid
              <span class="studio-name">Digital Content</span>
            </span>
    </a>
  </div>
</div>
<div class="row">
  <div class="col-md-2 studio bkg-blue">
    <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-07">
      <img src="<?php print drupal_get_path('theme', 'globant_recruiting'); ?>/assets/studios/after-going-live.png" alt="Lorem">
            <span class="studio-overlay">
              Enim eiusmod high life accusamus terry richardson ad squid
              <span class="studio-name">After Going Live</span>
            </span>
    </a>
  </div>
  <div class="col-md-2 studio bkg-violet">
    <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-08">
      <img src="<?php print drupal_get_path('theme', 'globant_recruiting'); ?>/assets/studios/product-innovation.png" alt="Lorem">
            <span class="studio-overlay">
              Enim eiusmod high life accusamus terry richardson ad squid
              <span class="studio-name">Product Innovation</span>
            </span>
    </a>
  </div>
  <div class="col-md-2 studio bkg-green">
    <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-09">
      <?= $variables[1]['thumb'] ?>
      <span class="studio-overlay">
          <?= $variables[1]['title'] ?>
      </span>
    </a>
  </div>
  <div class="col-md-2 studio bkg-blue">
    <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-10">
      <?= $variables[0]['thumb'] ?>
      <span class="studio-overlay">
          <?= $variables[0]['title'] ?>
      </span>
    </a>
  </div>
  <div class="col-md-2 studio bkg-orange">
    <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-11">
      <img src="<?php print drupal_get_path('theme', 'globant_recruiting'); ?>/assets/studios/mobile.png" alt="Lorem">
            <span class="studio-overlay">
              IDC: Top vendors for mobile application development
              <span class="studio-name">Mobile</span>
            </span>
    </a>
  </div>
  <div class="col-md-2 studio bkg-green">
    <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-12">
      <img src="<?php print drupal_get_path('theme', 'globant_recruiting'); ?>/assets/studios/cloud-computing-and-infrastructure.png" alt="Lorem">
            <span class="studio-overlay">
              Enim eiusmod high life accusamus terry richardson ad squid
              <span class="studio-name">Cloud Computing & Infrastructure</span>
            </span>
    </a>
  </div>
</div>

<!--======== Studios Modals ========-->
<!-- Consumer Experience -->
<div class="modal fade green-base" id="studio-09" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <div class="modal-column-left">
          <h4 class="modal-title" id="myModalLabel"><?= $variables[1]['title'] ?></h4>
        </div>
      </div>
      <div class="modal-body">
        <?= $variables[1]['video'] ?>
      </div>
    </div>
  </div>
</div>
<!-- Big Data & High Performance -->
<div class="modal fade blue-base" id="studio-10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <div class="modal-column-left">
          <h4 class="modal-title" id="myModalLabel"><?= $variables[0]['title'] ?></h4>
        </div>
      </div>
      <div class="modal-body">
        <?= $variables[0]['video'] ?>
      </div>
    </div>
  </div>
</div>
<!-- Mobile -->
<div class="modal fade orange-base" id="studio-11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <div class="modal-column-left">
          <h4 class="modal-title" id="myModalLabel">IDC: Top vendors for mobile application development</h4>
          <p class="studio-title"><strong>Mobile</strong></p>
        </div>
      </div>
      <div class="modal-body">
        <div class="modal-column-left">
          <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
        <div class="modal-column-right">
          <img class="modal-image" src="<?php print drupal_get_path('theme', 'globant_recruiting'); ?>/assets/studios/modal-IDC-logo.png" alt="Lorem">
        </div>
      </div>
      <div class="modal-footer">
        <p>Fuente: <span>IDC</span></p>
      </div>
    </div>
  </div>
</div>