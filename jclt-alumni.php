<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
        require_once('jclt-head-tag.php');
    ?>
<title>Jeclat '11 IRINA | Alumni</title>
</head>

<body>
</body>
	<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%" class="tbl-body-main">
    	<tr align="center">
        	<td>
            	<table border="0" cellpadding="0" cellspacing="0" width="940px" height="100%">
                	<tr align="left" height="10px">
                    	<td></td>
                    </tr>
                    <tr align="left">
                    	<td>
                            <?php require_once('jclt-page-top-logo.php'); ?>
                        </td>
                    </tr>
                    <tr>
                    	<td height="10px"></td>
                    </tr>
                    <tr align="left">
                    	<td>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
                                <tr>
                                    <td class="td-corner-lt"></td>
                                    <td class="td-border-t"></td>
                                    <td class="td-corner-rt"></td>
                                </tr>
                                <tr>
                                    <td class="td-border-l"></td>
                                    <td class="td-border-c">
                                    	<table class="text-normal" border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
                                        	<tr>
                                            	<td>
                                                	<?php require_once('jclt-page-main-menu.php'); ?>
                                                    <style> #mainmenu_alumni { color:#FFBBAA; font-weight: 700; } </style>
                                          		</td>
                                          	</tr>
                                            <tr>
                                            	<td height="10px"></td>
                                          	</tr>
                                        </table>
                                    </td>
                                    <td class="td-border-r"></td>
                                </tr>
                                <tr>
                                	<td class="td-partition-l"></td>
                                    <td class="td-partition-c"></td>
                                    <td class="td-partition-r"></td>
                                </tr>
                                <tr>
                                    <td class="td-border-l"></td>
                                    <td class="td-border-c">
                                    	<table class="text-normal" border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
                                        	 <tr>
                                            	<td height="10px"></td>
                                          	</tr>
                                            <tr>
                                            	<td>
                                                	<span id="span_location_text">
                                                    	<a class="locator-link" href="jclt-navigator.php">Navigator</a> 
                                                        &middot; 
                                                        <a class="locator-link" href="?">Alumni</a>
                                                        <?php if(isset($_GET['y'])) { $y=addslashes(strip_tags($_GET['y'])); echo '&middot;&nbsp;<a class="locator-link" href="?y=' . $y . '">' . $y . '</a>'; } ?>
                                                    </span>
                                          		</td>
                                          	</tr>
                                        </table>
                                    </td>
                                    <td class="td-border-r"></td>
                                </tr>
                                <tr>
                                    <td class="td-corner-lb"></td>
                                    <td class="td-border-b"></td>
                                    <td class="td-corner-rb"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr align="left">
                    	<td>
                        	<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
                                <tr>
                                    <td class="td-corner-lt"></td>
                                    <td class="td-border-t"></td>
                                    <td class="td-corner-rt"></td>
                                </tr>
                                <tr>
                                    <td class="td-border-l"></td>
                                    <td class="td-border-c">
                                    	<table class="text-normal" border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
                                        	<tr>
                                            	<td>
                                                	<?php require_once('jclt-page-content-alumni.php'); ?>
                                          		</td>
                                          	</tr>
                                        </table>
                                    </td>
                                    <td class="td-border-r"></td>
                                </tr>
                                <tr>
                                    <td class="td-corner-lb"></td>
                                    <td class="td-border-b"></td>
                                    <td class="td-corner-rb"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                                        <tr align="left">
                    	<td>
                        	<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
                                <tr>
                                    <td class="td-corner-lt"></td>
                                    <td class="td-border-t"></td>
                                    <td class="td-corner-rt"></td>
                                </tr>
                                <tr>
                                    <td class="td-border-l"></td>
                                    <td class="td-border-c">
                                    	<table class="text-normal" border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
                                        	<tr>
                                            	<td>
                                                	<?php require_once('jclt-page-content-footer.php'); ?>
                                          		</td>
                                          	</tr>
                                        </table>
                                    </td>
                                    <td class="td-border-r"></td>
                                </tr>
                                <tr>
                                    <td class="td-corner-lb"></td>
                                    <td class="td-border-b"></td>
                                    <td class="td-corner-rb"></td>
                                </tr>
                            </table>
                       </td>
                    </tr>
                    <tr align="left">
                    	<td>
                        	<?php require_once('jclt-page-bottom-most.php'); ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</html>