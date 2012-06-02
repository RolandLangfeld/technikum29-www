<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de">
<head><!--#set var="title"        value="Detailerkl�rung der St�bchenspeicher"
   --><!--#set var="location"     value="magnetic-stick-memory"
   --><!--#set var="part"         value="extra"
   --><!--#set var="url_en"       value="devices/magnetic-stick-memory.shtm"
   --><!--#set var="title_en"     value="The magnetic stick memory"
   --><!--#set var="prev"         value="/de/rechnertechnik/speichermedien.shtm#backlink-staebchenspeicher"
   --><!--#set var="prev_title"   value="Speichermedien: St�bchenspeicher"
   --><!--#set var="next"         value=""
   --><!--#set var="next_title"   value=""
   --><title>technikum29 - <!--#echo var="title" --></title>

    <!--#include virtual="/de/inc/head.inc.shtm" -->
    <meta name="keywords" lang="de" content="" />
    <meta name="DC.Title" content="technikum29 - <!--#echo var="title" -->" />
    <meta name="t29.this.version" content="v5.7.1" />
    <meta name="t29.this.date" content="17.08.2007" />
    <meta name="t29.this.comment" content="Backlink korrigiert (interner Anker)" />
</head>
<body>
<!--#echo encoding="none" var="heading" -->
<div id="content">
    <h2><!--#echo var="title" --></h2>

<div class="center">
   <img src="/shared/photos/rechnertechnik/speichermedien/staebchenspeicher.jpg" alt="St�bchenspeicher" width="600" height="404" />
   <div class="bildtext-bildbreite" style="width: 600px;"></div>
     <p>Der Festwertspeicher (ROM=Read-only-Memory) besteht aus 8 x 18 = 144 Ferritkernen (St�bchen) mit je einer Sekund�rwicklung (200 Windungen), die fest mit dem Rahmen verbunden sind.
Als Prim�rwicklung dienen die bis zu 256 F�deldr�hte pro Einschub (2 Einsch�be sind m�glich). Der F�deldraht ben�tigt nur knapp eine Windung um eine Eins zu erzeugen, siehe Bild. Der Einschub, hier neben den St�bchen abgebildet, wird so positioniert, dass die F�delungen den Stab umschlingen. Diese Klein-Transformatoren sind  matrixf�rmig zu 8 Zeilen x 18 Spalten angeordnet. Damit k�nnen 8 x 256 x 2 = 4096 W�rter (je 18 Bit) generiert werden.<br/>
In der Abbildung (aus dem NIXDORF Manual) ist einer von 256 F�deldr�hten gezeichnet. Werden nun nacheinander 8 Taktimpulse durch diesen Draht gejagt, so k�nnen die 8 mal 18-Bit W�rter seriell ausgelesen werden. 18 Leseverst�rker bewirken, dass jedes Wort parallel zur Verf�gung steht. Durch Induktion werden in den Sekund�rwicklungen Einsen erzeugt, wenn eine Umschlingung vorhanden ist (daher hei�t ein solcher Speicher u.a. auch "Indunktionsspeicher").<br/>
Die unteren beiden W�rter h�tten dann den Wert   111000000000001001 bzw. 000111100000011100.<br/>
Es war sehr zeitaufw�ndig, bis zu 256 Dr�hte um je bis zu 144 St�bchen zu f�hren. Aber Halbleiter-ROM�s gab es 1967 noch nicht. Daf�r konnte man ein solches ROM jederzeit reparieren bzw. "umstricken": Den alten Draht abklemmen (er muss nicht entfernt werden) und daf�r einen neuen Draht legen. Jedes Bit so gro� wie eine Erbse, ein solches ROM hat einen historischen Lerneffekt.
</p>

</div>

</div><!--content-->
<!--#include virtual="/de/inc/menu.inc.shtm" -->
</body>
</html>