<?php
//error_reporting(E_ERROR,E_PARSE);
error_reporting(0);
// L' instruction require prend tout le texte/code/balisage qui existe dans le fichier spécifié et le copie dans le fichier qui utilise l'instruction include.
require("../config.php");
//La fonction connect() / mysqli_connect() ouvre une nouvelle connexion au serveur MySQL.
$conn=mysqli_connect($server,$username,$password,$db) or die ("Probleme de connxion au serveur ou à la base de données");
// Construction de la requete

//echo $sql."<br>";
$sql="select nom,prenom,email from users;";
//execution de la requete
$res=mysqli_query($conn,$sql);
//affiche la taille du tableau $res donc le nombre d'enregistrement retourné par l'execution de la requete
$nb=mysqli_num_rows($res);
//echo $nb;
?>
<script src="fonctions.js"></script>
<form action="" method="post">
<select name="carnet" id="carnet" size="5">

<?php 
echo $i;   
for($i=0;$i<$nb;$i++)
    {
        $enreg=mysqli_fetch_array($res);
?>
<option value="<?php echo $enreg[2]; ?>"><?php echo $enreg[1]." ".$enreg[0]; ?></option>

<?php

    }
    
?>
</select>
<input type="button" onClick="supprimer()" value="Supprimer">
<input type="button" value="Retrouver Email" onclick="verif()">

</form>
