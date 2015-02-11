<h2 class="section-title"><?php print t('Testimonios') ?></h2>
<p class="section-subtitle"><?php print t('Nuestros Globers te cuentan cómo es trabajar y hacer carrera en Globant.') ?></p>
<?php foreach ($variables['nodes'] as $key => $node): ?>
  <?php if($key == 0 || $key == 6): ?>
    <div class="row">
  <?php endif; ?>
      <div class="col-md-2 studio">
      <a href="#" class="studio-content" data-toggle="modal" data-target="#video<?php print $key ?>">
        <div class="thumbnail-wrapper"><?php print $node['thumb'] ?></div>
        <span class="studio-overlay">
            <?php print $node['title'] ?><?php if($node['subtitulo']): ?><span class="video-author"><?php print $node['subtitulo'] ?></span><?php endif; ?>
        </span>
      </a>
    </div>
  <?php if($key == 5 || $key == 11 || $key == (count($variables['nodes']) - 1)): ?>
    </div>
  <?php endif; ?>
<?php endforeach; ?>
<script>
  jQuery(document).ready(function($) {
    // Reset every player
    $('.close').click(function() {
      var modal = $(this).closest('.modal-content');
      //First get the  iframe URL
      var url = modal.find('iframe').attr('src');
      //Then assign the src to null, this then stops the video been playing
      modal.find('iframe').attr('src', '');
      // Finally you reasign the URL back to your iframe, so when you hide and load it again you still have the link
      modal.find('iframe').attr('src', url);
    });
  });
</script>
<?php foreach ($variables['nodes'] as $key => $node): ?>
  <div class="modal fade " id="video<?php print $key ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <div class="modal-column-left">
            <h4 class="modal-title" id="myModalLabel">
              <?php print $node['title'] ?>
              <?php if($node['subtitulo']): ?><br><span class="video-author"><?php print $node['subtitulo'] ?></span><?php endif; ?>
            </h4>
          </div>
        </div>
        <div class="modal-body">
          <?php print $node['video'] ?>
          <div class="modal-video-description">
            <?php print $node['body'] ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>