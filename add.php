<a href="index.php">Home</a><br>
<form action="action.php" method="POST">
            <table>           
            <tr>
                <td>Name:</td>
                <td>
                    <input type="text" name="name" required >
                </td>
            </tr>
            <tr>
                <td>Roll No:</td>
                <td>
                    <input type="text" name="roll_no" required>
                </td>
            </tr><tr>
                <td>Address:</td>
                <td>
                    <input type="text" name="address"required>
                </td>
            </tr>
                <td>Faculty:</td>
                <td><select name="faculty" required>
                   <option>Select..</option>
                   <?php
                        include 'data.php';
                        $a=new dbhl;
                        $b=$a->connect();

                        $q="SELECT * from faculty";
                        $r=mysqli_query($b,$q);
                        if($r)
                        {
                            while($row=mysqli_fetch_assoc($r))
                            {
                                echo '<option>'.$row['faculty'].'</option>';
                            }
                        }
                   
                   ?>
                   </select>
                </td>
           <tr>
                <td>Status:</td>
                <td>
                    <input type="text" name="status"required >
                </td>
            </tr>
            <tr>  <td>
                <input type ="submit" value="ADD" name ="add">
                </td>
            </tr>
            </table>
            
 </form>