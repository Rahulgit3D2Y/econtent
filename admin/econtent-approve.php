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
                                    <form method="post" action="" name="form" onsubmit="return validateForm()">
                                <table id="datatablesSimpl">
                                    <thead>
                                        <tr>
                                             <th data-sortable="false"><input type="checkbox" name="select_all" id="select_all" > Select All <br></th>
                                            <th>S.No</th>
                                            <th>Title</th>
                                            <th>Content Type</th>
                                            <th>Content Price</th>
                                            <th>Content View</th>
                                            <th>Created By</th>
                                            <th>Update By</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                       
                                        $count = 0;
                                        $sql=mysqli_query($con,"SELECT * FROM `econtent_message` WHERE `econtent_message_status`='Draft'");
                                        while($result=mysqli_fetch_assoc($sql))
    {
        $count+=1;
   $id=$result['econtent_message_id'];     
$created_user_id=$result['econtent_message_createdby'];
$updated_user_id=$result['econtent_message_updatedby'];
//$modulename=$result['popupname'];


                    $result123=mysqli_query($con,"SELECT * FROM `user` WHERE `id`=\"$created_user_id\"");
                    $row12=mysqli_fetch_array($result123);
                    $user_login_name=$row12['first_name']." ".$row12['middle_name']." ".$row12['last_name'];
                    $result12=mysqli_query($con,"SELECT * FROM `user` WHERE `id`=\"$updated_user_id\"");
                    $row1=mysqli_fetch_array($result12);
                    $upadted_user_login_name=$row1['first_name']." ".$row1['middle_name']." ".$row1['last_name'];


                                        ?>

                                        <tr>       
                                        <td><input type="checkbox" name="ids[]" value="<?php echo $id; ?>" ></td> 
                                    <td><?php echo $count; ?></td>
                                    <td><?php echo $result['econtent_message_tittle']; ?></td>
                                    <td><?php echo $result['econtent_message_contenttype']; ?> </td>
                                    <td><?php if($result['econtent_message_contenttype']=="Premium") { echo $result['econtent_message_amount']; } else { echo "0"; } ?> </td>
                                    <td> </td>
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
                            <!-- upload section-->
                                <div class="row mb-3">
                                                <div class="col-md-3">
                                                   <div class="form-floating mb-3 mb-md-0">
                                    
                                    <select class="form-select" name="inputStatusSelect" id="inputStatusSelect"  >
                                        <option value="" selected>-- Select an option --</option>
                                        <option value="Active">Approve</option>
                                        <option value="Reject">Reject</option>
                                    </select>
                                <label for="inputStatusSelect"> Select Status</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                                                   <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" type="text" name="InputSubmitReason" id="InputSubmitReason" >
                                <label for="InputSubmitReason">Reason</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                                                   <div class="form-floating mb-3 mb-md-0">
                                    <input class="btn btn-success " type="submit" name="submit" value="Approve">
                            </div>
                        </div>
                    </div>
                    <!--- end of this section -->
                            </form>
                        </div>
                    </div>
                </main>
<?php
    if(isset($_POST['submit'])){
        $ids = $_POST['ids'];
        if(empty($ids)){
            echo "You didn't select any IDs.";
        } else {
            //echo "Selected IDs: ";
            foreach($ids as $id) {
               //echo $id . " ";
date_default_timezone_set('Asia/Kolkata'); 
                 $datetime=date("Y-m-d h:i:s a");
                 $date=date("Y-m-d");
    $query="UPDATE `econtent_message` SET `econtent_message_status`='$inputStatusSelect',`econtent_message_approvereason`='$InputSubmitReason',`econtent_message_approvedate`='$date',`econtent_message_approveby`='$log',`econtent_message_approvedatetime`='$datetime' WHERE `econtent_message_id` ='$id'";   
mysqli_query($con,$query);
              echo "<script language='javascript'>alert('Content $inputStatusSelect Sucessfully');window.location='$Currentwebsiteurl'</script>";
            }
        }
    }
    ?>




<?php
include("include/footer.php");
?>
<script>
        // jQuery code to select all checkboxes when "select_all" checkbox is checked
        $(document).ready(function(){
            $('#select_all').click(function(){
                if($(this).is(':checked')){
                    $('input[name="ids[]"]').prop('checked', true);
                } else {
                    $('input[name="ids[]"]').prop('checked', false);
                }
            });
        });


        function validateForm() {
  var checkboxes = document.getElementsByName('ids[]');
  var isChecked = false;
  
  for (var i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked) {
      isChecked = true;
      break;
    }
  }
  
  if (!isChecked) {
    alert('Please select at least one checkbox.');
    return false;
  }
  //var selectElement = document.getElementById("inputStatusSelect");
  if (document.form.inputStatusSelect.value == "") {
    alert("Please select an option.");
    document.form.inputStatusSelect.focus();
    return false;
  }

if(document.form.InputSubmitReason.value=="")
    {
    alert("Please Enter Reason");
  document.form.InputSubmitReason.focus();
  return false;
  }
  
  return true;
}
    </script>