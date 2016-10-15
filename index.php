<form action="" method="post">
    Pseudo: <input type="text" name="user" value="" />
     
    Mot de passe: <input type="password" name="password" value="" />
     
    <input type="submit" name="connexion" value="Connexion" />
</form>
<?php 

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);
?>
