<?php
include 'db.php';
class data  extends dbhl
{
    public function insertrecord($name,$roll,$address,$faculty,$status)
    {
        $conn=$this->connect();
        $query="INSERT INTO students (name,roll_no,address,faculty,status) values('$name','$roll','$address','$faculty','$status')"; 
        $ab= mysqli_query($conn,$query);
        return($ab);
        
    }


    public function getallusers()
        {
            $conn=$this->connect();
            $sql="SELECT * from students";
            $ab= mysqli_query($conn,$sql);
                
                
                return $ab;

        }

    public function delete($delet)
    {
        $conn=$this->connect();
        $query= "DELETE FROM students WHERE SN = $delet";
        $ab=mysqli_query ($conn,$query);
        
        if($ab){
            header('location: display.php');
        }
        return $ab; 
    }

    public function edit ($sn,$name,$roll,$address,$faculty,$status)
    {
        $conn=$this->connect();
        $query = "UPDATE students SET name = '$name',roll_no = '$roll', faculty='$faculty',address= '$address',status = '$status' WHERE `SN` = $sn";  
        $result = mysqli_query($conn, $query);
        if($result){
            header('location: display.php');
        }
        return $result;
    }
}

?>