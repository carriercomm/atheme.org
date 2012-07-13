<?php
	include "sources/title.php";
	$x = $_SERVER['REQUEST_URI'];
	if ($_SERVER['HTTP_HOST'] != "www.atheme.org")
	{
		if ($x == "/")
			header("Location: http://www.atheme.org");
		else
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
   	<link rel="stylesheet" href="http://www.atheme.org/assets/stylesheets/screen.css" type="text/css" media="screen" />
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
                    <li class="first"><a href="http://www.atheme.org/">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#projects_menu" title="Toggle Dropdown">Our Projects</a>
                        <ul id="projects_menu" class="dropdown-menu">
                            <li><a href="http://www.atheme.net" target="_blank">Atheme Services</a></li>
                            <li><a href="http://www.atheme.net/download-atheme-web.php" target="_blank">Atheme-Web</a></li>
                            <li><a href="http://www.atheme.org/project/charybdis">charybdis</a></li>
                            <li><a href="http://github.com/atheme/iris/">iris</a></li>
    			    		<li><a href="http://www.atheme.org/project/mowgli">libmowgli</a></li>
						    <li><a href="http://www.atheme.org/project/libguess">libguess</a></li>
		   		    	    <li><a href="http://www.atheme.org/project/mcs">MCS</a></li>
						    <li><a href="http://www.atheme.org/project/libaosd">libaosd</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#stuff_menu" title="Toggle Dropdown">Our Stuff</a>
                        <ul id="stuff_menu" class="dropdown-menu">
                            <li><a href="http://www.github.com/atheme/" target="_blank">GitHub</a></li>
                            <li><a href="http://webchat.staticbox.net" target="_blank">Webchat</a></li>
                            <li><a href="http://confluence.atheme.org/" target="_blank">Wiki</a></li>
                            <li><a href="http://jira.atheme.org" target="_blank">Bug Tracker</a></li>
                        </ul>
                    </li>
                    <li class="last"><a href="http://www.atheme.org/contact">Contact Us</a></li>
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
            </div>
        </div>
        <footer>
    		<hr />
            Copyright &copy; 2012, The Atheme Project. All Rights Reserved.
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
