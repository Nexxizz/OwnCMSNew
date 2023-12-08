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
    <title>Own Blog</title>
</head>
<body>

HEADER;

echo <<< NAVI
<div>
<div>
<nav>
<ul>
<li><a href="#">Home</a></li>
<li><a href="#">Posts erstellen</a></li>
<li><a href="#">Options</a></li>
</ul>
</nav>
</div>
</div>
<a href="""#"></a>
NAVI;

echo <<< MAIN
<div>
<h1>Willkommen. Hier bitte Ihre Beiträge posten</h1>
</div>
<div>
<div>
<form action="blog.php" method="post" accept-charset="utf-8">
 
<input type="text" placeholder="Dies ist ein richtig guter Beitrag ..." required name="postinhalt">
<input type="submit" value="Posten">

</form>
</div>
</div>
MAIN;

echo <<< FOOTER
</body>
</html>
FOOTER;

?>


