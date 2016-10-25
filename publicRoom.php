<H1>Vous êtes connectés</h1>
<?php	
require_once("mesFonctions.php");

			$result=getRoom();

			$json_data = json_decode(getRoom(), true); 
			
			echo $result;
 ?>