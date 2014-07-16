<?php

if ($_GET['lang'] == 'vie') {
    $lang = parse_ini_file("lang/vie.ini");
} else {
    $lang = parse_ini_file("lang/eng.ini");
}

function lang($key) {
    global $lang;
    return $lang[$key];
}

?>
