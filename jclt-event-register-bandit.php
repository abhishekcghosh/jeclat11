<?php require_once('jclt-config.php'); ?>
<?php require_once('jclt-sql-connect.php'); ?>
<?php
	$bandname=addslashes(strip_tags(trim($_POST['bandname'])));
	$placefrom=addslashes(strip_tags(trim($_POST['placefrom'])));
	$numberofmembers=addslashes(strip_tags(trim($_POST['members'])));
	$representative=addslashes(strip_tags(trim($_POST['representativename']))); 
	$contact=addslashes(strip_tags(trim($_POST['contact'])));
	$flag_incomplete=0;
	$flag_sqlfail=0;
	$flag_emailid=0;
	if($bandname=='' || $placefrom=='' || $numberofmembers=='' || $representative=='' || $contact=='')
	{
		$flag_incomplete=1;
		$err_occured=1;
	}
	if($err_occured!=1)
	{
		$tbl_name=__SQL_TABLE_PREFIX__ . "bandit";
		$sql_query="INSERT INTO $tbl_name(bandname,placefrom,numberofmembers,representative,contact) VALUES('$bandname','$placefrom','$numberofmembers','$representative','$contact')";
		$query_result=mysql_query($sql_query);
		if(!$query_result)
		{
			$flag_sqlfail=1;
			$err_occured=1;
		}
	}
	mysql_close($con);
	if($err_occured==1)
	{
		$err_string='location: jclt-events.php?ref=';
		if($flag_sqlfail==1 || $flag_confail==1)
		{
			$err_string=$err_string . 'banditsqlerror';
		}
		else if($flag_incomplete==1)
		{
			$err_string=$err_string . 'banditincomplete';
		}
	}
	else
	{
		$err_string='location: jclt-events.php?ref=banditsuccess';
	}
	header($err_string);
?>
