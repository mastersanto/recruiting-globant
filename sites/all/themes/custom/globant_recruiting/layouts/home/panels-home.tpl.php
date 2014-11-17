<?php
/**
 * @file
 * Template for a 3 column panel layout.
 *
 * This template provides a very simple "one column" panel display layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   $content['middle']: The only panel in the layout.
 */

?>
<div class="panel-display panel-1col clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-panel panel-col">

    <section id="row1" class="glb-section hero">
      <?php print $content['row1']; ?>
    </section>

    <section id="row2" class="glb-section location">
      <?php print $content['row2']; ?>
    </section>

    <section id="row3" class="glb-section studios">
      <?php print $content['row3']; ?>
    </section>

    <!--======== Sumate ========-->
    <section id="row4" class="glb-section hero contact" style="background-image: url('<?php print path_to_theme(); ?>/assets/bkg_contact.png');">
        <?php print $content['row4']; ?>
    </section>

    <!--======== Conocenos ========-->
    <section id="row5" class="glb-section conocenos blue-base">
      <?php print $content['row5']; ?>
    </section>

  </div>
</div>
