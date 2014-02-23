<?php require_once('jclt-config.php'); ?>
<?php require_once('jclt-sql-connect.php'); ?>
<?php
	$dateofentry=date(__DATE_FORMAT_IP__);
	$author=addslashes(strip_tags(trim($_POST['author'])));
	$content=addslashes(strip_tags(trim($_POST['content'])));
	$flag_incomplete=0;
	$flag_sqlfail=0;
	$flag_emailid=0;
	if($author=='' || $content=='')
	{
		$flag_incomplete=1;
		$err_occured=1;
	}
	if($err_occured!=1)
	{
		$tbl_name=__SQL_TABLE_PREFIX__ . "forum";
		//get max thid
		$sql_query="SELECT MAX(thid) AS maxthid FROM $tbl_name";
		$query_result=mysql_query($sql_query);
		$row_maxthid=mysql_fetch_array($query_result);
		$thisthid=$row_maxthid['maxthid']+1;
		$sql_query="INSERT INTO $tbl_name(thid,level,dateofentry,author,content,editlocked) VALUES('$thisthid','1','$dateofentry','$author','$content','0')";
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
		$err_string='location: jclt-forum.php?ref=';
		if($flag_sqlfail==1 || $flag_confail==1)
		{
			$err_string=$err_string . 'sqlerror';
		}
		else if($flag_incomplete==1)
		{
			$err_string=$err_string . 'incomplete';
		}
	}
	else
	{
		$err_string='location: jclt-forum.php';
	}
	header($err_string);
?>
