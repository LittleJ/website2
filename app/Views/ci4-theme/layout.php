<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <title><?= $pagetitle ?></title>

    <link rel="stylesheet" type="text/css" href="/assets/css/website.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/github-buttons/style.css"/>
  </head>

  <body>


  <!-- Header: navbar + heroe section ----------------------------------------->

  <header>

    <?= $navbar ?>

    <?= $this->include('ci4-theme/_heroe') ?>

  </header>


  <!-- Content ---------------------------------------------------------------->

  <?= $this->renderSection('content') ?>


  <!-- Footer ----------------------------------------------------------------->

  <footer>

    <?= $this->include('ci4-theme/_footer') ?>

  </footer>


  <!-- JS scripts ------------------------------------------------------------->

  <?= $this->include('ci4-theme/_scripts') ?>


  </body>

</html>
