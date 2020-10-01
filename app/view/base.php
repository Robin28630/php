<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/img/brand.jpg">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="../web/css/bootstrap.min.css" type="text\css" rel="stylesheet">-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="../web/css/custom.css" type="text\css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#"><img src="/img/brand.jpg"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarMain">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php if ( strpos(\App\Kernel::getUrl(),'home') === 0 ) echo 'active';?>">
            <a class="nav-link" href="/home">Accueil</a>
          </li>
          <li class="nav-item dropdown <?php if ( strpos(\App\Kernel::getUrl(),'game') === 0 ) echo 'active';?>">
            <a class="nav-link dropdown-toggle" href="/game" id="dropdownGame" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Parties</a>
            <div class="dropdown-menu" aria-labelledby="dropdownGame">
              <a class="dropdown-item" href="/game/list">En cours</a>
              <a class="dropdown-item" href="/SignIN/default">connexion</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="container">

		<?php
			echo $content;
		?>

    </main><!-- /.container -->

	<!-- Variables superglobales -->
	<div class="container">
		<p>
			<button class="btn btn-default" type="button" data-toggle="collapse" data-target="#GLBGET" aria-expanded="false" aria-controls="GLBGET">
				$_GET
			</button>
		</p>
		<div id="GLBGET" class="card collapse">
			<div class="card-body">
				<h5 class="card-title">$_GET</h5>
				<?php
					echo '<pre>';
					var_dump($_GET);
					echo '</pre>';
				?>
			</div>
		</div>
		<p>
			<button class="btn btn-default" type="button" data-toggle="collapse" data-target="#GLBCOOKIE" aria-expanded="false" aria-controls="GLBCOOKIE">
				$_POST
			</button>
		</p>
		<div id="GLBCOOKIE" class="card collapse">
			<div class="card-body">
				<h5 class="card-title">$_POST</h5>
				<?php
					echo '<pre>';
					var_dump($_POST);
					echo '</pre>';
				?>
			</div>
		</div>
		<p>
			<button class="btn btn-default" type="button" data-toggle="collapse" data-target="#GLBREQUEST" aria-expanded="false" aria-controls="GLBREQUEST">
				$_REQUEST
			</button>
		</p>
		<div id="GLBREQUEST" class="card collapse">
			<div class="card-body">
				<h5 class="card-title">$_REQUEST</h5>
				<?php
					echo '<pre>';
					var_dump($_REQUEST);
					echo '</pre>';
				?>
			</div>
		</div>
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../web/js/jquery-3.3.1.min.js"></script>
    <script src="../web/js/popper.min.js"></script>
    <script src="../web/js/bootstrap.min.js"></script>
  </body>
</html>
