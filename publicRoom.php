<H1>Vous êtes connectés</h1>
<?php	
require_once("mesFonctions.php");

			//$result=getRoom();

			$json_data = json_decode(getRoom(), true); 
			
			?>
			<table border="1">
<tr><td>ID du channel</td><td>Nom du channel</td><td>Rejoidre le channel</td></tr>

			<?php
			foreach ($json_data['rooms'] as $var) 
			{
				echo "<tr>";
				echo "<td>".$var['_id']."</td>";
				echo "<td>".$var['name']."</td>";
					?>
					<td>
					<form action="" method="post">
					<input type="hidden" name="id" value="<?php echo $var['_id'] ?>" />
				    <input type="submit" name="rejoindre" value="rejoindre" />
					</form>
					</td>
					<?php

				echo "</tr>";	
					if(isset($_POST['rejoindre']))
					{
						$_SESSION["idc"]=$_POST['id'];
						header ("Location:/~inglow/monPotager/monpotager.fr/2"); 
					}		
}
 ?>
 </table>