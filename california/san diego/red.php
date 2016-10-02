<?php
 $name = $_POST["name"];  
 $mail = $_POST["email"];
 $email = $_POST["email"];
 $title = $_POST["title"];
 $msg = $_POST["description"];
 $tel = $_POST["phone"];
 $address = $_POST["address"];
 $teltype = $_POST["calltype"];
 $hemail = $_POST["hiddenemail"];
 $category = $_POST["category"];
 $city = $_POST["city"];
 $state = $_POST["state"];
$city1 = "sandiego";
$state1 = "California";

 
$img1 = $_FILES['image1']['name'];
$img2 = $_FILES['image2']['name'];
$img3 = $_FILES['image3']['name'];
$img4 = $_FILES['image4']['name'];
$img5 = $_FILES['image5']['name'];
$img6 = $_FILES['image6']['name'];
$img7 = $_FILES['image7']['name'];
$img8 = $_FILES['image8']['name'];
$date1 = date("h:i:sa");
$date2 = date("Y-m-d");


$pat1 = $mail.basename($_FILES['image1']['name']);
$pat2 = $mail.basename($_FILES['image2']['name']);
$pat3 = $mail.basename($_FILES['image3']['name']);
$pat4 = $mail.basename($_FILES['image4']['name']);
$pat5 = $mail.basename($_FILES['image5']['name']);
$pat6 = $mail.basename($_FILES['image6']['name']);
$pat7 = $mail.basename($_FILES['image7']['name']);
$pat8 = $mail.basename($_FILES['image8']['name']);
$target_path1 = "users/Red/uploads/";
$target_path1_2 = "uploads/".$pat1;
$target_path1 = $target_path1 . $pat1;
move_uploaded_file($_FILES['image1']['tmp_name'], $target_path1);

$target_path2 = "users/Red/uploads/";
$target_path2 = $target_path2 . $pat2;
$target_path2_2 = "uploads/".$pat2;
move_uploaded_file($_FILES['image2']['tmp_name'], $target_path2);
$target_path3 = "users/Red/uploads/";
$target_path3_2 = "uploads/".$pat3;
$target_path3 = $target_path3 . $pat3;
move_uploaded_file($_FILES['image3']['tmp_name'], $target_path3);
$target_path4 = "users/Red/uploads/";
$target_path4 = $target_path4 . $pat4;
$target_path4_2 = "uploads/".$pat4;
move_uploaded_file($_FILES['image4']['tmp_name'], $target_path4);
$target_path5 = "users/Red/uploads/";
$target_path5 = $target_path5 . $pat5;
$target_path5_2 = "uploads/".$pat5;
move_uploaded_file($_FILES['image5']['tmp_name'], $target_path5);
$target_path6 = "users/Red/uploads/";
$target_path6 = $target_path6 . $pat6;
$target_path6_2 = "uploads/".$pat6;
move_uploaded_file($_FILES['image6']['tmp_name'], $target_path6);
$target_path7 = "users/Red/uploads/";
$target_path7 = $target_path7 . $pat7;
$target_path7_2 = "uploads/".$pat7;
move_uploaded_file($_FILES['image7']['tmp_name'], $target_path7);
$target_path8 = "users/Red/uploads/";
$target_path8 = $target_path8 . $pat8;
$target_path8_2 = "uploads/".$pat8;
move_uploaded_file($_FILES['image8']['tmp_name'], $target_path8);


if( $img1){
$images1 = "<a href=$target_path1_2><img src=$target_path1_2 width='198' height='198' alt=$title /></a>&nbsp;&nbsp;&nbsp;&nbsp;";} 
else { $images1 = "";}
if( $img2 ){
$images2 = "<a href=$target_path2_2><img src=$target_path2_2 width='198' height='198' alt=$title /></a>&nbsp;&nbsp;&nbsp;&nbsp; ";
} else { $images2 = ""; }
if( $img3 ){
$images3 = "<a href=$target_path3_2 ><img src=$target_path3_2 width='198' height='198' alt=$title /></a>&nbsp;&nbsp;&nbsp;&nbsp; ";
} else { $images3 = ""; }
if( $img4 ){
$images4 = "<a href=$target_path4_2 ><img src=$target_path4_2 width='198' height='198' alt=$title /></a>&nbsp;&nbsp;&nbsp;&nbsp; ";
} else { $images4 = ""; }
if( $img5 ){
$images5 = "<a href=$target_path5_2 ><img src=$target_path5_2 width='198' height='198' alt=$title /></a>&nbsp;&nbsp;&nbsp;&nbsp; ";
} else { $images5 = ""; }
if( $img6 ){
$images6 = "<a href=$target_path6_2 ><img src=$target_path6_2 width='198' height='198' alt=$title /></a>&nbsp;&nbsp;&nbsp;&nbsp; ";
} else { $images6 = ""; }
if( $img7 ){
$images7 = "<a href=$target_path7_2 ><img src=$target_path7_2 width='198' height='198' alt=$title /></a>&nbsp;&nbsp;&nbsp;&nbsp; ";
} else { $images7 = ""; }
if( $img8 ){
$images8 = "<a href=$target_path8_2 ><img src=$target_path8_2 width='198' height='198' alt=$title /></a>&nbsp;&nbsp;&nbsp;&nbsp; ";
} else { $images8 = ""; }

