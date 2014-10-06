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
      <div class="hero-container">
        <img class="hero-image" src="<?php print path_to_theme(); ?>/assets/hero_image.png" />
      </div>
      <?php print $content['row1']; ?>
      HERE GOES HERO<br>
      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
    </section>

    <section id="row2" class="glb-section location">
      <?php print $content['row2']; ?>

      <h2>Por que Globant</h2>
      <p class="subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>

      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                <span class="container">
                  Tenemos un mismo horizonte como equipo
                </span>
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
              <div class="container bkg-image-container">
                <img class="bkg-image" src="<?php print path_to_theme(); ?>/assets/bkg_location.png" />
                <div class="bkg-image-content">
                  <p class="eyebrow">Contamos con 29 oficinas en 7 paises</p>
                  <div class="col-sm-6 col-md-5 col-md-offset-7 col-lg-6 col-lg-offset-0">
                    <h3>G-moves</h3>
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee.</p>
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                <span class="container">
                  Trabajamos con las empresas más innovadoras
                </span>
              </a>
            </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">
              <div class="container bkg-image-container">
                <img class="bkg-image" src="<?php print path_to_theme(); ?>/assets/bkg_location.png" />
                <div class="bkg-image-content">
                  <p class="eyebrow">Contamos con 29 oficinas en 7 paises</p>
                  <div class="col-sm-6 col-md-5 col-md-offset-7 col-lg-6 col-lg-offset-0">
                    <h3>G-moves</h3>
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee.</p>
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                <span class="container">
                  Tenemos 1033 proyectos donde podrás trabajar
                </span>
              </a>
            </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
              <div class="container bkg-image-container">
                <img class="bkg-image" src="<?php print path_to_theme(); ?>/assets/bkg_location.png" />
                <div class="bkg-image-content">
                  <p class="eyebrow">Contamos con 29 oficinas en 7 paises</p>
                  <div class="col-sm-6 col-md-5 col-md-offset-7 col-lg-6 col-lg-offset-0">
                    <h3>G-moves</h3>
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee.</p>
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                <span class="container">
                  Expertos harán una diferencia en tu carrera
                </span>
              </a>
            </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
              <div class="container bkg-image-container">
                <img class="bkg-image" src="<?php print path_to_theme(); ?>/assets/bkg_location.png" />
                <div class="bkg-image-content">
                  <p class="eyebrow">Contamos con 29 oficinas en 7 paises</p>
                  <div class="col-sm-6 col-md-5 col-md-offset-7 col-lg-6 col-lg-offset-0">
                    <h3>G-moves</h3>
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee.</p>
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="row3" class="glb-section studios">
      <div class="container">
        <?php print $content['row3']; ?>

        <h2>Experiencia Glober</h2>
        <p class="subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.</p>
      </div>

      <div class="row">
        <div class="col-md-2 studio bkg-green">
          <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-01">
            <img src="<?php print path_to_theme(); ?>/images/studios/gaming.png" alt="Lorem">
            <span class="studio-overlay">
              This a Studio Description
            </span>
          </a>
        </div>
        <div class="col-md-2 studio bkg-orange">
          <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-02">
            <img src="<?php print path_to_theme(); ?>/images/studios/quality-engineering.png" alt="Lorem">
            <span class="studio-overlay">
              This a Studio Description
            </span>
          </a>
        </div>
        <div class="col-md-2 studio bkg-blue">
          <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-03">
            <img src="<?php print path_to_theme(); ?>/images/studios/ux-and-social.png" alt="Lorem">
            <span class="studio-overlay">
              This a Studio Description
            </span>
          </a>
        </div>
        <div class="col-md-2 studio bkg-green">
          <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-04">
            <img src="<?php print path_to_theme(); ?>/images/studios/enterprise-consumerization.png" alt="Lorem">
            <span class="studio-overlay">
              This a Studio Description
            </span>
          </a>
        </div>
        <div class="col-md-2 studio bkg-violet">
          <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-05">
            <img src="<?php print path_to_theme(); ?>/images/studios/wearables-and-internet-of-the-things.png" alt="Lorem">
            <span class="studio-overlay">
              This a Studio Description
            </span>
          </a>
        </div>
        <div class="col-md-2 studio bkg-orange">
          <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-05">
            <img src="<?php print path_to_theme(); ?>/images/studios/digital-content.png" alt="Lorem">
            <span class="studio-overlay">
              This a Studio Description
            </span>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2 studio bkg-blue">
          <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-06">
            <img src="<?php print path_to_theme(); ?>/images/studios/after-going-live.png" alt="Lorem">
            <span class="studio-overlay">
              This a Studio Description
            </span>
          </a>
        </div>
        <div class="col-md-2 studio bkg-violet">
          <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-07">
            <img src="<?php print path_to_theme(); ?>/images/studios/product-innovation.png" alt="Lorem">
            <span class="studio-overlay">
              This a Studio Description
            </span>
          </a>
        </div>
        <div class="col-md-2 studio bkg-green">
          <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-08">
            <img src="<?php print path_to_theme(); ?>/images/studios/consumer-experience.png" alt="Lorem">
            <span class="studio-overlay">
              This a Studio Description
            </span>
          </a>
        </div>
        <div class="col-md-2 studio bkg-blue">
          <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-08">
            <img src="<?php print path_to_theme(); ?>/images/studios/big-data-and-high-performance.png" alt="Lorem">
            <span class="studio-overlay">
              This a Studio Description
            </span>
          </a>
        </div>
        <div class="col-md-2 studio bkg-orange">
          <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-09">
            <img src="<?php print path_to_theme(); ?>/images/studios/mobile.png" alt="Lorem">
            <span class="studio-overlay">
              This a Studio Description
            </span>
          </a>
        </div>
        <div class="col-md-2 studio bkg-green">
          <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-10">
            <img src="<?php print path_to_theme(); ?>/images/studios/cloud-computing-and-infrastructure.png" alt="Lorem">
            <span class="studio-overlay">
              This a Studio Description
            </span>
          </a>
        </div>
      </div>

      <!-- Studios Modals -->
      <div class="modal fade" id="studio-01" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
              <p class="studio-title"><strong>Gaming</strong></p>
            </div>
            <div class="modal-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="modal-footer">
              <p><span>Fuente:</span> IDC</p>
            </div>
          </div>
        </div>
      </div>

    </section>
      
    <section id="row3" class="glb-section hero contact" style="background-image: url('<?php print path_to_theme(); ?>/assets/bkg_contact.png');">
      <div class="container">
        <?php print $content['row3']; ?>

        <h2>Sumate a nuestro equipo</h2>
        <p class="subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.</p>
      </div>
    </section>
  </div>
</div>
