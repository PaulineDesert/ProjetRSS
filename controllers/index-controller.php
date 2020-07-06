<?php

setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR', 'fr', 'fr', 'fra', 'fr_FR@euro');
$actuRSS = simplexml_load_file("https://www.01net.com/rss/info/flux-rss/flux-toutes-les-actualites/");
$fileRSS = simplexml_load_file("https://www.01net.com/rss/actualite/");
$appsRSS = simplexml_load_file("https://www.01net.com/rss/actualites/applis-logiciels/");
$securityRSS = simplexml_load_file("https://www.01net.com/rss/actualites/securite/");
$pcRSS = simplexml_load_file("https://www.01net.com/rss/pc-peripheriques/");
$titleFluxRSS = ['Actualités', 'Dossiers', 'Applis, Logiciels', 'Sécurité', 'PC périphériques'];
$hrefPage = ['actualites.html', 'dossiers.html', 'applications.html', 'securite.html', 'peripheriques.html'];
$colorFluxRSS = ['red', 'blue', 'green', 'yellow', 'purple'];
$fluxRSS = [$actuRSS, $fileRSS, $appsRSS, $securityRSS, $pcRSS];
$starterCookie = true;

if (!isset($_COOKIE['colorsCookie'])) {
    setcookie("colorsCookie", 'grey', time()+3600 * 24);
}
if (!isset($_COOKIE['articlesCookie'])) {
    setcookie("articlesCookie", 3, time()+3600 * 24);
}
if (!isset($_COOKIE['subjectCookie1'])) {
    setcookie("subjectCookie1", 0, time()+3600 * 24);
}
if (!isset($_COOKIE['subjectCookie2'])) {
    setcookie("subjectCookie2", 1, time()+3600 * 24);
}
if (!isset($_COOKIE['subjectCookie3'])) {
    setcookie("subjectCookie3", 2, time()+3600 * 24);
}
if (!isset($_COOKIE['starterCookie'])) {
    setcookie("starterCookie", true, time()+3600 * 24);
    $starterCookie = false;
}
$regexArticles = '/^(3)$|^(5)$|^(8)$/';
$regexColors = '/^(grey)$|^(blue)$|^(red)$/';
$regexSubjects = '/^[0-4]$/';
$postOk = False;
$errorMessage = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["colors"])) {
            if (!preg_match($regexColors, $_POST["colors"])) {
                $errorMessage["colors"] = "Syntax invalide";
            } else {
                setcookie("colorsCookie", $_POST["colors"], time()+3600 * 24);
            }
        }
        if (isset($_POST["articles"])) {
            if (!preg_match($regexArticles, $_POST["articles"])) {
                $errorMessage["articles"] = "Syntax invalide";
            } else {
                setcookie("articlesCookie", intval($_POST["articles"]), time()+3600 * 24);
            }
        }
        if (isset($_POST["subject"])) {
            if (count($_POST["subject"]) != 3) {
                $errorMessage["subject"] = "Vous devez choisir 3 sujets";
                if (!preg_match($regexSubjects, intval($_POST["subject"]))) {
                    $errorMessage["subject"] = "Syntax invalide";
                };
            } else {
                setcookie("subjectCookie1", intval($_POST["subject"][0]), time()+3600 * 24);
                setcookie("subjectCookie2", intval($_POST["subject"][1]), time()+3600 * 24);
                setcookie("subjectCookie3", intval($_POST["subject"][2]), time()+3600 * 24);
            }
        }

    if (empty($errorMessage)) {
        $postOk = true;
    };
} else {
    $postOk = false;
};
if (isset($_COOKIE['articlesCookie'])) {
    $numberArticles = $_COOKIE['articlesCookie'];
  } else {
    $numberArticles = 3;
  }