<?php
echo '<script type="text/javascript">
if (screen.width <= 699) {
document.location = "http://www.static.myw3schools.com";
}
</script>'
?>

<?php
if(isset($_POST['submit'])) 
{

$message=
'Name:	'.$_POST['fullname'].'<br />
Subject:	'.$_POST['subject'].'<br />
Phone Number:	'.$_POST['phone'].'<br />
Email:	'.$_POST['emailid'].'<br />
Message: '.$_POST['comments'].'
';
    require "phpmailer/class.phpmailer.php"; //include phpmailer class
      
    // Instantiate Class  
    $mail = new PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "mail.myw3schools.com";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
    $mail->Encoding = '7bit';
    
    // Authentication  
    $mail->Username   = "info@myw3schools.com"; // Your full Gmail address
    $mail->Password   = "maczen5496"; // Your Gmail password
      
    // Compose
    $mail->SetFrom($_POST['emailid'], $_POST['fullname']);
    $mail->AddReplyTo($_POST['emailid'], $_POST['fullname']);
    $mail->Subject = "Enquiry";      // Subject (which isn't required)  
    $mail->MsgHTML($message);
 
    // Send To 

    $mail->AddAddress("info@myw3schools.com", "MyW3schools"); // Where to send it - Recipient
  if($mail->Send()){
  
 echo '<script>window.location.href = "1.html";</script>';
}else{
    
	
	 echo '<script>window.location.href = "2.html";</script>';

	
}     
	unset($mail);

}

?>

