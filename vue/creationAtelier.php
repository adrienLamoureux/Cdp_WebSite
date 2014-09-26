
<html>
    <head>
        <meta charset="utf-8" />
        <title>Formulaire d'inscription</title>
        <link type="text/css" rel="stylesheet" href="styles/style.css" />
		<script type="text/javascript" >
				
				function verifconfirm ()
	{
		var abs=0;
	if(document.getElementById('MP').value!=document.getElementById('CMP').value)
	{
		document.getElementById("CMP").style.background="red";
		
		return false;

		}else
						
			return true;
			
	}
		
	</script>
    </head>
    <body>
	
	<h1 align="center" style='color:red' > Formulaire de création d'atelier </h1>
        <div>
            <form method="get"  id="For" onsubmit="return verifconfirm ()" action="ajouterateliercontrol.php">
                <fieldset>
                    <legend>Ajouter atelier</legend>
    
                    <label for="TA">Titre atelier  <span class="requis">*</span></label>
                    <input type="text"  name="TA" value="" size="20" maxlength="20" />
                    <br />
                    
                    <label for="TH">Thème de l'atelier  </label>
                    <input type="text"  name="TH" value="" size="20" maxlength="20" />
                    <br /> 


                    <label for="TY">Type atelier <span class="requis">*</span></label>
                    <input type="text"  name="TY" value="" size="20" maxlength="20" />
                    <br />
                    
                    <label for="HR">Date de l'atelier</label>
                    <input type="date"  name="HR" value="" size="20" maxlength="60" />
                    <br />
					<?php
					if(isset($_GET['LAB'])&&!empty($_GET['LAB']))
					{
						$lab=$_GET['LAB'];
					
					echo
						"<label for='LAB'>Laboratoire</label>
						<input type=text  id='LAB' name='LAB' value='$lab' size='20' maxlength='60' readonly  />
						<br />";
						}
					else
					echo
						"<label for='LAB'>Laboratoire</label>
						<input type='text'  id='LAB' name='LAB' value='' size='20' maxlength='60'  />
						<br />";
					?>
					<label for="LI">Lieu</label>
                    <input type="text" id="LI" name="LI" value="" size="20" maxlength="60"  />
                    <br />
					
					<label for="DR">Durée</label>
                    <input type="text" id="DR" name="DR" value="" size="20" maxlength="60"  />
                    <br />
					
					<label for="CA">Capacité</label>
                    <input type="text" id="CA" name="CA" value="" size="20" maxlength="60"  />
                    <br />
					<center><input type="submit" id="in" value="Valider"   />
                <input type="reset" value="Remettre à zéro" /> <br /></center>
				</fieldset>
            </form>
        </div>
    </body>
</html>