if ( $hemail == "on" ){
$mail= "<font color='#e24444' >hidden</font>" ;} 


$bob1 = "http://www.americaniran.com/".$state1."/".$city1."/". $target_path1;
$bob2 = "http://www.americaniran.com/".$state1."/".$city1."/". $target_path2;
$bob3 = "http://www.americaniran.com/".$state1."/".$city1."/". $target_path3;
$bob4 = "http://www.americaniran.com/".$state1."/".$city1."/". $target_path4;
$bob5 = "http://www.americaniran.com/".$state1."/".$city1."/". $target_path5;
$bob6 = "http://www.americaniran.com/".$state1."/".$city1."/". $target_path6;
$bob7 = "http://www.americaniran.com/".$state1."/".$city1."/". $target_path7;
$bob8 = "http://www.americaniran.com/".$state1."/".$city1."/". $target_path8;


$mes2 = "<html><head></head><body bgcolor='#FF0000'>
<table border='1'>
<tr><td>&nbsp;name&nbsp;</td><td>$name</td></tr>
<tr><td>&nbsp;email&nbsp;</td><td>$email</td></tr>
<tr><td>&nbsp;tel&nbsp;</td><td>$tel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $teltype&nbsp;</td></tr>
<tr><td>&nbsp;title&nbsp;</td><td>$title</td></tr>
<tr><td>&nbsp;category&nbsp;</td><td>$category</td></tr>
<tr><td>&nbsp;state&nbsp;</td><td>$state</td></tr>
<tr><td>&nbsp;city&nbsp;</td><td>$city</td></tr>
<tr><td>&nbsp;address&nbsp;</td><td>$address</td></tr>
<tr><td>&nbsp;message&nbsp;</td><td>$msg</td></tr>
</table>
<br />
<hr />
<br />
<table border='1'>
<tr>
<td><img src=$bob1  width='198' height='198' /></td>
<td><img src=$bob2  width='198' height='198' /></td>
<td><img src=$bob3  width='198' height='198' /></td>
<td><img src=$bob4  width='198' height='198' /></td>
</tr>
<tr>
<td>$img1</td>
<td>$img2</td>
<td>$img3</td>
<td>$img4</td>
</tr>


<tr>
<td><img src=$bob5  width='198' height='198' /></td>
<td><img src=$bob6  width='198' height='198' /></td>
<td><img src=$bob7  width='198' height='198' /></td>
<td><img src=$bob8  width='198' height='198' /></td>
</tr>
<tr>
<td>$img5</td>
<td>$img6</td>
<td>$img7</td>
<td>$img8</td>
</tr>

</table>

</body></html>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'To: info <bemannagooodoost@yahoo.com>, sasy <sasy.bazade@gmail.com>' . "\r\n";
$headers .= 'From: NEW AD <info@americaniran.com>' . "\r\n";
mail("sasan.bazadeh@gmail.com", "RED", $mes2, $headers);

$txt = "-submited-\n".
"email\t\t".$email."\n".
"title\t\t(".$title.")\n".
"name\t\t(".$name.")\n".
"phone\t\t(".$tel.")\n".
"city\t\t(".$city.")\n".
"state\t\t(".$state.")\n";
mail("8587354688@vtext.com", "RED AD", $txt);


$tit = "http://www.americaniran.com/".$state1."/".$city1."/users/Red/".$date1.$date2.".html";
$umes = "Your ad has been submited and you can see that here:\n".$tit."\n"."But it is not approved yet. We will send you a confirmation link in 24 hours. Thanks!";
$headers2 .= 'To: sasan <sasan.bazadeh@gmail.com>, sasy <sasy.bazade@gmail.com>' . "\r\n";
$headers2 .= 'From: www.americaniran.com <info@americaniran.com>' . "\r\n";
mail($email, "www.americaniran.com",$umes,$headers2);

  //------------------------------------------------------
