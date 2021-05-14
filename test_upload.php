 <?php
$conn= mysqli_connect("localhost","root","","uploadfile");

if(isset($_POST['uploadfilesub'])){

    
    // $files=$_FILES['uploadfile'];
    // print_r($files);
    // echo '<br>';
    $filename=$_FILES['uploadfile']['name'];//file name
    // print_r($filename);
    $fileerror= $files['error'];
    $filetmp=$files['tmp_name'];//stored location

    $fileext= explode('.',$filename);
    $filecheck= strtolower(end($fileext)); 
    $fileextstored=array('png','jpg','jpeg'); ?>
    <table border="1px">
    <thead> SN </thead>
    <thead>Image</thead><?php
    if(in_array($filecheck,$fileextstored))
    {
        $destinationfile='upload/'.$filename;
        move_uploaded_file($filetmp,$destinationfile);
    
        $q="INSERT INTO `up`( `imagename`) VALUES ('$destinationfile')";
        $quer=mysqli_query($conn,$q);

        $disp= "SELECT * from up";
        $queryd= mysqli_query($conn,$disp);
        //$row=mysqli_num_rows($queryd);
        while( $result=mysqli_fetch_assoc($queryd))
    { 
        ?> 
        
      <tr>
      <td><?php echo $result['sn'].'<br>'; ?></td>
      <td><img src="<?php echo $result['imagename']; ?>" height="100px" width="100px"></td>
      </tr>
      
      <?php
    } 
    }

}
?>
</table>