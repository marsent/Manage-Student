<?php

class DataAccessHelper
{
    public $conn=null;
    protected $servername = "localhost";
    protected $username = "root";
<<<<<<< HEAD
    protected $password = "Tuananh19022k";
    protected $dbname = "qlhs";
=======
    protected $password = "";
    protected $dbname = "newcnpm1";
>>>>>>> 141f8b1b01851e2a2125b94604006cb8640b1143

    public function __construct()
    {
        $this->conn=mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error){
            echo "Fail " . $this->conn->connect_error;
        }
    }

    public function connect()
    {

        // Create connection
        $GLOBALS['conn'] = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        $GLOBALS['conn']->set_charset("utf8");
        // Check connection
        if ($GLOBALS['conn']->connect_error) {
            die("Connection failed: " . $GLOBALS['conn']->connect_error);
        }
        //echo "Connected successfully";
        return $GLOBALS['conn'];
    }

    public function executeNonQuery($sql)
    {
        if ($GLOBALS['conn']->query($sql) === TRUE) {
            echo "Your query has been executed successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
        }
    }

    public function executeQuery($sql)
    {
        $result = $GLOBALS['conn']->query($sql);
        return $result;
    }

    public function close()
    {
        mysqli_close($GLOBALS['conn']);
    }
    public function __destruct()
    {
        $this->closeConnection();
    }
    protected function closeConnection(){
        if ($this->conn != null ){
            $this->conn->close();
            $this->conn = null;
        }
    }
}