$bod = "
 <div id='fb-root'></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = '//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

 <img src='logo.png' width='1140' height='174' alt='www.americaniran.com' /><p>
 <ul id='MenuBar1' class='MenuBarHorizontal'>
    <li><a href='index.html'>
      <center>
        <font face='Tahoma' >صفحه اصلی</font>
      </center>
    </a></li>
    <li><a href='khadamat.html'>
      <center>
        <font face='Tahoma' >خدمات</font>
      </center>
    </a></li>
    <li><a href='kharid.html'>
      <center>
        <font face='Tahoma' >خرید و فروش</font>
      </center>
    </a></li>
    <li><a href='kar.html'>
    <center>
      <font face='Tahoma' >بازار کار</font>
    </center>
    </a>
    </li>
    <li><a href='agahi.html'>
      <center>
        <font face='Tahoma' >ثبت آگهی‌</font>
      </center>
    </a></li>
    <li><a href='tamas.html'>
      <center>
        <font face='Tahoma' >تماس با ما</font>
      </center>
    </a></li>
    <li><a href='ma.html'>
      <center>
        <font face='Tahoma' >درباره ما</font>
      </center>
    </a></li>
    <li><a href='map.html'>
      <center>
        <font face='Tahoma' >نقشه سایت</font>
      </center>
    </a></li></ul>
	
	


 
 
 <script type='text/javascript'>
var MenuBar1 = new Spry.Widget.MenuBar('MenuBar1', {imgDown:'SpryAssets/SpryMenuBarDownHover.gif', imgRight:'SpryAssets/SpryMenuBarRightHover.gif'});

</script>
<br /><br /><br /><br />
<table border='0' width='1025px'><tr><td>
<b>
<font color='000000' face='tahoma' size='+3'>$title
</font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color='000000' face='tahoma' size='0'>
Category: $category
</font>

&nbsp; <br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<div class='fb-like' data-href=$title data-layout='button_count' data-action='like' data-show-faces='true' data-share='true'></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href='https://twitter.com/share' class='twitter-share-button'>Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<div class='g-plusone' data-size='medium'></div>
<script type='text/javascript'>
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>


</b><br /><br />

<fieldset><legend>
<font color='#009900' face='tahoma' size='0'> Description </font>
</legend><br />
<font color='000000' face='tahoma' ><pre>$msg</pre>
</font><br />
</fieldset>

<br />
<fieldset><legend>
<font color='#009900' face='tahoma' size='0'> Images </font>
</legend><br />

$images1
$images2
$images3
$images4
$images5
$images6
$images7
$images8


<br />
</fieldset>

<br />
<fieldset><legend>
<font color='#009900' face='tahoma' size='0'> user information </font>
</legend><br />
<font color='000000' size='3px' >name:&nbsp;</font>&nbsp;&nbsp;&nbsp;
<font color='000000' size='3px' ><code>$name</code></font><p> 
<font color='000000' size='3px' >phone:&nbsp;</font>&nbsp;&nbsp;
<font color='000000' fsize='3px' ><code>$tel </code>&nbsp;&nbsp;</font><font color='000000'  face='tahoma' size='0'><mark>$teltype</mark></font><p>  
<font color='000000' size='3px' >email:&nbsp;</font>&nbsp;&nbsp;&nbsp;


<font color='000000' size='3px' ><code>$mail</code></font><p>  
 $hidemail


<font color='000000' size='3px' >address:&nbsp;</font>
<font color='000000' size='3px' ><pre>$address</pre></font>
<br />
</fieldset>

<br />
<fieldset><legend>
<font color='#009900' face='tahoma' size='0'> Contact with User </font>
</legend><br />
<form name='usercontact' action='usercontact.php'>
name:&nbsp;&nbsp;<input type='text' name='name'>&nbsp;&nbsp;&nbsp;&nbsp;
email or phone:&nbsp;&nbsp;<input type='text' name='subject'><p>
message:&nbsp;&nbsp;
<p>
<textarea name='message' rows='5' cols='57'></textarea><p>
<input type='submit' value=' send '>
<input type='reset' value=' clear '>
</form>
</fieldset>

<br />
<fieldset><legend>
<font color='#009900' face='tahoma' size='0'> Review </font>
</legend><br />
<form name='review' action='review.php'>
name:&nbsp;&nbsp;<input type='text' name='name'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
rate:&nbsp;&nbsp;&nbsp;

<div class='fb-comments' data-href=$tit data-width='460' data-numposts='10' data-colorscheme='light'></div>


<br />
</fieldset>
  
</td></tr></table> 

 
";

$sas = "<html><head><title>$title</title><meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<script src='SpryAssets/SpryMenuBar.js' type='text/javascript'></script><script src='SpryAssets/SpryTooltip.js' type='text/javascript'></script>
<link href='SpryAssets/SpryMenuBarHorizontal.css' rel='stylesheet' type='text/css' />

</head><body bgcolor='#CCCCCC'>".
$bod
."</body></html>";
$tit2 = "users/Red/" .$date1.$date2.".html";
$s2 = fopen($tit2, 'a');
fwrite($s2, $sas);
echo "<pre>";

 ?>