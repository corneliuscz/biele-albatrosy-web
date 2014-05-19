<?php
/* Header with menu */ 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>Biele Albatrosy aerobatic team</title>
  <link rel="shortcut icon" type="image/x-icon" href="BA_online.ico" />
  <style type="text/css" media="screen,projection"> @import "style.css"; </style> 
  
  <!-- Contact Form CSS files -->
  <link type="text/css" href="basic.css" rel="stylesheet" media="screen" />

  <!-- IE 6 "fixes" -->
  <!--[if lt IE 7]>
  <link type="text/css" href="basic_ie.css" rel="stylesheet" media="screen" />
  <![endif]-->  
  
  </head>
  <body>
  <a href="index.php"><div id="head"><h1>Biele Albatrosy virtual aerobatic team - in memory of real Biele Albatrosy aerobatic team</h1></div></a>
  <div class="menucontainer<?php echo $_SESSION['lang']; ?>">
    <a href="index.php?page=about" title="O nás/About us" class="about<?php echo $_SESSION['lang']; ?>">O nás</a>
    <a href="index.php?page=plane" title="O letadle/About the plane" class="plane<?php echo $_SESSION['lang']; ?>">O letadle</a>
    <a href="index.php?page=display" title="Letové ukázky/Our show" class="display<?php echo $_SESSION['lang']; ?>">Letová ukázka</a>
    <a href="http://picasaweb.google.com/bielealbatrosy" target="_blank" title="Fotky/Photos" class="gallery<?php echo $_SESSION['lang']; ?>">Galerie</a>
	<a href="http://www.vimeo.com/user3569891/videos" target="_blank" title="Videa z našich letů/Movies from our flights" class="movies<?php echo $_SESSION['lang']; ?>">Videa</a>
    <a href="http://ba-vat.mrforum.net" title="Forum" target="_blank" class="forum<?php echo $_SESSION['lang']; ?>">Fórum</a>
    <a href="index.php?page=thanks" title="Naše díky patří/Our thanks belong to" class="thanks<?php echo $_SESSION['lang']; ?>">Sponzoři</a>
  </div>
  <hr class="clearer" />
  