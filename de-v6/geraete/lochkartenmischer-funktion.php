<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de">
<head><!--#set var="title"        value="Die Funktion des Lochkartenmischers"
   --><!--#set var="location"     value="punchcard-collator"
   --><!--#set var="part"         value="extra"
   --><!--#set var="url_en"       value="devices/punchcard-collator.shtm"
   --><!--#set var="title_en"     value="The function of the punch card collator"
   --><!--#set var="prev"         value="/de/rechnertechnik/lochkarten-edv.shtm#Lochkartenmischer"
   --><!--#set var="prev_title"   value="Lochkartenger�te: IBM 77"
   --><!--#set var="next"         value=""
   --><!--#set var="next_title"   value=""
   --><title>technikum29 - <!--#echo var="title" --></title>

    <!--#include virtual="/de/inc/head.inc.shtm" -->
    <meta name="keywords" lang="de" content="" />
    <meta name="DC.Title" content="technikum29 - <!--#echo var="title" -->" />
    <meta name="DC.Subject" content="Lochkartensortieralgorithmus" />
    <meta name="t29.this.version" content="v5.7.9" />
    <meta name="t29.this.date" content="13.10.2007" />
    <meta name="t29.this.comment" content="neu" />
</head>
<body>
<!--#echo encoding="none" var="heading" -->
<div id="content">
    <h2><!--#echo var="title" --></h2>

    <p>Was macht nun ein Lochkartenmischer?  Dazu muss man wissen, dass Betriebsvorg�nge in der Lochkarten EDV regelm��ig in feste (z.B. Adressen) und ver�nderliche (z.B. Ums�tze) Teile zerlegt und auf getrennte Lochkarten �bernommen wurden. Das erscheint ganz sinnvoll, da Adressen wenig �nderungen unterliegen w�hrend sich Ums�tze fortw�hrend �ndern.</p>

    <p>Wenn man z.B. auf einer Tabelliermaschine Rechnungen ausdrucken lassen wollte, war vorher eine Gruppierung der Lochkarten entsprechend ihrer Zusammengeh�rigkeit erforderlich.</p>

    <div class="box center">
        <img src="/shared/photos/rechnertechnik/grafiken/lochkartenmischer.de.gif" width="600" height="531" alt="Grafik zur Funktionsweise des Kartenmischers" />
    </div>

    <p>Im einfachsten Fall hat man nur zwei Kartenarten: Adresskarten und Umsatzkarten.
    <br/>Die Adresskarten stehen in aufsteigender Folge nach Kundennummern in der Adresskartei. Die zun�chst ungeordneten Umsatzkarten wurden durch die Sortiermaschine ebenfalls in aufsteigende Reihenfolge gebracht. Danach sind beide Kartenarten zu einem einzigen Kartenpaket so zu vereinigen, dass jeder Adresskarte die Umsatzkarten mit gleicher Kundennummer folgen. Liegen zu einer Adresskarte keine Umsatzkarte (oder umgekehrt) vor, so muss der Mischer diese Karte in ein gesondertes Fach ablegen.</p>

    <p>Diese Arbeit, zwei bereits vorsortierte Kartenpakete zu einem einzigen zu vereinigen und unpaarige Karten auszusteuern, war eine der wichtigsten Aufgaben des Lochkartenmischers. Dazu hat ein Mischer im Allgemeinen 2 Zufuhrmagazine und 4 Ablagef�cher. Es gab jedoch noch viele andere Anwendungsm�glichkeiten.</p>

</div><!--content-->
<!--#include virtual="/de/inc/menu.inc.shtm" -->
</body>
</html>