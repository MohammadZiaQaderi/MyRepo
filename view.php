<?php
include("connection.php");
        class Demo
        {
            public $conn, $serverName, $DatabaseUserName, $DatabasePassword, $dbName;
            public $Phone, $Email, $Name, $DateOfBirth, $Graduation, $YearOfPassing, $PresentAddress, $PermanentAddress;

            public function __construct()
            {
              /*
                $this->serverName="localhost";
                $this->DatabaseUserName="root";
                $this->DatabasePassword="";
                $this->dbName = "AddmisionEnquiry";
                $this->conn=new mysqli($this->serverName,$this->DatabaseUserName,$this->DatabasePassword, $this->dbName);
                if($this->conn->connect_error)
                die("something went wrong".$conn->connect_error);
              */
                 if(isset($_POST['inputName']))
                 {
                $this->Name=$_POST['inputName'];
                $this->DateOfBirth=$_POST['inputDateOfBirth'];
                $this->Phone=$_POST['inputPhone'];
                $this->Email=$_POST['inputEmail']; 
                $this->Graduation=$_POST['inputGraduation'];    
                $this->YearOfPassing=$_POST['inputYearOfPassing'];
                $this->PresentAddress=$_POST['inputPresentAddress']; 
                $this->PermanentAddress=$_POST['inputPermanentAddress'];          
                 }
              }
            private function split_date($date_of_birth)
            {
               $dateParts=explode("-",$date_of_birth);
               //return $dateParts[2]."-".$dateParts[1]."-".$dateParts[0];
            }
            private function split_year_of_passing($year_of_passing)
            {
               $ydateParts=explode("-",$year_of_passing);
               //return $ydateParts[2]."-".$ydateParts[1]."-".$ydateParts[0];
            }
            public function saveData()
            {
                $obj=new Demo();
                $obj->split_date($this->DateOfBirth);
                $obj->split_year_of_passing($this->YearOfPassing); 
                $sql="insert into AddmisionEnquiry values('" . $this->Name . "' , " . $this->Phone . " , '" . $this->Email . "' , '" . $this->DateOfBirth . "' , '" . $this->Graduation . "' , '" . $this->YearOfPassing . "' , '" . $this->PermanentAddress . "' , '" . $this->PresentAddress . "' ); ";
                if ($conn->query($sql) === TRUE) 
                {
                    header('location:index.php?name=done');
                } 
                  else 
                  {
                
                    header('location:index.php?name=failed');
                  }
                  
                  $this->conn->close();
            }
            
        }
        $db=new Demo();
        $db->saveData();
        echo "hiiiii....".$db->Graduation;
?>
 
    