<?php include 'includes/portal-config.php' ?>
<!DOCTYPE html>
<html>
  <head>
    <title>IT162 Portal - Edit this code to make it your own!</title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8" />
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/portal.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/forms.css">
  </head>

  <body>
    <!-- START WRAPPER -->
    <main class="wrapper">
      <header>
        <h1>
          <a href="index.php"
            ><i class="logo fa <?=$logo?>"<?=$logo_color?>></i>CONTACTME Kyoka Miyamura SCC IT162
            Portal</a
          >
        </h1>
        <nav>
          <ul class="topnav" id="myTopnav">
          <?=makeLinks($nav1)?>
            <!-- <li><a href="index.php" class="selected">Welcome</a></li>
            <li><a href="big/index.php">Big</a></li>
            <li><a href="aia.php">AIA</a></li>
            <li><a href="flowchart.php">Flowchart/Layout</a></li>
            <li><a href="fp/index.php">Final Project</a></li>
            <li><a href="contactme.php">Contact Sara</a></li> -->
            <li class="icon">
              <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
            </li>
          </ul>
        </nav>
      </header>

      <!-- START LEFT COL -->
      <section>
        <h2 class="pageID">Welcome</h2>

        <!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
        <img src="images/f_f_event_100_s512_f_event_100_2bg.png" class="desktop" alt="" />
        <img src="images/f_f_health_56_s512_f_health_56_0bg.png" class="" alt="" />
        <img src="images/f_f_object_174_s512_f_object_174_0bg.png" class="" alt="" />
        <p>Hi! I'm Kyoka!</p>
        <p>I'm a CS student in Seattle. My hobby is camera, watching movies.</p>
        <p>I prefer to be a programmer.</p>

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
      </section>
      <!-- END LEFT COL -->

      <!-- START RIGHT COL -->
      <aside>
        <h3>Right Column</h3>
        <img src="images/tablet.jpg" class="tablet" alt="" />
        <p>Lorem Ipsum place holder text goes here for now</p>
        <p>Lorem Ipsum place holder text goes here for now</p>
      </aside>
      <!-- END RIGHT COL -->

      <!-- START Footer -->
      <footer>
        <p>
          <small
            >&copy; 2020-<?=date("Y")?>
            by <a href="contact.php">Sara Newman</a>, All Rights Reserved ~
            <a id="html-checker" href="#">Check HTML</a> ~
            <a id="css-checker" href="#">Check CSS</a></small
          >
        </p>
      </footer>
      <!-- END Footer -->
    </main>
    <!-- END WRAPPER -->
  </body>
</html>
