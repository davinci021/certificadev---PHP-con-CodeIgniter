<?php
        session_start();
	if(isset($_POST['rut']) && isset($_POST['clave'])){
		$con = new Mysqli("localhost","alumno", "123456", "sesion");
		$sentencia=$con->prepare("Select usuario from 
		usuario where usuario=? AND clave=?");
		$sentencia->bind_param('ss', $_POST['usuario'], $_POST['clave']);
		$sentencia->execute();
		$resultado=$sentencia->get_result();
		if($resultado->num_rows>0){
			$fila=$resultado->fetch_assoc();
			$_SESSION['usuario']=$fila['usuario'];
			$con->close();
			header ("Location: index.php");
		}else{
			$con->close();
			header("Location: login.php");
		}
	}

