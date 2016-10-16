<H1>Vous êtes connectés<h1>
<?php	
require_once("mesFonctions.php");

			$result=getRoom();
			echo $result;
			$json_data = json_decode(getRoom(), true); 
			var_dump($json_data);
		
 ?>