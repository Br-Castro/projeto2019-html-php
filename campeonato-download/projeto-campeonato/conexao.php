<?php
function conexao(){
	$my_server="localhost";
	$my_user="root";
	$password="";
	$banco="sitemaria";
	$conn=mysqli_connect($my_server,$my_user,$password,$banco);
	if (mysqli_connect_error()) {
		echo "ERROR: ".mysqli_connect_error();
	}
	return $conn;
}
