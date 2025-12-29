<?php
function connexion()
{
    try{
        return new PDO('mysql:dbname=artbox;host=localhost;charset=utf8','root',''); // attention à la configuration qui est que les différents paramètres doivent prendre une valeur donc un signe = 
    }
    catch(Exception $e)
    {
        die('Erreur: ' .$e->getMessage());
    }
    
}
