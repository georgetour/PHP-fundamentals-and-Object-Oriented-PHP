<?php

//IT contains the database constants
require_once('new_config.php');


class Database{

    public $connection;

    //With constructor the function it has n it runs immediately wjen new instance is created
    //so we don;t have to call it
    function __construct()
    {
        $this->open_db_connection();

    }

    //Connecting to database
    public function open_db_connection()
    {
        //$this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

        //OOP way of connecting to database
        $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

        //Now we have all methods of mysqli class
        if($this->connection->connect_errno){
            die("Database error".$this->connection->connect_error);
        }

    }


    //Query that will return result 
    public function query($sql){

        //Procedural
        //$result = mysqli_query($this->connection,$sql);

        //OOP
        $result = $this->connection->query($sql);

        $this->confirm_query($result);

        return $result;
    }



    private function confirm_query($result){

        if(!$result){
            die("Query failed" .$this->connection->error);
        }
    }


    

    //Escapes special charactes for use in sql statement
    public function escape_string($string){

        $escaped_string = $this->connection->real_escape_string($string);
        return $escaped_string;

    }


    public function insert_id(){
        //Using the mysqli insert id
        return $this->connection->insert_id;
    }







}//End Database class


//Creating new instance of the class Database so we can connect to db
$database = new Database();

















?>