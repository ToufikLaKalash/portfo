<?php

class DB{

    /**
     * @return PDO|string
     */
    public static function getDB(){
        try{
            $infos = parse_ini_file('Connexion.ini'); // On parse le fichier de configuration
            $bdd = new PDO($infos['dsn'].$infos['dbname'], $infos['username'], $infos['password']); // On se connecte à la base de données
            return $bdd; // On renvoie l'objet
        }catch(PDOException $e){
            echo $e->getMessage() . ' à la ligne n°' . $e->getLine();// On renvoie l'erreur
        }
    }
}