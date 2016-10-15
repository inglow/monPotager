
<form action="" method="post">
    Pseudo: <input type="text" name="user" value="" />
     
    Mot de passe: <input type="password" name="password" value="" />
     
    <input type="submit" name="connexion" value="Connexion" />
</form>


<?php 

require("mesFonctions.php");
$user=$_POST['user'];
$password=$_POST['password'];


if(commentrelierlapi($user, $password))
{
	echo "Connexion reussie";
}
else
{
	echo "Erreur de mot de passe";
}	

?>
