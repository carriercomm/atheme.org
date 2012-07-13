<?php
	include "sources/title.php";
	$x = $_SERVER['REQUEST_URI'];
	if ($_SERVER['HTTP_HOST'] != "www.atheme.org")
	{
		if ($x == "/")
			header("HTTP/1.1 301 Moved Permanently");
			header("Location: http://www.atheme.org");
		else
			header("HTTP/1.1 301 Moved Permanently");
			header("Location: http://www.atheme.org$x");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Title, Meta -->
	<title>The Atheme Project</title>
    	<meta charset="utf-8" />
	<meta name="author" content="Sam Ferry" />
	<meta name="description" content="An open-source development collective, dedicated to creating powerful libraries and software for end-user benefit through collaboration and sophistication." />
	<meta name="keywords" content="the atheme project, atheme.org, atheme.net, atheme, irc, irc services, charybdis, charybdis-ircd, ircd, irc client, git, confluence, jira, CIA, CIA.vc, revision control, version control, staticbox, staticbox.net, SystemInPlace, nenolod, samferry, william pitcock, sam ferry, audacious, audacious-plugins, audacious media player, NASPRO, atheme-services, atheme-web, atheme irc services, iris, libmowgli, libguess, MCS, libaosd, ShadowIRCd, UnrealIRCd, Debian, Debian Linux, Linux, UNIX, VPS, Xen, freenode" />

	<!-- CSS -->
   	<link rel="stylesheet" href="assets/stylesheets/screen.css" type="text/css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    
    <!-- JavaScript -->
    <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
</head>

<body>	
    <div class="container">
        <header>
            <div class="container">
                <a href="#"><h1>The Atheme Project</h1></a>
            
                <ul id="navigation" class="nav">
                    <li class="first"><a href="#">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Toggle Dropdown">Our Projects</a>
                        <ul id="projects_menu" class="dropdown-menu">
                            <li><a href="http://www.atheme.net" target="_blank">Atheme Services</a></li>
                            <li><a href="http://www.atheme.net/download-atheme-web.php" target="_blank">Atheme-Web</a></li>
                            <li><a href="http://www.atheme.org/project/charybdi">charybdis</a></li>
                            <li><a href="http://github.com/atheme/iris/">iris</a></li>
    			    <li><a href="http://www.atheme.org/project/mowgli">libmowgli</a></li>
			    <li><a href="http://www.atheme.org/project/libguess">libguess</a</li></li>
   		    	    <li><a href="http://www.atheme.org/project/mcs">MCS</a></li>
			    <li><a href="http://www.atheme.org/project/libaosd">libaosd</a></li>

                        </ul>
                    </li>
                     <li><a href="#">Our Stuff</a></li>
                    <li class="last"><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </header>
    	<div id="content">
        	<div class="wrapper">
            	<div class="row">
	            	<?php

			error_reporting(E_ALL);
	
		        if (isset($_GET["p"]))
			{
				if (($_GET["p"] == "projects") && (isset($_GET["sp"])))
			        {
		                        if (file_exists("pages/projects/" . strtolower($_GET["sp"]) . ".php"))
		                        {
		                                include("pages/projects/" . strtolower($_GET["sp"]) . ".php");
		                        }
		                        else
	                        {
		                                $sp = "pages/projects/404.php";
		                                include($sp);
		                        }
		                }
				else
				{
					if (file_exists("pages/" . strtolower($_GET["p"]) . ".php"))
					{
						include("pages/" . strtolower($_GET["p"]) . ".php");
					}
					else
					{
						$page = "pages/404.php";
						include($page);
					}
				}
			}
			else
			{
				$page = "pages/index.php";
				include($page);
			}
			?>
			<div class="row">                
	                <div id="callouts">
	                	<div id="our_projects" class="span3">
	                    	<h4>Our Projects</h4>
                            <ul>
                            	<li><a href="#"><strong>Atheme</strong> <span>IRC Services Package</span></a></li>
                                <li><a href="#"><strong>Charybdis</strong> <span>IRC Daemon</span></a></li>
                                <li><a href="#"><strong>Iris</strong> <span>Web-based IRC Client</span></a></li>
                                <li><a href="#" class="viewmore">View More &raquo;</a></li>
                            </ul>
	                    </div>
	                    <div id="our_stuff" class="span3">
	                    	<h4>Our Stuff</h4>
                            <ul>
                            	<li><a href="#"><strong>GitHub</strong> <span>Check us out.</span></a></li>
                                <li><a href="#"><strong>Bug Tracker</strong> <span>Found an issue?</span></a></li>
                                <li><a href="#"><strong>Wiki</strong> <span>Looking for information?</span></a></li>
                                <li><a href="#"><strong>Web IRC</strong> <span>Talk to us.</span></a></li>
                            </ul>
	                    </div>
	                </div>
                </div>
            </div>
        </div>
        <footer>
    		<hr />
            Copyright &copy; 2012, The Atheme Project
	    </footer>
    </div>
</div>
    
	<!-- JavaScript -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script type="text/javascript" src="assets/javascript/jquery.js"></script>
    <script type="text/javascript" src="assets/javascript/google-code-prettify/prettify.js"></script>
    <script type="text/javascript" src="assets/javascript/bootstrap-transition.js"></script>
    <script type="text/javascript" src="assets/javascript/bootstrap-alert.js"></script>
    <script type="text/javascript" src="assets/javascript/bootstrap-modal.js"></script>
    <script type="text/javascript" src="assets/javascript/bootstrap-dropdown.js"></script>
    <script type="text/javascript" src="assets/javascript/bootstrap-scrollspy.js"></script>
    <script type="text/javascript" src="assets/javascript/bootstrap-tab.js"></script>
    <script type="text/javascript" src="assets/javascript/bootstrap-tooltip.js"></script>
    <script type="text/javascript" src="assets/javascript/bootstrap-popover.js"></script>
    <script type="text/javascript" src="assets/javascript/bootstrap-button.js"></script>
    <script type="text/javascript" src="assets/javascript/bootstrap-collapse.js"></script>
    <script type="text/javascript" src="assets/javascript/bootstrap-carousel.js"></script>
    <script type="text/javascript" src="assets/javascript/bootstrap-typeahead.js"></script>
    <script type="text/javascript" src="assets/javascript/application.js"></script>
    
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-30065060-1']);
	  _gaq.push(['_setDomainName', 'atheme.org']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
    
    <script type="text/javascript">
		$('.dropdown-toggle').dropdown()
	</script>
