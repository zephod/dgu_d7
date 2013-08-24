<!DOCTYPE html>
<html lang="<?php print $language->language; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <link rel="stylesheet" href="/assets/css/datagovuk.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="/assets/js/vendor.min.js"></script>
    <?php print $scripts; ?>
    <!-- HTML5 element support for IE6-8 -->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
<?php print $page_top; //stuff from modules always render first ?>
<?php print $page; // uses the page.tpl ?>
<?php print $page_bottom; //stuff from modules always render last ?>
  <!-- Drupal class shim  ::  TODO update core Drupal install to set these correctly -->
  <script>
    window.$ = window.jQuery;
    $(function() {
      $('#sidebar1').remove()
      $('.breadcrumb').remove();

      $('#main-content > article').addClass('boxed');

      $('.panel-pane').addClass('boxed');

      $('.panel-2col .panel-col-first').addClass('span8')'panel-col-first');
      $('.panel-2col .panel-col-last').addClass('span4')'panel-col-last');
      $('.panel-2col').addClass('row-fluid')'panel-2col');

      $('.panel-3col-33 .panel-col-first').addClass('span4')'panel-col-first');
      $('.panel-3col-33 .panel-col').addClass('span4')'panel-col');
      $('.panel-3col-33 .panel-col-last').addClass('span4')'panel-col-last');
      $('.panel-3col-33').addClass('row-fluid')'panel-3col-33');

      var navbar = '\
  <ul id="dgu-nav" class="nav">\
    <li class="nav-home"><a href="/home"><div class="nav-icon"></div>Home</a></li>\
    <li class="nav-data active"><a href="/data">Data</a></li>\
    <li class="nav-data-requests"><a href="/odug">Data requests</a></li>\
    <li class="nav-apps"><a href="/apps">Apps</a></li>\
    <li class="nav-blogs"><a href="/blog">Blogs</a></li>\
    <li class="nav-forum"><a href="/forum">Forum</a></li>\
    <li class="nav-location"><a href="/location">Location</a></li>\
    <li class="nav-linked-data"><a href="/linked-data">Linked Data</a></li>\
    <li class="nav-about"><a href="/about">About</a></li>\
  </ul>';
      if (window.location.hash.indexOf('hacknav')>=0) {
          var activeText = $('ul#dgu-nav').find('.active a').text();
          $('ul#dgu-nav').parent().html(navbar);
          $('ul#dgu-nav .active').removeClass('active');
          $('ul#dgu-nav a:contains("'+activeText+'")').parent().addClass('active');
      }


    });
  </script>
</body>
</html>

