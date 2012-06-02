<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de">
<head><!--#set var="title"        value="Die Funktion der Sortiermaschine"
   --><!--#set var="location"     value="punchcard-sorter"
   --><!--#set var="part"         value="extra"
   --><!--#set var="url_en"       value="devices/punchcard-sorter.shtm"
   --><!--#set var="title_en"     value="The function of the punch card sorter"
   --><!--#set var="prev"         value="/de/rechnertechnik/lochkarten-edv.shtm#Sortiermaschinen"
   --><!--#set var="prev_title"   value="Lochkartenger�te: IBM 082, IBM 083"
   --><!--#set var="next"         value=""
   --><!--#set var="next_title"   value=""
   --><title>technikum29 - <!--#echo var="title" --></title>

    <!--#include virtual="/de/inc/head.inc.shtm" -->
    <meta name="keywords" lang="de" content="" />
    <meta name="DC.Title" content="technikum29 - <!--#echo var="title" -->" />
    <meta name="DC.Subject" content="Lochkartensortieralgorithmus" />
    <meta name="t29.this.version" content="v5.7.15" />
    <meta name="t29.this.comment" content="Typos von Udo Mittwoch, 24. Oktober 2007 09:19" />
</head>
<body>
<!--#echo encoding="none" var="heading" -->
<div id="content">
    <h2><!--#echo var="title" --></h2>

    <p>Nur die deutlich �ber 50-j�hrigen wissen noch, wie solche Lochkartenmaschinen arbeiten. Daher versuchen wir, Ihnen einen Einblick zu geben.</p>

    <p>Nehmen wir an, es solle eine Kundenkartei (jeder Kunde hat eine Nummer) nach der Kundennummer sortiert werden (man kann nat�rlich auch nach Namen sortieren).</p>

    <p>Der Ordnungsbegriff ist z.B. eine dreistellige Nummer. Um die Belege (Lochkarten) von Hand zu sortieren, w�rde man zun�chst nach der Hunderterstelle sortieren und so 10 Stapel gewinnen. Anschlie�end w�rde jeder Stapel nach der Zehnerstelle geordnet werden und schlie�lich diese je nach der Einerstelle. Das Prinzip besteht also in einem fortgesetzten Zerlegen in immer kleinere Stapel, die erst nach dem letzten Sortiergang wieder zusammengefasst werden.</p>
    
    <div class="box center">
        <!-- 700px PNG-Export aus SVG und dann 50 Farben GIMP auf gif => 30kb -->
        <img src="/shared/photos/rechnertechnik/grafiken/lochkartensortierer.de.gif" width="700" height="528" alt="Grafik zur Funktion des Sortierers" />
    </div>
    
    <p>Das maschinelle Sortieren kann dieses Verfahren, das eine unbegrenzte Zahl von Ablegef�chern ben�tigen w�rde, nicht anwenden. Es schl�gt den umgekehrten Weg ein und geht von der niedrigsten Stelle des Sortierbegriffs zur h�chsten. Der Kartenstapel wird dazu zun�chst nach der Einerstelle sortiert. Die entstehenden zehn Pakete werden in auf- oder absteigender Folge von Hand zusammengelegt. Anschlie�end wird der neue Stapel geschlossen nach der Zehnerstelle sortiert. Nach dem erneuten Zusammenfassen wird nach der Hunderterstelle sortiert usw.
    <br/>Das Prinzip des maschinellen Sortierens besteht also in einem abwechselnden Zerlegen und Zusammenfassen, es l�sst nie mehr als 10 Kartenstapel entstehen.</p>

    <p>Daraus ergeben sich die Grundregeln des maschinellen Sortierens:</p>

    <ul>
        <li>Es wird nach einer Spalte des Sortierbegriffes sortiert</li>
        <li>Die Sortierung beginnt an der wertniedrigsten Stelle und endet an der werth�chsten</li>
        <li>Die Sortierung erfordert soviel Maschinendurchl�ufe, wie der Ordnungsbegriff an Stellen umfasst (hier 3 St�ck)</li>
    </ul>

    <!--<p>Das untenstehende Bild zeigt, wie Karten mit dreistelligem Sortierbegriff in drei Sortierg�ngen in aufsteigende numerische Ordnung gebracht werden.</p>-->

</div><!--content-->
<!--#include virtual="/de/inc/menu.inc.shtm" -->
</body>
</html>