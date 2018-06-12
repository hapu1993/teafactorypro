
<?php
                        if(isset($_POST['completedsearch']))
                        {
                               
                                include ('connection.php');
                                
                                mysqli_select_db($con,'teafactory');
                                $qu = mysqli_query($con,"SELECT * FROM customer WHERE customer_id='".$_POST['customer_id']."'");
                                echo "<table>";
                                echo "
                                                <th>customer ID</th>
                                                <th>Customer Name</th>
                                                <th>Mobile No</th>
                                                 <th>Customer Address</th>            
                                                ";
                                while($row = mysqli_fetch_array($qu))
                                           {

                                                echo "<tr><td>";  
                                                echo $row['customer_id'];
                                                echo "</td>";
                                                echo "<td>";
                                                echo $row['customer_name'];
                                                echo "</td>";
                                                echo "<td>";
                                                echo $row['mobile_no'];
                                                echo "</td>";
                                                echo "<td>";
                                                echo $row['customer_address'];
                                                echo "</td>";
                                                echo "</tr>";
                                }
                                echo "</table>";
                        }

                ?>