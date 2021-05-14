<?php
include 'data.php';
if (isset($_GET['edt']))
{
    $cd= new dbhl;
    $ef=$cd->connect();
    $edit=$_GET['edt'];
    $query= "SELECT * FROM students WHERE SN = $edit";
    $sd= mysqli_query ($ef,$query);
    while( $res=mysqli_fetch_assoc($sd))
    { 
        ?> 
        
        <form action="action.php" method="POST">
        
        <table> 
        <input type="hidden" name="sn" value="<?php echo $res['SN']; ?>">          
        <tr>
            <td>Name:</td>
            <td>
                <input type="text" name="name" value="<?php echo $res['name']; ?>" >
            </td>
        </tr>
        <tr>
            <td>Roll No:</td>
            <td>
                <input type="text" name="roll_no" value="<?php echo $res['roll_no']; ?>">
            </td>
        </tr><tr>
            <td>Address:</td>
            <td>
                <input type="text" name="address" value="<?php echo $res['address']; ?>">
            </td>
        </tr><tr>
            <td>Faculty:</td>
            <td><select name="faculty" required >
           <option><?php echo $res['fid'];?></option>
                   <?php
                        $a=new dbhl;
                        $b=$a->connect();

                        $q="SELECT * from faculty";
                        $r=mysqli_query($b,$q);
                        if($r)
                        {
                            while($row=mysqli_fetch_assoc($r))
                            {
                                echo '<option value="'.$row['fid'].'">'.$row['faculty'].'</option>';

                            }
                        }
                   
                   ?>
                   </select> </td>
        </tr><tr>
            <td>Status:</td>
            <td>
                <input type="text" name="status" value="<?php echo $res['status']; ?>" >
            </td>
        </tr>
        
        <tr>  <td>
            <input type ="submit" value="Update" name ="update">
            </td>
        </tr>
        </table>
    </form>
    <?php
    } 
}
?>