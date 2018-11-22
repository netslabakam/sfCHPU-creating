<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>

  </head>
  <body>
  <a href="<?php echo url_for('@homepage')?>" class="navbar-brand">Homepage</a>
  <a href="<?php echo url_for('@chpu_new') ?>" class="nav-link waves-effect waves-light">Post new</a>
    <?php echo $sf_content ?>
  </body>
</html>
