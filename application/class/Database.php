  
<?php


// namespace App
// use PDO,PDOException;


// class Database {

//     const NAME ='api';
//     const HOST = 'localhost';
//     const USER = 'root';
//     const PWD = '';

//     /**
//      * Fonction de connexion à la base de données
//      *
//      * @return Object instance de PDO
//      * ou
//      * @return String message d'erreur
//      */
//     static function connect(){
//         try{
//             $bdd = new PDO("mysql:hote=".SELF::HOST.";dbname=".SELF::NAME,SELF::USER,SELF::PWD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));	
//         } catch(PDOException $e) {
// 			$msg = 'ERREUR PDO dans ' . $e->getFile() . ' Ligne.' . $e->getLine() . ' : <br>' . $e->getMessage();
// 			die($msg);
// 		}
// 		return $bdd;
//     }
// }

?>