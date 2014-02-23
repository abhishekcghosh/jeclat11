<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
	<tr>
    	<td class="text-content-heading">
        	Feedback
        </td>
    </tr>
    <tr>
    	<td align="left" class="text-normal">
        	<br />
			<?php
				require_once('jclt-config.php');
				require_once('jclt-sql-connect.php');
				require_once('jclt-date-func.php');
				$ref_message='';
				if(isset($_GET['ref']))
				{
					switch (strtolower(addslashes(strip_tags($_GET['ref']))))
					{
						case 'sqlerror':
							$ref_message='Feedback entry unsuccessful due to technical failure. Sorry for the inconvinience. Please try again later.';
						break;
						case 'incomplete':
							$ref_message='Name or Message empty. Please provide the necessary details.';
						break;
						case 'invalidemailid':
							$ref_message='The email address you provided is invalid. Please provide a valid email address.';
						break;
						default:
					}
				}
				$pagecount=1;
				if(isset($_GET['p'])) { $pagecount=addslashes(strip_tags($_GET['p'])); }
				$limit=10*($pagecount-1);
				$tbl_name=__SQL_TABLE_PREFIX__ . "feedback";
				$sql_query="SELECT * FROM $tbl_name ORDER BY fid DESC LIMIT $limit,10";
				$query_result=mysql_query($sql_query);
				$printed=0;
				while($row=mysql_fetch_array($query_result))
				{
					$fid=stripslashes($row['fid']);
					$name=stripslashes($row['name']);
					$emailid=stripslashes($row['emailid']);
					$timestamp=stripslashes($row['timestamp']);
					$message=stripslashes($row['message']);
					echo '<table border="0" cellpadding="2" cellspacing="2" width="100%">';
					echo '<tr><td><span style="font-size:10px; color: #666666; font-style: italic;">' . date_ip_to_op($timestamp) . '</span><br /><b>' . $name . '</b><span style="font-style: italic"> says:</span> ' . $message . '</td></tr>';
					echo '</table>';
					$printed=1;
				}
				if($printed==0) { echo 'No more feedback.'; }
				$pagecount++;
				$limit=10*($pagecount-1);
				$tbl_name=__SQL_TABLE_PREFIX__ . "feedback";
				$sql_query="SELECT * FROM $tbl_name ORDER BY fid DESC LIMIT $limit,10";
				$query_result=mysql_query($sql_query);
				$printed=0;
				while(($row=mysql_fetch_array($query_result))) { $printed=1; }
				mysql_close($con);
				if($printed==1) { echo '<br/><a class="text-body-link" style="font-size: 10px; font-style: italic" href="?p=' . $pagecount . '" >See more &raquo;</a><br/><br />'; }
				if($ref_message!="")
				{
					echo '<table style="color: #990000; z-index: 1000; background: #FFBBAA; position: absolute; top: 10px; left: 10px; border: medium solid #990000" cellpadding="2" cellspacing="2">';
					echo '<tr><td align="center"><b>Feedback entry Error:</b> '. $ref_message . ' | <a href="?"><b>Close</b></a></td></tr></table>';
				}
			?>
        </td>
    </tr>
    <tr>
    	<td align="left">
        	<hr noshade="noshade" color="#666666" width="100%" size="1px" />
            <form method="post" action="jclt-feedback-backend.php">
            <table border="0" cellpadding="2" cellspacing="2" width="100%">
            	<tr valign="top"><td colspan="2"><b>Want to say something?</b></td></tr>
                <tr valign="top"><td width="80px">Your Name</td><td><input class="form-items" type="text" name="uname" maxlength="128" style="width: 400px" /></td></tr>
                <tr valign="top"><td>Email ID</td><td><input class="form-items" type="text" name="uemailid" maxlength="256" style="width: 400px" />&nbsp;<span style="font-size: 10px; color: #666666">(Optional, will not be displayed publicly)</span></td></tr>
                <tr valign="top"><td>Message</td><td><textarea class="form-items" name="umsg" style="width: 400px; height: 60px"></textarea>&nbsp;<span style="font-size: 10px; color: #666666">(Only 1024 characters will be taken)</span></td></tr>
                <tr valign="top"><td>&nbsp;</td><td><input class="form-items-submit" type="submit" name="submit" value="Post my feedback" /></td></tr>
            </table>
            </form>
        </td>
    </tr>
</table>
