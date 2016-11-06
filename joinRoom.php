<h1>Vous avez rejoint le channel</h1>
<?php	
require_once("mesFonctions.php");
$id=$_GET["id"];
$fnc=joinRoom($id);
//var_dump($fnc);
$msg=getMessage($id);
$json_data = json_decode($msg, true);
		

echo "<table border=\"1\">";
echo "<tr><td>Utilisateur</td><td>Message</td></tr>";

foreach($json_data["messages"] as $var)
{
echo "<td>".$var['u']["username"]."</td>";

echo "<td>".$var['msg']."</td>";
				echo "</tr>";

 
}
?>
</table>
<form action="" method="post">
Msg: <input type="text" name="msg" value="" />
   
    <input type="submit" name="envoyer" value="Envoyer" />
</form>
<A href="javascript:window.location.reload()">Rafraichir la page</A>
<?php
if(isset($_POST['envoyer']))
{
$msg=$_POST['msg'];
sendMessage($msg,$id);
?>
 <?php
}
?>