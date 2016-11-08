    <?php include("theme/haut.php"); ?>


<?php	
require_once("mesFonctions.php");

			//$result=getRoom();

			$json_data = json_decode(getRoom(), true); 
			
			?>
			<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Channel
                        <strong>de Rocket chat démo</strong> </h2>
                    <hr>

			<table border="1" class="table table-striped">
<tr><td>ID du channel</td><td>Nom du channel</td><td>TS</td><td>Rejoindre le channel</td></tr>

			<?php
			foreach ($json_data['rooms'] as $var) 
			{
				echo "<tr>";
				echo "<td>".$var['_id']."</td>";
				echo "<td>".$var['name']."</td>";
				echo "<td>".$var['ts']."</td>";

					?>
					<td>
					<form action="" method="post" class="form-group" >
					<input type="hidden" name="id" value="<?php echo $var['_id'] ?>" />
					<input type="hidden" name="name" value="<?php echo $var['name'] ?>" />

				    <center><input type="submit" name="rejoindre" class="btn btn-success" value="rejoindre" /></center>
					</form>
					</td>
					<?php

				echo "</tr>";	
					if(isset($_POST['rejoindre']))
					{
						$_SESSION["idc"]=$_POST['id'];
						$_SESSION["name"]=$_POST['name'];
						

						header ("Location:/~inglow/monPotager/monpotager.fr/2"); 
					}		
}
 ?>
 </table>
 </div>
 </div>
 </div>

    <?php include("theme/bas.php"); ?>
