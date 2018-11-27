<?php
class Member{
    private $memberFName=" ";
    private $memberLName=" ";
    private $ID;
    private $memberPhone;
    
    protected $username = "root";
    protected $password = "";
    protected $servername = "localhost";
    protected $databaseName ="Member";
    
    function __construct($aID,$amemberFName,$amemberLName,$amemberPhone) {
        $this->ID = $aID;
        //first letter upper case
        $this->memberFName = ucfirst($amemberFName);
        $this->memberLName = ucfirst($amemberLName);
        
         // Allow only Digits, remove all other characters.
        $numberPhone = preg_replace("/[^\d]/","",$amemberPhone);
        // get number length.
        $lengthPhone = strlen($numberPhone);
        if($lengthPhone == 9) {
            $numberPhone = preg_replace("/^1?(\d{3})(\d{3})(\d{3})$/", "$1-$2-$3", $numberPhone);
            $this->memberPhone = $numberPhone;
            $this->insertData();
            
        }
        elseif ($lengthPhone !== 9) {
            echo "Wrong Phone number";
        
        }
       
    }
    public function getName(){
        echo $this->memberFName." ".$this->memberLName;
        echo "<br>"."<br>";  
    }
    private function insertData(){
        $conn = $conn = new mysqli($this->servername,$this->username,$this->password, $this->databaseName);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "INSERT INTO member (`ID`, `F_name`, `L_name`, `phone`)VALUES (".$this->ID.",'".$this->memberFName."','" .$this->memberLName."','". $this->memberPhone."')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        
        }
}

