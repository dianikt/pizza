<!DOCTYPE html>
<html>
<head>
	<title>Comamos pizza!!!</title>
	 <style type="text/css">
	 	header{
	 		color: purple;
	 		text-align: center;
	 	}
	 	h4{
	 		color: green;
	 		float: center;
	 	}
	  	td{
	  		width: 25px;
	  		height: 25px;
	  	}
	  	form{
	  		text-align: center;
	  	}
		.fil{
			background-color: blue;
		}
		.col{
			background-color: red;
		}

	</style>
</head>
<body>

	<?php	
		include_once "ingredientes.php";
	?>

	<header>
		<h2>Crea tu propia Pizza</h2>
		<h4>Elige los ingredientes: </h4>
	</header>
		<hr>
			<FORM method="POST" action="ingredientes.php">
				<INPUT type="checkbox" name="numero[]" value="Masa"/>Masa<br>
				<INPUT type="checkbox" name="numero[]" value="Oregano"/>Oregano<br>
				<INPUT type="checkbox" name="numero[]" value="Tomate"/>Tomate<br>
				<INPUT type="checkbox" name="numero[]" value="Queso"/>Queso<br>
				<INPUT type="checkbox" name="numero[]" value="Bacon"/>Bacon<br>
				<INPUT type="checkbox" name="numero[]" value="Jamon"/>Jamon<br>
				<INPUT type="checkbox" name="numero[]" value="Peperoni"/>Peperoni<br>
				<hr>
				<INPUT type="submit" value="Pedir pizza" />
			</FORM>

			<?php	
			recargarPagina();		
			echo "<h4>Una buena pizza tiene masa y oregano !!! </h4>";
			?>

</body>
</html>