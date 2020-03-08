<?php
class DB {
    
    private $dbs;

    private $host = "localhost";
    private $databaseName = 'planner';
    private $userName = "root";
    private $password = "";


    public function __construct(){
        try {
            $this->dbs = new PDO("mysql:host=$this->host;dbname=$this->databaseName", $this->userName, $this->password,Array(
                PDO::ATTR_PERSISTENT => true
            ));
            foreach($this->dbs->query('SELECT * from titles') as $row) {
                echo '<pre>';
                print_r($row);
                echo '<hr>';
            }

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function Read(){

    }

    public function Insert(){

    }

    public function Delete(){

    }

    public function Create(){

    }

    // all magic functions
    public function __call($name, $arguments)
    {
        
    }

    public static function __callStatic($name, $arguments)
    {
        
    }

    public function __get($name)
    {
        
    }

    public function __set($name, $value)
    {
        
    }

    public function __isset($name)
    {
        
    }

    public function __unset($name)
    {
        
    }

    public function __debugInfo()
    {
        
    }

    public function __clone()
    {
        
    }

    public function __invoke()
    {
        
    }

    public function __toString()
    {
        
    }

    public function __wakeup()
    {
        
    }

    public function __sleep()
    {
        
    }

    public function __destruct(){ //unset all properties
        unset($this->dbs);
        unset($this->host);
        unset($this->databaseName);
        unset($this->userName);
        unset($this->password);
    }
    
    //end magic functions

}