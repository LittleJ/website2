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

	<!-- HEADER: MENU + HEROE SECTION -->
	<header>

		<?= $navbar ?>

	</header>

		<?php if(empty($title)) : ?>
            <?= $this->include('theme/jumbotitle') ?>
        <?php else : ?>
            <?= $this->include('theme/title') ?>
        <?php endif ?>

		<div id="content">
			<div class="container">
                <?= $this->renderSection('content') ?>
			</div>
		</div>

		<div class="footer">
			<div class="footer-menu">
				<div class="container">
					<div class="row">
						<ul class="nav nav-pills">
							<?= $footerbar ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					<div class="row">
                        <p class="text-center">CodeIgniter was created by <a href="http://www.ellislab.com/">EllisLab</a>,
                            fostered by <a href="http://www.bcit.ca/cas/computing/">BCIT</a>,
                            and is a project of the CodeIgniter Foundation.
                            <a href="mailto:admin@codeigniter.com"><span class="glyphicon glyphicon-envelope"></span></a></p>
					</div>
				</div>
			</div>
		</div>

		<script>!function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = p + '://platform.twitter.com/widgets.js';
            fjs.parentNode.insertBefore(js, fjs);
        }
      }(document, 'script', 'twitter-wjs');
		</script>
	</body>
</html>
