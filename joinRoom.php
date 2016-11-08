    <?php include("theme/haut.php");
    require_once("mesFonctions.php"); ?>

<div class="row">
            <div class="box">
                <div class="col-lg-12">
                <center>
<h1>Vous avez rejoint le channel: <?php echo $_SESSION["name"];?></h1>
                    <hr>
                    <h2 class="intro-text text-center">Message
                        <strong>du channel <?php echo $_SESSION["name"];?></strong>
                    </h2>
                    <hr>
                    <form action="" method="post" class="">

    <input type="submit" name="quitter" class="btn btn-success" value="Déconnexion" />
</form>
<a href="http://localhost/~inglow/monPotager/monpotager.fr/1">Lister les channels</a>
<?php


$id=$_SESSION["idc"];
//$id=$_GET["id"];
$fnc=joinRoom($id);
//var_dump($fnc);
$msg=getMessage($id);
$json_data = json_decode($msg, true);
		
echo "<table class=\" table table-striped\" border=\"1\">";

echo "<tr style=\"\"><td>Utilisateur</td><td>Message</td></tr>";

foreach($json_data["messages"] as $var)
{
	echo "<td>".$var['u']["username"]."</td>";
	echo "<td>".$var['msg']."</td>";
	echo "</tr>";
}
?>
</table>
<br>
<br>
<form action="" method="post" class=""><div class="form-group">
<label for="msg">Envoyer un message:</label> <input type="text" class="form-control" id="msg" name="msg" value="" /></div>
    <input type="submit" name="envoyer" class="btn btn-success" value="Envoyer" />
</form>
<br>
<A href="javascript:window.location.reload()" class="btn btn-danger" >Rafraichir la page</A>
<?php
	if(isset($_POST['envoyer']))
	{
		$msg=$_POST['msg'];
		sendMessage($msg,$id);

	}

	if(isset($_POST['quitter']))
	{
		
		$fnc1=leftRoom($id);
		var_dump($fnc1);

						


	}
?>
</div>
</div>
</div>
    <?php include("theme/bas.php"); ?>
