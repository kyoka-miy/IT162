<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>nmCAPTCHA 2 Test Page</title>
	<meta name="viewport" content="initial-scale=1">
    <meta name="robots" content="noindex,nofollow" />
    <style type="text/css">
		
        /* start global page styles */
        * {padding:0; margin:0;}
		html {background-color:#ccc;}
		body {
			font-family: Arial, Helvetica, sans-serif;
			max-width:960px; /* keeps from getting too large on wide screen */
			width:90%; /* shrink to fit screen */
			margin:auto; /* center in html element */
			background-color:#fff;
			padding:1%;
			min-height:100%; /* keeps from getting too large on wide screen */
			}
		p,div {margin-bottom:0.5em;}
		h1,h2,h3,h4,h5,h6{
			font-weight:normal;
			margin:10px;
			}
		h1.masthead {margin-top:0;}
		footer {
			text-align:center;
			clear:both; /* ride below all items */
			}
		nav{
			text-align:center; /* centers the nav */
		}
		
		nav ul {
				list-style:none; /* removes the bullets */
			}
		nav ul li
			{
				display:inline-block; /* makes horizontal, but able to declare margins */
				margin:0 2%; /* margin left-right, gets smaller as necessary */
			}
		nav a:hover{
			text-decoration: none;
		}
        
        div.indent{
            width:90%;
            margin: 0 auto;   
        }
        /* end global page styles */
		
		/* start reCAPTCHA styles */
    </style>
    <link rel="stylesheet" href="../css/forms.css">
   
    <!--[if ltIE9]>
       <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
</head>
<body>
	<header role="banner">
		<h1 class="masthead">Our Website</h1>
		<nav>
			<ul>
				<li><a href="#">Link 1</a></li>
				<li><a href="#">Link 2</a></li>
				<li><a href="#">Link 3</a></li>
				<li><a href="#">Link 4</a></li>
				<li><a href="#">Link 5</a></li>
				<li><a href="#">Link 6</a></li>
			</ul>
		</nav>
	</header>
    <main role="main">
	 <header><h3>Contact Us!</h3></header>
    <p>Inside the source of this file, you can un-comment and test 
        2 different types of forms:
        <div class="indent">
            <ul>
                <li><b>loadContact('simple.php');</b> - a simple contact form with reCAPTCHA</li>
                <li><b>loadContact('multiple.php');</b> - a complex form with reCAPTCHA</li>
            </ul>
        </div>    
    </p>    
	<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "kyoka.386.miyamura@gmail.com";  //place your/your client's email address here
        $toName = "Lozzo Fujiyama"; //place your client's name here
        $website = "Lozzo Portfolio";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
     </main>
    <footer>
      <small>&copy; 2013-<?=date('Y')?>, All Rights Reserved ~
      <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
      <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
      </small>
    </footer>
    <!-- END Footer -->
</body>
</html>
