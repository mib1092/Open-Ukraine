<!-- saved from url=(0014)about:internet -->
<!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7" manifest="default.appcache" <?php print $html_attributes; ?>><![endif]-->
<!--[if lte IE 6]><html class="lt-ie9 lt-ie8 lt-ie7" manifest="default.appcache" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="lt-ie9 lt-ie8" manifest="default.appcache" <?php print $html_attributes; ?>><![endif]-->
<!--[if IE 8]><html class="lt-ie9" manifest="default.appcache" <?php print $html_attributes; ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html <?php print $html_attributes . $rdf_namespaces; ?> manifest="default.appcache"><!--<![endif]-->

<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>

  <?php if ($default_mobile_metatags): ?>
<!--    <meta name="MobileOptimized" content="width">-->
<!--    <meta name="HandheldFriendly" content="true">-->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>
      var metas = document.getElementsByTagName('meta');
      var i;
      if (navigator.userAgent.match(/iPhone/i)) {
        for (i=0; i<metas.length; i++) {
          if (metas[i].name == "viewport") {
            metas[i].content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
          }
        }
        document.addEventListener("gesturestart", gestureStart, false);
      }
      function gestureStart() {
        for (i=0; i<metas.length; i++) {
          if (metas[i].name == "viewport") {
            metas[i].content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6";
          }
        }
      }
    </script>
  <?php endif; ?>
  <meta http-equiv="cleartype" content="on">

  <?php print $styles; ?>
  <?php print $scripts; ?>
  <?php if ($add_html5_shim and !$add_respond_js): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/html5.js"></script>
    <![endif]-->
  <?php elseif ($add_html5_shim and $add_respond_js): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/html5-respond.js"></script>
    <![endif]-->
  <?php elseif ($add_respond_js): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/respond.js"></script>
    <![endif]-->
  <?php endif; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div class="wrapper">
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
