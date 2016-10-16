<?php
	function commentrelierlapi($user, $password)
	{
				$data = array("user" => "$user", "password" => "$password");
				$data_string = json_encode($data);

				$ch = curl_init('https://demo.rocket.chat/api/login');
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				    'Content-Type: application/json',
				    'Content-Length: ' . strlen($data_string),
				    
				    )
				);
				curl_setopt($ch, CURLOPT_TIMEOUT, 5);
				curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

				$result = curl_exec($ch);
				echo $result;
				$json_data = json_decode($result, true); 
				return $result;
	}

	function connexion($user, $password)
	{
			$json_data = json_decode(commentrelierlapi($user, $password), true); 

				if($json_data['status']=="success")
					{
	
						echo "Connexion reussie";
						header ("Location:publicRoom?authToken=".$json_data['data']['authToken']."&userId=".$json_data['data']['userId']); 
					}
					else
					{
						echo "Erreur de mot de passe";
					}

	}
	function getRoom()
	{
		$uri = 'https://demo.rocket.chat/api/publicRooms';
		$ch = curl_init($uri);
		curl_setopt_array($ch, array(
	    CURLOPT_HTTPHEADER  => array('X-Auth-Token:'.$_GET['authToken'], "X-User-Id:".$_GET['userId']),
	    CURLOPT_RETURNTRANSFER  =>true,
	    CURLOPT_VERBOSE     => 1
		));
			$out = curl_exec($ch);
		curl_close($ch);

		return $out;
	}



?>