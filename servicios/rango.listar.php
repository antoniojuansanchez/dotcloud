<?php
/*
	----------------------------------------------------		 
	Proyecto : 	.cloud
	Autor :		Antonio Juan Sánchez Martín
	Fecha : 	5 / 11 /2012	

	Listado de los proyectos en curso del usuario que se ha logeado

	Salida:
		- Listado JSON 
	----------------------------------------------------
*/	

	include_once ('../sesion.php'); 		// Define el objeto $conexion y el objeto $sesion
    include_once ('servidor.retrasar.php');
   	include_once ('../clases/Rango.php');

    // Si la sesion no es correcta, se carga el index
    if ($sesion->correcta ()) 
    {
		$rango = new Rango ($sesion);

    	$resultado = $rango->listar();
        if ($resultado != null)
		{    
			// Adecuamos el objeto devuelto a un array para poder imprimirlo en JSON    
	        print_r(json_encode($resultado));
	    }
	    else print (-1);
    }
    else print (-1);

   
?>