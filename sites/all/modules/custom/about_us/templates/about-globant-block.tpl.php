<div class="container">
  <h2 class="section-title"><?php print t('Conocenos'); ?></h2>
  <p class="section-subtitle"><?php print $variables['title'] ?></p>
    <p>Si querés saber más sobre Globant, escribinos a <a href="mailto:info@globant.como ">info@globant.como</a> visitanos en:</p>
    <p>
    <table width="227" border="0" align="center">
        <tbody><tr>
            <td width="32"><a href="https://api.addthis.com/oexchange/0.8/forward/facebook/offer?url=http%3A%2F%2Fwww.addthis.com&amp;pubid=ra-54981f0d18d338d4&amp;ct=1&amp;title=AddThis%20-%20Get%20likes%2C%20get%20shares%2C%20get%20followers&amp;pco=tbxnj-1.0" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/facebook.png" border="0" alt="Facebook"></a></td>
            <td width="33"><a href="https://api.addthis.com/oexchange/0.8/forward/twitter/offer?url=http%3A%2F%2Fwww.addthis.com&amp;pubid=ra-54981f0d18d338d4&amp;ct=1&amp;title=AddThis%20-%20Get%20likes%2C%20get%20shares%2C%20get%20followers&amp;pco=tbxnj-1.0" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/twitter.png" border="0" alt="Twitter"></a></td>
            <td width="32"><a href="https://api.addthis.com/oexchange/0.8/forward/linkedin/offer?url=http%3A%2F%2Fwww.addthis.com&amp;pubid=ra-54981f0d18d338d4&amp;ct=1&amp;title=AddThis%20-%20Get%20likes%2C%20get%20shares%2C%20get%20followers&amp;pco=tbxnj-1.0" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/linkedin.png" border="0" alt="LinkedIn"></a></td>
            <td width="34"><a href="https://api.addthis.com/oexchange/0.8/forward/google_plusone_share/offer?url=http%3A%2F%2Fwww.addthis.com&amp;pubid=ra-54981f0d18d338d4&amp;ct=1&amp;title=AddThis%20-%20Get%20likes%2C%20get%20shares%2C%20get%20followers&amp;pco=tbxnj-1.0" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/google_plusone_share.png" border="0" alt="Google+"></a></td>
            <td width="32"><a href="https://api.addthis.com/oexchange/0.8/forward/pinterest/offer?url=http%3A%2F%2Fwww.addthis.com&amp;pubid=ra-54981f0d18d338d4&amp;ct=1&amp;title=AddThis%20-%20Get%20likes%2C%20get%20shares%2C%20get%20followers&amp;pco=tbxnj-1.0" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/pinterest.png" border="0" alt="Pinterest"></a></td>
            <td width="32"><a href="https://www.addthis.com/bookmark.php?source=tbx32nj-1.0&amp;v=300&amp;url=http%3A%2F%2Fwww.addthis.com&amp;pubid=ra-54981f0d18d338d4&amp;ct=1&amp;title=AddThis%20-%20Get%20likes%2C%20get%20shares%2C%20get%20followers&amp;pco=tbxnj-1.0" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/addthis.png" border="0" alt="Addthis"></a></td>
        </tr></tbody>
    </table>
    </p>
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

