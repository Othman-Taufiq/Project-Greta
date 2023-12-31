<?php
    abstract class Model{

        private const HOST = "localhost";
        private const DB = "projet_annonces";
        private const USER = "root";
        private const PWD = "";

        private static $database;

        private static function initDatabase(){
            self::$database = new PDO('mysql:host='. self::HOST . ';dbname='. self::DB,
                    self::USER,
                    self::PWD,
                    [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']
                );
                //gestion des erreurs
                self::$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        
        }

        protected function getDatabase(){
        if (self::$database === null) {
            self::initDatabase();
        }
        return self::$database;}

        function deleteById(){
            
        }

        function selectAll(){

        }

        function selectbyId(){

        }
    }
?>