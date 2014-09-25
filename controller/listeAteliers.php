<?php
	$id_conn = mysqli_connect('localhost', 'root', '','cnrs')or die('impossible de se connecter');

	//select database
	mysqli_select_db($id_conn,'cnrs')or die("connection a la base impossible");
	$req="select titre,thematique,type from atelier ";
	$res = mysqli_query($id_conn,$req);

	//read database for listing
	while($ligne = mysqli_fetch_row($res)){
		echo "<tr style='color:blue;text-align:center'>\n
	       <td><i/><b/>$ligne[0]</td>
		   <td><i/><b/>$ligne[1]</td>
		   <td><i/><b/>$ligne[2]</td> 
			<td><img src=../image/mod.png><a href = '../controller/supprimerAtelier.php?titre=$ligne[0]' /a><img src=../image/sup.png></td>";
        echo " </tr>\n";
	}
?>