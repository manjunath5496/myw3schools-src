<?php //require_once('./include/mysqli_connect.php');$con = new PDO('mysql:host=localhost;dbname=mywschoo_db', 'mywschoo_user', 'maczen5496');	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// headers for exporting excelheader("Content-Disposition: attachment; filename='leads.xls'");header("Content-Type: application/vnd.ms-excel");function dataFilter(&$str_val){	$str_val = preg_replace("/\t/", "\\t", $str_val);	$str_val = preg_replace("/\r?\n/", "\\n", $str_val);	if(strstr($str_val, '"')) $str_val = '"' . str_replace('"', '""', $str_val) . '"';}$post_list = array();//get rows query$query = $con->prepare("SELECT name,fresher_working_professional,course,phone,email,status FROM leads_details");							$query->execute();//$query = mysqli_query($con, "SELECT * FROM li_ajax_post_load ORDER BY post_id DESC limit 0,5");//number of rows  $sno = 1; "Sno"=>$sno,$rowCount = $query->rowCount();if($rowCount > 0){	while($row = $query->fetch(PDO::FETCH_ASSOC)){		$post_list[] = array("Name"=>$row["name"],"Type"=>$row["fresher_working_professional"],"Course"=>$row["course"],"Phone Number"=>$row["phone"],"Email"=>$row["email"],"Status"=>$row["status"] );		//$sno++;	}}$title_flag = false;foreach($post_list as $post) {	if(!$title_flag) {		// Showing column names 		echo implode("\t", array_keys($post)) . "\n";		$title_flag = true;	}	// data filtering	array_walk($post, 'dataFilter');	echo implode("\t", array_values($post)) . "\n";}?>