<?php
	//Database connection
	$id_conn = mysqli_connect('localhost', 'root', '','cnrs')or die('impossible de se connecter');

	//Select database
	mysqli_select_db($id_conn,'cnrs')or die("connection a la base impossible");

	//Select data from "atelier"
	$request="select titre, thematique, type, Lieu from atelier ";
	$res = mysqli_query($id_conn,$request);

	//Routine to load data and print as a simple list
	while($ligne = mysqli_fetch_row($res)){
		echo "<tr>\n
	       <td><i/><b/>$ligne[0]</td>
		   <td><i/><b/>$ligne[1]</td>
		   <td><i/><b/>$ligne[2]</td>
		   <td><i/><b/>$ligne[3]</td>
		   <td><img src=../image/mod.png><a href = '../controller/supprimerAtelier.php?titre=$ligne[0]' /a><img src=../image/sup.png></td>";
        echo " </tr>\n";
	}
?>