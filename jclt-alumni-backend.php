<?php require_once('jclt-config.php'); ?>
<?php require_once('jclt-sql-connect.php'); ?>
<?php
	$name=addslashes(strip_tags(trim($_POST['name'])));
	$collegenick=addslashes(strip_tags(trim($_POST['collegenick'])));
	$yearofpassout=addslashes(strip_tags(trim($_POST['year'])));
	$department=addslashes(strip_tags(trim($_POST['department']))); 
	$company=addslashes(strip_tags(trim($_POST['company']))); 
	$address=addslashes(strip_tags(trim($_POST['address']))); 
	$phone=addslashes(strip_tags(trim($_POST['phone']))); 
	$emailid=addslashes(strip_tags(trim($_POST['emailid']))); 
	$attendingstatus=addslashes(strip_tags(trim($_POST['attendingstatus']))); 
	$flag_incomplete=0;
	$flag_sqlfail=0;
	$flag_emailid=0;
	if($name=='' || $yearofpassout=='' || $department=='' || $company=='' || $address=='' || $phone=='' || $emailid=='' )
	{
		$flag_incomplete=1;
		$err_occured=1;
	}
	if (!filter_var($emailid, FILTER_VALIDATE_EMAIL))
	{
		$flag_emailid=1;
		$err_occured=1;
	}
	if($err_occured!=1)
	{
		$tbl_name=__SQL_TABLE_PREFIX__ . "alumni";
		$sql_query="INSERT INTO $tbl_name(name,collegenick,yearofpassout,department,company,address,phone,emailid,attendingstatus) VALUES('$name','$collegenick','$yearofpassout','$department','$company','$address','$phone','$emailid','$attendingstatus')";
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
		$err_string='location: jclt-alumni.php?y=' . $yearofpassout . '&ref=';
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
		$err_string='location: jclt-alumni.php?y=' . $yearofpassout;
	}
	header($err_string);
?>
