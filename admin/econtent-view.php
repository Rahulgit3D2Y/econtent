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
                                            <th>Content Name</th>
                                            <th>SubContent Name</th>
                                            <th>Content Title</th>
                                            <th>Content Type</th>
                                            <th>Content Amount</th>
                                            <th>Created By</th>
                                            <th>Update By</th>
                                            <th>Approve By</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                       <?php
                                       
                                        $count = 0;
                                        $sql=mysqli_query($con,"SELECT * FROM `econtent_message` WHERE `econtent_message_status`='Active'");
                                        while($result=mysqli_fetch_assoc($sql))
    {
        $count+=1;
   $id=$result['econtent_message_id'];     
$created_user_id=$result['econtent_message_createdby'];
$updated_user_id=$result['econtent_message_updatedby'];
$approve_user_id=$result['econtent_message_approveby'];
//$modulename=$result['popupname'];


                    $result123=mysqli_query($con,"SELECT * FROM `user` WHERE `id`=\"$created_user_id\"");
                    $row12=mysqli_fetch_array($result123);
                    $user_login_name=$row12['first_name']." ".$row12['middle_name']." ".$row12['last_name'];
                    $result12=mysqli_query($con,"SELECT * FROM `user` WHERE `id`=\"$updated_user_id\"");
                    $row1=mysqli_fetch_array($result12);
                    $upadted_user_login_name=$row1['first_name']." ".$row1['middle_name']." ".$row1['last_name'];
                     $result124=mysqli_query($con,"SELECT * FROM `user` WHERE `id`=\"$approve_user_id\"");
                    $row123=mysqli_fetch_array($result124);
                    $approve_user_login_name=$row123['first_name']." ".$row123['middle_name']." ".$row123['last_name'];


                                        ?>
                                        <tr>        
                                    <td><?php echo $count; ?></td>
                                    <td></td>
                                    <td></td>
                                    <td><?php echo $result['econtent_message_tittle']; ?></td>
                                    <td><?php echo $result['econtent_message_contenttype']; ?> </td>
                                    <td><?php if($result['econtent_message_contenttype']=="Premium") { echo $result['econtent_message_amount']; } else { echo "0"; } ?> </td>
                                    <td><?php echo  $user_login_name; ?></td>
                                    <td><?php echo $upadted_user_login_name; ?></td>
                                    <td><?php echo $approve_user_login_name; ?></td>
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