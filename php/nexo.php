<?php
	
	//var_dump($_POST);
	if(!isset($_FILES["archivo"]))
	{
		echo "Debe subir algun archivo";
	}
	else
	{
		$NombreDeArchivo= $_FILES['archivo']['name'];
		$Nombre = explode(".",$NombreDeArchivo)[0];
		$Extension = explode(".",$NombreDeArchivo)[1];
		$NombreUsuario = $_POST['nombreUsuario'];


		if (move_uploaded_file($_FILES["archivo"]["tmp_name"],"IMG/".$NombreUsuario.".".$Extension))
		{		
			 echo "ok";
		}
		
		$tamañoArchivo = $_FILES['archivo']['size'];

		switch ($Extension)
		{
		    case "docx":
		    case "doc":
		        $tamañoMaximo=60;
		        break;
		    case "jpg":
		    case "jpeg":
		    case "gif":
		        $tamañoMaximo=300;
		        break;
		    default:
		        $tamañoMaximo=500;
		}

		if($tamañoMaximo>$tamañoArchivo)
		{
			echo "string";
		}
		else
		{
			echo "stringElse";			
		}
	}	

?>