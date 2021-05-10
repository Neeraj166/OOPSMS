

<h1>List of students</h1>
            <table align= "left" border="1px">
            <thead> 
                    <th>SN</th>
					<th>Name</th>
					<th>Roll No</th>
					<th>Address</th>
					<th>Faculty</th>
                    <th>Status</th>	
                    <th colspan="2">Operation</th>			
            </thead>
            
            <?php
                include 'data.php';
                $datas= new data;
                $data=$datas->getallusers();
            
                while( $result=mysqli_fetch_assoc($data))
                    {
            ?>
                
                        <tr>
                        <td><?php echo $result['SN']?></td>
                        <td><?php echo $result['name']?></td>
                        <td><?php echo $result['roll_no'] ?></td>
                        <td><?php echo $result['address'] ?></td>
                        <td><?php echo $result['faculty'] ?></td>
                        <td><?php echo $result['status'] ?></td>
                        <td><a href="edit.php?edt=<?php echo $result['SN']; ?>">Edit</a></td>
                        <td><a href="action.php?del=<?php echo $result['SN']; ?>">Delete</a></td>
                        </tr>
               
                        <?php
                    }
        
           ?> 
            </table>