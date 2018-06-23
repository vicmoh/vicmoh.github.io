<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Art of Good Drivers for Driving Courses in Mississauga</title>
<meta name="description" content="Contact Good Drivers. Feel free to contact us @ 905-276-606 or email us at infogooddrivers@gmail.com for any queries or information." />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style-testimonial.css" media="screen" />
<link rel="stylesheet" href="css/inner-pages.css" media="screen" />

<link href="css/default.css" rel="stylesheet" type="text/css" />
<script src="script/jquery.js" type="text/javascript"></script>
<script src="script/mobilyslider.js" type="text/javascript"></script>
<script src="script/init.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>
<?php require("Query_Common.php"); ?>
<body onload="MM_preloadImages('images/subcribe-hver.png')">      
<div class="wrapper">
  <div class="main-wrapper">
    <div class="main-contener">
    <?php require("Header.php"); ?> 
    
    <!--about-start-->
    <div class="inner-bdy">
    <h4>Contact Us</h4>
    <div class="contact-left">
    <p><span>Address:</span><br />
      <strong>East Location (Head office)</strong><br />
<?php echo $address; ?><br />
<br />
<strong>Major Intersection:</strong> North-East corner of Hurontario Street and Dundas Street <br />
<strong> Note: We are located beside CIBC Bank on the North-East 
Corner of Hurontario-Dundas</strong><br /><br />

<strong>North Location</strong><br />
201-10095 Bramalea Road Brampton L6R0K1
<br />
<p><strong> Phone No.:</strong> 905-783-1778</p>
<br />
<p><strong> Major Intersection:</strong> Bovaird & Bramalea</p>
<div class="contact-office">
<h1><span><img src="images/bulding-icn.png" width="41" height="41" alt="" /></span></h1>
<div class="slider">
			<div class="sliderContent">
				<div class="item">
					<img src="images/img1.jpg" alt="" />
				</div>
				<div class="item">
					<img src="images/img2.jpg" alt="" />
				</div>
				<div class="item">
					<img src="images/img3.jpg" alt="" />
				</div>
				<div class="item">
					<img src="images/img4.jpg" alt="" />
				</div>
			</div>
		</div>
</div>
    </div>
  <!--contact-right-->
  <div class="contact-right">
  <h1><span><img src="images/phn-icn.png" width="23" height="33" alt="" /></span>Call</h1>
  <h2><?php echo str_replace(" ","-",$contact_no1); ?></h2>
  <h1><span><img src="images/email-icon.png" width="40" height="28" alt="" /></span>Email</h1>
  <h2><a href="mailto:<?php echo $email_id; ?>"><?php echo $email_id; ?></a></h2>
  <h3>Business Hours</h3>
  <div class="contact-date">
    <table width="435" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="48" align="center" style="padding-left:150px;">        Open&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;close </td>
      </tr>
      <tr>
        <td align="left" valign="top">
        	<table width="435" border="0" cellspacing="0" cellpadding="0">
          <?php  
			$gal="select * from gallery where album_name='Time_Table' and page_type='Time_Table'"; // echo $qr;
			$gall=mysql_query($gal) or die(mysql_error()); 
			$image_name=""; $image_discrip="";
			while($gl=mysql_fetch_array($gall))
			{  $image_name=$gl['image_name'];    $image_discrip=$gl['image_discrip']; 	$sub_detail=$gl['sub_detail']; 	 
       ?> 
          <tr>
            <td width="150" height="34" align="center"><?php echo $image_name;?></td>
            <td width="150" align="center"><?php echo $image_discrip;?></td>
            <td align="center"><?php echo $sub_detail;?></td>
          </tr>
          
      <?php } ?> 
          </table></td>
      </tr>
    </table>
  </div>
  </div>  
    <!--contact-end-->
    <div class="contact-map"><?php echo $weblink; ?></div>
    </div>
    </div>
  </div>
  <?php require("Footer.php"); ?>
</div>

</body>
</html>