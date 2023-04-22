<?php
include("admin/include/config.php");
$url = $_SERVER['REQUEST_URI'];
$path = parse_url($url, PHP_URL_PATH);
$parts = explode('/', $path);
$last_part = end($parts);
 $last_part;


$linksearch=mysqli_query($con,"SELECT * FROM `econtent_message` WHERE `econtent_message_link` ='$last_part'  AND `econtent_message_status` = 'Active'");
$linksearchresult=mysqli_fetch_assoc($linksearch);
if($linksearchresult)
{
	
	$messageid=$linksearchresult['econtent_message_id'];

$messagecontentid=$linksearchresult['econtent_message_content_id'];

$messagesubcontentid=$linksearchresult['econtent_message_subcontent_id'];
?>
<meta http-equiv = "refresh" content = "0; url = ../article.php?content_id=<?php echo urlencode(base64_encode($messagecontentid)); ?>&subcontent_id=<?php echo urlencode(base64_encode($messagesubcontentid)); ?>&message_id=<?php echo urlencode(base64_encode($messageid)); ?>" />

<?php
}
else
{ ?>
<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/4b9ba14b0f.js" crossorigin="anonymous"></script>
  <title>404 ERROR</title>
</head>
<style type="text/css">
	
body {
  background-color: #95c2de;
}

.mainbox {
  background-color: #95c2de;
  margin: auto;
  height: 600px;
  width: 600px;
  position: relative;
}

  .err {
    color: #ffffff;
    font-family: 'Nunito Sans', sans-serif;
    font-size: 11rem;
    position:absolute;
    left: 20%;
    top: 8%;
  }

.far {
  position: absolute;
  font-size: 8.5rem;
  left: 42%;
  top: 15%;
  color: #ffffff;
}

 .err2 {
    color: #ffffff;
    font-family: 'Nunito Sans', sans-serif;
    font-size: 11rem;
    position:absolute;
    left: 68%;
    top: 8%;
  }

.msg {
    text-align: center;
    font-family: 'Nunito Sans', sans-serif;
    font-size: 1.6rem;
    position:absolute;
    left: 16%;
    top: 45%;
    width: 75%;
  }

a {
  text-decoration: none;
  color: white;
}

a:hover {
  text-decoration: underline;
}
</style>
<body>
  <div class="mainbox">
    <div class="err">4</div>
    <i class="far fa-question-circle fa-spin"></i>
    <div class="err2">4</div>
    <div class="msg">Maybe this page moved? Got deleted? Is hiding out in quarantine? Never existed in the first place?<p>Let's go <a href="../index.php" target="_blank">home</a> and try from there.</p></div>
      </div>

</body>
</html>
	
<?php }

?>