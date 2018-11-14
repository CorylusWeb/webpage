<?php

	$allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma", "3gp", "avi", "7z");
	$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

	if ((($_FILES["file"]["type"] == "video/mp4")
	|| ($_FILES["file"]["type"] == "video/3gpp")
	|| ($_FILES["file"]["type"] == "application/x-7z-compressed")
	|| ($_FILES["file"]["type"] == "video/avi")
	|| ($_FILES["file"]["type"] == "audio/mp3")
	|| ($_FILES["file"]["type"] == "audio/wma")
	|| ($_FILES["file"]["type"] == "image/pjpeg")
	|| ($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg"))

	&& in_array($extension, $allowedExts))

	{
		if ($_FILES["file"]["error"] > 0)
		{
			echo "Codigo de error: " . $_FILES["file"]["error"] . "<br />";
		}
		else
		{
			echo "Subido: " . $_FILES["file"]["name"] . "<br />";
			echo "Tipo: " . $_FILES["file"]["type"] . "<br />";
			echo "Tamaño: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
			echo "Archivo temporal: " . $_FILES["file"]["tmp_name"] . "<br />";
			

			if (file_exists("video/" . $_FILES["file"]["name"]))
			{
				echo $_FILES["file"]["name"] . " ya existe. ";
			}
			else
			{
				move_uploaded_file($_FILES["file"]["tmp_name"],
				"video/" . $_FILES["file"]["name"]);
				echo "Guardado en: " . "video/" . $_FILES["file"]["name"]."<br />";
			}
			echo "<a href=\"http://www.corylusweb.com/upload/upload.html\">Volver</a>";
		}
	}
	else
	{
		echo "Archivo invalido";
	}
?>