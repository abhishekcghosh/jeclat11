<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
	<tr>
    	<td class="text-content-heading">
        	Alumni
        </td>
    </tr>
    <tr>
    	<td colspan="2">&nbsp;</td>
    </tr>
    <tr>
    	<td width="140px" align="left" class="text-normal" valign="top">
			<span class="text-sub-heading">Year of Passing</span><ul>
			<?php 
				require_once('jclt-config.php');
				require_once('jclt-sql-connect.php');
				$ref_message='';
				if(isset($_GET['ref']))
				{
					switch (strtolower(addslashes(strip_tags($_GET['ref']))))
					{
						case 'sqlerror':
							$ref_message='Alumni entry unsuccessful due to technical failure. Sorry for the inconvinience. Please try again later.';
						break;
						case 'incomplete':
							$ref_message='One or more fields entry. Please provide all the necessary details.';
						break;
						case 'invalidemailid':
							$ref_message='The email address you provided is invalid. Please provide a valid email address.';
						break;
						default:
					}
				}
				$tbl_name=__SQL_TABLE_PREFIX__ . "alumni";
				$sql_query="SELECT DISTINCT(yearofpassout) FROM $tbl_name ORDER BY yearofpassout DESC";
				$query_result=mysql_query($sql_query);
				$yearpresent=0;
				while($row=mysql_fetch_array($query_result))
				{
					$year=$row['yearofpassout'];
					$sql_query2="SELECT COUNT(*) AS cnt FROM $tbl_name WHERE yearofpassout='$year'";
					$query_result2=mysql_query($sql_query2);
					$row2=mysql_fetch_array($query_result2);
					echo '<li><a href="?y=' . $year . '" class="text-body-link"><b>' . $year . '</b> (' . $row2['cnt']. ')</a></li>';
					$yearpresent=1;
				}
			?>
            </ul>
            <?php
				$sql_query2="SELECT COUNT(*) AS cnt FROM $tbl_name";
				$query_result2=mysql_query($sql_query2);
				$row2=mysql_fetch_array($query_result2);
				echo '<b>Registered: </b>' . $row2['cnt']; 
			?>
        </td>
        <td align="left" class="text-normal" valign="top">
        	<?php 
				if(isset($_GET['y']))
				{
					$year=addslashes(strip_tags($_GET['y']));
					echo '<span class="text-sub-heading">From the ' . $year . ' Batch</span> <a id="pfv_link" href="jclt-alumni-pfv.php?y=' . $year . '" target="_blank" class="text-body-link"> - Click for a printer-friendly version</a><br /><br />';
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
						echo '<br /><b>' . $yearofpassout . '</b> Batch (<b>' . $department . '</b>)<br /><span style="color: #666666">Presently working in: </span><b>' . $company . '</b><br /><span style="color: #666666">Contact Address: </span>' . $address . '<br /><span style="color: #666666">Phone #: </span>' . $phone . '<br /><span style="color: #666666">Email ID: </span>' . $emailid . '<br /><span style="color: #666666">Attending: </span>' . $attendingstatus . '<br /></td></tr>';
						echo '</table>';
						$printed=1;
					}
					if($printed==0) { echo 'No alumni entries from the ' . $year . ' batch yet.'; echo '<style> #pfv_link { display: none; } </style>'; }
				}
				else
				{
					echo '<p class="text-normal" align="justify">A college\'s name and success is not only set by its infrastructure and faculty. The root of its success lies in the bondage and relation among students and alumni. This Golden Jubilee not only promises to be the greatest ever on the part of celebration but also focusses on strengthening and developing relations among alumni and students so that <b>JGEC</b> can reach new heights. Please register yourself and take the first step towards it. Thank you for your kind support.</p>';
					if($yearpresent==1) { echo '<p class="text-normal" align="justify">Just click on the year of passing and you can watch your batchmates attending <b>Jeclat \'11 Irina</b>.</p>'; }
					echo '<p class="text-normal" align="justify">For those who are attending Jeclat \'11 Irina, <a class="text-body-link" href="downloads/hotels.pdf"><u>here</u></a> is a list of Hotels for accomodation in and around the town.</p>';
					echo '<p class="text-normal" align="justify">If you want to contribute, please do so to the following:<br/><b>SBI Account:</b> 31295173475<br/><b>Account Holder\'s Name:</b> Jeclat \'11 Committee<br/><b>IFSC Code:</b> SBIN0007194<br/><b>Branch:</b> Danguajhar</p>';
				}
				if($ref_message!="")
				{
					echo '<table style="color: #990000; z-index: 1000; background: #FFBBAA; position: absolute; top: 10px; left: 10px; border: medium solid #990000" cellpadding="2" cellspacing="2">';
					echo '<tr><td align="center"><b>Alumni Record entry Error:</b> '. $ref_message . ' | <a href="?"><b>Close</b></a></td></tr></table>';
				}
				mysql_close($con);
			?>
            <hr noshade="noshade" color="#666666" width="100%" size="1px" />
            <form method="post" action="jclt-alumni-backend.php">
            <table border="0" cellpadding="2" cellspacing="2" width="100%">
            	<tr valign="top"><td colspan="2"><b>Please let us know</b></td></tr>
                <tr valign="top"><td width="130px">Your Name</td><td><input class="form-items" type="text" name="name" maxlength="256" style="width: 400px" /></td></tr>
                <tr valign="top"><td>College Nickname</td><td><input class="form-items" type="text" name="collegenick" maxlength="128" style="width: 200px" />&nbsp;<span style="font-size: 10px; color: #666666">(Optional. If you want to give.)</td></tr>
                <tr valign="top"><td>Year of Passing</td><td><select name="year" class="form-items"><?php for($y=2010;$y>=1966;$y--) { echo '<option>' . $y . '</option>'; } ?></select></td></tr>
                <tr valign="top"><td>Department</td><td><select name="department" class="form-items"><option>CE</option><option>CSE</option><option>ECE</option><option>EE</option><option>IT</option><option>ME</option></select></td></tr>
                <tr valign="top"><td>Presently working in</td><td><input class="form-items" type="text" name="company" maxlength="256" style="width: 400px" /></td></tr>
                <tr valign="top"><td>Contact Address</td><td><textarea class="form-items" name="address" style="width: 400px; height: 60px"></textarea>&nbsp;<span style="font-size: 10px; color: #666666">(Only 1024 characters will be taken)</span></td></tr>
                <tr valign="top"><td>Phone #</td><td><input class="form-items" type="text" name="phone" maxlength="15" style="width: 400px" /></td></tr>
                <tr valign="top"><td>Email ID</td><td><input class="form-items" type="text" name="emailid" maxlength="256" style="width: 400px" /></td></tr>
                <tr valign="top"><td>I am attending Irina</td><td><select name="attendingstatus" class="form-items"><option>Yes</option><option>No</option><option>Maybe</option></select></td></tr>
                <tr valign="top"><td>&nbsp;</td><td><input class="form-items-submit" type="submit" name="submit" value="Let us know" />&nbsp;<input class="form-items-submit" type="reset" name="submit" value="Clear" /></td></tr>
            </table>
            </form>
        </td>
    </tr>
</table>
