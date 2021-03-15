<?php

function connectBDD($hostname, $database, $username, $password) {
    try {
        $bdd = new PDO("mysql:host=".$hostname.";dbname=".$database.";charset=utf8","".$username."","".$password."");
        return $bdd;
    } catch (PDOException $e) {
        die("Erreur de connexion au serveur MySQL : " . $e->getMessage());
    }
}

?>