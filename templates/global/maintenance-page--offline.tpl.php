<?php

/**
 * @file
 * Implementation to display a single Drupal page while offline.
 *
 * All the available variables are mirrored in page.tpl.php.
 * In a multisite set up, these variables should be set for the 
 * tpl to be used/
 * $conf['install_profile'] = "multisite_drupal_XXX";
 * $conf['maintenance_theme'] = 'ec_resp';
 */
?><!DOCTYPE html>
<html lang="<?php print (isset($language) ? $language->language : "") ?>">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>

  <div id="layout-header">
    <div class="container">
      <img alt="European Commission logo" id="banner-flag" src="<?php print $logo; ?>" />

      <div id="main-title">Site Offline</div>
    </div>
  </div><!-- /#layout-header -->

  <div class="panel panel-default">
    <div class="container">
      <div class="page-header">
        <h1>The website is currently under maintenance</h1>
        <p>&nbsp;&nbsp;</p>
        <p>&nbsp;&nbsp;</p>
        <p>We should be back shortly. Thank you for your patience.</p>
        <p>&nbsp;&nbsp;</p>
        <p>&nbsp;&nbsp;</p>
        <p>&nbsp;&nbsp;</p>
        <p>&nbsp;&nbsp;</p>
        <p>&nbsp;&nbsp;</p>
        <p>&nbsp;&nbsp;</p>
        <p>&nbsp;&nbsp;</p>
      </div>

  </div>
  <div id="layout-footer">
    <div class="container">
      <div class="region region-footer">
        <div id="block-cce-basic-config-footer-ipg" class="block block-cce-basic-config contextual-links-region " >
          <div class="content"><a href="#top-page">Top</a> | 
            <ul class="menu clearfix list-group list-group-flush list-unstyled">
              <li class="first leaf"><a href="http://ec.europa.eu/geninfo/legal_notices_en.htm" data-display-title="1" data-remove-class="1">Legal notice</a></li>
              <li class="leaf"><a href="http://ec.europa.eu/cookies/index_en.htm" data-display-title="1" data-remove-class="1">Cookies</a></li>
              <li class="leaf"><a href="http://ec.europa.eu/contact/index_en.htm" data-display-title="1" data-remove-class="1">Contact on Europa</a></li>
              <li class="last leaf"><a href="http://ec.europa.eu/geninfo/query/search_en.html" data-display-title="1" data-remove-class="1">Search on Europa</a></li>
           </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
