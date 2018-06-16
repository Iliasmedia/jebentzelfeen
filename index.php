<?php
 function shuffleword() {
	$woord = array("plompzak","aansteker","OLIEVLEK","BALUSTRADE","STEEN","KOKOSMAKROON","KAUWGOMPJE","HIEROGLIEF", "hamburger","Xbox","spelcomputer","broodje pindakaas","spinnenweb", "fornuis","vlieg","mug","retrofreak","computer","playstation 4", "mogool", "ontvoering", " broodbakker", "tuinier","boer","locomotief","geitenaaier", "aardappel", "slachtoffer", "kersentaart", " student", "pissebed", " stroomkring", "zonsverduistering", "vlooi", "asiel", "appel", "frietje", "frikandel", "bliksemflits", "knuffelbeer", "opening", "fortnite character", "lamp", "stuk land", "pakboter", "pistoletje", "pistool", "manege", "raadsel", "vader", "oorsmeer", "plant", "prentenboek", "ooglap", "vliegende spaghetti monster", "volgorde", " viaduct", "inktvis", "opnieuw", "bal", "doorzetter", "inwoner", "ezelvoer", "olijf");
	shuffle($woord);
	return $woord[0];
 }

?>
<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Je bent zelf een <?php echo shuffleword(); ?></title>
  <meta name="author" content="Ilias">
  <meta name="description" content="description here">
  <meta name="keywords" content="keywords,here">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  </head>
  <body>
  <div class="container">
	<div class="bar">
		<h1>JE BENT ZELF EEN <?php echo shuffleword(); ?></h1>
		<p><a href="https://github.com/Iliasmedia/jebentzelfeen/"><img src="github.png" alt="GITHUB LINK"></a></p>
	</div>
  </div>
  </body>
</html>
