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
    public function insert_fac($name)
        {
            $conn=$this->connect();
            $query="INSERT INTO faculty (faculty) values('$name')"; 
            $ab= mysqli_query($conn,$query);
            if ($ab){
                (header('location:display_fac.php'));
            }
            return($ab);
        }

        public function get_fac()
        {
            $conn=$this->connect();
            $sql="SELECT * from faculty";
            $ab= mysqli_query($conn,$sql);
                
                
                return $ab;

        }

        public function edit_fac($faculty,$fid)
        {
            $conn=$this->connect();
            $query = "UPDATE faculty SET faculty = '$faculty' WHERE fid = $fid";  
            $result = mysqli_query($conn, $query);
            if ($result){
                (header('location:display_fac.php'));
            }
            return $result;
        }

        public function dlt_fac($fid)
        {
            $conn=$this->connect();
            $query= "DELETE FROM faculty WHERE fid = $fid";
            $ab=mysqli_query ($conn,$query);
            if($ab)
            {
                header('location: display_fac.php');
            }
            return $ab; 
        }
}

?>