<?php  
session_start();

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login");
	exit;
}


?>

<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" prefix="og: http://ogp.me/ns#"><head profile="http://gmpg.org/xfn/11"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">  <meta http-equiv="X-UA-Compatible" content="IE=9" /> <meta name="format-detection" content="telephone=no" /> <meta HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE" /> <meta http-equiv="cache-control" content="no-store" /> <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> <meta name="author" content="MyW3schools" /> <meta name="description" content=" MyW3schools.com is the internet's best source for free eBook downloads. Read & download eBooks for Free: any where, anytime! Collection includes great works of fiction, non-fiction and poetry, including works by Asimov, Jane Austen, Philip K. Dick, F. Scott Fitzgerald, Neil Gaiman, Tolstoy, Dostoevsky, Shakespeare, Ernest Hemingway, Virginia Woolf & James Joyce." /> <meta name="keywords" content="free ebooks collection, download free ebooks, 4700 free ebooks, free ebooks on literature, free ebooks science fiction, free ebooks technical, j k rowling free ebooks,free ebooks computer science download, science free ebooks, free ebooks medical download pdf" /> <link rel="canonical" href="http://www.myw3schools.com/home.php" /> <meta property="og:url" content="http://www.myw3schools.com/home.php" /> <meta property="og:site_name" content="MyW3schools | internet's best source for free eBook downloads" /> <meta property="og:locale" content="en_GB" /> <meta property="og:type" content="website" /> <meta property="og:title" content="MyW3schools | internet's best source for free eBook downloads." /> <meta name="robots" content="noindex,nofollow" /> <meta property="og:image" content="http://www.static.myw3schools.com/img/1.png" /> <meta name="twitter:description" content="MyW3schools.com is the internet's best source for free eBook downloads. Read & download eBooks for Free: any where, anytime! Collection includes great works of fiction, non-fiction and poetry, including works by Asimov, Jane Austen, Philip K. Dick, F. Scott Fitzgerald, Neil Gaiman, Tolstoy, Dostoevsky, Shakespeare, Ernest Hemingway, Virginia Woolf & James Joyce." /> <meta name="google-site-verification" content="OIuEbc9pgQaGjNQbvni1N4wCpVkMTdfECpvjMw3ZDqI" /> <script type='application/ld+json'> { "@context": "http://www.schema.org", "@type": "WebSite", "name": "MyW3schools", "alternateName": "The internet's best source for free eBook downloads", "url": "http://www.myw3schools.com"}</script> <link rel="shortcut icon" href="http://www.static.myw3schools.com/img/logo.png" alt="The internet's best source for free eBook downloads" title="MyW3schools Logo" /> <title>Home | MyW3schools.com | Download Fiction, Health, Romance and many more ebooks for Free: any where, anytime!</title> <meta name="distribution" content="web" /> <link rel='stylesheet' id='google-fonts-css' href='http://www.static.myw3schools.com/css/font.css' type='text/css' media='all' /> <link rel='stylesheet' id='font-awesome-min-css' href='http://www.static.myw3schools.com/css/font-awesome.min.css' type='text/css' media='screen' /> <link rel='stylesheet' id='trans-css' href='http://www.static.myw3schools.com/css/trans.css' type='text/css' media='screen' /> <script type="text/javascript" src="http://www.static.myw3schools.com/js/output.min.js"></script><script type="text/javascript" src="http://www.static.myw3schools.com/js/jquery-1.1.js"></script></head><body itemtype="http://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-497 page-child parent-pageid-490 u-design-responsive-on u-design-menu-auto-arrows-on u-design-menu-drop-shadows-on "> <div id="cover-1"> <div class="clear"></div> <header id="" class="top-segment trans-content-white" style="background-color:white; height:45px"> <div id="" class="bag over-all-nav"> <div class="leftnavi navbar"> <div class="nav-collapse"> <ul class="nav"> <li class="dropdown active"> <a class="pointer" class="dropdown-knob pointer" style=" text-decoration:none; font-weight: bold; color:gray; font-size:13px;margin-top: -10px;"><span class="bari"><i class="fa fa-bars"></i></span> <span class="stripnav dark-xl">&nbsp;&nbsp;</span></a> </br> <ul class="dropdown-menu" role="menu"> <li> <a class="pointer" href="../mail" title="Email">Email</a> </li> <li><a class="pointer" href="../email-marketing" title="Email Marketing">Email Marketing</a></li> <li> <a class="pointer" href="../bulk_mail/index" title="Bulk Email">Bulk Email</a> </li> </ul> </li> </ul> </div> </div> <nav id="rightnav " class="position-navi"> <div class="user-nav"> <a class="pointer" style="color:gray; font-weight: bold; font-size:12px;" href="home" title="Home">HOME</a> &nbsp; &nbsp; <a class="pointer" href="../admin/index" title="blog"><span style="padding:5px 10px; text-decoration:none; background-color:transparent;font-weight: bold; border:1px solid white; color:gray; font-size:12px;">BLOG</span> </a> &nbsp; &nbsp; <a class="pointer" href="logout" title="Logout"><span style="padding:5px 10px; text-decoration:none; background-color:#3A5580; font-weight: bold; border:1px solid #3A5580; color:white; font-size:12px;">LOGOUT</span> </a> &nbsp; &nbsp;</div> </nav> </div> </header> <div id="former-text"> <div id="former-text-list" class="bag_24"><center> <a href="exportData.php" title ="Export Subscription Emails to CSV"style="font-size:15px;color:white;background-color:#ff7a59;border:1px solid #ff7a59;padding:3px;">&nbsp;<i class="fa fa-download"></i> Export Emails to CSV&nbsp;</a></br></br></br><input type="text" id="searchFor" class="message" name="" style=" width: 80%; padding: 0px; height: auto; background: url(&quot;http://www.static.myw3schools.com/img/googlelogo_lightgrey_46x16dp.png&quot;) left center no-repeat rgb(255, 255, 255); text-indent: 48px;" autocomplete="off" spellcheck="false" required> </input> </br></br> <button type="submit" value="Search" class="sendButton pointer knob knob-data" onclick="searchYT()" style="color: white;font-size:12px; background-color:#3A5580;"><i class="fa fa-search"> </i> Search</button> <script> $(document).ready(function() { $('.sendButton').attr('disabled', true); $('.message').keyup(function() { if ($(this).val().length != 0) { $('.sendButton').attr('disabled', false); } else { $('.sendButton').attr('disabled', true); } }) }); </script> <script> function searchYT() { var searchFor = document.getElementById("searchFor").value; window.open("https://www.google.com/search?q=" + searchFor) } </script>
</br></br></br> </br> </center></br><div class="property-content-divider"></div> </br> <div class=line> <h3 style="font-weight:bold; text-align:center;letter-spacing: 0.001em;font-size: 20px; line-height: 60px; color:black "> </h3> <div class=pace-3> <div class="pro-rt-4 pro-op-6 pro-st-12 text-center social-share"><i class="fa fa-phone circle-wrap pvr-drive" style="color:white; background-color: #E0E202; font-size:3em;"></i> <h3 style="font-size:16px">&nbsp;&nbsp;</h3> <p style="text-align:center"><a id="btn" href="contacts/index" title="Contacts"><span style="padding:5px 10px; background-color:#3A5580;text-decoration:none; border:1px solid #3A5580; color:white; font-size:14px;" class="knob knob-data">&nbsp;&nbsp;Contacts&nbsp;&nbsp;</span></a></p> </div> </div> <div class=pace-3> <div class="pro-rt-4 pro-op-6 pro-st-12 text-center social-share"><i class="fa fa-industry circle-wrap pvr-drive" style="color:white; background-color: #8FD2C9; font-size:3em;"></i> <h3 style="font-size:16px">&nbsp;&nbsp;</h3> <p style="text-align:center"><a id="btn" href="companies/index" title="Companies"><span style="padding:5px 10px; background-color:#FF8C00;text-decoration:none; border:1px solid #FF8C00; color:white; font-size:14px;" class="knob knob-data"> Companies</span></a></p> </div> </div> <div class=pace-3> <div class="pro-rt-4 pro-op-6 pro-st-12 text-center social-share"><i class="fa fa-file circle-wrap pvr-drive" style="color:white; background-color: orange; font-size:3em;"></i> <h3 style="font-size:16px">&nbsp;&nbsp;</h3> <p style="text-align:center"><a id="btn" href="files/index" title="Files"><span style="padding:5px 10px; background-color:#3A5580;text-decoration:none; border:1px solid #3A5580; color:white; font-size:14px;" class="knob knob-data">&nbsp;&nbsp;&nbsp;&nbsp;Files&nbsp;&nbsp;&nbsp;&nbsp;</span></a></p> </div> </div> </div> </br> <div class=line> <h3 style="font-weight:bold; text-align:center;letter-spacing: 0.001em;font-size: 20px; line-height: 60px; color:black "> </h3> <div class=pace-3> <div class="pro-rt-4 pro-op-6 pro-st-12 text-center social-share"><i class="fa fa-tasks circle-wrap pvr-drive" style="color:white; background-color: #F2635F; font-size:3em;"></i> <h3 style="font-size:16px">&nbsp;&nbsp;</h3> <p style="text-align:center"><a id="btn" href="tasks/index" title="Tasks"><span style="padding:5px 10px; background-color:#3A5580;text-decoration:none; border:1px solid #3A5580; color:white; font-size:14px;" class="knob knob-data">&nbsp;&nbsp;&nbsp;&nbsp;Tasks&nbsp;&nbsp;&nbsp;&nbsp;</span></a></p> </div> </div> <div class=pace-3> <div class="pro-rt-4 pro-op-6 pro-st-12 text-center social-share"><i class="fa fa-bar-chart circle-wrap pvr-drive" style="color:white; background-color: #F4CF0D; font-size:3em;"></i> <h3 style="font-size:16px">&nbsp;&nbsp;</h3> <p style="text-align:center"><a id="btn" href="leads/index" title="Leads"><span style="padding:5px 10px; background-color:#FF8C00;text-decoration:none; border:1px solid #FF8C00; color:white; font-size:14px;" class="knob knob-data">&nbsp;&nbsp;&nbsp;&nbsp;Leads&nbsp;&nbsp;&nbsp;&nbsp;</span></a></p> </div> </div> <div class=pace-3> <div class="pro-rt-4 pro-op-6 pro-st-12 text-center social-share"><i class="fa fa-calendar-plus-o circle-wrap pvr-drive" style="color:white; background-color: #0093D1; font-size:3em;"></i> <h3 style="font-size:16px">&nbsp;&nbsp;</h3> <p style="text-align:center"><a id="btn" href="appointments/index" title="Appointments"><span style="padding:5px 10px; background-color:#3A5580;text-decoration:none; border:1px solid #3A5580; color:white; font-size:14px;" class="knob knob-data">&nbsp;&nbsp;Appointments&nbsp;&nbsp;</span></a></p> </div> </div> </div> </br> <div class=line> <h3 style="font-weight:bold; text-align:center;letter-spacing: 0.001em;font-size: 20px; line-height: 60px; color:black "> </h3> <div class=pace-3> <div class="pro-rt-4 pro-op-6 pro-st-12 text-center social-share"><i class="fa fa-connectdevelop circle-wrap pvr-drive" style="color:white; background-color: #d7e7f8; font-size:3em;"></i> <h3 style="font-size:16px">&nbsp;&nbsp;</h3> <p style="text-align:center"><a id="btn" href="cupload/index" title="Careers"><span style="padding:5px 10px; background-color:#3A5580;text-decoration:none; border:1px solid #3A5580; color:white; font-size:14px;" class="knob knob-data">&nbsp;&nbsp;&nbsp;&nbsp;Careers&nbsp;&nbsp;&nbsp;&nbsp;</span></a></p> </div> </div> <div class=pace-3> <div class="pro-rt-4 pro-op-6 pro-st-12 text-center social-share"><i class="fa fa-list circle-wrap pvr-drive" style="color:white; background-color: #eb7327; font-size:3em;"></i> <h3 style="font-size:16px">&nbsp;&nbsp;</h3> <p style="text-align:center"><a id="btn" href="lists/index" title="To Do List"><span style="padding:5px 10px; background-color:#FF8C00;text-decoration:none; border:1px solid #FF8C00; color:white; font-size:14px;" class="knob knob-data">&nbsp;&nbsp;&nbsp;&nbsp;To Do List&nbsp;&nbsp;&nbsp;&nbsp;</span></a></p> </div> </div> <div class=pace-3> <div class="pro-rt-4 pro-op-6 pro-st-12 text-center social-share"><i class="fa fa-envelope-open circle-wrap pvr-drive" style="color:white; background-color: #ffbedc; font-size:3em;"></i> <h3 style="font-size:16px">&nbsp;&nbsp;</h3> <p style="text-align:center"><a id="btn" href="signature/index" title="Email Signature"><span style="padding:5px 10px; background-color:#3A5580;text-decoration:none; border:1px solid #3A5580; color:white; font-size:14px;" class="knob knob-data">&nbsp;&nbsp;Email Signature&nbsp;&nbsp;</span></a></p> </div> </div> </div><div class=line> <h3 style="font-weight:bold; text-align:center;letter-spacing: 0.001em;font-size: 20px; line-height: 60px; color:black "> </h3> <div class=pace-3> <div class="pro-rt-4 pro-op-6 pro-st-12 text-center social-share"><i class="fa fa-cog circle-wrap pvr-drive" style="color:white; background-color: #7FFFD4; font-size:3em;"></i> <h3 style="font-size:16px">&nbsp;&nbsp;</h3> <p style="text-align:center"><a id="btn" href="subscriptions/index.php" title="Subscriptions"><span style="padding:5px 10px; background-color:#3A5580;text-decoration:none; border:1px solid #3A5580; color:white; font-size:14px;" class="knob knob-data">&nbsp;&nbsp;&nbsp;&nbsp;Subscriptions&nbsp;&nbsp;&nbsp;&nbsp;</span></a></p> </div> </div> <div class=pace-3> <div class="pro-rt-4 pro-op-6 pro-st-12 text-center social-share"><i class="fa fa-clone circle-wrap pvr-drive" style="color:white; background-color: #F4A460; font-size:3em;"></i> <h3 style="font-size:16px">&nbsp;&nbsp;</h3> <p style="text-align:center"><a id="btn" href="contracts/index.php" title="Contracts"><span style="padding:5px 10px; background-color:#FF8C00;text-decoration:none; border:1px solid #FF8C00; color:white; font-size:14px;" class="knob knob-data">&nbsp;&nbsp;&nbsp;&nbsp;Contracts&nbsp;&nbsp;&nbsp;&nbsp;</span></a></p> </div> </div> <div class=pace-3> <div class="pro-rt-4 pro-op-6 pro-st-12 text-center social-share"><i class="fa fa-gamepad circle-wrap pvr-drive" style="color:white; background-color: #FFB6C1; font-size:3em;"></i> <h3 style="font-size:16px">&nbsp;&nbsp;</h3> <p style="text-align:center"><a id="btn" href="resize/index" title="Image Compressor"><span style="padding:5px 10px; background-color:#3A5580;text-decoration:none; border:1px solid #3A5580; color:white; font-size:14px;" class="knob knob-data">&nbsp;&nbsp;Image Compressor&nbsp;&nbsp;</span></a></p> </div> </div> </div><div class=line> <h3 style="font-weight:bold; text-align:center;letter-spacing: 0.001em;font-size: 20px; line-height: 60px; color:black "> </h3> <div class=pace-3> <div class="pro-rt-4 pro-op-6 pro-st-12 text-center social-share"><i class="fa fa-folder-open-o circle-wrap pvr-drive" style="color:white; background-color: #F0E68C; font-size:3em;"></i> <h3 style="font-size:16px">&nbsp;&nbsp;</h3> <p style="text-align:center"><a id="btn" href="extract/index.php" title="URL Extractor"><span style="padding:5px 10px; background-color:#3A5580;text-decoration:none; border:1px solid #3A5580; color:white; font-size:14px;" class="knob knob-data">&nbsp;&nbsp;&nbsp;&nbsp;URL Extractor&nbsp;&nbsp;&nbsp;&nbsp;</span></a></p> </div> </div> <div class=pace-3> <div class="pro-rt-4 pro-op-6 pro-st-12 text-center social-share"><i class="fa fa-bullseye circle-wrap pvr-drive" style="color:white; background-color: #E6E6FA; font-size:3em;"></i> <h3 style="font-size:16px">&nbsp;&nbsp;</h3> <p style="text-align:center"><a id="btn" href="sign/my_sign.php" title="Signature Pad"><span style="padding:5px 10px; background-color:#FF8C00;text-decoration:none; border:1px solid #FF8C00; color:white; font-size:14px;" class="knob knob-data">&nbsp;&nbsp;&nbsp;&nbsp;Signature Pad&nbsp;&nbsp;&nbsp;&nbsp;</span></a></p> </div> </div> <div class=pace-3> <div class="pro-rt-4 pro-op-6 pro-st-12 text-center social-share"><i class="fa fa-file-image-o circle-wrap pvr-drive" style="color:white; background-color: #FFFACD; font-size:3em;"></i> <h3 style="font-size:16px">&nbsp;&nbsp;</h3> <p style="text-align:center"><a id="btn" href="conv/index" title="Image Convertor"><span style="padding:5px 10px; background-color:#3A5580;text-decoration:none; border:1px solid #3A5580; color:white; font-size:14px;" class="knob knob-data">&nbsp;&nbsp;Image Convertor&nbsp;&nbsp;</span></a></p> </div> </div> </div> <div class=line> <h3 style="font-weight:bold; text-align:center;letter-spacing: 0.001em;font-size: 20px; line-height: 60px; color:black "> </h3> <div class=pace-3> <div class="pro-rt-4 pro-op-6 pro-st-12 text-center social-share"><i class="fa fa-file-archive-o circle-wrap pvr-drive" style="color:white; background-color: #fc773e; font-size:3em;"></i> <h3 style="font-size:16px">&nbsp;&nbsp;</h3> <p style="text-align:center"><a id="btn" href="zip/index.php" title="Zip Files"><span style="padding:5px 10px; background-color:#3A5580;text-decoration:none; border:1px solid #3A5580; color:white; font-size:14px;" class="knob knob-data">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zip Files&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a></p> </div> </div> <div class=pace-3> <div class="pro-rt-4 pro-op-6 pro-st-12 text-center social-share"><i class="fa fa-file-image-o circle-wrap pvr-drive" style="color:white; background-color: #c6e2ff; font-size:3em;"></i> <h3 style="font-size:16px">&nbsp;&nbsp;</h3> <p style="text-align:center"><a id="btn" href="wm/index.php" title="Watermark Photo"><span style="padding:5px 10px; background-color:#FF8C00;text-decoration:none; border:1px solid #FF8C00; color:white; font-size:14px;" class="knob knob-data">&nbsp;&nbsp;&nbsp;&nbsp;Watermark Photo&nbsp;&nbsp;&nbsp;&nbsp;</span></a></p> </div> </div> <div class=pace-3> <div class="pro-rt-4 pro-op-6 pro-st-12 text-center social-share"><i class="fa fa-film circle-wrap pvr-drive" style="color:white; background-color: #e1cccc; font-size:3em;"></i> <h3 style="font-size:16px">&nbsp;&nbsp;</h3> <p style="text-align:center"><a id="btn" href="gif/index" title="GIF Generator"><span style="padding:5px 10px; background-color:#3A5580;text-decoration:none; border:1px solid #3A5580; color:white; font-size:14px;" class="knob knob-data">&nbsp;&nbsp;GIF Generator&nbsp;&nbsp;</span></a></p> </div> </div> </div><div class=line> <h3 style="font-weight:bold; text-align:center;letter-spacing: 0.001em;font-size: 20px; line-height: 60px; color:black "> </h3> <div class=pace-3> <div class="pro-rt-4 pro-op-6 pro-st-12 text-center social-share"><i class="fa fa-newspaper-o circle-wrap pvr-drive" style="color:white; background-color: #FFF033; font-size:3em;"></i> <h3 style="font-size:16px">&nbsp;&nbsp;</h3> <p style="text-align:center"><a id="btn" href="greetings/index.php" title="Send Greetings to your Dear Ones"><span style="padding:5px 10px; background-color:#3A5580;text-decoration:none; border:1px solid #3A5580; color:white; font-size:14px;" class="knob knob-data">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Send Greetings&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a></p> </div> </div> <div class=pace-3> <div class="pro-rt-4 pro-op-6 pro-st-12 text-center social-share"><i class="fa fa-cogs circle-wrap pvr-drive" style="color:white; background-color: #33FFEC; font-size:3em;"></i> <h3 style="font-size:16px">&nbsp;&nbsp;</h3> <p style="text-align:center"><a id="btn" href="pw/index.php" title="Password Generator"><span style="padding:5px 10px; background-color:#FF8C00;text-decoration:none; border:1px solid #FF8C00; color:white; font-size:14px;" class="knob knob-data">&nbsp;&nbsp;&nbsp;&nbsp;Password Generator&nbsp;&nbsp;&nbsp;&nbsp;</span></a></p> </div> </div> <div class=pace-3> <div class="pro-rt-4 pro-op-6 pro-st-12 text-center social-share"><i class="fa fa-database circle-wrap pvr-drive" style="color:white; background-color: #FF3390; font-size:3em;"></i> <h3 style="font-size:16px">&nbsp;&nbsp;</h3> <p style="text-align:center"><a id="btn" href="wk/index" title="Records"><span style="padding:5px 10px; background-color:#3A5580;text-decoration:none; border:1px solid #3A5580; color:white; font-size:14px;" class="knob knob-data">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Records&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a></p> </div> </div> </div></br> </br> </br> </br></br> </br></br> </br></div> </div> <div id="former-text" style="background: -webkit-gradient(linear, left top, left bottom, from(#4a8bdc), to(#4fbfe9));"> <div id="former-text-list" class="bag_24"> <div class="property-content-divider"></div> <div id='before-cont-box-1' class='column_3_of_3 home-cont-box'> <div class='list-text-cover'> <div class="cont_col_1 widget_text secondary_object_category"> </br> <center> <img src="http://www.static.myw3schools.com/img/rsb.png" alt="myw3schools.com" > </center></br> <p style="text-align:center"><a id="btn" href="note/index" title="Add Note"><span style="padding:5px 10px; background-color: white;text-decoration:none; border:1px solid white; color:#3A5580; font-size:14px;" class="knob knob-data">&nbsp;&nbsp;Add Note&nbsp;&nbsp;</span></a></p></br> </br><script>setCal();function getTime() {var now = new Date();var hour = now.getHours();var minute = now.getMinutes();now = null;var ampm = ""; if (hour >= 12) {hour -= 12;ampm = "PM";} else ampm = "AM";hour = (hour == 0) ? 12 : hour;if (minute < 10)minute = "0" + minute; return hour + ":" + minute + " " + ampm;}function leapYear(year) {if (year % 4 == 0); return true; return false;}function getDays(month, year) {var ar = new Array(12);ar[0] = 31;ar[1] = (leapYear(year)) ? 29 : 28; ar[2] = 31; ar[3] = 30; ar[4] = 31; ar[5] = 30; ar[6] = 31; ar[7] = 31; ar[8] = 30; ar[9] = 31; ar[10] = 30;ar[11] = 31; return ar[month];}function getMonthName(month) {var ar = new Array(12);ar[0] = "January";ar[1] = "February";ar[2] = "March";ar[3] = "April";ar[4] = "May";ar[5] = "June";ar[6] = "July";ar[7] = "August";ar[8] = "September";ar[9] = "October";ar[10] = "November";ar[11] = "December";return ar[month];}function setCal() {var now = new Date();var year = now.getYear();if (year < 1000);year+=1900;var month = now.getMonth();var monthName = getMonthName(month);var date = now.getDate();now = null;var firstDayInstance = new Date(year, month, 1);var firstDay = firstDayInstance.getDay();firstDayInstance = null;var days = getDays(month, year);drawCal(firstDay + 1, days, date, monthName, year);}function drawCal(firstDay, lastDate, date, monthName, year) {var headerHeight = 50; var border = 2; var cellspacing = 4;var headerColor = "midnightblue"; var headerSize = "+3"; var colWidth = 60; var dayCellHeight = 25; var dayColor = "darkblue"; var cellHeight = 40; var todayColor = "white"; var timeColor = "black"; var text = "";text += '<CENTER>';text += '<TABLE BORDER=' + border + ' CELLSPACING=' + cellspacing + '>'; text += '<TH COLSPAN=7 HEIGHT=' + headerHeight + '>'; text += '<FONT COLOR="' + headerColor + '" SIZE=' + headerSize + '>'; text += monthName + ' ' + year; text += '</FONT>'; text += '</TH>'; var openCol = '<TD WIDTH=' + colWidth + ' HEIGHT=' + dayCellHeight + '>';openCol += '<FONT COLOR="' + dayColor + '">';var closeCol = '</FONT></TD>';var weekDay = new Array(7);weekDay[0] = "Sun";weekDay[1] = "Mon";weekDay[2] = "Tues";weekDay[3] = "Wed";weekDay[4] = "Thu";weekDay[5] = "Fri";weekDay[6] = "Sat"; text += '<TR ALIGN="center" VALIGN="center">';for (var dayNum = 0; dayNum < 7; ++dayNum) {text += openCol + weekDay[dayNum] + closeCol; }text += '</TR>';var digit = 1;var curCell = 1;for (var row = 1; row <= Math.ceil((lastDate + firstDay - 1) / 7); ++row) {text += '<TR ALIGN="right" VALIGN="top">';for (var col = 1; col <= 7; ++col) {if (digit > lastDate)break;if (curCell < firstDay) {text += '<TD></TD>';curCell++;} else { if (digit == date) { text += '<TD HEIGHT=' + cellHeight + '>';text += '<FONT COLOR="' + todayColor + '">';text += digit;text += '</FONT><BR>';text += '<FONT COLOR="' + timeColor + '" SIZE=2>';text += '<CENTER>' + getTime() + '</CENTER>';text += '</FONT>';text += '</TD>';} else text += '<TD HEIGHT=' + cellHeight + '>' + digit + '</TD>';digit++;}}text += '</TR>';}text += '</TABLE>';text += '</CENTER>';document.write(text); }</script></div> </div> </div> <div class="property-content-divider"></div> </div></div> </div><div class="clear"></div> <div class="clear"></div> <div id="page-footer" style="font-size:12px;background-color:#f1f1f1;"> <div id="footer" class="bag_24 footer-head"> <div itemtype="http://schema.org/WPFooter" itemscope="itemscope"> <div id="footer-content" class="grid_20"> <div> <div class="clear"></div> <div style="font-size:12px;color:gray;text-align:center"> Copyright &#169; 2018 myw3schools. All rights reserved. </div> </div> </div> <div class="tail-to-head"> <a class="pointer" href="#top" style="text-decoration:none"> <font color="gray"> <i class="fa fa-arrow-up" aria-hidden="true"></i> Back to Top</font> </a> </div> </div> </div> </div> <div id="dropit"> <input id="open-item" name="forms" type="radio" /> <input id="close-item" name="forms" type="radio" checked="checked" /> <label for="open-item" class="open"> Calculator</label> <section> <label for="close-item" class="close">&times;</label><span class="title">Calculator</span> <div class="wrap"> <center> <script language="JavaScript">
function addChar(input, character) {
if(input.value== null || input.value== "0")
input.value= character;
else
input.value += character;
}
function cos(form) {
form.display.value= Math.cos(form.display.value);
}
function sin(form) {
form.display.value= Math.sin(form.display.value);
}
function tan(form) {
form.display.value= Math.tan(form.display.value);
}
function sqrt(form) {
form.display.value= Math.sqrt(form.display.value);
}
function ln(form) {
form.display.value= Math.log(form.display.value);
}
function exp(form) {
form.display.value= Math.exp(form.display.value);
}
function deleteChar(input) {
input.value= input.value.substring(0, input.value.length - 1);
}
function changeSign(input) {
if(input.value.substring(0, 1) == "-")
input.value= input.value.substring(1, input.value.length);
else
input.value= "-" + input.value;
}
function compute(form) {
form.display.value= eval(form.display.value)
}
function square(form) {
form.display.value= eval(form.display.value) * eval(form.display.value)
}
function checkNum(str) {
for (var i = 0; i < str.length; i++) {
var ch = str.substring(i, i+1)
if (ch < "0" || ch > "9") {
if (ch != "/" && ch != "*" && ch != "+" && ch != "-" && ch != "."
&& ch != "(" && ch!= ")") {
alert("invalid entry!")
return false
}
}
}
return true
}
</SCRIPT><form name="sci-calc"><table border="0" cellpadding="0" cellspacing="0" id="calculator"><tr><td colspan="5" align="center"><INPUT name="display" value="0" MAXLENGTH="15" class="view"></br></td></tr><tr><td align="center"><input type="button" class="cal" value=" exp " onClick="if (checkNum(this.form.display.value)) { exp(this.form) }"></td><td align="center"><input type="button" class="cal" value=" 7 " onClick="addChar(this.form.display, '7')"></td><td align="center"><input type="button" class="cal" value=" 8 " onClick="addChar(this.form.display, '8')"></td><td align="center"><input type="button" class="cal" value=" 9 " onClick="addChar(this.form.display, '9')"></td><td align="center"><input type="button" class="cal" value=" / " onClick="addChar(this.form.display, '/')"></td></tr><tr><td align="center"><input type="button" class="cal" value=" ln " onClick="if (checkNum(this.form.display.value)) { ln(this.form) }"></td><td align="center"><input type="button" class="cal" value=" 4 " onClick="addChar(this.form.display, '4')"></td><td align="center"><input type="button" class="cal" value=" 5 " onClick="addChar(this.form.display, '5')"></td><td align="center"><input type="button" class="cal" value=" 6 " onClick="addChar(this.form.display, '6')"></td><td align="center"><input type="button" class="cal" value=" * " onClick="addChar(this.form.display, '*')"></td></tr><tr><td align="center"><input type="button" class="cal" value=" sqrt " onClick="if (checkNum(this.form.display.value)) { sqrt(this.form) }"></td><td align="center"><input type="button" class="cal" value=" 1 " onClick="addChar(this.form.display, '1')"></td><td align="center"><input type="button" class="cal" value=" 2 " onClick="addChar(this.form.display, '2')"></td><td align="center"><input type="button" class="cal" value=" 3 " onClick="addChar(this.form.display, '3')"></td><td align="center"><input name="button" type="button" class="cal" onClick="addChar(this.form.display, '-')" value=" - "></td></tr><tr><td align="center"><input type="button" class="cal" value=" sq " onClick="if (checkNum(this.form.display.value)) { square(this.form) }"></td><td align="center"><input type="button" class="cal" value=" 0 " onClick="addChar(this.form.display, '0')"></td><td align="center"><input type="button" class="cal" value=" . " onClick="addChar(this.form.display, '.')"></td><td align="center"><input type="button" class="cal" value=" +/- " onClick="changeSign(this.form.display)"></td><td align="center"><input type="button" class="cal" value=" + " onClick="addChar(this.form.display, '+')"></td></tr><tr><td align="center"><input type="button" class="cal" value=" ( " onClick="addChar(this.form.display, '(')"></td><td align="center"><input type="button" class="cal" value="cos" onClick="if (checkNum(this.form.display.value)) { cos(this.form) }"></td><td align="center"><input type="button" class="cal" value=" sin" onClick="if (checkNum(this.form.display.value)) { sin(this.form) }"></td><td align="center"><input type="button" class="cal" value=" tan" onClick="if (checkNum(this.form.display.value)) { tan(this.form) }"></td><td align="center"><input type="button" class="cal" value=" ) " onClick="addChar(this.form.display, ')')"></td></tr><tr><td align="center"><input type="button" class="cal" value="clear" onClick="this.form.display.value= 0 "></td><td align="center" colspan="3"><input type="button" class="back" value="backspace" onClick="deleteChar(this.form.display)"></td><td align="center"><input type="button" class="cal" value="=" name="enter" onClick="if (checkNum(this.form.display.value)) { compute(this.form) }"></td></tr></table></form> </center> </div> </section> </div><script type='text/javascript' src='http://www.static.myw3schools.com/js/output.min1.js'></script> <script> $(window).bind("pageshow", function(event) { if (event.originalEvent.persisted) { window.location.reload() } }); </script> <script src="http://www.static.myw3schools.com/js/gtag.js?id=UA-131555544-1"></script> <script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-131555544-1'); </script></body></html>