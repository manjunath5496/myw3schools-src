<?php 



session_start();



if(!isset($_SESSION['UserData']['Username'])){

	header("location: ../login");

	exit;

}

?>

<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" prefix="og: http://ogp.me/ns#"><head profile="http://gmpg.org/xfn/11"> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <meta http-equiv="X-UA-Compatible" content="IE=9" /> <meta name="format-detection" content="telephone=no" /> <meta HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE" /> <meta http-equiv="cache-control" content="no-store" /> <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> <meta name="author" content="MyW3schools" /> <meta name="description" content=" MyW3schools.com is the internet's best source for free eBook downloads. Read & download eBooks for Free: any where, anytime! Collection includes great works of fiction, non-fiction and poetry, including works by Asimov, Jane Austen, Philip K. Dick, F. Scott Fitzgerald, Neil Gaiman, Tolstoy, Dostoevsky, Shakespeare, Ernest Hemingway, Virginia Woolf & James Joyce." /> <meta name="keywords" content="free ebooks collection, download free ebooks, 4700 free ebooks, free ebooks on literature, free ebooks science fiction, free ebooks technical, j k rowling free ebooks,free ebooks computer science download, science free ebooks, free ebooks medical download pdf" /> <link rel="canonical" href="http://www.myw3schools.com/resize/index.php" /> <meta property="og:url" content="http://www.myw3schools.com/resize/index.php" /> <meta property="og:site_name" content="MyW3schools | internet's best source for free eBook downloads" /> <meta property="og:locale" content="en_GB" /> <meta property="og:type" content="website" /> <meta property="og:title" content="MyW3schools | internet's best source for free eBook downloads." /> <meta name="robots" content="noindex,nofollow" /> <meta property="og:image" content="http://www.static.myw3schools.com/img/1.png" /> <meta name="twitter:description" content="MyW3schools.com is the internet's best source for free eBook downloads. Read & download eBooks for Free: any where, anytime! Collection includes great works of fiction, non-fiction and poetry, including works by Asimov, Jane Austen, Philip K. Dick, F. Scott Fitzgerald, Neil Gaiman, Tolstoy, Dostoevsky, Shakespeare, Ernest Hemingway, Virginia Woolf & James Joyce." /> <meta name="google-site-verification" content="OIuEbc9pgQaGjNQbvni1N4wCpVkMTdfECpvjMw3ZDqI" /> <script type='application/ld+json'> { "@context": "http://www.schema.org", "@type": "WebSite", "name": "MyW3schools", "alternateName": "The internet's best source for free eBook downloads", "url": "http://www.myw3schools.com" } </script> <link rel="shortcut icon" href="http://www.static.myw3schools.com/img/logo.png" alt="The internet's best source for free eBook downloads" title="MyW3schools Logo" /> <title> Image Compressor | MyW3schools.com | Download Fiction, Health, Romance and many more ebooks for Free: any where, anytime!</title> <meta name="distribution" content="web" /> <link rel='stylesheet' id='google-http://www.static.myw3schools.com/css/fonts-css' href='http://www.static.myw3schools.com/css/font.css' type='text/css' media='all' /> <link rel='stylesheet' id='font-awesome-min-css' href='http://www.static.myw3schools.com/css/font-awesome.min.css' type='text/css' media='screen' /> <link rel='stylesheet' id='transform-css' href='http://www.static.myw3schools.com/css/transform.css' type='text/css' media='screen' /> <link rel='stylesheet' id='input004-css' href='http://www.static.myw3schools.com/css/input004.css' type='text/css' media='screen' /> <script type="text/javascript" src="http://www.static.myw3schools.com/js/output.min.js"></script><style>.file-upload__label { display: block; padding: 1em 2em; color: #fff; background: #428bca; border-radius: .4em; transition: background .3s; &: hover { cursor: pointer; background: #000; }: ;}.file-upload__input { position: absolute; left: 0; top: 0; right: 0; bottom: 0; font-size: 1; width: 0; height: 100%; opacity: 0;}input[type="text"]::placeholder {text-align: left;}input[type="text"]:-ms-input-placeholder {text-align: left;}input[type="text"]::-ms-input-placeholder {text-align: left;}.file-upload { position: relative; display: inline-block;}.shaded { color: inherit; background-color: #f5ecdb;}.boxed { margin-top: 1em; margin-bottom: 1em; border: 1px solid #eddab7; padding: 1ex 1em;}</style></head><body itemtype="http://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-497 page-child parent-pageid-490 u-design-responsive-on u-design-menu-auto-arrows-on u-design-menu-drop-shadows-on "> <div id="cover-1"> <div class="clear"></div> <header id="" class="top-segment trans-content-white" style="background-color:white; height:45px"> <div id="" class="bag over-all-nav"> <div class="leftnavi navbar"> <div class="nav-collapse"> <ul class="nav"> <li class="dropdown active"> <a class="pointer" class="dropdown-knob pointer" style=" text-decoration:none; font-weight: bold; color:gray; font-size:13px;margin-top: -10px;"><span class="bari"><i class="fa fa-bars"></i></span> <span class="stripnav dark-xl">&nbsp;&nbsp;</span></a> </br> <ul class="dropdown-menu" role="menu"> <li> <a class="pointer" href="../mail" title="Email">Email</a> </li> <li><a class="pointer" href="../email-marketing" title="Email Marketing">Email Marketing</a></li> <li> <a class="pointer" href="../bulk_mail/index" title="Bulk Email">Bulk Email</a> </li> </ul> </li> </ul> </div> </div> <nav id="rightnav " class="position-navi"> <div class="user-nav"> <a class="pointer" style="color:gray; font-weight: bold; font-size:12px;" href="../home" title="Home">HOME</a> &nbsp; &nbsp; <a class="pointer" href="../admin/index" title="blog"><span style="padding:5px 10px; text-decoration:none; background-color:transparent;font-weight: bold; border:1px solid white; color:gray; font-size:12px;">BLOG</span> </a> &nbsp; &nbsp; <a class="pointer" href="../logout" title="Logout"><span style="padding:5px 10px; text-decoration:none; background-color:#3A5580; font-weight: bold; border:1px solid #3A5580; color:white; font-size:12px;">LOGOUT</span> </a> &nbsp; &nbsp;</div> </nav> </div> </header> <div id="former-text"> <div style="text-align:right"> <canvas id="canvas" width="200" height="200"></canvas>
                <script>
                    var canvas = document.getElementById("canvas");
                    var ctx = canvas.getContext("2d");
                    var radius = 100;
                    ctx.translate(100, 100);
                    radius = radius * 0.9;
                    setInterval(drawClock, 1000);

                    function drawClock() {
                        drawFace(ctx, radius);
                        drawNumbers(ctx, radius);
                        drawTime(ctx, radius);
                    }

                    function drawFace(ctx, radius) {
                        var grad;
                        ctx.beginPath();
                        ctx.arc(0, 0, radius, 0, 2 * Math.PI);
                        ctx.fillStyle = 'white';
                        ctx.fill();
                        grad = ctx.createRadialGradient(0, 0, radius * 0.95, 0, 0, radius * 1.05);
                        grad.addColorStop(0, '#67D2C8');
                        grad.addColorStop(0.5, '#67D2C8');
                        grad.addColorStop(1, 'white');
                        ctx.strokeStyle = grad;
                        ctx.lineWidth = radius * 0.1;
                        ctx.stroke();
                        ctx.beginPath();
                        ctx.arc(0, 0, radius * 0.1, 0, 2 * Math.PI);
                        ctx.fillStyle = 'black';
                        ctx.fill();
                    }

                    function drawNumbers(ctx, radius) {
                        var ang;
                        var num;
                        ctx.font = radius * 0.15 + "px arial";
                        ctx.textBaseline = "middle";
                        ctx.textAlign = "center";
                        for (num = 1; num < 13; num++) {
                            ang = num * Math.PI / 6;
                            ctx.rotate(ang);
                            ctx.translate(0, -radius * 0.85);
                            ctx.rotate(-ang);
                            ctx.fillText(num.toString(), 0, 0);
                            ctx.rotate(ang);
                            ctx.translate(0, radius * 0.85);
                            ctx.rotate(-ang);
                        }
                    }

                    function drawTime(ctx, radius) {
                        var now = new Date();
                        var hour = now.getHours();
                        var minute = now.getMinutes();
                        var second = now.getSeconds();
                        hour = hour % 12;
                        hour = (hour * Math.PI / 6) + (minute * Math.PI / (6 * 60)) + (second * Math.PI / (360 * 60));
                        drawHand(ctx, hour, radius * 0.5, radius * 0.07);
                        minute = (minute * Math.PI / 30) + (second * Math.PI / (30 * 60));
                        drawHand(ctx, minute, radius * 0.8, radius * 0.07);
                        second = (second * Math.PI / 30);
                        drawHand(ctx, second, radius * 0.9, radius * 0.02);
                    }

                    function drawHand(ctx, pos, length, width) {
                        ctx.beginPath();
                        ctx.lineWidth = width;
                        ctx.lineCap = "rectangle";
                        ctx.moveTo(0, 1);
                        ctx.rotate(pos);
                        ctx.lineTo(0, -length);
                        ctx.stroke();
                        ctx.rotate(-pos);
                    }
                </script>
  </div> </br> </br> <div id="former-text-list" class="bag_24"> <div class="property-content-divider"></div> <div id='before-cont-box-1' class='column_3_of_3 home-cont-box'> <div class='list-text-cover'> <div class="cont_col_1 widget_text secondary_object_category"> <div class="textwidget"> <p style="color:black; text-align:center; font-size:20px;"> </p> <div class="drop-accordion"> <h5 class="panel-title" id="contact-form" style="text-align: left; ">&nbsp;&nbsp;&nbsp;</h5> <div class="contacten" name="quick_enq_side"> <div class="panel panel-default"> <div class="panel-heading"> <h3 class="panel-title" style="font-size:15px;font-weight:bold;"> </h3> </div> <div class="panel-body"><div class="row"><div class="col-md-6 col-xs-12"><form method="post" enctype="multipart/form-data"><div class="file-upload"> <label for="upload" class="file-upload__label">Choose File </label> <input id="upload" class="file-upload__input" type="file" name="uploadImg"></div></br></br><div class="form-field"><input name="width" class="form-control" type="text" style="text-align:left" placeholder="Width in pixels" autocomplete="off" spellcheck="false"><br><br></div><div class="form-field"><input name="height" class="form-control" type="text" style="text-align:left" placeholder="Height in pixels" autocomplete="off" spellcheck="false"><br><br></div><div class="form-field"><input name="quality" class="form-control" type="text" style="text-align:left" placeholder="Quality in %" autocomplete="off" spellcheck="false"><br><br></div><input type="submit" class="knob knob-data" style="font-size:11pt;color:white; background-color:#99CCFF;border:2px solid #99CCFF;" name="submit" value="Submit">&nbsp;&nbsp; <a href="c.php" style="text-decoration:none;"><button type="button" class="knob knob-data" style="font-size:11pt;color:white; background-color:#00A2E4;border:2px solid #00A2E4;">Refresh</button></a></form></div></div>          
	<div class="row">
			<div class="col-md-12">
				<?php
				$success = false;
				if(isset($_POST['submit']) && !empty($_POST['submit'])) {
					if(isset($_FILES['uploadImg']['name']) && @$_FILES['uploadImg']['name'] != "") {
						if($_FILES['uploadImg']['error'] > 0) {
							echo '<h4>Increase post_max_size and upload_max_filesize limit in php.ini file.</h4>';
						} else {
							if($_FILES['uploadImg']['size'] / 1024 <= 2048) { // 2MB
								if($_FILES['uploadImg']['type'] == 'image/jpeg' || 
								   $_FILES['uploadImg']['type'] == 'image/pjpeg' || 
								   $_FILES['uploadImg']['type'] == 'image/png' ||
								   $_FILES['uploadImg']['type'] == 'image/gif'){
									
									$source_file = $_FILES['uploadImg']['tmp_name'];
									$target_file = "uploads/compressed_" . $_FILES['uploadImg']['name']; 
									$width      = $_POST['width'];
									$height     = $_POST['height'];
									$quality    = $_POST['quality'];
									//$image_name = $_FILES['uploadImg']['name'];
									$success = compress_image($source_file, $target_file, $width, $height, $quality);
									if($success) {
										// Optional. The original file is uploaded to the server only for the comparison purpose.
										copy($source_file, "uploads/original_" . $_FILES['uploadImg']['name']);
									}
								}
							} else {
								
								
								echo "</br> </br><div class='boxed shaded'> <p style='font-size:15px; text-align:center;color:black'><strong>Image should be maximun 2MB in size!</strong> </p> </div> <meta http-equiv='refresh' content='2;url=index.php'/>";
							}
						}
					} else {
						echo "</br> </br><div class='boxed shaded'> <p style='font-size:15px; text-align:center;color:black'><strong>Please select an image first!</strong> </p> </div> <meta http-equiv='refresh' content='2;url=index.php'/>";
					}
				}
				?>
				
				<!-- Displaying original and compressed images -->
				<?php if($success) { ?>
				<?php $destination = "uploads/"; ?>
				
				</br> </br>
				
					<table border="0" cellpadding="20">
					  <tr>
						<td>
							<a href="<?php echo $destination . "original_" . $_FILES['uploadImg']['name']?>" target="_blank" title="View actual size">
								<img src='<?php echo $destination . "original_" . $_FILES['uploadImg']['name']?>'>
							</a><br>
							<b> <?php echo round(filesize($destination . "original_" . $_FILES['uploadImg']['name'])/1024,2); ?>KB </b>
						</td>
						<td>
							<a href="<?php echo $destination . "compressed_" . $_FILES['uploadImg']['name']?>" target="_blank" title="View actual size">
								<img src='<?php echo $destination . "compressed_" . $_FILES['uploadImg']['name']?>'>
							</a><br>
							<b> <?php echo round(filesize($destination . "compressed_" . $_FILES['uploadImg']['name'])/1024, 2); ?>KB</b>
						</td>
					  </tr>
					</table>
				<?php } ?>
			</div>
		</div>
			

	<?php
