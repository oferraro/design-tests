<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Framework</title>
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/remodal.css">
	<link rel="stylesheet" href="css/remodal-default-theme.css">

    <link rel="stylesheet" href="style.css">
	
</head>
<body>

<div class="container">
<?php
	$base_url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
?>
<nav class="row">
	<ul class="menu theMenu">
		<li class="col-1"><a href="http://<?php echo $base_url; ?>">Home</a></li>
		<li class="col-1"><a href="#login">Sign In</a></li>
		<li class="col-1"><a href="#">Sign Up</a></li>
	</ul>
</nav>
	
	<header class="title col-12">
		Titulo
	</header>
	
<?php 
$contentImg=<<<HERECONTENT1
		<div class="bg-image">
				<div class="info">
					<div class="text-info">Texto</div>
				</div>
			</div>	
HERECONTENT1;
	$contentTxt =<<<HERECONTENT2
			<div class='txtCols'>
				<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
			</div>
HERECONTENT2;
?>	

<div class="remodal" data-remodal-id="login" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  <div class="remodal1">
    <h2 id="modal1Title">Login</h2>
	<form>
		<div class="row">
			<div class="push-3 col-2">Username:</div> <input type="text" placeholder="Username" class="col-3 push-3">
		</div>
		<div class="row">
			<div class="push-3 col-2">Password:</div> <input type="password" placeholder="Password" class="col-3 push-3">
		</div>
	</form>
  </div>
  <br>
  <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
  <button data-remodal-action="confirm" class="remodal-confirm">OK</button>
</div>

<div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  <div class="remodal1">
    <h2 id="modal1Title">Ejemplo</h2>
	<?php echo $contentImg; ?>
  </div>
  <br>
  <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
  <button data-remodal-action="confirm" class="remodal-confirm">OK</button>
</div>

<div class="remodal" data-remodal-id="modal2" role="dialog" aria-labelledby="modal2Title" aria-describedby="modal2Desc">
  <div class="remodal2">
    <h2 id="modal2Title">Titulo</h2>
    <?php echo $contentImg; ?>
  </div>
  <br>
  <button data-remodal-action="confirm" class="remodal-confirm">OK</button>
</div>

	<section class="row images">
		<article class="col-4">
			<a href="#modal"><?php echo $contentImg . $contentTxt; ?></a>
		</article>
		<article class="col-4">
			<a href="#modal2"><?php echo $contentImg . $contentTxt; ?></a>
		</article>
		<article class="col-4">
			<a href="#modal"><?php echo $contentImg . $contentTxt; ?></a>
		</article>
	</section>
	
	
	<aside class="banner">
	</aside>
	
	<article class="row images">
		<article class="push-2 col-4">
			<a href="#modal"><?php echo $contentImg . $contentTxt; ?></a>
		</article>

		<article class="col-4 push-2">
			<a href="#modal"><?php echo $contentImg . $contentTxt; ?></a>
		</article>
	</article>
	
</div>

<div class="separation"></div>
	
<footer class="text-center theFooter">
	Footer
</footer>
	
	<!-- jQuery and Plugins -->
	<script src="js/jquery-2.1.1.min.js"></script>
	<!-- Modules -->
	<script src="js/jquery.modules.js"></script>
	<script>window.jQuery || document.write('<script src="../libs/jquery/dist/jquery.min.js"><\/script>')</script>
	<script src="js/remodal.js"></script>

<script>
  $(document).on('opening', '.remodal', function () {
    console.log('opening');
  });

  $(document).on('opened', '.remodal', function () {
    console.log('opened');
  });

  $(document).on('closing', '.remodal', function (e) {
    console.log('closing' + (e.reason ? ', reason: ' + e.reason : ''));
  });

  $(document).on('closed', '.remodal', function (e) {
    console.log('closed' + (e.reason ? ', reason: ' + e.reason : ''));
  });

  $(document).on('confirmation', '.remodal', function () {
    console.log('confirmation');
  });

  $(document).on('cancellation', '.remodal', function () {
    console.log('cancellation');
  });

//  Usage:
//  $(function() {
//
//    // In this case the initialization function returns the already created instance
//    var inst = $('[data-remodal-id=modal]').remodal();
//
//    inst.open();
//    inst.close();
//    inst.getState();
//    inst.destroy();
//  });

  //  The second way to initialize:
  $('[data-remodal-id=modal2]').remodal({
    modifier: 'with-red-theme'
  });
</script>	
</body>
</html>
