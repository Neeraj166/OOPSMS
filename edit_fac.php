<?php
include 'data.php';
if (isset($_GET['edtt']))
{
    $cd= new dbhl;
    $ef=$cd->connect();
    $edit=$_GET['edtt'];
    $query= "SELECT * FROM faculty WHERE fid = $edit";
    $sd= mysqli_query ($ef,$query);
    while( $res=mysqli_fetch_assoc($sd))
    { 
        ?> 
        
        <form action="action.php" method="POST">
        
        <table> 
        <input type="hidden" name="id" value="<?php echo $res['fid']; ?>">          
        <tr>
            <td>Name:</td>
            <td>
                <input type="text" name="faculty" value="<?php echo $res['faculty']; ?>" >
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