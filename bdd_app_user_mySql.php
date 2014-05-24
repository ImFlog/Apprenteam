<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=apprenteam', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>
