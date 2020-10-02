<?php
require_once('config.php');
function onglet($lien, $titre, $linkClass = '')
{
    $class = 'nav-item';
    if ($_SERVER['SCRIPT_NAME'] === $lien) {
        $class .= ' active';
    }
    return <<< HTML
         <li class=$class>
        <a class=$linkClass href=$lien >$titre</a>
      </li>
HTML;
}

function nav_menu($class = '')
{
    return onglet('/index.php', 'Home', $class) . onglet('/contact.php', 'Contact', $class).onglet('/menu.php','Menu', $class);
}

function onglet_footer($lien, $titre)
{
    return <<< HTML
         <li class='nav-item'>
        <a href=$lien >$titre</a>
      </li>
HTML;
}

function nav_footer()
{
    return onglet_footer('/index.php', 'Home') . onglet_footer('/contact.php', 'Contact').onglet_footer('/jeu.php','Jeu').onglet_footer('/glaces.php','Les Glaces').onglet_footer('/newletters.php','Newletters');
}


function checkbox($name, $value, $data)
{
    $attributes = '';
    if (isset($data[$name]) && in_array($value, $data[$name])) {
        $attributes .= 'checked';
    }
    return <<<HTML
        <input type="checkbox" name = "{$name}[]" value="$value" $attributes>

HTML;
}



function radio($name, $value, $data)
{
    $attributes = '';
    if (isset($data[$name]) && $value === $data[$name]) {
        $attributes .= 'checked';
    }
    return <<<HTML
        <input type="radio" name = "$name" value="$value" $attributes>
HTML;
}


function creneaux_html(array $creneaux)
{
    if (empty($creneaux)) {
        return "Ferme";
    }
    $phrases = [];

    foreach ($creneaux as $creneau) {

        $phrases[] = "de <strong>{$creneau[0]}H</strong> a <strong>{$creneau[1]}H</strong>";
    }

    return "Ouvert " . implode(" et ", $phrases);
}


function in_creneau($heure, $creneaux)
{
    foreach ($creneaux as $creneau) {
        $debut = $creneau[0];
        $fin = $creneau[1];
        if (($heure >= $debut) && ($heure < $fin)) {
            return true;
        }
    }
    return false;
}
