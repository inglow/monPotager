<?php include("theme/haut.php") ?>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Connexion
                        <strong>à Rocket chat démo</strong>
                    </h2>
                    <hr>
                    <br>
                    <br>
                    <center>

                    <p>Veuillez rentrez les identifiants à ceux utilisés pour rocketchat démo.
                    <br>
                    <br>
                    </p>
                   <div class="form-group">
                   <form action="" method="post">
    Pseudo: <input type="text" class="form-control" name="user" value="" />
    Mot de passe: <input type="password" class="form-control" name="password" value=""/>
    <input type="submit" name="connexion" class="btn btn-default" value="Connexion" />
    <input type="reset" name="annuler" class="btn btn-default" value="annuler" />

</form>

</div>
<br>
<br>
<br>
<?php

require_once("mesFonctions.php");

if(isset($_POST['connexion']))
{
	$user=$_POST['user'];
	$password=$_POST['password'];
	connexion($user, $password);
}


?>
                </div>
            </div>
        </div>

    <?php include("theme/bas.php"); ?>