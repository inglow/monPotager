
<form action="" method="post">
    Pseudo: <input type="text" name="user" value="" />
    Mot de passe: <input type="password" name="password" value=""/>
    <input type="submit" name="connexion" value="Connexion" />
</form>
<?php
require_once("mesFonctions.php");
if(isset($_POST['connexion']))
{
$user=$_POST['user'];
$password=$_POST['password'];

connexion($user, $password);
}
?>
