<?php
try
{
    $db = new PDO("mysql:host=localhost;charset=utf8;dbname=jarditou", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (Exception $e)
{
    echo 'Erreur : ' . $e->getMessage() . '<br />';
    echo 'Numéro : ' . $e->getCode();
    die('Fin du script');
}
?>