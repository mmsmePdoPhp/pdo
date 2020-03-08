<?php
class DB {
    
    private $dbs;

    private $host;
    private $databaseName='planner';
    private $userName;
    private $password;


    public function __construct(){
        try {
            $dbs = new PDO("mysql:host=$this->host;dbname=$this->databaseName", $this->userName, $this->password);
            foreach($dbs->query('SELECT * from tasks') as $row) {
                print_r($row);
            }
            $dbs = null;
        } catch (PDOException $e) {
            echo 'hi';
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    
}