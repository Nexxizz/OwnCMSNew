<?php
echo <<< HEADER

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./css/style.css" rel="stylesheet">
    <title>Info Site</title>
</head>
<body>

HEADER;

echo <<< NAVI
<div>
<nav>
<ul>
<li><a href="#">Home</a></li>
<li><a href="#">Info</a></li>
<li><a href="#">About</a></li>
</ul>
</nav>
</div>
NAVI;

echo <<< MAIN
<div>
<h1>Willkommen. Das ist eine Beispielsseite</h1>
</div>
<div> 
<h3>Info</h3>
</div>
MAIN;

echo <<< FOOTER
</body>
</html>
FOOTER;

?>


