<h2 class="section-title">Testimonios</h2>
<p class="section-subtitle">Nuestros Globers<br> te cuentan más acerca de Globant.</p>
<?php foreach ($variables['nodes'] as $key => $node): ?>
  <?php if($key == 0 || $key == 6): ?>
    <div class="row">
  <?php endif; ?>
      <div class="col-md-2 studio <?php //print $node['color']  ?>">
      <a href="#" class="studio-content" data-toggle="modal" data-target="#video<?php print $key ?>">
        <?php print $node['thumb'] ?>
        <span class="studio-overlay">
            <?php print $node['title'] ?>
        </span>
      </a>
    </div>
  <?php if($key == 5 || $key == 11 || $key == (count($variables['nodes']) - 1)): ?>
    </div>
  <?php endif; ?>
<?php endforeach; ?>

<?php foreach ($variables['nodes'] as $key => $node): ?>
  <div class="modal fade <?php //print $node['color']  ?>" id="video<?php print $key ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <div class="modal-column-left">
            <h4 class="modal-title" id="myModalLabel"><?php print $node['title'] ?></h4>
          </div>
        </div>
        <div class="modal-body">
          <?php print $node['video'] ?>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>