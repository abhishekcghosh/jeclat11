<?php require_once('jclt-config.php'); ?>
<?php require_once('jclt-sql-connect.php'); ?>
<?php
	$dateofentry=date(__DATE_FORMAT_IP__);
	$name=addslashes(strip_tags(trim($_POST['uname'])));
	$emailid=addslashes(strip_tags(trim($_POST['uemailid'])));
	$message=addslashes(strip_tags(trim($_POST['umsg']))); 
	$flag_incomplete=0;
	$flag_sqlfail=0;
	$flag_emailid=0;
	if($name=='' || $message=='')
	{
		$flag_incomplete=1;
		$err_occured=1;
	}
	if ($emailid!="" && !filter_var($emailid, FILTER_VALIDATE_EMAIL))
	{
		$flag_emailid=1;
		$err_occured=1;
	}
	if($err_occured!=1)
	{
		$tbl_name=__SQL_TABLE_PREFIX__ . "feedback";
		$sql_query="INSERT INTO $tbl_name(name,emailid,timestamp,message) VALUES('$name','$emailid','$dateofentry','$message')";
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
		$err_string='location: jclt-feedback.php?ref=';
		if($flag_sqlfail==1 || $flag_confail==1)
		{
			$err_string=$err_string . 'sqlerror';
		}
		else if($flag_incomplete==1)
		{
			$err_string=$err_string . 'incomplete';
		}
		else if($flag_emailid==1)
		{
			$err_string=$err_string . 'invalidemailid';
		}
	}
	else
	{
		$err_string='location: jclt-feedback.php';
	}
	header($err_string);
?>
