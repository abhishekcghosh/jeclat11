<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
        require_once('jclt-head-tag.php');
    ?>
    <script language="javascript" type="text/javascript" src="scripts/jclt-events-menu.js"></script>
    <script language="javascript" type="text/javascript" src="scripts/jclt-events-content.js"></script>
    <script language="javascript" type="text/javascript">
		var last_displayed_content="";
	</script>
	<style type="text/css">
        .clear {
            clear:both;
        }
        #slidedown_menu{
            font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px;
        }
        #slidedown_menu li{
            list-style-type:none;
            position:relative;
        }
        #slidedown_menu ul{
            margin:0px;
            padding:0px;
            position:relative;
        }
        #slidedown_menu div{
            margin:0px;
            padding:0px;
        }
        /* 	Layout CSS */
        #slidedown_menu{		
            visibility:hidden;
        }
        /* All A tags - i.e menu items. */
        #slidedown_menu a{
            color: #000;
            text-decoration:none;	
            display:block;
            clear:both;
            padding-left:2px;	
        }
        /*
        A tags 
        */
        #slidedown_menu .slMenuItem_depth1{	/* Main menu items */
            font-weight:bold; font-size: 12px;
            color: #ffffdd;
            margin: 2px;
        }	
        #slidedown_menu .slMenuItem_depth2{	/* Sub menu items */
            color: #ffffdd;
            font-weight: 700;
            margin: 2px;
        }	
        #slidedown_menu .slMenuItem_depth3{	/* Sub menu items */
            color: #ffffdd;
            margin: 2px;
        }	
        #slidedown_menu .slMenuItem_depth4{	/* Sub menu items */
        }	
        #slidedown_menu .slMenuItem_depth5{	/* Sub menu items */
        }
        /* UL tags, i.e group of menu utems. 
        It's important to add style to the UL if you're specifying margins. If not, assign the style directly
        to the parent DIV, i.e. 
        #slidedown_menu .slideMenuDiv1
        instead of 
        #slidedown_menu .slideMenuDiv1 ul
        */
        #slidedown_menu .slideMenuDiv1 ul{
            padding:1px;
        }
        #slidedown_menu .slideMenuDiv2 ul{
            margin-left:5px;
            padding:1px;
        }
        #slidedown_menu .slideMenuDiv3 ul{
            margin-left:10px;
            padding:1px;
        }
        #slidedown_menu .slMenuItem_depth4 ul{
            margin-left:15px;
            padding:1px;
        }
        /* content styles*/
        .div-event-content {
            display: none;
            opacity: 0;
        }
        .div-event-header {
            font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: 700; color: #ffffdd;
        }
        .div-event-header-light {
            font-family: "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: 700; color: #ffffdd;
        }
        .div-event-header-brown {
            font-family: "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: 700; color: #ffffdd;
        }
        .div-event-details {
            font-family: "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #ffffdd;
        }
        
    </style>
<title>Jeclat '11 IRINA | Events</title>
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
                                                    <style> #mainmenu_events { color:#FFBBAA; font-weight: 700; } </style>
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
                                                        <a class="locator-link" href="?">Events</a>
                                                        <span id="span_event_in_navigator"></span>
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
                                                	<?php require_once('jclt-page-content-events.php'); ?>
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