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
      <div class="container">

        <h2 class="section-title">Conocenos</h2>
        <p class="section-subtitle">Somos un nuevo tipo de jugador entre las empresas de servicios de tecnología</p>

        <iframe width="492" height="277" src="//www.youtube.com/embed/-auLCHCAkWA" frameborder="0" allowfullscreen></iframe>

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <p>Nos enfocamos en el desarrollo de soluciones de software innovadoras basadas en tecnologías y tendencias emergentes.</p>
            </div>
            <div class="item">
              <p>Vení a desayunar con nosotros y a vivir la experiencia Glober! <br/>
                Más información <a href="http://communications.globant.com/Comm/Recruiting/2014/Openhouse/" target="_blank">aquí</a>
            </div>
          </div>
          
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          </ol>
        </div>
      </div>
    </section>
  </div>
</div>
