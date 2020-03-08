<?php
class NewDB extends DB {
    
    public function __construct(){
    // public function __construct($host,$databaseName,$userName,$password){
        Parent::__construct();
    }

    // public function __construct(){
    //     try {
    //         $dbs = new PDO("mysql:host=$this->host;dbname=$this->databaseName", $this->userName, $this->password);
    //         foreach($dbs->query('SELECT * from titles') as $row) {
    //             print_r($row);
    //         }
    //         $dbs = null;
    //     } catch (PDOException $e) {
    //         print "Error!: " . $e->getMessage() . "<br/>";
    //         die();
    //     }
    // }
    
}