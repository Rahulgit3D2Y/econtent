<?php
include("include/header.php");
require("permission_check.php");
?>

 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                      
                        

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Econtent
                            </div>
                            <div class="card-body">
                                 <div style="overflow-x:auto;">
                                <table id="datatablesSimpl">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Menu Name</th>
                                            <th>Menu Icon</th>
                                            <th>Menu Order</th>
                                            <th>Created By</th>
                                            <th>Update By</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                       
                                        $count = 0;
                                        $sql=mysqli_query($con,"SELECT * FROM `menu` WHERE `status`='Active'");
                                        while($result=mysqli_fetch_assoc($sql))
    {
        $count+=1;
   $id=$result['menu_id'];     
$created_user_id=$result['createdby'];
$updated_user_id=$result['updateby'];
//$modulename=$result['popupname'];


                                     $result123=mysqli_query($con,"SELECT * FROM `user` WHERE `id`=\"$created_user_id\"");
                                                          $row12=mysqli_fetch_array($result123);
                                                          $user_login_name=$row12['first_name']." ".$row12['middle_name']." ".$row12['last_name'];
                                                          $result12=mysqli_query($con,"SELECT * FROM `user` WHERE `id`=\"$updated_user_id\"");
                                                          $row1=mysqli_fetch_array($result12);
                                                          $upadted_user_login_name=$row1['first_name']." ".$row1['middle_name']." ".$row1['last_name'];


                                        ?>

                                        <tr>        
                                    <td><?php echo $count; ?></td>
                                    <td><?php echo $result['menu_name']; ?></td>
                                    <td> <a href="#"><i class="<?php echo $result['menu_icon']; ?>"></i></a></td>
                                    <td><?php echo $result['menu_order']; ?></td>
                                    <td><?php echo  $user_login_name; ?></td>
                                    <td><?php echo $upadted_user_login_name; ?></td>
                                    <td><a href="menu_update.php?menu_id=<?php echo $id;?>"><span class='fas fa-edit'></span></a></td>
                                    <td><a href="menu_delete.php?menu_id=<?php echo $id;?>"><span class='fas fa-trash'></span></a></td>       
                                            
                                            
                                              
                                        </tr>
                                       
                                        <?php
                                    }
                                        ?>
                                       
                                       
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>





<?php
include("include/footer.php");
?>