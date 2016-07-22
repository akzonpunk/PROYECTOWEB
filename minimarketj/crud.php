<?php
	mysql_connect('localhost','root','');
	mysql_select_db("minimarketj");

	$opt=$_REQUEST["opt"];

	if($opt=="add"){
		$nom=$_REQUEST["nombre"];
		$des=$_REQUEST["descripcion"];
		$pre=$_REQUEST["precio"];
		$cod=$_REQUEST["codigo"];
		$env=$_REQUEST["envase"];
		$mar=$_REQUEST["marca"];

		mysql_query("INSERT INTO producto values('','$nom','$des','$pre','$cod','$env','$mar')");
		echo "Los datos registrados satistactoriamente";
	}
	
	if($opt=="del"){
		$id=$_REQUEST["id"];
		mysql_query("DELETE FROM producto WHERE id=$id");
		echo "El registro se a eliminado satistactoriamente";
	}

	if($opt=="edit"){
		$id=$_REQUEST["id"];
		$nom=$_REQUEST["nombre"];
		$des=$_REQUEST["descripcion"];
		$pre=$_REQUEST["precio"];
		$cod=$_REQUEST["codigo"];
		$env=$_REQUEST["envase"];

		mysql_query("UPDATE producto SET nombre='$nom',descripcion='$des',precio='$pre',codigo='$cod',envase='$env' WHERE id=$id");
		echo "Registro actualizado satistactoriamente";
	}
?>