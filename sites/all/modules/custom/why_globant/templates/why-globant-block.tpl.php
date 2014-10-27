<div class="panel-group" id="accordion">
    <?php foreach($variables['nodes'] as $key => $node): ?>

        <div class="panel panel-default clients-panel">
          <div id="collapse<?= $key + 1 ?>" class="panel-collapse collapse <?php if (($key + 1) == 1) print 'in'; ?>">
            <div class="panel-body container">
                <?= $node['bk_image'] ?>
                <p class="eyebrow"><?= $node['title'] ?></p>
                <div class="panel-column-right">
                  <h3>G-moves</h3>
                  <?= $node['description'][LANGUAGE_NONE][0]['safe_value'] ?>
                </div>
                <div class="row-3-images">
                  <?php foreach ($node['images'] as $image) : ?>
                    <figure class="image-wrapper">
                      <?= $image['image'] ?>
                      <figcaption class="image-caption"><?= $image['title']?></figcaption>
                    </figure>
                  <?php endforeach; ?>
                </div>
                <ul class="clients-list">
                  <?php foreach ($node['logos'] as $logo) : ?>
                    <li><?= $logo ?></li>
                  <?php endforeach; ?>
                </ul>
            </div>
          </div>
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $key + 1 ?>">
                <span class="container">
                  <?= $node['title'] ?>
                </span>
              </a>
            </h4>
          </div>
        </div>

    <?php endforeach; ?>
</div>