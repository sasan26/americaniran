<?php
echo "<html>";
echo "<head>";
echo "<title> sasan bazadeh </title>";
echo "</head>";
echo "<body bgcolor='#CCCCCC'>";
echo "<img src='logo.png' width='1140' height='174' alt='www.americaniran.com' />";
echo "<pre>";
echo "<a href='index-en.html'><img src='search1.jpg' width='126' height='36' alt='home' /></a>";
echo "<a href='khadamat-en.html'><img src='search2.jpg' width='126' height='36' alt='services' /></a>";
echo "<a href='kharid-en.html'><img src='search3.jpg' width='126' height='36' alt='sales' /></a>";
echo "<a href='kar-en.html'><img src='search4.jpg' width='126' height='36' alt='job' /></a>";
echo "<a href='ad-en.html'><img src='search5.jpg' width='126' height='36' alt='build your ads' /></a>";
echo "<a href='tamas-en.html'><img src='search6.jpg' width='126' height='36' alt='contact us' /></a>";
echo "<a href='about-en.html'><img src='search7.jpg' width='126' height='36' alt='about us' /></a>";
echo "<a href='map-en.html'><img src='search8.jpg' width='126' height='36' alt='site map' /></a>";
echo "<a href='index.html'><img src='search9.jpg' width='126' height='36' alt='فارسی' /></a>";
echo "<br /><br />";
echo "<table border=1 width='1134px' >
<td>
<br>
&nbsp;&nbsp;<font color='#000000' face='Tahoma, Geneva, sans-serif'><b>your search result: &nbsp;&nbsp;</b></font> 
<font color='#ffffff' face='Tahoma, Geneva, sans-serif' size='+1'> [
".$_GET[search]." ]</font><p>

<form method='GET' action='newtest.php'>
<p> &nbsp;&nbsp;search <input type='text' name='search' size='100'>
&nbsp;&nbsp;
<input type='submit' value='Search again' >
<input type='reset' value='  Clear  ' ></p>
</p>
</p>

</form>
</td>
</table>";
//------------------------------------------------------------------------------------------------------
$query = "SELECT * FROM final ";

if(strlen(trim($_GET[search])))
{
   $query = $query." where pic1 like '%".$_GET[search]."%'";
   $query = $query." or pic2 like '%".$_GET[search]."%'";
   $query = $query." or pic3 like '%".$_GET[search]."%'";
   $query = $query." or txt like '%".$_GET[search]."%'"; 
   

   
//------------------------------
$link = mysql_connect('mysql1.000webhost.com', 'a1534306_22r', 'dodor22r');
if ( ! $link ) 
  die( "Couldn't connect to MySQL" );
$database = "a1534306_db";
mysql_select_db($database) or die( "Couldnt open $database" );
$result = mysql_query($query) or die('Query failed: ' . mysql_error());

$col_num=mysql_num_fields ($result);

echo "<br /><br /><table   border=0>\n";

while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
{
	

    echo "<tr>";
    echo"<td><a href='".$line['link1']."'><img src='".$line['pic1'].".jpg' width='198' hight='198' /></a></td>";	
	echo"<td><a href='".$line['link2']."'><img src='".$line['pic2'].".jpg' width='198' hight='198' /></a></td>";	
    echo"<td><a href='".$line['link3']."'><img src='".$line['pic3'].".jpg' width='198' hight='198' /></a></td>";
	echo"<td width='220'>&nbsp;</td>";
	echo "<td><a href='".$line['txtlink']."'>".$line['txt']."</a></td>";
	
	echo "</tr>";
	
	}
echo "</table>";
	


mysql_free_result($result);

mysql_close($link);
}
//------------------------------------------------------------------------------------------------------
echo "</body>";
echo "</html>";
?>
