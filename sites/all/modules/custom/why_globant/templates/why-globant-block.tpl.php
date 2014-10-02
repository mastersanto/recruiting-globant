<h2><?= t('Por qué Globant') ?></h2>
<p class="subtitle"><?= t('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.') ?></p>

<div class="panel-group" id="accordion">
    <?php foreach($variables['nodes'] as $key => $node): ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $key ?>">
                <span class="container">
                  <?= $node['title'] ?>
                </span>
                    </a>
                </h4>
            </div>
            <div id="collapse<?= $key ?>" class="panel-collapse collapse in">
                <div class="panel-body">
                    <div class="container bkg-image-container">
                        <?= $node['image'] ?>
                        <div class="bkg-image-content">
                            <?= $node['description'][LANGUAGE_NONE][0]['safe_value'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>