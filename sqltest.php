<?php
if ($_GET['id']==null){$id=$_POST['id'];}
else {$id=$_GET['id'];}
$con = mysql_connect("localhost","root","root");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db("dvwa", $con);
$query = "SELECT first_name,last_name FROM users WHERE user_id = '$id'; ";
$result = mysql_query($query)or die('<pre>'.mysql_error().'</pre>');
while($row = mysql_fetch_array($result))
{
 echo $row['0'] . "&nbsp" . $row['1'];
 echo "<br />";
}
echo "<br/>";
echo $query;
mysql_close($con);
?>