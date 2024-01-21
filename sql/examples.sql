-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 21. Jan 2024 um 13:04
-- Server-Version: 10.4.28-MariaDB
-- PHP-Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cmsnew`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `examples`
--

CREATE TABLE `examples` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `navi` longtext NOT NULL,
  `content` longtext NOT NULL,
  `footer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `examples`
--

INSERT INTO `examples` (`id`, `name`, `title`, `navi`, `content`, `footer`) VALUES
(3, 'Lehrseite', 'Lehr Seite HTML/CSS/PHP', '<body>\r\n<nav>\r\n<a href=\"#HTMLSection\">HTML</a>\r\n<a href=\"#CSSSection\">CSS</a>\r\n<a href=\"#PHPSection\">PHP</a>\r\n</nav>', '<h1 id=\"HTMLSection\">HTML</h1>\r\n<p>HTML, kurz für Hypertext Markup Language, bildet das Grundgerüst des World Wide Web und ermöglicht es uns, Informationen strukturiert und ansprechend im Internet zu präsentieren. In diesem Kurs werden wir gemeinsam in die Grundlagen von HTML eintauchen, von den einfachen Tags bis hin zur Erstellung von komplexen Webseiten. Tauche ein und entdecke, wie du mit HTML die digitale Welt gestalten </p>\r\n<img src=\"exampleIMG/Lehrseite.jpeg\" alt=\"HTMLBild\">\r\n<p>\r\nHTML bildet das Grundgerüst des World Wide Web und ermöglicht es uns, Informationen strukturiert und ansprechend im Internet zu präsentieren. In diesem Kurs werden wir gemeinsam in die Grundlagen von HTML eintauchen, von den einfachen Tags bis hin zur Erstellung von komplexen Webseiten. Tauche ein und entdecke, wie du mit HTML die digitale Welt gestalten kannst!\r\n</p>\r\n\r\n<p>\r\n  <strong>HTML - Hypertext Markup Language:</strong>\r\n  <br>\r\n  1. <strong>Definition:</strong> HTML ist eine Auszeichnungssprache, die zur Strukturierung von Inhalten auf Webseiten verwendet wird.\r\n  <br>\r\n  2. <strong>Struktur:</strong> HTML-Dokumente bestehen aus einer Hierarchie von Elementen, die durch sogenannte Tags repräsentiert werden.\r\n  <br>\r\n  3. <strong>Grundlegende Bestandteile:</strong> Tags, Attribute.\r\n  <br>\r\n  4. <strong>Dokumentenstruktur:</strong> &lt;!DOCTYPE html&gt;, &lt;html&gt;, &lt;head&gt;, &lt;body&gt;.\r\n  <br>\r\n  5. <strong>Semantik:</strong> Einführung semantischer Elemente in HTML5.\r\n  <br>\r\n  6. <strong>Hyperlinks und Bilder:</strong> &lt;a&gt; für Hyperlinks, &lt;img&gt; für Bilder.\r\n  <br>\r\n  7. <strong>Versionen:</strong> HTML5 ist die neueste Version.\r\n</p>\r\n\r\n<h1 id=\"CSSSection\">CSS3</h1>\r\n<p>\r\nCSS, oder Cascading Style Sheets, ist eine mächtige Stylesheet-Sprache, die in Verbindung mit HTML eingesetzt wird, um Webseiten zu gestalten und zu formatieren. In diesem Kurs werden wir gemeinsam die Grundlagen von CSS erkunden und lernen, wie wir mit Hilfe von Stilregeln das Erscheinungsbild unserer HTML-Dokumente beeinflussen können.\r\n</p>\r\n<img src=\"exampleIMG/LehrseiteCSS.jpeg\" alt=\"CSSBild\">\r\n<p>\r\n  <strong>CSS - Cascading Style Sheets:</strong>\r\n  <br>\r\n  1. <strong>Definition:</strong> CSS ist eine Stylesheet-Sprache, die die Darstellung von HTML-Dokumenten steuert.\r\n  <br>\r\n  2. <strong>Ziel:</strong> Durch die Trennung von Inhalt (HTML) und Darstellung (CSS) ermöglicht CSS eine flexible und effiziente Gestaltung von Webseiten.\r\n  <br>\r\n  3. <strong>Selektoren und Eigenschaften:</strong> CSS verwendet Selektoren, um HTML-Elemente auszuwählen, und definiert dann Eigenschaften wie Farben, Schriftarten und Layout.\r\n  <br>\r\n  4. <strong>Kaskadierung und Vererbung:</strong> CSS-Regeln können hierarchisch angeordnet werden, wodurch eine Kaskadierung entsteht. Zudem können Eigenschaften von übergeordneten Elementen an untergeordnete Elemente vererbt werden.\r\n  <br>\r\n  5. <strong>Responsives Design:</strong> CSS ermöglicht die Erstellung von responsiven Layouts, die sich an verschiedene Bildschirmgrößen anpassen können.\r\n  <br>\r\n  6. <strong>Transitions und Animationen:</strong> CSS bietet Funktionen zur Erzeugung von Übergängen und Animationen, um Webseiten interaktiver zu gestalten.\r\n  <br>\r\n  7. <strong>Frameworks und Präprozessoren:</strong> Fortgeschrittene CSS-Anwendungen können von Frameworks wie Bootstrap und Präprozessoren wie SASS profitieren.\r\n</p>\r\n<h1 id=\"PHPSection\">PHP</h1>\r\n<p>\r\n  Herzlich willkommen zum PHP-Lehrgang! PHP, oder Hypertext Preprocessor, ist eine serverseitige Skriptsprache, die speziell für die Entwicklung von dynamischen Webseiten geschaffen wurde. In diesem Kurs werden wir gemeinsam die Grundlagen von PHP erkunden und erfahren, wie diese leistungsstarke Sprache verwendet wird, um interaktive und datenbankgestützte Webanwendungen zu erstellen.\r\n</p>\r\n\r\n<img src=\"exampleIMG/LehrseitePHP.jpeg\" alt=\"PHPBild\">\r\n<p>\r\n  <strong>PHP - Hypertext Preprocessor:</strong>\r\n  <br>\r\n  1. <strong>Definition:</strong> PHP ist eine serverseitige Skriptsprache, die in HTML eingebettet werden kann und auf dem Webserver ausgeführt wird.\r\n  <br>\r\n  2. <strong>Zweck:</strong> PHP ermöglicht die Verarbeitung von Formulardaten, das Erstellen dynamischer Inhalte, den Zugriff auf Datenbanken und vieles mehr.\r\n  <br>\r\n  3. <strong>Syntax:</strong> PHP-Skripte werden zwischen <?php und ?> Tags geschrieben und können direkt in HTML integriert werden.\r\n  <br>\r\n  4. <strong>Variablen und Datentypen:</strong> PHP unterstützt verschiedene Datentypen wie Strings, Zahlen und Arrays. Variablen werden durch ein Dollarzeichen ($) gekennzeichnet.\r\n  <br>\r\n  5. <strong>Bedingungen und Schleifen:</strong> Wie andere Programmiersprachen bietet PHP Möglichkeiten zur Implementierung von Bedingungen und Schleifen.\r\n  <br>\r\n  6. <strong>Datenbankzugriff:</strong> PHP ermöglicht den einfachen Zugriff auf verschiedene Datenbanken, was die Entwicklung von datenbankgestützten Webanwendungen erleichtert.\r\n  <br>\r\n  7. <strong>Frameworks:</strong> Beliebte PHP-Frameworks wie Laravel und Symfony erleichtern die strukturierte Entwicklung von Webanwendungen.\r\n</p>', '<footer>\r\n   <p>&copy; 2023 Lehr Seite HTML/CSS/PHP. Alle Rechte vorbehalten.</p>\r\n</footer>\r\n</body>\r\n\r\n</html>'),
(4, 'Info AI', 'Information über Künstliche Intelligenz', '<body>\r\n<nav>\r\n    <ul>\r\n       <li><a href=\"#was-ist-ki\">Was ist Künstliche Intelligenz?</a></li>\r\n       <li><a href=\"#anwendungen\">Anwendungen von KI</a></li>\r\n       <li><a href=\"#zukunft\">Die Zukunft der KI</a></li>\r\n       <li><a href=\"#ressourcen\">Ressourcen</a></li>\r\n    </ul>\r\n</nav>', '<aside>\r\n   <h2>Seitenleiste</h2>\r\n   <p>Hier könnte zusätzlicher Inhalt stehen.</p>\r\n</aside>\r\n<section id=\"was-ist-ki\">\r\n    <h2>Was ist Künstliche Intelligenz?</h2>\r\n    <p>Künstliche Intelligenz (KI) bezieht sich auf die Schaffung von Algorithmen und Technologien, die es Computern ermöglichen, menschenähnliche Intelligenz aufzubauen und Aufgaben auszuführen, die normalerweise menschliche Intelligenz erfordern würden. KI umfasst verschiedene Teilgebiete wie maschinelles Lernen, neuronale Netzwerke, natürliche Sprachverarbeitung und mehr.</p>\r\n    <img src=\"exampleIMG/WhatIsAI.png\" alt=\"Was ist Künstliche Intelligenz Illustration\">\r\n    <p>Künstliche Intelligenz bezieht sich auf die Entwicklung von Algorithmen und Technologien, die Maschinen befähigen, menschenähnliche Intelligenz aufzuweisen. Dies umfasst Bereiche wie maschinelles Lernen, neuronale Netzwerke und mehr.</p>\r\n    <p>Die Grundidee besteht darin, dass KI-Systeme in der Lage sind, aus Daten zu lernen, Muster zu erkennen und intelligente Entscheidungen zu treffen. Beispiele für KI-Anwendungen reichen von selbstfahrenden Autos über personalisierte Empfehlungssysteme bis hin zu automatisierten Produktionsprozessen.</p>\r\n    <p>Ein zentrales Konzept in der KI ist das maschinelle Lernen, bei dem Algorithmen durch wiederholte Verarbeitung großer Datenmengen ihre Leistung verbessern. Neuronale Netzwerke, inspiriert von der Funktionsweise des menschlichen Gehirns, sind ein häufig verwendetes Werkzeug in der KI-Forschung.</p>\r\n    <p>KI hat das Potenzial, zahlreiche Bereiche zu transformieren und innovative Lösungen für komplexe Probleme zu bieten. Gleichzeitig bringt sie jedoch auch ethische und gesellschaftliche Herausforderungen mit sich, die sorgfältig adressiert werden müssen.</p>\r\n</section>\r\n\r\n<section id=\"anwendungen\">\r\n    <h2>Anwendungen von KI</h2>\r\n    <p>KI findet Anwendung in verschiedenen Bereichen, darunter Gesundheitswesen, Finanzen, autonomes Fahren, Sprachverarbeitung und Bilderkennung. Die Vielseitigkeit von KI ermöglicht innovative Lösungen für viele Herausforderungen.</p>\r\n    <img src=\"exampleIMG/UseCaseAI.png\" alt=\"Anwendungen Künstliche Intelligenz Illustration\">\r\n    <p>Künstliche Intelligenz (KI) findet in verschiedenen Bereichen breite Anwendung. Einige der bedeutendsten Anwendungen sind:</p>\r\n    <ul>\r\n    <li><strong>Gesundheitswesen:</strong> KI unterstützt bei der Diagnose von Krankheiten, personalisierten Medizin und der Analyse von medizinischen Bildern.</li>\r\n    <li><strong>Finanzwesen:</strong> In der Finanzbranche wird KI für Risikoanalysen, Betrugserkennung und automatisierte Handelsstrategien eingesetzt.</li>\r\n    <li><strong>Autonomes Fahren:</strong> KI spielt eine entscheidende Rolle bei der Entwicklung von selbstfahrenden Fahrzeugen, indem sie Sensorinformationen interpretiert und Entscheidungen trifft.</li>\r\n    <li><strong>Sprachverarbeitung:</strong> Virtuelle Assistenten wie Siri und Alexa nutzen fortschrittliche Sprachverarbeitungsalgorithmen, um menschenähnliche Interaktionen zu ermöglichen.</li>\r\n    <li><strong>Bilderkennung:</strong> KI-Algorithmen können Muster in Bildern erkennen und werden in Anwendungen wie Gesichtserkennung und Objekterkennung eingesetzt.</li>\r\n    </ul>\r\n    <p>Diese Beispiele verdeutlichen die Vielseitigkeit und den Nutzen von KI in verschiedenen Branchen und Anwendungsfeldern.</p>\r\n</section>\r\n<section id=\"zukunft\">\r\n    <h2>Die Zukunft der KI</h2>\r\n    <p>Die Zukunft der KI verspricht weiterhin Fortschritte in den Bereichen Robotik, natürliche Sprachverarbeitung, und Verständnis komplexer Muster. Die ethischen und gesellschaftlichen Implikationen werden dabei zunehmend diskutiert.</p>\r\n    <img src=\"exampleIMG/FutureAI.png\" alt=\"Zukunft von Künstliche Intelligenz Illustration\">\r\n    <p>Die Entwicklung von Künstlicher Intelligenz (KI) verspricht eine aufregende Zukunft mit zahlreichen Möglichkeiten und Herausforderungen. Einige Trends und Aspekte für die Zukunft der KI sind:</p>\r\n    <ul>\r\n        <li><strong>Erweiterte Robotik:</strong> Fortschritte in der Robotik werden zu hochentwickelten Robotern führen, die komplexere Aufgaben ausführen können, von der Pflege älterer Menschen bis hin zu gefährlichen Arbeiten in industriellen Umgebungen.</li>\r\n        <li><strong>Natürliche Sprachverarbeitung:</strong> Die Fähigkeit von KI-Systemen, menschenähnliche Konversationen zu verstehen und zu führen, wird weiter verbessert, was zu fortgeschritteneren virtuellen Assistenten und interaktiven Systemen führt.</li>\r\n        <li><strong>Ethische Herausforderungen:</strong> Die Diskussion über ethische Fragen im Zusammenhang mit KI wird intensiviert, einschließlich Themen wie Datenschutz, Bias in Algorithmen und die soziale Auswirkungen von KI auf Arbeitsmärkte.</li>\r\n        <li><strong>Quantencomputing:</strong> Der Fortschritt im Bereich des Quantencomputings könnte zu leistungsstärkeren KI-Algorithmen führen, die komplexere Probleme lösen können, die mit herkömmlichen Computern schwer zu bewältigen sind.</li>\r\n        <li><strong>Verständnis komplexer Muster:</strong> KI wird besser darin, komplexe Muster in Daten zu erkennen, was zu Fortschritten in Bereichen wie Medizin, Forschung und Wissenschaft führen könnte.</li>\r\n    </ul>\r\n    <p>Die Zukunft der KI wird von fortlaufender Forschung, Innovation und einer sorgfältigen Auseinandersetzung mit den damit verbundenen Herausforderungen geprägt sein.</p>\r\n</section>\r\n<section id=\"ressourcen\">\r\n    <h2>Ressourcen</h2>\r\n    <p>Hier finden Sie weitere Informationen und Ressourcen zum Thema Künstliche Intelligenz.</p>\r\n    <a href=\"https://de.wikipedia.org/wiki/K%C3%BCnstliche_Intelligenz\">Künstliche Intelligenz Wikipedia</a>\r\n    <br>\r\n    <a href=\"https://www.techtarget.com/searchenterpriseai/definition/AI-Artificial-Intelligence\">What is Artificial Intelligence TechTarget</a>\r\n    <br>\r\n    <a href=\"https://builtin.com/artificial-intelligence\">What Is AI and How Does It Work? Built In</a>\r\n</section>', '<footer>\r\n   <p>&copy; 2023 KI-Infoseite. Alle Rechte vorbehalten.</p>\r\n</footer>\r\n</body>\r\n\r\n</html>');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `examples`
--
ALTER TABLE `examples`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `examples`
--
ALTER TABLE `examples`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
