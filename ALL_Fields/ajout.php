
<?php
error_reporting(E_ERROR | E_PARSE);
//récupération des variabls depuis le formulaire à l'aide de la méthode post du formulaire
$login=$_POST["login"];
$passwd=$_POST["passwd"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$datenais=$_POST["date_naiss"];
$heure=$_POST["heure"];
$email=$_POST["mail"];
$sexe=$_POST["sexe"];
$foot=$_POST["foot"];
$hand=$_POST["hand"];
$tennis=$_POST["tennis"];
$pays=$_POST["pays"];
$pays1=$_POST["pays1"];
$remarques=$_POST["remarques"];

if(!isset($_POST["foot"]))
{
    $foot="N";
}
if(!isset($_POST["hand"]))
{
    $hand="N";
}
if(!isset($tennis))
{
    $tennis="N";
}
//echo $foot.$hand.$tennis;
// L' instruction require prend tout le texte/code/balisage qui existe dans le fichier spécifié et le copie dans le fichier qui utilise l'instruction include.
require("config.php");
//La fonction connect() / mysqli_connect() ouvre une nouvelle connexion au serveur MySQL.
$conn=mysqli_connect($server,$username,$password,$db) or die ("Probleme de connxion au serveur ou à la base de données");
// Construction de la requete 
$sql="insert into  users values('$login','$passwd','$nom','$prenom','$datenais','$heure','$email','$sexe','$foot','$hand','$tennis','$pays','$remarques');";
//echo $sql;
//execution de la requete
mysqli_query($conn,$sql);
if(mysqli_affected_rows($conn)>0)
{
    echo "Inscription effectuée par succées";
}
else
{
    echo "utilisateur existant";
}
mysqli_close($conn);

?>