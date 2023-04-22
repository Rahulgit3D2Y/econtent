<?php
include("include/header.php");
require("permission_check.php");
?>
<?php
date_default_timezone_set('Asia/Kolkata');      
$date=date("Y-m-d h:i:sa");
$status = "Draft";

extract($_POST);
extract($_REQUEST);
if(isset($submit))
{


    $rs=mysqli_query($con,"SELECT * FROM `econtent_message` WHERE `econtent_message_content_id`='$InputSelectContent' AND  `econtent_message_subcontent_id`='$InputSubContentSelect' AND  `econtent_message_tittle`='$InputContentTittle' ");
if (mysqli_num_rows($rs)>0)
{
    echo "<script language='javascript'>alert('$InputContentTittle course id is allready in used');window.location='$Currentwebsiteurl'</script>";
exit();
}

  $econtentuploadquery="INSERT INTO `econtent_message`(`econtent_message_content_id`, `econtent_message_subcontent_id`,`econtent_message_tittle`,`econtent_message_display_content`, `econtent_message_content`, `econtent_message_image`, `econtent_message_coverphoto`, `econtent_message_contenttype`, `econtent_message_amount`, `econtent_message_download`,`econtent_message_download_file`,`econtent_message_status`, `econtent_message_createdby`, `econtent_message_createdtime`) VALUES ('$InputSelectContent','$InputSubContentSelect','$InputContentTittle','$InputShowContentMessage','$InputContentMessage','$InputContentImage','$InputContentCoverPage','$InputContentType','$InputContentAmount','$InputContentDownload','$InputContentDownloadFile','$status','$log','$date')";
 mysqli_query($con,$econtentuploadquery);
 $linkid=mysqli_insert_id($con);
$linkupload=hash('crc32b', $linkid);
mysqli_query($con,"UPDATE `econtent_message` SET `econtent_message_link`='$linkupload' where `econtent_message_id`='$linkid'");
echo "<script language='javascript'>alert('Course  \"$InputContentTittle \" Added Successfully');window.location='$Currentwebsiteurl'</script>";


}
?>
<script type="text/javascript">
  function  InputChangeContentType() {

    jselectedcontenttype = document.querySelector('#InputContentType').value;
        if(jselectedcontenttype == "Premium") {
                    document.getElementById("InputContentAmount").required = true;
                     document.getElementById("InputContentAmount").readOnly = false;
                    document.getElementById("InputContentAmount").disabled = false; 
                     //show content line code
                    document.getElementById("InputShowContentMessage").required = true;
                    document.getElementById("InputShowContentMessage").readOnly = false;
                     document.getElementById("InputShowContentMessage").disabled = false;
        } else if(jselectedcontenttype == "Non Premium") {
            document.getElementById("InputContentAmount").required = false;
                    document.getElementById("InputContentAmount").readOnly = true;
                    document.getElementById("InputContentAmount").disabled = true;
                    //show content line code
                    document.getElementById("InputShowContentMessage").required = false;
                    document.getElementById("InputShowContentMessage").readOnly = true;
                     document.getElementById("InputShowContentMessage").disabled = true;
                    
        }

  }

function  InputChangeContentDownload() {

    jselectedcontenttype1 = document.querySelector('#InputContentDownload').value;
        if(jselectedcontenttype1 == "Yes") {
            document.getElementById("InputContentDownloadFile").required = false;
                    document.getElementById("InputContentDownloadFile").readOnly = true;
                    document.getElementById("InputContentDownloadFile").disabled = true;

                    
        } else if(jselectedcontenttype1 == "No") {
            document.getElementById("InputContentDownloadFile").required = true;
                     document.getElementById("InputContentDownloadFile").readOnly = false;
                    document.getElementById("InputContentDownloadFile").disabled = false; 
        }

  }
  
</script>
<script src="ckeditor/fullpackage/ckeditor.js"></script>
<script src="ckfinder/ckfinder.js"></script>
                     
           <!-- main content -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-1">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-1">Add E-Content</h3></div>
                                    <div class="card-body">
                                         <form action="" method="POST" name="form" onsubmit="return validateForm()">
                                            <div class="row mb-3">
                                                <div class="col-md-3">
                                                   <div class="form-floating mb-3 mb-md-0">
<?php
        $selectcontentquery="SELECT * FROM `content` WHERE `content_status`='Active'";
