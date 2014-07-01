<?php

session_start();

if (isset($_SESSION['currentURL']))
{
    $currentURL = $_SESSION['currentURL'];
}
else
{
    $currentURL = "./index.php";
}

if (isset($_GET['lang']))
{
    $lang = $_GET['lang'];
    if ($lang != "vie" && $lang != "eng")
        $_SESSION['LANGUAGE'] = "eng";
    else
        $_SESSION['LANGUAGE'] = $lang;
}
else
{
    $_SESSION['LANGUAGE'] = "eng";
}

//echo $currentURL;
header("Location: $currentURL");

?>
