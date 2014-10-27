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
      <div class="container">
        <?php print $content['row4']; ?>

        <h2 class="section-title">Sumate a nuestro equipo</h2>
        <p class="section-subtitle">Buscá dentro de las posiciones disponibles.</p>
        <div id="filters">
          <p class="dropdown-label">Filtrar:</p>
          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
              Locación
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">New York</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Buenos Aires</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tucumán</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Other US cities</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tandil</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Boston</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mar del Plata</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Bogotá</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">London</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Bahía Blanca</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">San Francisco</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">La Plata</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Medellín</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Rio de Janeiro</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sao Paulo</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Córdoba</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Montevideo</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Resistencia</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Curitiba</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Rosario</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Ciudad de México DF</a></li>
              <li role="presentation" class="divider"></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown">
              Estudio
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Consumer Experience</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Gaming</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Big Data</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Quality Engineering</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Enterprise</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">UX & Social</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mobile</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Cloud Computing</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Product Innovation</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">After Going Live</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Wearables & IOT</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Digital Content</a></li>
            </ul>
          </div>
        </div>
        <ul id="filter-results">
          <li><a href="#" class="icon-position"><strong>UX Senior</strong> Buenos Aires</a></li>
          <li><a href="#" class="icon-position"><strong>UX Senior</strong> Buenos Aires</a></li>
          <li><a href="#" class="icon-position"><strong>UX Senior</strong> Buenos Aires</a></li>
          <li><a href="#" class="icon-position"><strong>UX Senior</strong> Buenos Aires</a></li>
          <li><a href="#" class="icon-position"><strong>UX Senior</strong> Buenos Aires</a></li>
          <li><a href="#" class="icon-position"><strong>UX Senior</strong> Buenos Aires</a></li>
          <li><a href="#" class="icon-position"><strong>UX Senior</strong> Buenos Aires</a></li>
          <li><a href="#" class="icon-position"><strong>UX Senior</strong> Buenos Aires</a></li>
          <li><a href="#" class="icon-position"><strong>UX Senior</strong> Buenos Aires</a></li>
          <li><a href="#" class="icon-position"><strong>UX Senior</strong> Buenos Aires</a></li>
          <li><a href="#" class="icon-position"><strong>UX Senior</strong> Buenos Aires</a></li>
          <li><a href="#" class="icon-position"><strong>UX Senior</strong> Buenos Aires</a></li>
          <li><a href="#" class="icon-position"><strong>UX Senior</strong> Buenos Aires</a></li>
          <li><a href="#" class="icon-position"><strong>UX Senior</strong> Buenos Aires</a></li>
          <li><a href="#" class="icon-position"><strong>UX Senior</strong> Buenos Aires</a></li>
          <li><a href="#" class="icon-position"><strong>UX Senior</strong> Buenos Aires</a></li>
          <li><a href="#" class="icon-position"><strong>UX Senior</strong> Buenos Aires</a></li>
          <li><a href="#" class="icon-position"><strong>UX Senior</strong> Buenos Aires</a></li>
          <li><a href="#" class="icon-position"><strong>UX Senior</strong> Buenos Aires</a></li>
          <li><a href="#" class="icon-position"><strong>UX Senior</strong> Buenos Aires</a></li>
          <li><a href="#" class="icon-position"><strong>UX Senior</strong> Buenos Aires</a></li>
          <li><a href="#" class="icon-position"><strong>UX Senior</strong> Buenos Aires</a></li>
          <li><a href="#" class="icon-position"><strong>UX Senior</strong> Buenos Aires</a></li>
          <li><a href="#" class="icon-position"><strong>UX Senior</strong> Buenos Aires</a></li>
        </ul>
      </div>
    </section>
  </div>
</div>
