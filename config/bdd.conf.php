<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=blogiut;charset=utf8', 'root', '');
    $bdd->exec("set names utf8");
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 

catch (Exception $e)
{
    die('erreur :' . $e->getMessage());
}