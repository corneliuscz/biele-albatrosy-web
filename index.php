<?php
 /* *********************** */
 /* Biele Albatrosy website */
 /* *********************** */

 session_start();

 //include ('funcs.inc.php');
 
 if ((isset($_GET['lang']) && (($_GET['lang']=="sk") || ($_GET['lang']=="en"))))
    {$_SESSION['lang'] = $_GET['lang'];}
 elseif (!isset($_GET['lang']) && isset($_SESSION['lang']))
    {$_SESSION['lang'] = $_SESSION['lang'];}
 else 
    {$_SESSION['lang'] = "sk";} 
 
 include ('header.inc.php');
?>
  <div class="container">

<?php

if (!isset($_GET['page']) || (($_GET['page'] != "index") && ($_GET['page'] != "about") && ($_GET['page'] != "plane") && ($_GET['page'] != "display") && ($_GET['page'] != "thanks") && ($_GET['page'] != "VFA2009display") && ($_GET['page'] != "display-smik")) && ($_GET['page'] != "display-2011-tukums")) 
    {$page = "index";} 
else 
    {$page = $_GET['page'];}

include ('stranky/'.$page.'.inc.php');

switch ($_SESSION['lang'])
{
case "sk":
if ($page != "index") { echo "<h2>".$nadpiscz."</h2>"; }
echo "<div class=\"czechon\" lang=\"sk\"><div class=\"czechcontent\"><a href=\"index.php?page=".$page."&amp;lang=sk\" class=\"switch\">SLOVENSKY</a>";
echo $obsahcz;

// --

// --

echo "</div></div>";
echo "<div class=\"englishoff\" lang=\"en\"><div class=\"englishcontent englishcontentborder\"><a href=\"index.php?page=".$page."&amp;lang=en\" class=\"switch\">ENGLISH</a>";
echo $obsahen;
echo "</div></div>";
break;

case "en":
if ($page != "index") { echo "<h2>".$nadpisen."</h2>"; }
echo "<div class=\"czechoff\" lang=\"sk\"><div class=\"czechcontent czechcontentborder\"><a href=\"index.php?page=".$page."&amp;lang=sk\" class=\"switch\">SLOVENSKY</a>";
echo $obsahcz;
echo "</div></div>";
echo "<div class=\"englishon\" lang=\"en\"><div class=\"englishcontent\"><a href=\"index.php?page=".$page."&amp;lang=en\" class=\"switch\">ENGLISH</a>";
echo $obsahen;
echo "</div></div>";

break;

default:
echo "<p>I don't know this language / nerozumiem reči vášho kmeňa :-)</p>";
}
?>
  </div>
 
<?php
 include ('footer.inc.php');
?>