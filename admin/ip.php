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
	require_once('../jclt-config.php');
	require_once('../jclt-sql-connect.php');
	$tbl_name=__SQL_TABLE_PREFIX__ . "hitsrecord";
	if(isset($_GET['d']))
	{
		echo "<code>";		
		echo "<a href='?'>Show Detailed</a><br/>";
		$sqlq="SELECT COUNT(DISTINCT(hitip)) AS C FROM $tbl_name";
		$query=mysql_query($sqlq);
		$arr=mysql_fetch_array($query);
		echo "<span style='color: #007900'>DISTINCT IPs: <b>" . $arr['C'] . "</b></span><br/>";
		$sqlq="SELECT DISTINCT(hitip) AS htp FROM $tbl_name";
		$query=mysql_query($sqlq);
		while($arr=mysql_fetch_array($query))
		{
			$thisip=$arr['htp'];
			$sqlq2="SELECT COUNT(*) AS k  FROM $tbl_name WHERE hitip='$thisip'";
			$query2=mysql_query($sqlq2);
			$arr2=mysql_fetch_array($query2);
			echo "<span style='color: #790000'>" . $arr['htp'] . "</span> - <span style='color: #000079'><b>".  $arr2['k'] . "</b> hit(s)</span><br/>";
		}
		echo "</code>";
	}
	else
	{
		echo "<code>";
		echo "<a href='?d'>Show Distinct</a><br/>";
		$sqlq="SELECT COUNT(*) AS C FROM $tbl_name";
		$query=mysql_query($sqlq);
		$arr=mysql_fetch_array($query);
		echo "<span style='color: #007900'><b>DETAILED " . $arr['C'] . " HITS</b></span><br/>";
		$sqlq="SELECT * FROM $tbl_name";
		$query=mysql_query($sqlq);
		while($arr=mysql_fetch_array($query))
		{
			echo $arr['hittimestamp'] . " - <span style='color: #790000'><b>" . $arr['hitip'] . "</b></span><br/>";
		}
		echo "</code>";		 
	}
?>