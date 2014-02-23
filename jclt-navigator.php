<?php
	require_once('jclt-config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
        require_once('jclt-head-tag.php');
    ?>
<title>50th year Annual Cultural Fest | JGEC</title>
<script src="scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script src="scripts/countdown.js" type="text/javascript"></script>
</head>
<body onload="countDown()">
    <table style="position: absolute; top: 170px; z-index: 100;" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td style="text-align: center">
                <script type="text/javascript">
                    AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','570','height','370','src','carousel-icons','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','wmode','transparent','movie','carousel-icons' ); //end AC code
                </script>
                <noscript>
                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="570" height="370">
                        <param name="movie" value="carousel-icons.swf" />
                        <param name="quality" value="high" />
                        <param name="wmode" value="transparent" />
                        <embed src="carousel-icons.swf" width="570" height="370" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" wmode="transparent"></embed>
                    </object>
               </noscript>
            </td>
        </tr>
    </table>
    <table style="position: absolute; top: 35px; z-index: 110;" border="0" cellpadding="0" cellpadding="0" width="100%">
        <tr>
            <td style="text-align: center">
                <img src="style/logo-rg.png" height="300" width="550" />
            </td>
        </tr>
        <tr>
    </table>
    <table style="position: absolute; top: 0px; z-index: 90;" border="0" cellpadding="0" cellpadding="0" width="100%">
        <tr>
            <td style="text-align: left">
                <img src="style/college-presents.png" width="581" height="76" />
			</td>
        <tr>
    </table>
    <table style="position: absolute; bottom: 5px; right: 0px; z-index: 120;" border="0" cellpadding="0" cellpadding="0" width="120px">
        <tr height="67px">
        	<td height="67px" style="text-align: right; vertical-align: bottom;">&nbsp;</td>
        	<td height="67px" style="text-align: right; vertical-align: bottom;">
            	<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FJelclat-11-Irina%2F169380439764044&amp;layout=box_count&amp;show_faces=true&amp;width=50&amp;action=like&amp;colorscheme=dark&amp;height=65" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:50px; height:65px;" allowTransparency="true"></iframe>&nbsp;
            </td>
        </tr>
        <tr height="62px">
        	<td height="62px" style="text-align: right; vertical-align: bottom;">
            	<a href="http://www.facebook.com/pages/Jeclat-11-Irina/169380439764044" target="_blank" style="display: inline-block; height: 59px; width: 60px;"><img border="0" src="icons/comic-facebook-light.png" height="59" width="60" onmouseover="this.src='icons/comic-facebook.png'" onmouseout="this.src='icons/comic-facebook-light.png'"/></a>
            </td>
            <td height="62px" style="text-align: right; vertical-align: bottom;">
                <a href="http://www.twitter.com/jeclatIrina" target="_blank"><img border="0" src="icons/comic-twitter-light.png" height="62" width="60" onmouseover="this.src='icons/comic-twitter.png'" onmouseout="this.src='icons/comic-twitter-light.png'"/></a><br />
            </td>
        <tr>
        <tr height="62px">
        	<td height="62px" style="text-align: right; vertical-align: bottom;">
                <a href="http://www.youtube.com/user/jeclatIrina" target="_blank"><img border="0" src="icons/comic-youtube-light.png" height="62" width="60" onmouseover="this.src='icons/comic-youtube.png'" onmouseout="this.src='icons/comic-youtube-light.png'" /></a>
            </td>
            <td height="62px" style="text-align: right; vertical-align: bottom;">
                <a href="http://twitter.com/statuses/user_timeline/230275912.rss"><img border="0" src="icons/comic-rss-light.png" height="60" width="60"  onmouseover="this.src='icons/comic-rss.png'" onmouseout="this.src='icons/comic-rss-light.png'"/></a>
            </td>
        </tr>
    </table>
	<table style="position: absolute; top: 550px; z-index: 84;" border="0" cellpadding="0" cellpadding="0" width="100%">
        <tr>
            <td style="text-align: center">
                <span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12pt; color: #ffffbe; font-weight: 700" id="span-timer"></span>
			</td>
        <tr>
    </table>
    <table style="position: absolute; top: 20px; right: 20px; z-index: 87;" border="0" cellpadding="0" cellpadding="0" width="100%">
        <tr>
            <td style="text-align: right; vertical-align: middle">
				<?php
                    require_once('jclt-sql-connect.php');
                    $tbl_name=__SQL_TABLE_PREFIX__ . "general";
                    $sql_query="SELECT attribvalue FROM $tbl_name WHERE attribname='hitcounterhome'";
                    $query_result=mysql_query($sql_query);
                    $result_row=mysql_fetch_array($query_result);
                    $hits=$result_row['attribvalue']+1;
                    $sql_query="UPDATE $tbl_name SET attribvalue=attribvalue+1 WHERE attribname='hitcounterhome'";
                    $query_result=mysql_query($sql_query);
					$remote_ip=$_SERVER['REMOTE_ADDR'];
					$timestamp=date(__DATE_FORMAT_IP__);
					$tbl_name=__SQL_TABLE_PREFIX__ . "hitsrecord";
					$sql_query="INSERT INTO $tbl_name(hittimestamp,hitip) VALUES('$timestamp','$remote_ip')";
                    $query_result=mysql_query($sql_query);
					mysql_close($con);
                ?>
                <span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12pt; color: #ffffbe; font-weight: 700" id="span-hits"><?php echo $hits; ?></span> 
                <span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12pt; color: #666666; font-weight: 700">Hits</span>
      		</td>
     	</tr>
    </table>
    <table style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; z-index: 70; background:url(style/polaroids.png) repeat" border="0" cellpadding="0" cellpadding="0" width="100%" height="100%">
        <tr>
            <td>
            </td>
        </tr>
        <tr>
    </table>
</body>
</html>
