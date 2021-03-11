<?php 

session_start();

if(!isset($_SESSION['UserData']['Username'])){
	header("location: ../login");
	exit;
}
?>

<?php
define("ROW_PER_PAGE",2);
require_once('db.php');
?>


<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" prefix="og: http://ogp.me/ns#"><head profile="http://gmpg.org/xfn/11"> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <meta http-equiv="X-UA-Compatible" content="IE=9" /> <meta name="format-detection" content="telephone=no" /> <meta HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE" /> <meta http-equiv="cache-control" content="no-store" /> <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> <meta name="author" content="MyW3schools" /> <meta name="description" content=" MyW3schools.com is the internet's best source for free eBook downloads. Read & download eBooks for Free: any where, anytime! Collection includes great works of fiction, non-fiction and poetry, including works by Asimov, Jane Austen, Philip K. Dick, F. Scott Fitzgerald, Neil Gaiman, Tolstoy, Dostoevsky, Shakespeare, Ernest Hemingway, Virginia Woolf & James Joyce." /> <meta name="keywords" content="free ebooks collection, download free ebooks, 4700 free ebooks, free ebooks on literature, free ebooks science fiction, free ebooks technical, j k rowling free ebooks,free ebooks computer science download, science free ebooks, free ebooks medical download pdf" /> <link rel="canonical" href="http://www.myw3schools.com/appointments/index.php" /> <meta property="og:url" content="http://www.myw3schools.com/appointments/index.php" /> <meta property="og:site_name" content="MyW3schools | internet's best source for free eBook downloads" /> <meta property="og:locale" content="en_GB" /> <meta property="og:type" content="website" /> <meta property="og:title" content="MyW3schools | internet's best source for free eBook downloads." /> <meta name="robots" content="noindex,nofollow" /> <meta property="og:image" content="http://www.static.myw3schools.com/img/1.png" /> <meta name="twitter:description" content="MyW3schools.com is the internet's best source for free eBook downloads. Read & download eBooks for Free: any where, anytime! Collection includes great works of fiction, non-fiction and poetry, including works by Asimov, Jane Austen, Philip K. Dick, F. Scott Fitzgerald, Neil Gaiman, Tolstoy, Dostoevsky, Shakespeare, Ernest Hemingway, Virginia Woolf & James Joyce." /> <meta name="google-site-verification" content="OIuEbc9pgQaGjNQbvni1N4wCpVkMTdfECpvjMw3ZDqI" /> <script type='application/ld+json'> { "@context": "http://www.schema.org", "@type": "WebSite", "name": "MyW3schools", "alternateName": "The internet's best source for free eBook downloads", "url": "http://www.myw3schools.com"}</script> <link rel="shortcut icon" href="http://www.static.myw3schools.com/img/logo.png" alt="The internet's best source for free eBook downloads" title="MyW3schools Logo" /> <title>Appointments | MyW3schools.com | Download Fiction, Health, Romance and many more ebooks for Free: any where, anytime!</title> <meta name="distribution" content="web" /> <style> .boxed { margin-top: 1em; margin-bottom: 1em; border: 1px solid #eddab7; padding: 1ex 1em; } .shaded { color: inherit; background-color: #f5ecdb; } </style> <link rel='stylesheet' id='google-http://www.static.myw3schools.com/css/fonts-css' href='http://www.static.myw3schools.com/css/font.css' type='text/css' media='all' /> <link rel='stylesheet' id='font-awesome-min-css' href='http://www.static.myw3schools.com/css/font-awesome.min.css' type='text/css' media='screen' /> <link rel='stylesheet' id='transform-css' href='http://www.static.myw3schools.com/css/transform.css' type='text/css' media='screen' /> <link rel='stylesheet' id='input7-css' href='http://www.static.myw3schools.com/css/input7.css' type='text/css' media='screen' /> <script type="text/javascript" src="http://www.static.myw3schools.com/js/output.min.js"></script> </head> <body itemtype="http://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-497 page-child parent-pageid-490 u-design-responsive-on u-design-menu-auto-arrows-on u-design-menu-drop-shadows-on "> <div id="cover-1"> <div class="clear"></div> <header id="" class="top-segment trans-content-white" style="background-color:white; height:45px"> <div id="" class="bag over-all-nav"> <div class="leftnavi navbar"> <div class="nav-collapse"> <ul class="nav"> <li class="dropdown active"> <a class="pointer" class="dropdown-knob pointer" style=" text-decoration:none; font-weight: bold; color:gray; font-size:13px;margin-top: -10px;"><span class="bari"><i class="fa fa-bars"></i></span> <span class="stripnav dark-xl">&nbsp;&nbsp;</span></a> </br> <ul class="dropdown-menu" role="menu"> <li> <a class="pointer" href="../mail" title="Email">Email</a> </li> <li><a class="pointer" href="../email-marketing" title="Email Marketing">Email Marketing</a></li> <li> <a class="pointer" href="../bulk_mail/index" title="Bulk Email">Bulk Email</a> </li> </ul> </li> </ul> </div> </div> <nav id="rightnav " class="position-navi"> <div class="user-nav"> <a class="pointer" style="color:gray; font-weight: bold; font-size:12px;" href="../home" title="Home">HOME</a> &nbsp; &nbsp; <a class="pointer" href="../admin/index" title="blog"><span style="padding:5px 10px; text-decoration:none; background-color:transparent;font-weight: bold; border:1px solid white; color:gray; font-size:12px;">BLOG</span> </a> &nbsp; &nbsp; <a class="pointer" href="../logout" title="Logout"><span style="padding:5px 10px; text-decoration:none; background-color:#3A5580; font-weight: bold; border:1px solid #3A5580; color:white; font-size:12px;">LOGOUT</span> </a> &nbsp; &nbsp;</div> </nav> </div> </header> <div id="former-text"> </br> <div style="text-align:right"> <canvas id="canvas" width="200" height="200"></canvas> <script> var canvas = document.getElementById("canvas"); var ctx = canvas.getContext("2d"); var radius = 100; ctx.translate(100, 100); radius = radius * 0.9; setInterval(drawClock, 1000); function drawClock() { drawFace(ctx, radius); drawNumbers(ctx, radius); drawTime(ctx, radius); } function drawFace(ctx, radius) { var grad; ctx.beginPath(); ctx.arc(0, 0, radius, 0, 2 * Math.PI); ctx.fillStyle = 'white'; ctx.fill(); grad = ctx.createRadialGradient(0, 0, radius * 0.95, 0, 0, radius * 1.05); grad.addColorStop(0, '#67D2C8'); grad.addColorStop(0.5, '#67D2C8'); grad.addColorStop(1, 'white'); ctx.strokeStyle = grad; ctx.lineWidth = radius * 0.1; ctx.stroke(); ctx.beginPath(); ctx.arc(0, 0, radius * 0.1, 0, 2 * Math.PI); ctx.fillStyle = 'black'; ctx.fill(); } function drawNumbers(ctx, radius) { var ang; var num; ctx.font = radius * 0.15 + "px arial"; ctx.textBaseline = "middle"; ctx.textAlign = "center"; for (num = 1; num < 13; num++) { ang = num * Math.PI / 6; ctx.rotate(ang); ctx.translate(0, -radius * 0.85); ctx.rotate(-ang); ctx.fillText(num.toString(), 0, 0); ctx.rotate(ang); ctx.translate(0, radius * 0.85); ctx.rotate(-ang); } } function drawTime(ctx, radius) { var now = new Date(); var hour = now.getHours(); var minute = now.getMinutes(); var second = now.getSeconds(); hour = hour % 12; hour = (hour * Math.PI / 6) + (minute * Math.PI / (6 * 60)) + (second * Math.PI / (360 * 60)); drawHand(ctx, hour, radius * 0.5, radius * 0.07); minute = (minute * Math.PI / 30) + (second * Math.PI / (30 * 60)); drawHand(ctx, minute, radius * 0.8, radius * 0.07); second = (second * Math.PI / 30); drawHand(ctx, second, radius * 0.9, radius * 0.02); } function drawHand(ctx, pos, length, width) { ctx.beginPath(); ctx.lineWidth = width; ctx.lineCap = "rectangle"; ctx.moveTo(0, 1); ctx.rotate(pos); ctx.lineTo(0, -length); ctx.stroke(); ctx.rotate(-pos); } </script> </div> </br> </br> <div id="former-text-list" class="bag_24"> <div class="property-content-divider"></div> <div id='before-cont-box-1' class='column_3_of_3 home-cont-box'> <div class='list-text-cover'> <div class="cont_col_1 widget_text secondary_object_category"> <div class="textwidget"> <div id="wrapper">

