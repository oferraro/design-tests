<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- My Styles -->
<link rel="stylesheet" href="css/forms-styles.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<?php
	require ('menu.php');?>

<div class="container">

<?php 
	if (isset($_POST['paquete'])):
		$body = "Paquete: " .$_POST['paquete'] . " <br>".$_POST['mensaje'];
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: <'. $_POST['email'] . ">" . "\r\n";
		$headers .= 'Cc: oscar@oferraro.com' . "\r\n";

		if (mail ('eulayamil@gmail.com', 'Despegar... ja!', $body, $headers)): ?>
		<div class="alert alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <a href="#" class="alert-link">Tu email fue enviado con exito!</a>
		</div>

<?php			
		endif; 
		//echo "<pre>"; print_r($_POST);
	endif;
?>

<div class="row form-buy-centered">
	
	<form class="form-buy" method="post">
	<div class="row">
	<label>Paquete: </label>
		<select name="paquete" class="form-control">
			<option value=0 <?php echo (isset($_POST['paquete']) && $_POST['paquete'] == 0?'selected':''); ?>>Bariloche</option>
			<option value=1 <?php echo (isset($_POST['paquete']) && $_POST['paquete'] == 1?'selected':''); ?>>La Plata (All inclussive)</option>
		</select>
	</div>
	<div class="row">
		<input type="checkbox" name="flexible-date" <?php echo (isset($_POST['flexible-date'])?'checked':''); ?>> 
		<label class="anydate-text" class="form-control">En cualquier fecha</label>
	</div>
	<div class="row">
		<label>email: </label> 
		<input placeholder="email" class="form-control" type="email" value="<?php echo (isset($_POST['email'])?$_POST['email']:''); ?>" name="email"></div>
	<div class="row"><label>mensaje: </label> <textarea placeholder="Mensaje" class="form-control" name="mensaje"><?php 
		echo (isset($_POST['mensaje'])?$_POST['mensaje']:''); 
		?></textarea></div>
	<br>
	<div class="row" class="form-div-submit"><input type="submit" class="btn btn-danger form-submit"></div>
	</form>
	
</div>

</div>

<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">Footer</div>