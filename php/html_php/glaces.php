<?php
$parfums = [
    'Fraise' => 4,
    'Chocolat' => 5,
    'Vanille' => 3
];
$cornets = [
    'Pot' => 2,
    'Cornet' => 3
];
$supplements = [
    'Pepites de choco' => 1,
    'Chantilly' => 0.5
];

$titre = 'Composez votre glace';
$ingredients = [];
$total = 0;
if (isset($_GET['parfum'])) {
    foreach ($_GET['parfum'] as $parfum) {
        //var_dump($parfum, $parfums[$parfum]);
        $ingredients[] = $parfum;
        $total += $parfums[$parfum];
    }
}

if (isset($_GET['supplement'])) {
    foreach ($_GET['supplement'] as $supplement) {
        //var_dump($parfum, $parfums[$parfum]);
        $ingredients[] = $supplement;
        $total += $supplements[$supplement];
    }
}

if (isset($_GET['cornet'])) {
    $cornet = $_GET['cornet'];
    $ingredients[] = $cornet;
    $total += $cornets[$cornet];
}

require_once 'functions.php';
require 'header.php';

?>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Votre Glace
                </h5>
            </div>
            <div class="card-body">
                <ul>
                    <?php foreach ($ingredients as $ingredient) : ?>
                        <li> <?= $ingredient ?></li>
                    <?php endforeach ?>
                </ul>
                <strong>Prix: </strong> <?= $total ?> €
            </div>

        </div>
    </div>
    <div class="col-md-8">
        <h1>Composer votre glace</h1>
        <form action="/glaces.php" method="get">
            <h3>Parfum</h3>
            <?php foreach ($parfums as $parfum => $prix) : ?>
                <div class="checkbox">
                    <label for="">
                        <?= checkbox('parfum', $parfum, $_GET) ?>
                        <?= $parfum ?> - <?= $prix ?> €
                    </label>
                </div>
            <?php endforeach ?>
            <h3>Cornet </h3>
            <?php foreach ($cornets as $cornet => $prix) : ?>
                <div class="checkbox">
                    <label for="">
                        <?= radio('cornet', $cornet, $_GET) ?>
                        <?= $cornet ?> - <?= $prix ?> €
                    </label>
                </div>
            <?php endforeach ?>
            <h3>Supplement</h3>
            <?php foreach ($supplements as $supplement => $prix) : ?>
                <div class="checkbox">
                    <label for="">
                        <?= checkbox('supplement', $supplement, $_GET) ?>
                        <?= $supplement ?> - <?= $prix ?> €
                    </label>
                </div>
            <?php endforeach ?>

            <button type="submit" class="btn btn-primary"> Composer ma glace</button>
        </form>

    </div>
</div>
<?php
require 'footer.php';
?>