<?php	
	$search_keyword = '';
	if(!empty($_POST['search']['keyword'])) {
		$search_keyword = $_POST['search']['keyword'];
	} 
	
	$sql = 'SELECT * FROM appointment_details WHERE contact_person LIKE :keyword ';
	
	/* Pagination Code starts */
	$per_page_html = '';
	$page = 1;
	$start=0;
	if(!empty($_POST["page"])) {
		$page = $_POST["page"];
		$start=($page-1) * ROW_PER_PAGE;
	}
	$limit=" limit " . $start . "," . ROW_PER_PAGE;
	$pagination_statement = $dbc->prepare($sql);
	$pagination_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
	$pagination_statement->execute();

	$row_count = $pagination_statement->rowCount();
	if(!empty($row_count)){
		$per_page_html .= "<div style='text-align:center;margin:20px 0px;'>";
		$page_count=ceil($row_count/ROW_PER_PAGE);
		if($page_count>1) {
			for($i=1;$i<=$page_count;$i++){
				if($i==$page){
					$per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page current" />';
				} else {
					$per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page" />';
				}
			}
		}
		$per_page_html .= "</div>";
	}
	
	$query = $sql.$limit;
	$pdo_statement = $dbc->prepare($query);
	$pdo_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
?>

<div id = "myTable2"> <a href="exportData.php" title ="Export to CSV"style="font-size:15px;color:white;background-color:#ff7a59;border:1px solid #ff7a59;padding:3px;" class="btn btn-success pull-left">&nbsp;<i class="fa fa-download"></i> Export to CSV&nbsp;</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-warning" href="export_excel.php" title ="Export to Excel" style="font-size:15px;color:#ff7a59;background-color:white;border:1px solid #ff7a59;padding:3px;" target="_new" >&nbsp;<i class="fa fa-download"></i> Export to XLS&nbsp;</a> </div> <center><div> <form name="frmSearch" action="" method="post"><div style='text-align:right;margin:20px 0px;' id = "myTable"><input type='text' name= 'search[keyword]' value='<?php echo $search_keyword; ?>' id='keyword' maxlength='25' placeholder='Search by name' autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" style="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #eef1f4;"></div><table id = "myTable1"> <thead> <tr style ="color:#3A5580;"> <th>Client Name</th> <th>Subject</th> <th>Date</th> <th>Time</th> <th>Location</th> <th>Created At</th> <th>Status</th> <th>Action</th> </tr> </thead> <tbody id="table-body">
   
 <?php 
	if(!empty($result)) { 
		foreach($result as $row) {
	?>
	  <tr class='table-row'>
	  <?php $id=$row['id']; ?>
		<td><?php echo $row['contact_person']; ?></td>
		<td><?php echo $row['subject']; ?></td>
		<td><?php echo $row['appointment_date']; ?></td>
		<td><?php echo $row['appointment_time']; ?></td>
		<td><?php echo $row['location']; ?></td>
		<td><?php echo $row['created_at']; ?></td>
		<td><?php echo $row['status']; ?></td>

		<td><?php echo "<a href='edit.php?id=$id' style='text-decoration:none' title ='Edit Appointment'><span  style='font-size:20px; color:#3A5580;'><i class='fa fa-edit' aria-hidden='true'></i></span></a> | <a href='delete.php?id=$id'style='text-decoration:none' title ='Delete Appointment' ><span  style='font-size:20px; color:#ec5252;'><i class='fa fa-times' aria-hidden='true'></i></span></a>";?></td>
	  </tr>
    <?php
		}
		
	}
	
	if(empty($result)) {
	    
    echo '<div class="boxed shaded"> <p style="font-size:15px; text-align:center;color:black"><strong>No Appointments Found.</strong></p> </div>';
     
   echo' <script> document.getElementById("myTable").style.display = "none"; </script>';
     
    echo' <script> document.getElementById("myTable1").style.display = "none"; </script>';
    
    echo' <script> document.getElementById("myTable2").style.display = "none"; </script>';
      
    echo'</br>';
        
}				
	?>
 </tbody></table><?php echo $per_page_html; ?></form></div></center><center> <a href="add.php"> <button type="button" class="knob knob-data" style="font-size:12pt;color:white;background-color:#ff7a59;border:2px solid #ff7a59;padding:3px;width:90; height:48">&nbsp;&nbsp;&nbsp;<i class="fa fa-plus"></i> Create&nbsp;&nbsp;&nbsp;&nbsp;</button> </a></center></div></div></div></div></div></br> <center> <img src="http://www.static.myw3schools.com/img/rsb.png" alt="myw3schools.com" > </center></br> </br></br> </div></div></div><div class="property-content-divider"></div><div class="clear"></div><div class="clear"></div><div id="page-footer" style="font-size:12px;background-color:#f1f1f1;"><div id="footer" class="bag_24 footer-head"> <div itemtype="http://schema.org/WPFooter" itemscope="itemscope"> <div id="footer-content" class="grid_20"> <div> <div class="suggareas"> <p style="text-indent:10px;text-align: justify;-moz-text-align-last: right; text-align-last: left;"> </p> </div> <div class="clear"></div> <div style="font-size:12px;color:gray;text-align:center"> Copyright &#169; 2018 myw3schools. All rights reserved. </div> </div> </div> <div class="tail-to-head"> <a class="pointer" href="#top" style="text-decoration:none"> <font color="gray"> <i class="fa fa-arrow-up" aria-hidden="true"></i> Back to Top</font> </a> </div> </div> </div></div><script type='text/javascript' src='http://www.static.myw3schools.com/js/output.min1.js'></script><script> $(window).bind("pageshow", function(event) { if (event.originalEvent.persisted) { window.location.reload() } });</script><script src="http://www.static.myw3schools.com/js/gtag.js?id=UA-131555544-1"></script><script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-131555544-1');</script></body></html>