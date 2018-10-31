<?php 
	include_once "header.php";
	$before_login=true;
	include_once "menu.php";
?>
<br>
<br>
<br>
	<div class="container">
		<div class="bienvenida">
			<h2>Control de jugadores</h2>
			<label>Presiona el boton de login para acceder al sistema.</label>
			<br>
			<br>
			<br>

			<ul class="nav justify-content-center">
	
	<li class="nav-item"><a class="nav-link <?php echo $login; ?>" href="index.php?page=login">Login</a></li>
	
</ul>
		</div>
	</div>
<?php
	include_once "footer.php";
?>
