<?php

 $url="http://localhost/econtent/admin/api/NoticeApi.php?key=jifuie";

 $ch=curl_init();
 curl_setopt($ch,CURLOPT_URL,$url);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
 $result=curl_exec($ch);
 curl_close($ch);
  $result=json_decode($result,true);
  
  if(isset($result['status']))
   {
   	if ($result['status']==true)
   	 {
   	 	if(isset($result['status']))
   {
   	if ($result['result']==true)
   	 { ?>
   	 	<table>
		<tr>
			<td>Session Year</td>
			<td>Status</td>
		</tr>
		<?php foreach($result['data'] as $list)
		{
			echo "<tr><td>".$list['session_year']."</td>
			<td>".$list['status']."</td></tr>";

		}
		?>
	</table>
   	<?php }
   	 else
   	 {
   	 	echo $result['data'];
   	 }
   	}
   		
   	}
   	else
   	{
   		echo "Data Not Found";
   	}

   }
   else
   {
   	echo "API is not Working";
   }
 


?>