$selectcontentquerystmt=$con->prepare($selectcontentquery);
$selectcontentquerystmt->execute();
$arrselectcontentquery=$selectcontentquerystmt->get_result();
?>
                                                        <select class="form-select" name="InputSelectContent" id="InputSelectContent"  required="InputSelectContent" >
    <option  value="" >-- Select an option --</option>
    <?php
                            foreach($arrselectcontentquery as $selectedContentName){
                                ?>
                                <option value="<?php echo $selectedContentName['content_id']; ?>"><?php echo $selectedContentName['content_name']; ?></option>
                                <?php
                            }
                            ?>

      </select>
                                                        <label for="InputSelectContent">Content</label>
                                                    </div>
                                                </div>
                                                 
                                                <div class="col-md-3">
                                                     <div class="form-floating mb-3 mb-md-0">
                                                        <select class="form-select" name="InputSubContentSelect" id="InputSubContentSelect" >
          <option selected="selected" disabled selected>-- Select an option --</option>

      </select>
                                                        <label for="InputSubContentSelect">SubContent</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="InputContentTittle" name="InputContentTittle" type="text" placeholder="Enter your Cotent Tittle" 
                                                        required="InputContentTittle" />
                                                        <label for="InputContentTittle">Tittle</label>
                                                    </div>
                                                </div>
                                             
                                            </div>
                                           
                                         
                                           <div class="row mb-3">
                                                
                                               <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <h4> Content</h4>
                                                        <textarea class="form-control"  id="InputContentMessage" name="InputContentMessage"  ></textarea>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row mb-3">
                                                
                                               <div class="col-md-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" type="file" name="InputContentImage" id="InputContentImage" accept="*/jpg" required>
                                                        <label for="InputContentImage">Image</label>
                                                    </div>
                                                </div>
                                                 <div class="col-md-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" type="file" name="InputContentCoverPage" id="InputContentCoverPage" accept="*/jpg" required>
                                                        <label for="InputContentCoverPage">Cover Page</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select class="form-select"  name="InputContentType" id="InputContentType" onchange="InputChangeContentType()" required>
                                                            <option selected="selected" value="" disabled selected>-- Select an option --</option>
                                                            <option id="Non Premium">Non Premium</option>
                                                            <option id="Premium">Premium</option>
                                                        </select>
                                                        <label for="InputContentType">Content Type</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" type="text" name="InputContentAmount" id="InputContentAmount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                                                        <label for="InputContentAmount">Amount</label>
                                                    </div>
                                                </div>
                                            </div>
                                              <div class="row mb-3">
                                                
                                               <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <h4> Display Content</h4> 
                                                        <textarea class="form-control"  id="InputShowContentMessage" name="InputShowContentMessage"  ></textarea>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <div class="col-md-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select class="form-select"  name="InputContentDownload" id="InputContentDownload" onchange="InputChangeContentDownload()" required>
                                                            <option selected="selected" value="" disabled selected>-- Select an option --</option>
                                                            <option id="Yes">Yes</option>
                                                            <option id="No">No</option>
                                                        </select>
                                                        <label for="InputContentDownload">User Content Download</label>
                                                    </div>
                                                </div>
                                                 <div class="col-md-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" type="file" name="InputContentDownloadFile" id="InputContentDownloadFile" accept="*/jpg" required>
                                                        <label for="InputContentDownloadFile">Download File</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0" align="center">
                                                 <input class="btn btn-success "type="submit" name="submit" id="submit" Value="Add"/>                                            </div>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

<?php
          include("include/footer.php");  
      ?>
<script type="text/javascript">
    var editor = CKEDITOR.replace('InputContentMessage');
    CKFinder.setupCKEditor(editor);
     var editor1 = CKEDITOR.replace('InputShowContentMessage');
    CKFinder.setupCKEditor(editor1);


 

</script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript">
    $(document).ready(function(){
           $("#InputSelectContent").attr("required", "true");
           $("#InputSubContentSelect").attr("required", "true");

        jQuery('#InputSelectContent').change(function(){
            var id=jQuery(this).val();
            if(!id){
                jQuery('#InputSubContentSelect').html('<option value="">-- Select an option --</option>');
            }else{
                $("#divLoading").addClass('show');
                jQuery('#InputSubContentSelect').html('<option value="">-- Select an option --</option>');
                
                jQuery.ajax({
                    type:'post',
                    url:'get_data.php',
                    data:'id='+id+'&type=subcontentselect',
                    success:function(result){
                        $("#divLoading").removeClass('show');
                        jQuery('#InputSubContentSelect').append(result);
                    }
                });
            }
        });
    
    });
      </script>
      