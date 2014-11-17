<div class="container">
  <h2 class="section-title"><?php print t('Conócenos'); ?></h2>
  <p class="section-subtitle"><?php print $variables['title'] ?></p>

  <?php print $variables['video'] ?>

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <?php foreach($variables['statements'] as $key => $statement): ?>
        <div class="item <?php print $key == 0 ? 'active' : '' ?>">
          <?php print $statement ?>
        </div>
      <?php endforeach; ?>
    </div>
    <!-- Indicators -->
    <ol class="carousel-indicators">
    <?php foreach($variables['statements'] as $key => $statement): ?>
      <li data-target="#carousel-example-generic" data-slide-to="<?php print $key ?>" class="<?php print $key == 0 ? 'active' : '' ?>"></li>
    <?php endforeach; ?>
    </ol>
  </div>
</div>

