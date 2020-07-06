<?php
$actuRSS = simplexml_load_file("https://www.01net.com/rss/info/flux-rss/flux-toutes-les-actualites/");
$fileRSS = simplexml_load_file("https://www.01net.com/rss/actualite/");
$appsRSS = simplexml_load_file("https://www.01net.com/rss/actualites/applis-logiciels/");
$securityRSS = simplexml_load_file("https://www.01net.com/rss/actualites/securite/");
$pcRSS = simplexml_load_file("https://www.01net.com/rss/pc-peripheriques/");
$titleFluxRSS = ['Actualités', 'Dossiers', 'Applis, Logiciels', 'Sécurité', 'PC périphériques'];
$colorFluxRSS = ['red', 'blue', 'green', 'yellow', 'purple'];
$fluxRSS = [$actuRSS, $fileRSS, $appsRSS, $securityRSS, $pcRSS];