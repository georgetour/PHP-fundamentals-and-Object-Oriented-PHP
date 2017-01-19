<?php
//=========PHP Data Objects=========
//This gives us a nice and secure way to connect with the database
class Database{

    //Connection authentication
    private $host  = 'localhost';
    private $user  = 'roota';
    private $pass  = '153453';
    private $dbname = 'myblog';

    //Database handlers
    private $dbh;
    private $error;
    private $stmt;

    public function __construct(){
        //The Data Source Name, or DSN, contains the information required to connect to the database.
        $dsn = 'mysql:host =' .$this->host .';db-name ='.$this->dbname;

        //Set Options
        $options  = array(
          //Persistent connection http://php.net/manual/en/pdo.connections.php
          PDO::ATTR_PERSISTENT => true,

          //http://php.net/manual/en/pdo.error-handling.php
          PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION
        );

        //Create new PDO
        try{
            //Creates a PDO instance representing a connection to a database
            $this->dbh = new PDO($dsn,$this->user,$this->pass,$options);
        }catch(PDOEception $Exception){//Why here doesn;t work if
            // I write PDOException
            $this -> error =$Exception->getMessage();
        }

    }


}

?>
