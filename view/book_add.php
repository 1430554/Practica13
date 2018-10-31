<?php 
//Estilos traidos de header asi como fondo
	include_once "header.php";
	if($logged_in)
	{
		$after_login=true;
		//Importacion del menu para navegacion del sistema
		include_once "menu.php";
?>

<?php
//Añadir jugadores guardandolos en los campos designados de la base de datos.
		if($status=="before_submission" or $status=="failure")
		{


/*En esta vista se agregan  y se muestran los productos almacenandolos en la base de datos 
se incluyen las vistas header y menu que son las que traen los elementos del menu para 
la navegacion del sistema asi como el fondo del mismo*/

?>
<br>
<br>
	<div class="container">
	 	
		<form method="post">
			<div class="cuerpo">

				<h3>Registrar un Nuevo Jugador</h3>
				<p>Llene los siguientes campos</p>
				<label for="title">Nombre</label>
				<input type="text" name="title" id="title" placeholder="Escriba aquí..." required>
				<font color="red"><?php echo $errors["title"]; ?></font>
				<br>
				<label for="author">Deporte</label>
				<input type="text" name="author" id="author" placeholder="Escriba aquí..." required>
				<font color="red"><?php echo $errors["author"]; ?></font>
				<br>
				<label for="description">Matricula</label>
				<input type="number" name="description" id="description" placeholder="Escriba aquí..." required>
				<font color="red"><?php echo $errors["description"]; ?></font>
				<br>
				<input type="hidden" name="page" value="book_add">
				<input type="hidden" name="caller" value="self">
				<br>
				<input class="btn btn-success" type="submit" value="Guardar">
				<br>
			</div>
		</form>
	</div>
<?php
		}
		else
		{
?>
<br>
<br>
<br>
<br>
		<div class="container">
			<div class="bienvenida">
				<h3>Jugador Guardado</h3>
			</div>
		</div>
<?php
		}
	}
	else
	{
		$before_login=true;
		include_once "menu.php";
?>
<br>
<div class="container">
	<div class="bienvenida">
		<h3>Error, Ingresa de nuevo al sistema</h3>
	</div>
</div>
<?php
	}
	include_once "footer.php";
?>
