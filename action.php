<?php
include 'data.php';

    if(isset($_POST['add']))
    { 
        $name=$_POST['name'];
        $roll = $_POST['roll_no'];
        $address = $_POST['address'];
        $faculty = $_POST['faculty'];
        $status = $_POST['status'];
        $obj= new data();
        $ab=$obj->insertrecord($name,$roll,$address,$faculty,$status);
        if($ab)
            {header('location: display.php');}
    }

    if (isset($_GET['del']))
    {
    
        $delet =$_GET['del'];
        $bc= new data();
        $ab=$bc->delete($delet);
        
         }

    if (isset($_POST['update']))
    {
        $edt=$_POST['update'];
        $sn=$_POST['sn'];
        $name=$_POST['name'];
        $roll = $_POST['roll_no'];
        $address = $_POST['address'];
        $faculty = $_POST['faculty'];
        $status = $_POST['status'];
        $gh=new data();
        $ab=$gh->edit( $sn, $name,$roll,$address,$faculty,$status);
       
    }
    if(isset($_POST['add_fac']))
    { 
        $name=$_POST['name'];
        $obj= new data();
        $ab=$obj->insert_fac($name);
        if($ab)
            {echo 'added'.'<br>';
    }}

    if (isset($_POST['updated']))
    {
        $fid=$_POST['id'];
        $faculty=$_POST['faculty'];
        $gh=new data();
        $ab=$gh->edit_fac( $faculty, $fid); 
    }

    if (isset($_GET['delt']))
    {
        $fid =$_GET['delt'];
        $bc= new data();
        $ab=$bc->dlt_fac($fid);
         }




?>