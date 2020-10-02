<?php

$erreur = null;
// les deux champs ont ete remplis
//if(!isset($_POST['pseudo']) && !isset($_POST['password'])){
if (!empty($_POST['pseudo']) && !empty($_POST['password'])) {
    if ($_POST['pseudo'] === 'John' && $_POST['password'] === 'Doe') {

        //connecter user
        session_start();
        $_SESSION['connecte'] = 1;
        header('Location: /dashboard.php');
        exit();
    } else {
        $erreur = 'Identifiants Incorrects';
        // l'un des champs est vide
    }
}

/*}else{
    // l'un des champs n'est pas rempli
}*/

require_once 'functions/auth.php';

if(est_connecte()){
    header('Locatio:/dashboard.php');
    exit();
}
require_once 'header.php';
?>

<?php if ($erreur) : ?>
    <div class="alert alert-danger">
        <?= $erreur ?>
    </div>
<?php endif; ?>

<form action="" method="POST">
    <div class="form-group">
        <input class="form-control" type="text" name="pseudo" placeholder="User Name">
    </div>
    <div class="form-group">
        <input class="form-control" type="password" name="password" placeholder="Mot de Passe">
    </div>
    <button type="submit" class="btn btn-primary">Se Connecter</button>
</form>

<?php
require_once 'footer.php';
?>