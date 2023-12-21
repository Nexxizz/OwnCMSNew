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
    <title>Lehr Seite HTML/CSS/PHP</title>
</head>


HEADER;

echo <<< NAVI
<body>
<nav>
<a href="#HTMLSection">HTML</a>
<a href="#CSSSection">CSS</a>
<a href="#PHPSection">PHP</a>
</nav>
NAVI;

echo <<< MAIN
<h1 id="HTMLSection">HTML</h1>
<p>HTML, kurz für Hypertext Markup Language, bildet das Grundgerüst des World Wide Web und ermöglicht es uns, Informationen strukturiert und ansprechend im Internet zu präsentieren. In diesem Kurs werden wir gemeinsam in die Grundlagen von HTML eintauchen, von den einfachen Tags bis hin zur Erstellung von komplexen Webseiten. Tauche ein und entdecke, wie du mit HTML die digitale Welt gestalten </p>
<img src="exampleIMG/Lehrseite.jpeg" alt="HTMLBild">
<p>
HTML bildet das Grundgerüst des World Wide Web und ermöglicht es uns, Informationen strukturiert und ansprechend im Internet zu präsentieren. In diesem Kurs werden wir gemeinsam in die Grundlagen von HTML eintauchen, von den einfachen Tags bis hin zur Erstellung von komplexen Webseiten. Tauche ein und entdecke, wie du mit HTML die digitale Welt gestalten kannst!
</p>

<p>
  <strong>HTML - Hypertext Markup Language:</strong>
  <br>
  1. <strong>Definition:</strong> HTML ist eine Auszeichnungssprache, die zur Strukturierung von Inhalten auf Webseiten verwendet wird.
  <br>
  2. <strong>Struktur:</strong> HTML-Dokumente bestehen aus einer Hierarchie von Elementen, die durch sogenannte Tags repräsentiert werden.
  <br>
  3. <strong>Grundlegende Bestandteile:</strong> Tags, Attribute.
  <br>
  4. <strong>Dokumentenstruktur:</strong> &lt;!DOCTYPE html&gt;, &lt;html&gt;, &lt;head&gt;, &lt;body&gt;.
  <br>
  5. <strong>Semantik:</strong> Einführung semantischer Elemente in HTML5.
  <br>
  6. <strong>Hyperlinks und Bilder:</strong> &lt;a&gt; für Hyperlinks, &lt;img&gt; für Bilder.
  <br>
  7. <strong>Versionen:</strong> HTML5 ist die neueste Version.
</p>

<h1 id="CSSSection">CSS3</h1>
<p>
CSS, oder Cascading Style Sheets, ist eine mächtige Stylesheet-Sprache, die in Verbindung mit HTML eingesetzt wird, um Webseiten zu gestalten und zu formatieren. In diesem Kurs werden wir gemeinsam die Grundlagen von CSS erkunden und lernen, wie wir mit Hilfe von Stilregeln das Erscheinungsbild unserer HTML-Dokumente beeinflussen können.
</p>
<img src="exampleIMG/LehrseiteCSS.jpeg" alt="CSSBild">
<p>
  <strong>CSS - Cascading Style Sheets:</strong>
  <br>
  1. <strong>Definition:</strong> CSS ist eine Stylesheet-Sprache, die die Darstellung von HTML-Dokumenten steuert.
  <br>
  2. <strong>Ziel:</strong> Durch die Trennung von Inhalt (HTML) und Darstellung (CSS) ermöglicht CSS eine flexible und effiziente Gestaltung von Webseiten.
  <br>
  3. <strong>Selektoren und Eigenschaften:</strong> CSS verwendet Selektoren, um HTML-Elemente auszuwählen, und definiert dann Eigenschaften wie Farben, Schriftarten und Layout.
  <br>
  4. <strong>Kaskadierung und Vererbung:</strong> CSS-Regeln können hierarchisch angeordnet werden, wodurch eine Kaskadierung entsteht. Zudem können Eigenschaften von übergeordneten Elementen an untergeordnete Elemente vererbt werden.
  <br>
  5. <strong>Responsives Design:</strong> CSS ermöglicht die Erstellung von responsiven Layouts, die sich an verschiedene Bildschirmgrößen anpassen können.
  <br>
  6. <strong>Transitions und Animationen:</strong> CSS bietet Funktionen zur Erzeugung von Übergängen und Animationen, um Webseiten interaktiver zu gestalten.
  <br>
  7. <strong>Frameworks und Präprozessoren:</strong> Fortgeschrittene CSS-Anwendungen können von Frameworks wie Bootstrap und Präprozessoren wie SASS profitieren.
</p>
<h1 id="PHPSection">PHP</h1>
<p>
  Herzlich willkommen zum PHP-Lehrgang! PHP, oder Hypertext Preprocessor, ist eine serverseitige Skriptsprache, die speziell für die Entwicklung von dynamischen Webseiten geschaffen wurde. In diesem Kurs werden wir gemeinsam die Grundlagen von PHP erkunden und erfahren, wie diese leistungsstarke Sprache verwendet wird, um interaktive und datenbankgestützte Webanwendungen zu erstellen.
</p>

<img src="exampleIMG/LehrseitePHP.jpeg" alt="PHPBild">
<p>
  <strong>PHP - Hypertext Preprocessor:</strong>
  <br>
  1. <strong>Definition:</strong> PHP ist eine serverseitige Skriptsprache, die in HTML eingebettet werden kann und auf dem Webserver ausgeführt wird.
  <br>
  2. <strong>Zweck:</strong> PHP ermöglicht die Verarbeitung von Formulardaten, das Erstellen dynamischer Inhalte, den Zugriff auf Datenbanken und vieles mehr.
  <br>
  3. <strong>Syntax:</strong> PHP-Skripte werden zwischen <?php und ?> Tags geschrieben und können direkt in HTML integriert werden.
  <br>
  4. <strong>Variablen und Datentypen:</strong> PHP unterstützt verschiedene Datentypen wie Strings, Zahlen und Arrays. Variablen werden durch ein Dollarzeichen ($) gekennzeichnet.
  <br>
  5. <strong>Bedingungen und Schleifen:</strong> Wie andere Programmiersprachen bietet PHP Möglichkeiten zur Implementierung von Bedingungen und Schleifen.
  <br>
  6. <strong>Datenbankzugriff:</strong> PHP ermöglicht den einfachen Zugriff auf verschiedene Datenbanken, was die Entwicklung von datenbankgestützten Webanwendungen erleichtert.
  <br>
  7. <strong>Frameworks:</strong> Beliebte PHP-Frameworks wie Laravel und Symfony erleichtern die strukturierte Entwicklung von Webanwendungen.
</p>
MAIN;

echo <<< FOOTER
<footer>
   <p>&copy; 2023 Lehr Seite HTML/CSS/PHP. Alle Rechte vorbehalten.</p>
</footer>
</body>

</html>
FOOTER;

?>


