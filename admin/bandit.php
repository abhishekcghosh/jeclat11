<?php
	if (!isset($_SERVER['PHP_AUTH_USER']))
	{
		header('WWW-Authenticate: Basic realm="Jeclat 11 Irina"');
   		header('HTTP/1.0 401 Unauthorized');
   		echo "<code><span style='color: #DD0000'>ACCESS DENIED.</span></code>";
   		exit();
	}
	else
	{
		if($_SERVER['PHP_AUTH_USER']!="admin" || $_SERVER['PHP_AUTH_PW']!="PASSWORD_HERE") { echo "<code><span style='color: #DD0000'>WRONG CREDENTIALS. ACCESS DENIED.</span></code>"; exit(); }
  	}
	
	echo "<h1>Admin Panel - Jeclat '11 IRINA: Band-It Registration Data</h1>";
	require_once('../jclt-config.php');
	require_once('../jclt-sql-connect.php');
	$tbl_name=__SQL_TABLE_PREFIX__ . "bandit";	
	$sqlq="SELECT * FROM $tbl_name ORDER BY rid";
	$query=mysql_query($sqlq);
	$printed=0;
	while($arr=mysql_fetch_array($query))
	{
		echo "<table border='1' cellpadding='6' celllspacing='0' width='100%' style='font-family: Verdana; font-size: 12px; color: #000000; border: medium solid #666666;'>";
		echo "<tr><td width='200px' align='left' valign='top'><b>Registration #</b></td><td align='left' valign='top'>" . $arr['rid'] . "</td></tr>";
		echo "<tr><td width='200px' align='left' valign='top'><b>Band Name</b></td><td align='left' valign='top'>" . $arr['bandname'] . "</td></tr>";
		echo "<tr><td width='200px' align='left' valign='top'><b>Place From</b></td><td align='left' valign='top'>" . $arr['placefrom'] . "</td></tr>";
		echo "<tr><td width='200px' align='left' valign='top'><b>Number of Members</b></td><td align='left' valign='top'>" . $arr['numberofmembers'] . "</td></tr>";
		echo "<tr><td width='200px' align='left' valign='top'><b>Band Representative's Name</b></td><td align='left' valign='top'>" . $arr['representative'] . "</td></tr>";
		echo "<tr><td width='200px' align='left' valign='top'><b>Contact</b></td><td align='left' valign='top'>" . $arr['contact'] . "</td></tr>";
		echo "</table>";
		echo "<br /><br />";
		$printed=1;
	}
	if($printed==0) { echo "No Registrations"; }
	
?>