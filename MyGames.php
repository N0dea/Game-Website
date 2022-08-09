<?php
class FaveGames
{
    //Private Data 
    private $HostName;  // typically "localhost" 
    private $UserID;
    private $Password;
    private $DBName;
    private $Con;     // MySQL Connection 
    //-------------------------------------------------     
    //-------------------------------------------------  
    // Public Methods 
    //-------------------------------------------------   
    //-------------------------------------------------   
    // Constructor 
    public function __construct(
        $host = NULL,
        $uid = NULL,
        $pw = NULL,
        $db = NULL
    ) {

        $this->HostName = $host;
        $this->UserID      = $uid;
        $this->Password = $pw;
        $this->DBName      = $db;

        // Connect to Database  
        $this->Con = mysqli_connect($host, $uid, $pw, $db);
        if (mysqli_connect_errno($this->Con)) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }
    //-------------------------------------------------  
    // Destructor     
    public function __destruct()
    {
        //echo("The class destructor is being called... <br />"); 
        // Close connection 
        mysqli_close($this->Con);
    }

    public function Get_Games_DB()
    {
        $sql = "SELECT   
        game.title,
        game.dev,
        game.release_date,
        game.description,
        game.trailer
       FROM 
        game
       ";

        $result = mysqli_query($this->Con, $sql);

        // print_r($result); 
        $arrayResult = array();
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $arrayResult[] = $row;
            //print_r($row); 
            //echo "<br />"; 
        }

        return ($arrayResult);
    }
}
