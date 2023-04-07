<?php
session_start();
 include("include/config.php");
$inputid=$_POST['id'];
$type=$_POST['type'];

if($type="subcontentselect")
{

	$sql="SELECT * FROM `subcontent` WHERE `subcontent_status`='Active' AND `subcontent_contentid`='$inputid'";
$stmt=$con->prepare($sql);
$stmt->execute();
$arr=$stmt->get_result();
$html='';
foreach($arr as $list)
{
	$html.='<option value='.$list['subcontent_id'].'>'.$list['subcontent_name'].'</option>';
}

}
else
{
	header("location:index.php");
}
echo $html;	


?>