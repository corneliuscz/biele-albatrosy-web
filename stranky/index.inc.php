<?php
$nadpiscz="Biele Albatrosy - virtuálny akrobatický tím";
$nadpisen="Biele Albatrosy - virtual aerobatic team";

$obsahcz="\n<h3>Najbližšie vystúpenie</h3>";
$obsahen="\n<h3>Next event</h3>";

/* stáhnem si soubor od kamiho */
//$airshows = httpGet('http://127.0.0.1/biele-albatrosy/airshows.xml');
//$airshows = httpGet('http://vybiral.info/bielealbatrosy/airshows.xml');

/* ako kokoti si to načteme lokálne */
//$airshows = implode( '', file('novinky/airshows.xml') );
$airshows = file_get_contents('novinky/airshows.xml');

/* rozpad na XML uzly */
$shows = new DOMDocument();
$shows->loadXML ($airshows);

$show = $shows->getElementsByTagName("airshow");

  foreach( $show as $airshow )
  {
	$publikovano = $airshow->getAttribute('datum'); 

    $czobsah = $airshow->getElementsByTagName("czobsah");
    $cesky  = $czobsah->item(0)->nodeValue;

    $enobsah = $airshow->getElementsByTagName("enobsah");
    $anglicky  = $enobsah->item(0)->nodeValue;

	$obsahcz .= "\n\t\t<div class=\"ukazky\">";
	$obsahen .= "\n\t\t<div class=\"ukazky\">";	
    $obsahcz .= "<p><strong>$publikovano</strong> &ndash; $cesky</p>";
	$obsahen .= "<p><strong>$publikovano</strong> &ndash; $anglicky</p>";
	$obsahcz .= "</div>\n";
	$obsahen .= "</div>\n";
  }

$obsahcz.="\n\t\t<h3>Novinky</h3>";
$obsahen.="\n\t\t<h3>News</h3>";

/* stáhnem si soubor od kamiho */
//$novinkysoubor = httpGet('http://127.0.0.1/biele-albatrosy/novinky.xml');
//$novinkysoubor = httpGet('http://vybiral.info/bielealbatrosy/novinky.xml');

/* ako kokoti si to načteme lokálne */
$novinkysoubor = file_get_contents('novinky/novinky.xml');

/* rozpad na XML uzly */
$news = new DOMDocument();
$news->loadXML ($novinkysoubor);

$novinky = $news->getElementsByTagName("novinka");
// Každá novinka se skládá z data publikovani, slovenské verze a anglické verze
$obsahcz .= "\n\t\t<div class=\"novinky\">";
$obsahen .= "\n\t\t<div class=\"novinky\">";

  foreach( $novinky as $novinka )
  {
	$publikovano = $novinka->getAttribute('datum'); 

    $czobsah = $novinka->getElementsByTagName("czobsah");
    $cesky  = $czobsah->item(0)->nodeValue;

    $enobsah = $novinka->getElementsByTagName("enobsah");
    $anglicky  = $enobsah->item(0)->nodeValue;
	
	$cesky = str_replace("###datum###", "<strong>".$publikovano."</strong> &ndash; ",$cesky);
	$anglicky = str_replace("###datum###", "<strong>".$publikovano."</strong> &ndash; ",$anglicky);
	
    $obsahcz .= $cesky;
	$obsahen .= $anglicky;
  }
  
$obsahcz .= "</div>\n";
$obsahen .= "</div>\n";
?>