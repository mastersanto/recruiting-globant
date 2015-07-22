<div class="container">
  <h2 class="section-title"><?php print t('Meet Us'); ?></h2>
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
  <p class="more-globant">If you want to know more about us, please write to  
  <a href="mailto:careers-in-india@globant.com">careers-in-india@globant.com</a> or visit us at:</p>
  <ul class="social-media">
    <li><a class="social-facebook" href="https://www.facebook.com/Globant" target="_blank">Facebook</a></li>
    <li><a class="social-twitter" href="http://www.twitter.com/globant" target="_blank">Twitter</a></li>
    <li><a class="social-youtube" href="http://www.youtube.com/Globant" target="_blank">YouTube</a></li>
    <li><a class="social-linkedin" href="http://www.linkedin.com/company/globant" target="_blank">LinkedIn</a></li>
    <li><a class="social-pinterest" href="http://www.pinterest.com/globant/" target="_blank">Pinterest</a></li>
    <li><a class="social-foursquare" href="https://foursquare.com/globant" target="_blank">FourSquare</a></li>
    <li><a class="social-googleplus" href="https://plus.google.com/+GlobantPlus/" target="_blank">Google Plus</a></li>
    <li><a class="social-instagram" href="http://instagram.com/globantpics" target="_blank">Pinterest</a></li>
    <li><a class="social-slideshare" href="http://www.slideshare.net/globant/" target="_blank">SlideShare</a></li>
    <li><a class="social-globant" href="http://www.globant.com/" target="_blank">Globant</a></li>
  </ul>
</div>

