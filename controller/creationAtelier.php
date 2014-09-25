<?php
	$id_conn = mysqli_connect('localhost', 'root', '','cnrs')or die('impossible de se connecter');
	  //select database
	mysqli_select_db($id_conn,'cnrs')or die("connection a la base impossible");
	$TA=$_GET['TA'];
	$TH=$_GET['TH'];
	$TY=$_GET['TY'];
	$HR=$_GET['HR'];
	$LAB=$_GET['LAB'];
	$LI=$_GET['LI'];
	$DR=$_GET['DR'];
	$CA=$_GET['CA'];
	
	
	echo"('$TA','$TH','$TY','$HR','$LI','$DR','$CA')";
	$req="insert into atelier  values ('$TA','$TH','$TY','$HR','$LAB','$LI','$DR','$CA')";
	$resu=mysqli_query($id_conn,$req) or die("requête non conforme".mysql_error());
	
		header("location: listeAteliers.php");
?>
