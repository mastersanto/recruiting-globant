<h1 class="page-title"><span><?php print $variables['title']; ?></span></h1>
<div class="hero-container">
	<?php if(!empty($variables['url'])): ?>
		<a href="<?php echo $variables['url'] ?>" target="_blank">
	  	<?php print $variables['image']; ?>
	  	</a>
  	<?php else: ?>
  		<?php print $variables['image']; ?>	
  	<?php endif; ?>
</div>