function compress_image($source_file, $target_file, $nwidth, $nheight, $quality) {
	//Return an array consisting of image type, height, widh and mime type.
	$image_info = getimagesize($source_file);
	if(!($nwidth > 0)) $nwidth = $image_info[0];
	if(!($nheight > 0)) $nheight = $image_info[1];
	

	/*echo '<pre>';
	print_r($image_info);*/
	if(!empty($image_info)) {
		switch($image_info['mime']) {
			case 'image/jpeg' :
				if($quality == '' || $quality < 0 || $quality > 100) $quality = 75; //Default quality
				// Create a new image from the file or the url.
				$image = imagecreatefromjpeg($source_file);
				$thumb = imagecreatetruecolor($nwidth, $nheight);
				//Resize the $thumb image
				imagecopyresized($thumb, $image, 0, 0, 0, 0, $nwidth, $nheight, $image_info[0], $image_info[1]);
				// Output image to the browser or file.
				return imagejpeg($thumb, $target_file, $quality); 
				
				break;
			
			case 'image/png' :
				if($quality == '' || $quality < 0 || $quality > 9) $quality = 6; //Default quality
				// Create a new image from the file or the url.
				$image = imagecreatefrompng($source_file);
				$thumb = imagecreatetruecolor($nwidth, $nheight);
				//Resize the $thumb image
				imagecopyresized($thumb, $image, 0, 0, 0, 0, $nwidth, $nheight, $image_info[0], $image_info[1]);
				// Output image to the browser or file.
				return imagepng($thumb, $target_file, $quality);
				break;
				
			case 'image/gif' :
				if($quality == '' || $quality < 0 || $quality > 100) $quality = 75; //Default quality
				// Create a new image from the file or the url.
				$image = imagecreatefromgif($source_file);
				$thumb = imagecreatetruecolor($nwidth, $nheight);
				//Resize the $thumb image
				imagecopyresized($thumb, $image, 0, 0, 0, 0, $nwidth, $nheight, $image_info[0], $image_info[1]);
				// Output image to the browser or file.
				return imagegif($thumb, $target_file, $quality); //$success = true;
				break;
				
			default:
				echo "<h4>Not supported file type!</h4>";
				break;
		}
	}
}
?>

