<a href="index.php">Home</a><br>
<a href="add_fac.php">Add Faculty</a><br>
<h1>Available Faculty</h1>
            <table border="2px">
            <thead> <th>SN</th>
                    <th>Faculty</th>
                    <th colspan="2">Operation</th>			
            </thead>
            
            <?php
                include 'data.php';
                $datas= new data;
                $data=$datas->get_fac();
            
                while( $result=mysqli_fetch_assoc($data))
                    {
            ?>
                
                        <tr>
                        <td><?php echo $result['fid']?></td>
                        <td><?php echo $result['faculty']?></td>
                        <td><a href="edit_fac.php?edtt=<?php echo $result['fid']; ?>">Edit</a></td>
                        <td><a href="action.php?delt=<?php echo $result['fid']; ?>">Delete</a></td>
                        </tr>
               
                        <?php
                    }
        
           ?> 
            </table>