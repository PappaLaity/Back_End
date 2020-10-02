<?php
$title = 'Contact';
require_once('config.php');
require_once('functions.php');
$heure = (int)date('G');
$creneaux =  CRENEAUX[date('N')-1];
$ouvert = in_creneau($heure,$creneaux);
require('header.php');
?>

<div class="row">
    <div class="col-md-8">
        <div class="starter-template">
            <h1>Nous Contacter</h1>
            <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur laborum eaque fugit dolores mollitia? Nam nobis repellat officiis illo praesentium odio iste dicta, laudantium corporis explicabo natus dolores quis delectus?
                <br>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis dolore aliquid ut nemo, corporis sit repellat dignissimos, laudantium deleniti provident ratione reiciendis. Repellat totam doloremque quaerat. Libero recusandae voluptatibus animi.</p>
        </div>
    </div>
    <div class="col-md-4">
        <h3>Horaires Magasin</h3>
        <?php if($ouvert):?>
            <div class="alert alert-success">
                Le Magasin est ouvert
            </div>
        <?php else:?>
            <div class="alert alert-danger">
                Le Magasin est ferme
            </div>
        <?php endif;?>
        <ul>
            <?php foreach(JOURS as $key=>$jour):?>
            <li
                <?php if($key+1 === (int)date('N')):?>
                style="color:green" 
                <?php endif;?>
                 >
                <?= $jour ?>:
                <?= creneaux_html(CRENEAUX[$key])?>
            </li>
            <?php endforeach;?>
        </ul>

    </div>
</div>

<?php
require('footer.php');
?>