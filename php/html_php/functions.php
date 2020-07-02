<?php
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
    return onglet('/index.php', 'Home', $class) . onglet('/contact.php', 'Contact', $class);
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
    return onglet_footer('/index.php', 'Home') . onglet_footer('/contact.php', 'Contact');
}


function checkbox($name, $value, $data)
{
    $attributes = '';
    if(isset($data[$name]) && in_array($value,$data[$name])){
        $attributes .= 'checked';
    }
    return <<<HTML
        <input type="checkbox" name = "{$name}[]" value="$value" $attributes>

HTML;
}



function radio($name,$value,$data)
{
    $attributes = '';
    if(isset($data[$name]) && $value===$data[$name]){
        $attributes .= 'checked';
    }
    return <<<HTML
        <input type="radio" name = "$name" value="$value" $attributes>
HTML;
}