<?php
//Connection database
$id_conn = mysqli_connect('localhost', 'root', '','cnrs')or die('impossible de se connecter');
mysqli_select_db($id_conn,'cnrs')or die("connection a la base impossible");
$var=$_GET['titre'];
$request = "delete from atelier where atelier.titre ='$var' ";
$res = mysqli_query($id_conn,$request);
header("location: ../vue/listeAteliers.php"); 	
?>