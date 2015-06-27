<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Framework</title>
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <link rel="stylesheet" href="style.css">
	
</head>
<body>

<div class="container">

<nav class="row">
	<ul class="menu theMenu">
		<li class="col-1"><a href="#">Home</a></li>
		<li class="col-1"><a href="#">Sign In</a></li>
		<li class="col-1"><a href="#">Sign Up</a></li>
	</ul>
</nav>
	
	<header class="title col-12">
		Titulo
	</header>
	
<?php 
	$content = <<<HERECONTENT
		<img src="img/img.jpg">
			<div class='txtCols'>
				<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
			</div>
HERECONTENT;
?>	

	<section class="row images">
		<article class="col-4">
			<?php echo $content; ?>
		</article>
		<article class="col-4">
			<?php echo $content; ?>
		</article>
		<article class="col-4">
			<?php echo $content; ?>
		</article>
	</section>
	
	
	<aside class="banner">
		<img src="img/banner.jpg">
	</aside>
	
	<article class="row images">
		<article class="push-2 col-4">
			<?php echo $content; ?>
		</article>

		<article class="col-4 push-2">
			<?php echo $content; ?>
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
		
</body>
</html>