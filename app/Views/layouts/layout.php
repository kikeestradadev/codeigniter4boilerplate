<!DOCTYPE html>
<html class="no-js" lang="en" prefix="og: http://ogp.me/ns#">
  
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en-us"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en-us"> <![endif]-->
<!--[if gt IE 8]><html class="no-js" lang="en-us"> <![endif]-->
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Pagina inicial de MyBoilerplate">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
		<link href="https://fonts.cdnfonts.com/css/akira-expanded" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="<?= base_url('styles.css') ?>">
    <title>Title | Page</title>
  </head>
  <body class="class-name" itemscope itemtype="http://schema.org/WebPage">
    <div class="wrapp">
        <header class="main-header"></header>
        <main class="main-container">
            <?php echo $this->renderSection("content")?>
        </main>
        <footer class="main-footer"></footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="<?= base_url('index-dist.js') ?>"></script>
  </body>
</html>