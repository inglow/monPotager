<H1>Vous êtes connectés</h1>
<?php	
require_once("mesFonctions.php");

			//$result=getRoom();

			$json_data = json_decode(getRoom(), true); 
			//var_dump($json_data);
			?>
			<table border="1">
<tr><td>ID du channel</td><td>Nom du channel</td><td>Rejoidre le channel</td></tr>

			<?php
			foreach ($json_data['rooms'] as $var) {
				echo "<tr>";
echo "<td>".$var['_id']."</td>";
echo "<td>".$var['name']."</td>";
echo "<td><a href=\"joinRoom.php?id=".$var['_id']."&authToken=".$_GET['authToken']."&userId=".$_GET['userId']."\">Rejoindre</a></td>";

	



echo "</tr>";			}
 ?>
 </table>