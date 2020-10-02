<?php
/*session_start();
$_SESSION['connecte']= 1;*/
require_once 'functions/auth.php';
login_required();

require_once 'functions/compteur.php';
require_once 'header.php';
?>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h2 style="font-size = 3em;"><?= afficher_vue() ?></h2> Vues
            </div>
        </div>
    </div>
    <div class="col-md-4">

    </div>
</div>
<?php
require_once 'footer.php'
?>