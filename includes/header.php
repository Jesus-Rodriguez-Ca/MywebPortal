<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
 <head>
     <title><?=$title?></title>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="css/portal.css" />
     <link rel="stylesheet" href="css/forms.css">
     <link rel="stylesheet" href="css/nav.css">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
     
  
 </head>
 <body>
     <header>
     <h1><i class="logo fa <?=$logo?>"<?=$logo_color?>></i>Jesus' SCC IT162 Portal</h1>
     <nav>
    <ul class="topnav" id="myTopnav">
    <?= makeLinks($nav1)?>    
    <!-- START COMMENT OUT NAV
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Jesus</a></li>
	END COMMENT OUT NAV -->
     <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
  </nav>

     </header>
     
   <div class="wrapper">
       <!--header ends here-->