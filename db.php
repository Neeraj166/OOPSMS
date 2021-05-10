<?php
class dbhl
{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    public function connect(){
        $this->servername="localhost";
        $this->username="root";
        $this->password="";
        $this->dbname="sms";

        $conn= new mysqli($this->servername, $this->username,$this->password,$this->dbname);
        return $conn;

    }
}
/*$data=new dbhl;
$d=$data->connect();
if ($d)
{echo 'connected';}
else 
echo 'sdfs';
*/
?>