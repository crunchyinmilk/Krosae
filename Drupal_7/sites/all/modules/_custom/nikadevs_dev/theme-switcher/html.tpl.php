<?php
  $themes = array(
    'stability' => 'stability-responsive-drupal-7-ubercart-theme/7555904',
    'wunderkind' => '-wunderkind-one-page-parallax-drupal-7-theme/7864554',
    'progressive' => 'progressive-multipurpose-responsive-drupal-theme/8624928',
    'aurum' => 'aurum-responsive-multipurpose-drupal-theme/9612568'
  );
  $q_themes = array(
    'wunderkind' => 'demo',
  );
  $q = substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], '?'));
?>
<!DOCTYPE html>
<head>
  <title><?php print ucfirst($_GET['theme']) . ' - Responsive Drupal Theme'; ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
  <link rel="shortcut icon" href="/sites/all/modules/_custom/nikadevs_dev/theme-switcher/img/favicon.ico" type="image/vnd.microsoft.icon">
  <link type="text/css" rel="stylesheet" href="/sites/all/modules/_custom/nikadevs_dev/theme-switcher/css/theme-switcher.css" media="all">
  <link type="text/css" rel="stylesheet" href="/sites/all/modules/_custom/nikadevs_dev/theme-switcher/css/font-awesome/css/font-awesome.css" media="all">
  <script src="sites/all/modules/_custom/nikadevs_dev/theme-switcher/js/jquery-1.11.0.min.js"></script>
  <script src="sites/all/modules/_custom/nikadevs_dev/theme-switcher/js/theme-switcher.js"></script>
</head>
<body>
  <div id="theme-switcher">
    <img class = "logo" src="/sites/all/modules/_custom/nikadevs_dev/theme-switcher/img/logo.png" alt="">
    
    <ul id="themes">
      <a id="active_theme" href="#"><?php print $_GET['theme']; ?></a><i class="fa fa-angle-down"></i>
      <ul id = "themes-list">
        <?php foreach($themes as $theme => $url): ?>
          <li>
            <a href="http://<?php print $theme; ?>.nikadevs.com/<?php print isset($q_themes[$theme]) ? $q_themes[$theme] : ''; ?>?theme=<?php print $theme; ?>"><?php print ucfirst($theme); ?></a>
          </li> 
        <?php endforeach; ?>
      </ul>
      <div class="preview"><img src="http://nikadevs.com/files/TF_Stability/preview.png" alt=""></div>
    </ul>
    <a href="<?php print 'http://' . $_GET['theme'] . '.nikadevs.com' . $q; ?>" class = "remove-frame"><i class="fa fa-times"></i></a>
    <a href="<?php print 'http://themeforest.net/item/' . $themes[$_GET['theme']] . '?ref=NikaDevs'; ?>" class = "purchase-theme"><i class="fa fa-shopping-cart"></i>Purchase Theme</a>
  </div>
  <iframe id="iframe" src="<?php print 'http://' . $_GET['theme'] . '.nikadevs.com' . $q; ?>" frameborder="0" width="100%"></iframe>
</body>