<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" prefix="og: http://ogp.me/ns#" class="loading"><head profile="http://gmpg.org/xfn/11"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">  <meta http-equiv="X-UA-Compatible" content="IE=9" /> <meta name="format-detection" content="telephone=no" /> <meta HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE" /> <meta http-equiv="cache-control" content="no-store" /> <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> <meta name="author" content="MyW3schools" /> <meta name="description" content=" MyW3schools.com is the internet's best source for free eBook downloads. Read & download eBooks for Free: any where, anytime! Collection includes great works of fiction, non-fiction and poetry, including works by Asimov, Jane Austen, Philip K. Dick, F. Scott Fitzgerald, Neil Gaiman, Tolstoy, Dostoevsky, Shakespeare, Ernest Hemingway, Virginia Woolf & James Joyce." /> <meta name="keywords" content="free ebooks collection, download free ebooks, 4700 free ebooks, free ebooks on literature, free ebooks science fiction, free ebooks technical, j k rowling free ebooks,free ebooks computer science download, science free ebooks, free ebooks medical download pdf" /> <link rel="canonical" href="http://www.myw3schools.com/contact.php" /> <meta property="og:url" content="http://www.myw3schools.com/contact.php" /> <meta property="og:site_name" content="MyW3schools | internet's best source for free eBook downloads" /> <meta property="og:locale" content="en_GB" /> <meta property="og:type" content="website" /> <meta property="og:title" content="MyW3schools | internet's best source for free eBook downloads." /> <meta name="robots" content="index,follow" /> <meta property="og:image" content="http://www.static.myw3schools.com/img/1.png" /> <meta name="twitter:description" content="MyW3schools.com is the internet's best source for free eBook downloads. Read & download eBooks for Free: any where, anytime! Collection includes great works of fiction, non-fiction and poetry, including works by Asimov, Jane Austen, Philip K. Dick, F. Scott Fitzgerald, Neil Gaiman, Tolstoy, Dostoevsky, Shakespeare, Ernest Hemingway, Virginia Woolf & James Joyce." /> <meta name="google-site-verification" content="OIuEbc9pgQaGjNQbvni1N4wCpVkMTdfECpvjMw3ZDqI" /> <script type='application/ld+json'> { "@context": "http://www.schema.org", "@type": "WebSite", "name": "MyW3schools", "alternateName": "The internet's best source for free eBook downloads", "url": "http://www.myw3schools.com"}</script> <link rel="shortcut icon" href="http://www.static.myw3schools.com/img/logo.png" alt="The internet's best source for free eBook downloads" title="MyW3schools Logo" /> <title>Contact Us | MyW3schools.com | Download Fiction, Health, Romance and many more ebooks for Free: any where, anytime!</title> <meta name="distribution" content="web" /> <link rel='stylesheet' id='google-fonts-css' href='http://www.static.myw3schools.com/css/font.css' type='text/css' media='all' /> <link rel='stylesheet' id='font-awesome-min-css' href='http://www.static.myw3schools.com/css/font-awesome.min.css' type='text/css' media='screen' /> <link rel="stylesheet" id='reopen-css' href="http://www.static.myw3schools.com/css/reopen.css" type="text/css" media="screen"> <link rel='stylesheet' id='transform-css' href='http://www.static.myw3schools.com/css/transform.css' type='text/css' media='screen' /> <link rel='stylesheet' id='reopen1-css' href='http://www.static.myw3schools.com/css/reopen1.css' type='text/css' media='screen' /> <script type="text/javascript" src="http://www.static.myw3schools.com/js/output.min.js"></script></head><body itemtype="http://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-497 page-child parent-pageid-490 u-design-responsive-on u-design-menu-auto-arrows-on u-design-menu-drop-shadows-on "> <div id="cover-1"> <div id="upper-cover"> <div class="clear"></div> <div id="marginal-navigation-strip-cover" style="background-color: #00bfb5;"> <div id="marginal-navigation-strip" class="bag_24"> <div id="marginal-navigation-strip-text"> <div id="marginal-nav-strip-site-1" class="grid_14"> <div id="mar-nav-content-site-2" style="background-color:#00bfb5; color:white;"> <u>The Art of Computer Programming</u> - Donald E. Knuth. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </div> </div> <div id="marginal-nav-strip-site-2" class="grid_9"> <div id="mar-nav-content-site-1" style="background-color: #00bfb5;"><a class="pointer" onclick="window.open('b20.html');" title=" Download The Art of Computer Programming books for Free: any where, anytime!"><span style="padding:5px 10px; text-decoration:none; background-color:transparent; border:1px solid white; color:white; font-size:12px;">GRAB NOW</span></a> &nbsp; &nbsp; <a class="pointer" onclick="window.open('formulas');" title=" Explore Fundamental Science Formulas for Free: any where, anytime!"><span style="padding:5px 10px; background-color:#FF8C00; text-decoration:none; border:1px solid #FF8C00; color:white; font-size:12px;">FORMULAS</span></a> </div> </div> </div> </div> </div> <header id="" class="top-segment trans-content-white" style="background-color:white; height:45px"> <div id="" class="bag over-all-nav"> <div class="leftnavi navbar"> <div class="nav-collapse"> <ul class="nav"> <li class="dropdown active"> <a class="pointer" class="dropdown-knob pointer" style=" text-decoration:none; font-weight: bold; color:gray; font-size:13px;margin-top: -10px;"><span class="bari"><i class="fa fa-bars"></i></span> <span class="stripnav dark-xl">&nbsp;TUTORIALS</span></a> </br> <ul class="dropdown-menu" role="menu"> <li> <a class="pointer" onclick="window.open('html-tutorial');" title="Explore HTML Tutorials for Free: any where, anytime!">HTML</a> </li> <li> <a class="pointer" onclick="window.open('css-tutorial');" title="Explore CSS Tutorials for Free: any where, anytime!">CSS</a> </li> <li> <a class="pointer" onclick="window.open('other-tutorial');" title="Explore Many Other Tutorials for Free: any where, anytime!">MORE</a> </li> </ul> </li> </ul> </div> </div> <nav id="rightnav " class="position-navi"> <div class="user-nav"> <a class="pointer" style="color:gray; font-weight: bold; font-size:12px;" onclick="window.open('blog');" title="Blog">BLOG</a> &nbsp; &nbsp; <a class="pointer" onclick="window.open('source-codes');" title="Explore SRC for Free: any where, anytime!"><span style="padding:5px 10px; text-decoration:none; background-color:transparent;font-weight: bold; border:1px solid white; color:gray; font-size:12px;">SRC</span> </a> &nbsp; &nbsp; <a class="pointer" onclick="window.open('books');" title="Download Fiction, Health, Romance and many more ebooks for Free: any where, anytime!"><span style="padding:5px 10px; text-decoration:none; background-color:#3A5580; font-weight: bold; border:1px solid #3A5580; color:white; font-size:12px;">BOOKS</span> </a> &nbsp; &nbsp;</div> </nav> </div> </header> <div id="content-sec"> <div class="overlay"> &nbsp; &nbsp;&nbsp; <center> <a class="pointer w5" title="MyW3schools.com | Download Fiction, Health, Romance and many more ebooks for Free: any where, anytime!" onclick="window.open('http://www.myw3schools.com/');" style="text-decoration: none;"> </a> </center> </br> <h2 style="text-align: center; margin: 0px 0 10px;"><span style="font-size: 30px; color:white; line-height:1.2; ">Contact Us</span></h2> <p style=" color:#00FFFF; font-size:14px; text-align:center "><a class="pointer" style=" color:white;" onclick="window.open('http://www.myw3schools.com/');">Home</a><span class="breadarrow"> / </span><span class='current_crumb'> Contact Us </span></p> <div> <div id="fb-root"></div> </div> </br> </div> </div> <div id="marginal-navigation-strip-cover" style="background-color: #eef1f4;"> <div id="marginal-navigation-strip" class="bag_24"> <div id="marginal-navigation-strip-text"> <div id="marginal-nav-strip-site-1" class="grid_14"> <div id="mar-nav-content-site-2" style="color:#3A5580; font-size: 18px;"> HARRY POTTER SERIES </div> </div> <div id="marginal-nav-strip-site-2" class="grid_9"> <div id="mar-nav-content-site-1" style="margin-top: 5px;"> <a class="pointer" onclick="window.open('b21.html');" title="Download Harry Potter Series for Free: any where, anytime!"><span style="padding:5px 10px; background-color:#00bfb5;text-decoration:none; border:1px solid #00bfb5; color:white; font-size:14px;">Download</span></a> </div> </div> </div> </div> </div> <div id="former-text" style="background-color:#FFFFFF"> <div id="former-text-list" class="bag_24"> <div class="property-content-divider"></div> <div id='before-cont-box-1' class='column_3_of_3 home-cont-box'> <div class='list-text-cover'> <div class="cont_col_1 widget_text secondary_object_category"> <div class="textwidget"> <p style="color:black; text-align:center; font-size:20px;"> </p> <div class="drop-accordion"> <h5 class="panel-title" id="contact-form" style="text-align: left; ">&nbsp;&nbsp;&nbsp;</h5> <body onload="qikenq.reset();"> <div class="contacten" name="quick_enq_side"> <div class="panel panel-default"> <div class="panel-heading"> <h3 class="panel-title" style="font-size:15px;font-weight:bold;">Need help or have feedback? Send us a message </h3></div> <div class="panel-body"> <form action="#" method="post" name="qikenq_side" id="qikenq"> <div class="form-field"> <input type="text" class="form-control" id="email21" name="fullname" placeholder="Name *" title="Please fill in your name" autocomplete="off" spellcheck="false" required> </div> <div class="form-field"> <input type="text" class="form-control" id="email22" name="emailid" placeholder="Email *" title="Please fill in your email address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" autocomplete="off" spellcheck="false" required> </div> <div class="form-field"> <input type="text" class="form-control" id="email23" name="subject" placeholder="Subject *" title="Please fill in your subject" autocomplete="off" spellcheck="false" required> </div> <div class="form-field"> <input type="text" class="form-control" id="email24" name="phone" placeholder="Phone Number *" title="Please fill in your phone number" autocomplete="off" spellcheck="false" pattern="[0-9]+" required> </div> <div class="form-field"> <textarea class="form-control" id="email25" rows="2" name="comments" placeholder="Your Message *" title="Please fill in your message" autocomplete="off" spellcheck="false" required></textarea> </div> </br> <input name="submit" class="knob knob-data" type="submit" style="background-color:orange;" value="Submit" /> <input type="reset" class="knob knob-data" style="background-color:#3A5580;" value="Reset" /> </form> </div> </div> </div> </body> <script> $("form").submit(function(e) { var ref = $(this).find("[required]"); $(ref).each(function() { if ($(this).val() == '') { alert("Please fill out this field"); $(this).focus(); e.preventDefault(); return false; } }); return true; }); </script> </div> </div> </div> </div> </div> </div> </div> <div class="property-content-divider"></div> </div> </div> <div id="former-text" style="background-color:#eef1f4"> <div id="former-text-list" class="bag_24"> <div class="property-content-divider"></div> <div id='before-cont-box-1' class='column_3_of_3 home-cont-box'> <div class='list-text-cover'> <div class="cont_col_1 widget_text secondary_object_category"> </div> <div class="contacten" name="quick_enq_side"> <div class="panel panel-default"> <div class="panel-heading"> <h3 class="panel-title" style="font-size:15px;font-weight:bold;"> </h3></div> <div class="panel-body"> <div id="mathquiz"> <h1 class="mathName"></h1> <div class="mathArea"> <div class="mathHead"> <a class="button startmath" href="#">Get Started!</a> </div> </div> <div class="mathresults"> <h3 class="mathScore">You Scored: <span></span></h3> <h3 class="mathLevel"><span></span></h3> <div class="mathresultsCopy"> </div> </div> </div> </div> </div> </div> </div> </div> <div class="property-content-divider"></div> </div> </div> <div id="former-text" style="background: -webkit-gradient(linear, left top, left bottom, from(#4a8bdc), to(#4fbfe9));"> <div id="former-text-list" class="bag_24"> <div class="property-content-divider"></div> <div id='before-cont-box-1' class='column_3_of_3 home-cont-box'> <div class='list-text-cover'> <div class="cont_col_1 widget_text secondary_object_category"> </div> <div class="contacten" name="quick_enq_side"> <h2 style="text-align: center; margin: 0px 0 10px;"><span style="font-size: 26px; color:white; line-height:1.2; "> Change the way the world learns </span></h2> </br> <p style="font-size:13px;text-align: center; color:white "> Build cutting-edge technology, and transform lives around the world. </p> </br> <center> <div style="text-align: center;"><a class="knob knob-data" style="background-color:white; color:#337ab7;" onclick="window.open('careers');" title="Many talents. One vision."><span style="font-size: 16px;">Find an Open Position</span></a></div> </center></br> </div> </div> </div> <div class="property-content-divider"></div> </div> </div> <div id="basal-bag" style="font-size:13px;background-color:white"> <div id="bottom" class="bag_24"> <div class="basal-text-lining"> <div id='basal-1' class='one_fourth'> <div class='list-text-cover'> <div class="bottom-col-content widget_text secondary_object_category"> <h3 class="basal-lis-name" style="font-size:14px;color:gray; font-weight:bold;">TUTORIALS</h3> <div class="textwidget" style="width: 250px; height: 100px;"> <p> <a class="pointer" onclick="window.open('html-tutorial');" style="color:gray;text-decoration:none"> HTML</a> <br /> <a class="pointer" onclick="window.open('css-tutorial');" style="color:gray;text-decoration:none"> CSS</a> <br /> <a class="pointer" onclick="window.open('other-tutorial');" style="color:gray;text-decoration:none"> More</a> <br /> </p> </div> </br> </br> <p style="font-size:13px;color:gray"> SHARE THE LOVE OF BOOKS </p> <div class="social-share txt-left"> <div style="float:left;padding:1px;"> <a class="pointer w1" title="WhatsApp" target="_blank" href=" https://api.whatsapp.com/send?text=http://www.myw3schools.com/"></a> </div> <div style="float:left;padding:2px;"> <a class="pointer w2" title="Twitter" target="_blank" href="https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.myw3schools.com%2F&text=MyW3schools.com%20is%20the%20internet's%20best%20source%20for%20free%20eBook%20downloads.%20Read%20%26%20download%20eBooks%20for%20Free%3A%20any%20where%2C%20anytime!"></a> </div> <div style="float:left;padding:2px;"> <a class="pointer w3" title="Linkedin" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A//www.myw3schools.com/"></a> </div> <div style="float:left;padding:2px;"> <a class="pointer w4" title="Facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//www.myw3schools.com/"></a> </div> </div> </div> </div> </div> <div id='basal-2' class='one_fourth'> <div class='list-text-cover'> <div class="bottom-col-content widget_text secondary_object_category"> <h3 class="basal-lis-name" style="font-size:14px;color:gray;font-weight:bold;">WRITE FOR US</h3> <div class="textwidget" style="width: 150px; height: 50px;"> <p><a class="pointer" href="contact" style="color:gray;text-decoration:none"> Contact</a> <br /> </p> </div> </div> </div> </div> <div id='basal-3' class='one_fourth'> <div class='list-text-cover'> <div class="bottom-col-content widget_text secondary_object_category"> <h3 class="basal-lis-name" style="font-size:14px;color:gray;font-weight:bold;">USEFUL LINKS</h3> <div class="textwidget" style="width: 250px; height: 100px;"> <p><a class="pointer" onclick="window.open('formulas');" style="color:gray;text-decoration:none"> Formulas</a> <br /><a class="pointer" onclick="window.open('blog');" style="color:gray;text-decoration:none">Blog</a> <br /> </p> </br> </p> </div> </div> </div> </div> <div id='basal-4' class='one_fourth'> <div class='list-text-cover'> <div class="bottom-col-content widget_text secondary_object_category"> <h3 class="basal-lis-name" style="font-size:14px;color:gray;font-weight:bold;">BOOKS</h3> <div class="textwidget" style="width: 250px; height: 130px;"> <p><a class="pointer" onclick="window.open('b1.html');" style="text-decoration: none; color:gray" title="Download 70+ Medical books in one ZIP-file"> 70+ Medical Books</a> <br /><a class="pointer" onclick="window.open('b2.html');" style="text-decoration: none; color:gray" title="Download 60+ Mathematics books in one ZIP-file"> 60+ Math Books</a> <br /><a class="pointer" onclick="window.open('b3.html?usp=sharing');" style="text-decoration: none; color:gray" title="Download 60+ Psychology books in one ZIP-file"> 60+ Psychology Books</a> <br /><a class="pointer" onclick="window.open('b4.html');" style="text-decoration: none; color:gray" title="Download 50+ History books in one ZIP-file"> 50+ History Books</a> <br /> <a class="pointer" onclick="window.open('b5.html');" style="text-decoration: none; color:gray" title="Download 50+ Chemistry books in one ZIP-file"> 50+ Chemistry Books</a> <br /> <br /> </p> </br> </p> </div> </div> </div> </div> <div id='bottom_5' class='one_fourth'> <div class='list-text-cover'> <div class="bottom-col-content widget_text secondary_object_category"> <h3 class="basal-lis-name" style="font-size:14px;color:gray;font-weight:bold;">BOOKS</h3> <div class="textwidget" style="width: 250px; height: 130px;"> <p> <a class="pointer" onclick="window.open('b6.html');" style="text-decoration: none; color:gray" title="Download 80+ Physics books in one ZIP-file"> 80+ Physics Books</a> <br /><a class="pointer" onclick="window.open('b7.html');" style="color:gray;text-decoration:none" title="Download 80+ Dictionary books in one ZIP-file">80+ Dictionary Books</a> <br /><a class="pointer" onclick="window.open('b8.html');" style="color:gray;text-decoration:none" title="Download 100+ Engineering books in one ZIP-file">100+ Engineering Books</a> <br /><a class="pointer" onclick="window.open('b9.html');" style="color:gray;text-decoration:none" title="Download 120+ Science books in one ZIP-file">120+ Science Books</a> <br /><a class="pointer" onclick="window.open('b10.html');" style="color:gray;text-decoration:none" title="Download 60+ Fashion books in one ZIP-file">60+ Fashion Books</a> <br /> <br /> </p> </br> </p> </div> </div> </div> </div> </div> </div> </div> <div class="clear"></div> <div id="basal-bag" style="font-size:13px;background-color:#F7F8FA"> <div id="bottom" class="bag_24"> <div class="basal-text-lining"> <div id='basal-1' class='one_fourth'> <div class='list-text-cover'> <div class="bottom-col-content widget_text secondary_object_category"> <h3 class="basal-lis-name" style="font-size:14px;color:gray;font-weight:bold;">MORE</h3> <div class="textwidget" style="width: 250px; height: 100px;"> <p><a class="pointer" onclick="window.open('source-codes');" style="color:gray;text-decoration:none"> Source Codes</a> <br /><a class="pointer" onclick="window.open('feedback');" style="color:gray;text-decoration:none"> Feedback</a> <br /> <a class="pointer" onclick="window.open('b11.html');" style="color:gray;text-decoration:none" title="Download 250+ ebooks in one ZIP-file"> 250+ ebooks</a> <br /> <a class="pointer" onclick="window.open('b12.html');" style="color:gray;text-decoration:none" title="Download most popular ebooks in one ZIP-file"> Most Popular Books</a> <br /> <a class="pointer" onclick="window.open('b13.html');" style="color:gray;text-decoration:none" title="Download AI Lecture Notes in one ZIP-file"> AI Lecture Notes</a></p> </br> </p> </div> </br> </br> </div> </div> </div> <div id='basal-2' class='one_fourth'> <div class='list-text-cover'> <div class="bottom-col-content widget_text secondary_object_category"> <h3 class="basal-lis-name" style="font-size:14px;color:gray;font-weight:bold;">LECTURES</h3> <div class="textwidget" style="width: 150px; height: 120px;"> <p><a class="pointer" title="Download 450+ Nobel Lectures in one ZIP-file" onclick="window.open('b14.html');" style="text-decoration: none;color:gray;"> 450+ Nobel Lectures </a></p> <p><a class="pointer" title="Download 'Professor Stephen Hawking&#8217;s Public Lectures' for Free: any where, anytime!" onclick="window.open('b15.html');" style="text-decoration: none;color:gray;"> Hawking Lectures </a></p> <p><a class="pointer" title="Download 'Dr. Michio Kaku&#8217;s Public Lectures' for Free: any where, anytime!" onclick="window.open('b16.html');" style="text-decoration: none;color:gray;"> Michio Kaku Lectures </a></p> <p><a class="pointer" title="Download 'Richard Feynman&#8217;s Lectures on Physics' for Free: any where, anytime!" onclick="window.open('b17.html');" style="text-decoration: none;color:gray;"> Feynman Lectures </a></p> </div> </div> </div> </div> <div id='basal-3' class='one_fourth'> <div class='list-text-cover'> <div class="bottom-col-content widget_text secondary_object_category"> <h3 class="basal-lis-name" style="font-size:14px;color:gray;font-weight:bold;">BROWSE</h3> <div class="textwidget" style="width: 250px; height: 80px;"> <center> <form class="search-form" name="searchForm" method="get" action="https://www.google.com/search" target="_blank"> <input type="hidden" autocomplete="off" name="sitesearch" value="" /> <input type="text" autocomplete="off" id="search" name="q" class="text" maxlength="30" spellcheck="false" style=" width: 80%; padding: 0px; height: auto; background: url(&quot;http://www.static.myw3schools.com/img/googlelogo_lightgrey_46x16dp.png&quot;) left center no-repeat rgb(255, 255, 255); text-indent: 48px;" /> <br> <br> <button class="knob knob-data" type="submit" name="" style="color: white;font-size:12px; background-color:#3A5580;"> <i class="fa fa-search"> </i> Search </button> </form> </center> </br> </p> </div> </div> </div> </div> <div id='basal-4' class='one_fourth'> <div class='list-text-cover'> <div class="bottom-col-content widget_text secondary_object_category"> <h3 class="basal-lis-name" style="font-size:14px;color:gray;font-weight:bold;">EXPLORE</h3> <div class="textwidget" style="width: 250px; height: 50px;"> <p><a class="pointer" title="GitHub" target="_blank" href="git_hub.html" style="font-size:14px;color:gray; text-decoration:none;"><i class="fa fa-github" aria-hidden="true"></i> GITHUB</a></p> </br> </p> </div> </div> </div> </div> </div> </div> </div> <div class="clear"></div> <div id="page-footer" style="font-size:12px;background-color:white"> <div id="footer" class="bag_24 footer-head"> <div itemtype="http://schema.org/WPFooter" itemscope="itemscope"> <div id="footer-content" class="grid_20"> <div> <div class="suggareas"> <p style="text-indent:10px;text-align: justify;-moz-text-align-last: right; text-align-last: left;"> </p> </div> <div class="clear"></div> <div style="font-size:12px;color:gray;text-align:center"> Copyright &#169; 2018 myw3schools. All rights reserved. </div> </div> </div> <div class="tail-to-head"> <a class="pointer" href="#top" style="text-decoration:none"> <font color="gray"> <i class="fa fa-arrow-up" aria-hidden="true"></i> Back to Top</font> </a> </div> </div> </div> </div> <div id="dropit"> <input id="open-item" name="forms" type="radio" /> <input id="close-item" name="forms" type="radio" checked="checked" /> <label for="open-item" class="open"> More</label> <section> <label for="close-item" class="close">&times;</label><span class="title">More</span> <div class="wrap"> <form name="contact" id="contact"> <div class="field"> <p style="text-align:center;" class="w6"></p> <ul style="font-size:18px; color:black;"> <li> <a class="pointer" title="Download 50+ Pharmacy books in one ZIP-file" onclick="window.open('b18.html');" style="text-decoration: none;color:black;"> 50+ Pharmacy Books </a> </li> </ul> </br> <ul style="font-size:18px; color:black;"> <li> <a class="pointer" title="Download 450+ Nobel Lectures in one ZIP-file" onclick="window.open('b14.html');" style="text-decoration: none;color:black;"> 450+ Nobel Lectures </a> </li> </ul> </br> <ul style="font-size:18px; color:black;"> <li> <a class="pointer" title="Download 70+ Economic books in one ZIP-file" onclick="window.open('b19.html');" style="text-decoration: none;color:black;"> 70+ Economic Books </a> </li> </ul> </br> </br> </div> </form> </div> </section> </div> <script type='text/javascript' src='http://www.static.myw3schools.com/js/output.min1.js'></script> <script> $(window).bind("pageshow", function(event) { if (event.originalEvent.persisted) { window.location.reload() } }); </script> <script src="http://www.static.myw3schools.com/js/gtag.js?id=UA-131555544-1"></script> <script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-131555544-1'); </script> <script src="http://www.static.myw3schools.com/js/mathquiz_config.js"></script></body></html>