<?php 

$conex = new mysqli("localhost","root","","kevis", "3306"); 

if ($conex) {
	$consulta = "SELECT * FROM persona";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $id = $row['cedula'];
	    $nombre = $row['nombre'];
		$apellidos = $row['apellidos'];
	    $direccion = $row['direccion'];
	    $telefono = $row['telefono'];
	    $email = $row['email'];
	    ?>
        <div>
        	<h2><?php echo $nombre; ?></h2>
        	<div>
        		<p>
        			<b>Nombre: </b> <?php echo $nombre ?><br>
        		    <b>Apellidos: </b> <?php echo $apellidos ?><br>
        		    <b>Direccion: </b> <?php echo $direccion ?><br>
					<b>Telefono: </b> <?php echo $telefono ?><br>
        		    <b>Email: </b> <?php echo $email ?><br>
        		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
}
?>