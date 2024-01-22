<?php
//error_reporting(E_ERROR,E_PARSE);
error_reporting(0);
// L' instruction require prend tout le texte/code/balisage qui existe dans le fichier spécifié et le copie dans le fichier qui utilise l'instruction include.
require("config.php");
//La fonction connect() / mysqli_connect() ouvre une nouvelle connexion au serveur MySQL.
$conn=mysqli_connect($server,$username,$password,$db) or die ("Probleme de connxion au serveur ou à la base de données");
// Construction de la requete

//echo $sql."<br>";
//execution de la requete
$res=mysqli_query($conn,"select hand,foot,nom,login,pzssword from users ");
//affiche la taille du tableau $res donc le nombre d'enregistrement retourné par l'execution de la requete
$nb=mysqli_num_rows($res);
//echo $nb;
?>
<table border="1">
<tr>
        <th>Login</th>
    <th>Mot de passe</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Date de naissance</th>
    <th>Heure</th>
    <th>email</th>
    <th>Sexe</th>
    <th>Football</th>
    <th>Handball</th>
    <th>Tennis</th>
    <th>Pays</th>
    <th>Remarques</th></tr>

    <?php
    for($i=0;$i<$nb;$i++)
    {
        $enreg=mysqli_fetch_array($res);
       ?>
           <tr>
        <td><?php echo $enreg['login']; ?></td>
        <td><?php echo $enreg[1]; ?></td>
        <td><?php echo $enreg[2]; ?></td>
        <td><?php echo $enreg[3]; ?></td>
        <td><?php echo $enreg[4]; ?></td>
        <td><?php echo $enreg[5]; ?></td>
        <td><?php echo $enreg[6]; ?></td>
        <td><?php if($enreg[7]=='H') echo 'Homme';else echo 'Femme'; ?></td>
        <td><?php if($enreg[8]=='O') echo 'Oui';else echo 'Non'; ?></td>
        <td><?php if($enreg[9]=='O') echo 'Oui';else echo 'Non'; ?></td>
        <td><?php if($enreg[10]=='O') echo 'Oui';else echo 'Non'; ?></td>
        <td><?php echo $enreg[11]; ?></td>
        <td><?php echo $enreg[12]; ?></td>
    </tr>
       <?php
    }
    ?>
</table>
