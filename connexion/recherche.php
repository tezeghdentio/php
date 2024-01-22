<?php
//récupération des variabls depuis le formulaire à l'aide de la méthode post du formulaire
$login=$_POST["login"];
$passwd=$_POST["passwd"];

// L' instruction require prend tout le texte/code/balisage qui existe dans le fichier spécifié et le copie dans le fichier qui utilise l'instruction include.
require("../config.php");
//La fonction connect() / mysqli_connect() ouvre une nouvelle connexion au serveur MySQL.
$conn=mysqli_connect($server,$username,$password,$db) or die ("Probleme de connxion au serveur ou à la base de données");
// Construction de la requete
$sql="select * from users where login='$login' and passwd='$passwd';";
//echo $sql;
//execution de la requete
$res=mysqli_query($conn,$sql);
if(mysqli_affected_rows($conn)>0)
{
    $enreg=mysqli_fetch_array($res);
    echo "Bonjour ".$enreg["prenom"]." ".$enreg[2];
}
else
{
    echo "Login et/ou mot de passe incorrect";
}
mysqli_close($conn);

?>
