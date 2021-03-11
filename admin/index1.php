<?php 
session_start();
if(!isset($_SESSION['UserData']['Username'])){
	header("location:../login");
	exit;
}
?>

<?php
//include config
require_once('../includes/config.php');


//show message from add / edit page
if(isset($_GET['delpost'])){ 

	$stmt = $db->prepare('DELETE FROM blog_posts WHERE postID = :postID') ;
	$stmt->execute(array(':postID' => $_GET['delpost']));

	header('Location: index.php?action=deleted');
	exit;
} 

?>

<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" prefix="og: http://ogp.me/ns#"><head profile="http://gmpg.org/xfn/11"><meta http-equiv="Content-Type" content="text/html; charset=gb18030"> <meta http-equiv="X-UA-Compatible" content="IE=9" /> <meta name="format-detection" content="telephone=no"/> <META HTTP-EQUIV="refresh" CONTENT="3;URL=index"/><meta name="expires" content="0" /><META NAME="robots" CONTENT="noindex,nofollow"/> <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> <link rel="shortcut icon" href="http://www.static.myw3schools.com/img/logo.png" alt="The internet's best source for free eBook downloads" title="MyW3schools Logo" /> <title> Please wait ... Your request is being processed </title> <meta name="distribution" content="web"/> <style type="text/css"> .py-ripple { margin: 40px auto; width: 50px; color:white; height: 40px; text-align: center; font-size: 10px;} .py-ripple .py-plane { background-color: #333; color:white; height: 100%; width: 6px; display: inline-block; -webkit-animation: py-rippleStretchDelay 1.2s infinite ease-in-out; animation: py-rippleStretchDelay 1.2s infinite ease-in-out; } .py-ripple .py-plane1 { -webkit-animation-delay: -1.2s; animation-delay: -1.2s; } .py-ripple .py-plane2 { -webkit-animation-delay: -1.1s; animation-delay: -1.1s; } .py-ripple .py-plane3 { -webkit-animation-delay: -1s; animation-delay: -1s; } .py-ripple .py-plane4 { -webkit-animation-delay: -0.9s; animation-delay: -0.9s; } .py-ripple .py-plane5 { -webkit-animation-delay: -0.8s; animation-delay: -0.8s; }@-webkit-keyframes py-rippleStretchDelay { 0%, 40%, 100% { -webkit-transform: scaleY(0.4); transform: scaleY(0.4); } 20% { -webkit-transform: scaleY(1); transform: scaleY(1); } }@keyframes py-rippleStretchDelay { 0%, 40%, 100% { -webkit-transform: scaleY(0.4); transform: scaleY(0.4); } 20% { -webkit-transform: scaleY(1); transform: scaleY(1); } } </style> </head><body style ="background-color: #eef1f4;"><br></br><br></br><br></br><br></br><center><div class="py-ripple"> <div class="py-plane py-plane1"></div> <div class="py-plane py-plane2"></div> <div class="py-plane py-plane3"></div> <div class="py-plane py-plane4"></div> <div class="py-plane py-plane5"></div> </div> <p style ="font-weight:bold; color:black; font-size:20px; text-align:center;"> Please wait ... Your request is being processed </p> </center><br></br><br></br><br></br><br></br></body></html>