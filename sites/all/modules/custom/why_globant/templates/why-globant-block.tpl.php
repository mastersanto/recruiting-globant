<div class="panel-group" id="accordion">
    <h2 class="section-title"><?php print t('¿Por qué Globant?'); ?></h2>
    <?php foreach($variables['nodes'] as $key => $node): ?>
        <div class="panel panel-default clients-panel <?php print $node['color'] . ' ' . $node['field_color'] ?> ">
          <div id="collapse<?php print $key + 1 ?>" class="panel-collapse collapse <?php if (($key + 1) == 1) print 'in'; ?>">
            <div class="panel-body container">
                <?php print $node['bk_image'] ?>
                <p class="eyebrow"><?php print $node['title'] ?></p>
                <div class="panel-column-right">
                  <h3><?php print $node['subtitulo'] ?></h3>
                  <?php print $node['description'][LANGUAGE_NONE][0]['safe_value'] ?>
                </div>
                <div class="row-3-images">
                  <?php foreach ($node['images'] as $image) : ?>
                    <figure class="image-wrapper">
                      <?php print $image['image'] ?>
                      <figcaption class="image-caption"><?php print $image['title']?></figcaption>
                    </figure>
                  <?php endforeach; ?>
                </div>
                <ul class="clients-list">
                  <?php foreach ($node['logos'] as $logo) : ?>
                    <li><?php print $logo ?></li>
                  <?php endforeach; ?>
                </ul>
            </div>
          </div>
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php print $key + 1 ?>">
                <span class="container">
                  <?php print $node['title'] ?>
                </span>
              </a>
            </h4>
          </div>
        </div>

    <?php endforeach; ?>
</div>