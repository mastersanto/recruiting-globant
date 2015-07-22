<div id="search-positions" class="container">
  <h2 class="section-title"><?php echo t('JOIN OUR TEAM'); ?></h2>
  <p class="section-subtitle"><?php echo t('Dive into the available positions') ?>.</p>
  <div id="filters">
    <p class="dropdown-label"><?php echo t('Filter'); ?>:</p>
    <div class="dropdown">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
        <?php echo t('Location'); ?>
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu cities" role="menu" aria-labelledby="dropdownMenu1">
        <?php foreach($variables['cities'] as $city) : ?>
          <li role="presentation">
          <a role="menuitem" tabindex="-1" href="javascript:void(0)" tid="<?php print $city->tid ?>"><?php print $city->name ?></a>
          </li>
        <?php endforeach; ?>
        <li role="presentation" class="divider"></li>
      </ul>
    </div>
  </div>
  <ul id="filter-results">
    <?php foreach($variables['positions'] as $position) : ?>
      <li>
      <a class="icon-position" city="<?php print $position->cities ?>" 
      href="<?php print $position->field_link_globant[LANGUAGE_NONE][0]['url'] ?>" 
      target="_blank"><strong><?php print $position->title?><strong></a></li>
    <?php endforeach; ?>
  </ul>
</div>