</br> </br> </div> </div> </div> </br> </br> </div> </div> </div> </div> </div> </br> <center> <img src="http://www.static.myw3schools.com/img/rsb.png" alt="myw3schools.com"> </center> </br> </br> </br> </div> </div> </div> <div class="clear"></div> <div class="property-content-divider"></div> <div class="clear"></div> <div class="clear"></div> <div id="page-footer" style="font-size:12px;background-color:#f1f1f1;"> <div id="footer" class="bag_24 footer-head"> <div itemtype="http://schema.org/WPFooter" itemscope="itemscope"> <div id="footer-content" class="grid_20"> <div> <div class="suggareas"> <p style="text-indent:10px;text-align: justify;-moz-text-align-last: right; text-align-last: left;"> </p> </div> <div class="clear"></div> <div style="font-size:12px;color:gray;text-align:center"> Copyright &#169; 2018 myw3schools. All rights reserved. </div> </div> </div> <div class="tail-to-head"> <a class="pointer" href="#top" style="text-decoration:none"> <font color="gray"> <i class="fa fa-arrow-up" aria-hidden="true"></i> Back to Top</font> </a> </div> </div> </div> </div> <script type='text/javascript' src='http://www.static.myw3schools.com/js/output.min1.js'></script> <script> $(window).bind("pageshow", function(event) { if (event.originalEvent.persisted) { window.location.reload() } }); </script> <script src="http://www.static.myw3schools.com/js/gtag.js?id=UA-131555544-1"></script> <script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-131555544-1'); </script></body></html>				