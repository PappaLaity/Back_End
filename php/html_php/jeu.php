<?php
$aDeviner = 150;
$erreur = null;
$success = null;
$value = null;
if (isset($_GET['chiffre'])){
    if($_GET['chiffre'] > $aDeviner){
        $erreur = 'Votre chiffre est trop grand';
    }elseif ($_GET['chiffre'] <$aDeviner){
        $erreur = 'Votre Chiffre est trop petit';
    } else{
        $success = 'Bravo ! vous avez trouve la valeur '.$aDeviner;
    }
    $value = htmlentities($_GET['chiffre']); 
}
require 'header.php';
?>
<?php if ($erreur) : ?>
<div class="alert alert-danger">
    <?= $erreur?>
</div>
<?php elseif ($success):?>
<div class="alert alert-success">
    <?= $success ?>
</div>
<?php endif?>


<form action="/jeu.php" method="GET">

    <input type="number" , name="chiffre" placeholder="entre 0 et 1000" value="<?= $value ?>">
    <button type="submit">Deviner</button>

</form>


<?php
require 'footer.php'
?>