<script src="fonctions.js"></script>
<form action="" method="post">
    <select name="carnet" id="carnet">
    <?php
    require("../config.php");
    $cnx=mysqli_connect($server,$username,$password,$db) or die("pb cnx");
    $sql="select * from users;";
    $res=mysqli_query($cnx,$sql);
    $n=mysqli_num_rows($res);
    for($i=0;$i<$nb;$i++)
    {
        $enreg=mysqli_fetch_array($res);
    ?>
    <option value="">tt</option>
    <?php
    }
    ?>
    
    
    </select>
    <input type="button" value="supprimer" onclick="supprimer()">
    <input type="button" value="adresse" onclick="adresse()">
</form>