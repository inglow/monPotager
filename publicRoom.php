<H1>Vous êtes connectés</h1>
<?php	
require_once("mesFonctions.php");

			//$result=getRoom();

			$json_data = json_decode(getRoom(), true); 
			
			?>
			<table border="1">
<tr><td>ID du channel</td><td>Nom du channel</td><td>Rejoidre le channel</td></tr>

			<?php
			foreach ($json_data['rooms'] as $var) {
				echo "<tr>";
echo "<td>".$var['_id']."</td>";
echo "<td>".$var['name']."</td>";
echo "<td><a href=\"/~inglow/monPotager/joinRoom.php?id=".$var['_id']."\">Rejoindre</a></td>";

	



echo "</tr>";			}
 ?>
 </table>