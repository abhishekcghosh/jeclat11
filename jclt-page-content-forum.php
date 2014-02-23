<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
	<tr>
    	<td class="text-content-heading">
        	Forum
        </td>
    </tr>
    <tr>
    	<td align="left">
        	<br />
            <?php
				require_once('jclt-date-func.php');
				require_once('jclt-sql-connect.php');
				$flag_sqlfail=0;
				$ref_message='';
				if(isset($_GET['ref']))
				{
					switch (strtolower(addslashes(strip_tags($_GET['ref']))))
					{
						case 'sqlerror':
							$ref_message='Forum entry unsuccessful due to technical failure. Sorry for the inconvinience. Please try again later.';
						break;
						case 'incomplete':
							$ref_message='Name or Message empty. Please provide the necessary details.';
						break;
						default:
					}
				}
				//GET MESSAGES
				$tbl_name=__SQL_TABLE_PREFIX__ . "forum";
				if(!isset($_GET['thid']))
				{
					$sql_query="SELECT * FROM $tbl_name WHERE level=1 ORDER BY dateofentry";
					$query_result=mysql_query($sql_query);
					if(!$query_result)
					{
						$flag_sqlfail=1;
						$err_occured=1;
					}
					$printed=0;
					while($row=mysql_fetch_array($query_result))
					{
						$pid=stripslashes($row['pid']);
						$thid=stripslashes($row['thid']);
						$dateofentry=stripslashes($row['dateofentry']);
						$level=stripslashes($row['level']);
						$author=stripslashes($row['author']);
						$content=stripslashes($row['content']);
						$editlocked=stripslashes($row['editlocked']);
						echo '<table border="0" cellpadding="2" cellspacing="2" width="100%">';
						echo '<tr><td><span style="font-size:10px; color: #666666; font-style: italic;">' . date_ip_to_op($dateofentry) . '</span><br /><b>' . $content . '</b><br /><span style="color: #666666;">Started by </span>' . $author . '<br /><a href="?thid=' . $thid . '" class="text-body-link">View discussion</a><br /><br /></td></tr>';
						echo '</table>';
						$printed=1;
					}
					if($printed==0) { echo 'No discussion threads available.'; }
					?>
                    <hr noshade="noshade" color="#666666" width="100%" size="1px" />
                    <form method="post" action="jclt-forum-ctb.php">
                    <table border="0" cellpadding="2" cellspacing="2" width="100%">
                        <tr valign="top"><td colspan="2"><b>Start a discussion thread</b></td></tr>
                        <tr valign="top"><td width="80px">Your Name</td><td><input class="form-items" type="text" name="author" maxlength="128" style="width: 400px" /></td></tr>
                        <tr valign="top"><td>Topic</td><td><textarea class="form-items" name="content" style="width: 400px; height: 100px"></textarea></td></tr>
                        <tr valign="top"><td>&nbsp;</td><td><input class="form-items-submit" type="submit" name="submit" value="Start discussion thread" /></td></tr>
                    </table>
                    </form>
                    <?php
				}
				else
				{
					$linkthid=addslashes(strip_tags($_GET['thid']));
					$sql_query="SELECT * FROM $tbl_name WHERE thid='$linkthid' ORDER BY dateofentry";
					$query_result=mysql_query($sql_query);
					if(!$query_result)
					{
						$flag_sqlfail=1;
						$err_occured=1;
					}
					$printed=0;
					while($row=mysql_fetch_array($query_result))
					{
						$pid=stripslashes($row['pid']);
						$thid=stripslashes($row['thid']);
						$dateofentry=stripslashes($row['dateofentry']);
						$level=stripslashes($row['level']);
						$author=stripslashes($row['author']);
						$content=stripslashes($row['content']);
						$editlocked=stripslashes($row['editlocked']);
						echo '<table border="0" cellpadding="2" cellspacing="2" width="100%">';
						if($level==1)
						{
							echo '<tr><td><span style="font-size:10px; color: #666666; font-style: italic;">' . date_ip_to_op($dateofentry) . '</span><br /><b>' . $content . '</b><br /><span style="color: #666666;">Discussion started by </span>' . $author . '<br /><br /></td></tr>';
						}
						else
						{
							echo '<tr><td><span style="font-size:10px; color: #666666; font-style: italic;">' . date_ip_to_op($dateofentry) . '</span><br />' . $content . '<br /><span style="color: #666666;">Posted by </span>' . $author . '<br /><br /></td></tr>';
						}
						echo '</table>';
						$printed=1;
					}
					if($printed==0) { echo 'No posts available.'; }
					?>
					<hr noshade="noshade" color="#666666" width="100%" size="1px" />
					<form method="post" action="jclt-forum-pb.php">
					<table border="0" cellpadding="2" cellspacing="2" width="100%">
						<tr valign="top"><td colspan="2"><b>Want to say something?</b></td></tr>
						<tr valign="top"><td width="80px">Your Name</td><td><input class="form-items" type="text" name="author" maxlength="128" style="width: 400px" /></td></tr>
						<tr valign="top"><td>Message</td><td><textarea class="form-items" name="content" style="width: 400px; height: 100px"></textarea></td></tr>
						<tr valign="top"><td>&nbsp;</td><td><input class="form-items-submit" type="submit" name="submit" value="Post my opinion" /><input type="hidden" name="hthid" value="<?php echo $linkthid; ?>" /></td></tr>
					</table>
					</form>
					<?php	
				}
				if($ref_message!="")
				{
					echo '<table style="color: #990000; z-index: 1000; background: #FFBBAA; position: absolute; top: 10px; left: 10px; border: medium solid #990000" cellpadding="2" cellspacing="2">';
					$linkpiece='';
					if(isset($_GET['thid'])) { $linkpiece='thid=' . addslashes(strip_tags($_GET['thid'])); }
					echo '<tr><td align="center"><b>Forum entry Error:</b> '. $ref_message . ' | <a href="?' . $linkpiece . '"><b>Close</b></a></td></tr></table>';
				}
			?>
        </td>
    </tr>
</table>
