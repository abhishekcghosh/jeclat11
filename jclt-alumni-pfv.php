<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	require_once('jclt-config.php');
	require_once('jclt-sql-connect.php');
	if(isset($_GET['y'])) 
	{ $year=addslashes(strip_tags($_GET['y'])); } 
	else 
	{ echo '<code><span STYLE="color: #990000;">SCRIPT TERMINATED DUE TO INSUFFICIENT PARAMETERS!</span></code>'; exit(); }
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Printer-friendly Alumni list - <?php echo $year; ?> Batch</title>
<style>
	.printedstyle {
		font-family: Verdana, Arial, Helvetica, sans-serif;
		font-size: 12px;
		color: #000000;
		text-decoration: none;
		line-height: 150%;
	}
</style>
</head>
<body class="printedstyle">
<?php
	echo '<b>List of Registered Alumni - ' . $year . ' Batch</b><br /> As on ' . date(__DATE_FORMAT_OP__) . '<br /><br />';
	$tbl_name=__SQL_TABLE_PREFIX__ . "alumni";
	$sql_query="SELECT * FROM $tbl_name WHERE yearofpassout='$year'";
	$query_result=mysql_query($sql_query);
	$printed=0;
	while($row=mysql_fetch_array($query_result))
	{
		$aid=stripslashes($row['aid']);
		$name=stripslashes($row['name']);
		$collegenick=stripslashes($row['collegenick']);
		$yearofpassout=stripslashes($row['yearofpassout']);
		$department=stripslashes($row['department']);
		$company=stripslashes($row['company']);
		$address=stripslashes($row['address']);
		$phone=stripslashes($row['phone']);
		$emailid=stripslashes($row['emailid']);
		$attendingstatus=stripslashes($row['attendingstatus']);
		echo '<table border="0" cellpadding="2" cellspacing="2" width="100%">';
		echo '<tr><td><b>' . $name . '</b>'; 
		if($collegenick!="") { echo ' a.k.a. <b>"' . $collegenick . '"</b>'; }
		echo '<br /><b>' . $yearofpassout . '</b> Batch (<b>' . $department . '</b>)<br /><span style="color: #000000">Presently working in: </span><b>' . $company . '</b><br /><span style="color: #000000">Contact Address: </span><b>' . $address . '</b><br /><span style="color: #000000">Phone #: </span><b>' . $phone . '</b><br /><span style="color: #000000">Email ID: </span><b>' . $emailid . '</b><br /><span style="color: #000000">Attending Jeclat \'11 Irina: </span><b>' . $attendingstatus . '</b><br /><br /></td></tr>';
		echo '</table>';
		$printed=1;
	}
	mysql_close($con);
	if($printed==0) { echo 'No alumni entries from the ' . $year . ' batch yet.'; }
?>
</body>
</html>
