<?php
/**
 * Die Termine-Seite wurde im Mai 2013 überlegt und von Sven vorgeschlagen.
 * Durch folgende Anweisung ist sie deaktiviert, ein Aufruf leitet zur
 * Startseite weiter (dort zum Anker "Termine"):
 **/
 
#	header("Location: /de/#Termine"); exit;

/**
 * Wenn obige "header(...)"-Zeile auskommentiert bzw entfernt wird, ist diese
 * Seite wieder aufrufbar.
 **/

	$seiten_id = 'termine';
	$version = '$Id: index.php 387 2013-05-08 09:58:11Z heribert $';
	$titel = 'Termine für Führungen';
	
	require "../lib/technikum29.php";
?>

	<!-- Bereiche "nur-auf-deutscher-seite" werden im Englischen nicht angezeigt -->
	<div class="nur-auf-deutscher-seite">
	<h2>Termine, Führungen und Events</h2>
	
	Durch den <a href="/heribert-mueller/">Verlust von Heribert Müller</a> im April 2018
	<strong>ist der öffentliche Museumsbetrieb derzeit eingestellt</strong>.
	Die Freunde und Förderer des Museums möchten aber wieder die Tore des Museums öffnen.
	Dabei wird es sich in erster Linie um Führungen handeln. Sobald dies möglich sein
	wird, werden wir an dieser Stelle berichten.
		

	<!--
	allgemeine Informationen über Führungen und Gruppenanmeldungen
	finden Sie Hinweise auf der <a href="index.php">Startseite</a>.<br>
	

	<p>Bitte bedenken Sie: Zu allen Terminen ist eine vorherige Anmeldung notwendig! Kontaktieren Sie uns
	bitte rechtzeitig per E-Mail: <a href="mailto:post@technikum29.de">post@technikum29.de</a><br>
	-->
	
		<!-- Zurzeit sind keine Führungen geplant. Kleingruppen können sich gerne melden, wir können die Termine mit Einzelinteressenten auffüllen. -->
		<!--	>>ausgebucht! -->
	
	<!--Die folgende Tabelle listet Gruppenanmeldungen und Events auf.-->
	</div><!-- Ende nur-auf-deutscher-seite -->
	
	
	<h3>Archiv alter Führungen</h3>
	<p>Zu chronologischen Zwecken existiert 
	hier eine (unvollständige) Liste aller Termine, die zumindest auf der Homepage
	des Museums zwischen 2013 und 2018 angekündigt wurden.
	<a class="archiv-toggle js-only go" href="#termine">Archiv anzeigen</a>

	<!--
	  Effizient Termin-Geschichte durchgehen:
	    * Git-Version des Homepage-Repositories mit gitk oeffnen
	    * Filtern nach Datei "*termine.php"
	    * Mit Pfeil-Tasten durchscrollen.
	-->

	<div class="termine">

	<h2>2018</h2>
	<table class="termine">
	<tr class="title">
		<th style="width:9em">Datum
		<th style="width:13em;">Titel
		<th style="width:11em;">Typ
		<th>Teilnehmer     
	<tr>	<td>Sa, 26.05.2018
		<td>Computer-History<br>
		<td>Workshop<br>			
		<td>St. Lioba Schule, Bad Nauheim<br>
	<tr>	<td>Fr, 25.05.2018
		<td>Computer-History<br>
		<td>Interaktive Führung<br>			
		<td>Absint GmbH<br>Saarbrücken<br>
	<tr>	<td>Mi, 21.03.2018
		<td>Computer-History<br>
		<td>Interaktive Führung<br>			
		<td>Kursfabrik Wiesbaden<br>
		<span style="color:#E90015">Termin leider gestrichen</span>
	<tr>	<td>Fr, 16.03.2018
		<td>Computer-History und mehr...<br>
		<td>Geburtstags-Event<br>			
		<td>Florian wird 12!<br>
		<span style="color:#E90015">Termin leider gestrichen</span>
	<tr>	<td>So, 04.03.2018
		<td>Computer-History<br>
		<td>Interaktive Führung<br>	
		<td>Einzelpersonen und Kleingruppen<br>
		Es gibt noch freie Plätze!
	<tr>	<td>So, 18.02.2018
		<td>Computer-History<br>
		<td>Interaktive Führung<br>	
		<td>Einzelpersonen und Kleingruppen<br>
		ausgebucht!
	<tr>	<td>So, 28.01.2018
		<td>Computer-History-Workshop<br>
		<td>Geburtstags-Event<br>	
		<td>Simon wird 12 Jahre alt<br>
	</table>
	
	<h2>2017</h1>
	
	<table class="termine">
	<tr class="title">
		<th style="width:9em">Datum
		<th style="width:13em;">Titel
		<th style="width:11em;">Typ
		<th>Teilnehmer     
	<tr>	<td>So, 10.12.2017
		<td>Die Urahnen des Smartphones 
		<td>Geburtstags-Event
		<td>Philipps Freunde
	<tr>	<td>Sa, 09.12.2017
		<td>LGP-30 Restauration 
		<td>Spezial-Event<br>
		<td>LGP-Projektgruppe<br>
	<tr>	<td>Mi, 06.12.2017
		<td>Computer-History 
		<td>Interaktive Führung<br>
		<td>Gruppe Koch<br>
	<tr>	<td>Sa, 02.12.2017
		<td>Computer-History-Workshop 
		<td>Geburtstags-Event
		<td>Jan´s Freunde
	<tr>	<td>Sa, 25.11.2017
		<td>Computer-History<br>
		<td>Interaktive Führung<br>			
		<td>Für Einzelpersonen und Klein-<br>
		gruppen. <br>Ausgebucht!<br>
	<tr>	<td>Fr, 17.11.2017
		<td>Computer-History
		<td>Interaktive Führung
		<td>Gruppe Biehl
	<tr>	<td>So, 12.11.2017
		<td>Computer-History<br>
		<td>Interaktive Führung<br>			
		<td>Gruppe Dähne<br>
	<tr>	<td>Sa, 11.11.2017
		<td>Computer-History-Workshop<br>
		<td>Geburtstags-Event<br>
		<td>Freunde von Alexander<br>
	<tr>	<td>So, 05.11.2017
		<td>Computer-History-Workshop<br>
		<td>Geburtstags-Event<br>
		Linus wird 12 !
		<td>Freunde von Linus<br>
	<tr>	<td>Sa, 04.11.2017
		<td>LGP-30 Restauration<br>
		<td>Spezial-Event<br>
		<td>Projekt-Mitarbeiter<br>
	<tr>	<td>Mi, 25.10.2017
		<td>Dreharbeiten des Hessischen Rundfunks<br>
		<td>10:00 Uhr<br>			
		<td>HR-Mitarbeiter<br>
	<tr>	<td>Do, <b>19. Oktober</b><br>10:00 Uhr
		<td>Computer-History<br>
		<td>Interaktive Führung<br>			
		<td>Kinder Akademie<br>Fulda<br>
	<tr>	<td><b>16.10.</b> bis <b>20.10.</b><br>
		14 bis 16 Uhr
		<td>Robotik-Workshop<br>
		<td>Fortsetzungskurs<br>
		siehe <a href="/robotik" target="_blank"> "Robotik"</a>
		<td>11 bis 13-Jährige<br>
	<tr>	<td><b>9.10.</b> bis <b>13.10.</b><br>
		14 bis 16 Uhr
		<td>Robotik-Workshop<br>
		<td>Einführungskurs<br>
		siehe <a href="/robotik" target="_blank"> "Robotik"</a>	
		<td>11 bis 13-Jährige<br>
	<tr>	<td>Mo, 09.10.2017
		<td>Computer-History<br>
		<td>Spezial-Führung<br>
		<td>Interne Gruppe<br>
	<tr>	<td>Sa, 07.10.2017
		<td>Computer-History-Workshop<br>
		<td>Geburtstags-Event<br>
		<td>Freunde von Lucas<br>
	<tr>	<td>Mi, 04.10.2017
		<td>Computer-History<br>
		<td>Interaktive Führung<br>
		<td>Physik-LK<br>Main-Taunus-Schule, Hofheim
	<tr>	<td>So, 24.09.2017
		<td>Computer-History-Workshop<br>
		<td>Geburtstags-Event
		<td>Marlon´s Freunde<br>
	<tr>	<td>So, 27.08.2017
		<td>Computer der Stunde Null, wie alles begann **)
		<td colspan=2>Interaktive Führung, Wiederholung, ausgebucht; <br>
		Von der Rechenmaschine zum Rechenzentrum: Nichts hat sich je so rasant entwickelt wie die Computer- und EDV-Technik. Bei dieser interaktiven "Computer-History"-Führung erleben Sie als Besucher den Beginn dieser Ära anhand von tonnenschweren, noch funktionierenden Computer-Dinosauriern. Das ist einmalig in Deutschland und auch für Kids ab ca. 11 Jahre hochinteressant, max 16 Teilnehmer
	<tr>
		<td>Fr, <b>25. August</b><br>16:30 Uhr
		<td>Computer der Stunde Null, wie alles begann **)
		<td>Interaktive Führung<br>
		<td>Gruppe Brox<br>
			+ Einzelpersonen<br>
	<tr>
		<td>Sa, <b>5. August</b><br>19:00 Uhr
		<td>Mathematik, Sprache der Natur *)
		   <br>Tage der Industriekultur Rhein-Main 2017
		<td colspan=2>Event-Vortrag: Mathematik - für die Einen eines der wohl unbeliebtesten Schulfächer, für andere der Schlüssel zum Verständnis der Welt.<br> 
		Das Thema beleuchtet sowohl aus mathematischer als auch aus philosophischer Sicht, was Mathematik leisten kann, und wo sie an ihre Grenzen stößt. Ein unterhaltsamer, spannender Event-Vortrag von Prof. Dr. Bernd Ulmann (Mathematiker/Informatiker) und Dr. Patrick Hedfeld (Philosoph). Alle, welche die Referenten bereits
		mehrfach im technikum29 erlebt haben wissen es: Das darf man nicht versäumen!<br> 
		Maximale Teilnehmerzahl: 50 (ausgebucht)
			
	<tr>	<td>So, <b>23. Juli</b><br>14:00 Uhr
		<td>Computer-History 
		<td>Spezial-Führung
		<td>Gruppe Gräf <br>
	<tr>	<td>Mi, <b>19. Juli</b><br>11:30 Uhr
		<td>Computer-History 
		<td>Dreharbeiten des Hessischen Rundfunks
		<td>nur für HR-Mitarbeiter <br>
	<tr>	<td>Do, <b>29. Juni</b><br>9:00 + 10:15 Uhr
		<td>Computer-History<br>
		<td>Interaktive Führung
		<td>Eichendorffschule G5b<br>
	<tr>	<td>Mo, <b>26. Juni</b><br>15:00 Uhr
		<td>Computer-Dinosaurier<br>und mehr....
		<td>Interaktive Führung
		<td>Rossertschule <br>
	<tr>	<td>Fr, <b>2. Juni</b><br>15:00 Uhr
		<td>Computer-History 
		<td>Führung
		<td>IfKom Landesverband Hessen<br>
	<tr>	<td>Mo, <b>22. Mai</b><br>14:00 Uhr
		<td>Computer-History 
		<td>Führung
		<td>IBM-Techniker<br>
	<tr>	<td>So, <b>21. Mai</b><br>14:00 Uhr
 		<td>Computer-History 
		<td>Führung
		<td>Einzelpersonen und Kleingruppen
	<tr>	<td>So, <b>7. Mai</b><br>14:15 Uhr
		<td>Computer-History 
		<td>Führung
		<td>UKW-Kelkheim <br>
	<tr>	<td>Di, <b>2. Mai</b><br>9:00 Uhr
		<td>Computer-History-Workshop 
		<td>Interaktive Führung
		<td>Mathe-LK Weiterstadt<br>
	<tr>
		<td>So, <b>23. April</b><br>14:00 Uhr
		<td>Klänge, Bilder,<br> Kommunikation 
		<td>Führung
		<td>Einzelpersonen und Gruppen <br><a class="email" href="https://www.vhs-mtk.de/index.php?id=37&kathaupt=11&knr=G0100111&kursname=Klnge+Bilder+Kommunikation+Faszinierende+Entwicklung+ab+1900">Anmeldung nur über die VHS-Main-Taunus</a>
	<tr>	<td>Di, <b>11. April</b><br>9:30 Uhr
		<td>Computer-History 
		<td>Interaktive Führung
		<td>14-16-Jährige Schüler <br>ausgebucht!
	<tr>	<td>Mo, <b>10. April</b>  bis<br> Fr, <b>14. April</b>
		<td>Robotik-Workshop
		<td>Roboter programmieren
		<td>Kids 11-13 Jahre <br>
	<tr>	<td>Mo, <b>4. Apr.</b>  bis<br> Fr, <b>14. Apr.</b>
		<td>Robotik-Workshop
		<td>Zwei Robotik-Workshops
 		<td>Kids von 11-13 Jahren <br>
	<tr>	<td>Freitag<br><b>24. März</b><br>19:00 Uhr
		<td>Das Internet der Dinge,<br>Industrie 4.0
		<td colspan=2>Event-Vortrag; Einzelpersonen und Gruppen <br><a class="email" href="mailto:info@vhs-mtk.de">Anmeldung nur über die VHS-Main-Taunus<br>
			Kursnummer: G0100112</a>, 
			Das Internet der Dinge, Industrie 4.0, Blick in die Zukunft</h4>
		<p> Was haben Captain Kirk, Picard, Janeway und weitere Offiziere der Sternenflotte aus unserer Kindheit mit uns heute zu tun? Sie benutzten einen persönlichen Assistenten, der sie mit der Brücke oder dem Computer verband. Und heute nennen wir es Smartphone. Und das Ganze funktioniert, weil die Geräte über das Internet verbunden sind. In Deutschland spricht man von der „<b>Industrie 4.0</b>“ und im Rest der Welt vom „Internet der Dinge“. Im Computer-Museum in Kelkheim, umgeben von den Dinosauriern in der Computerevolution, erwartet Sie ein verständlicher Einblick in die Welt vom „Internet der Dinge“, dessen Akteure sowie Trends (siehe "Termine", 24.3.).<br>
			
			
	<tr>	<td>Mi, <b>21. März 2018</b><br>14:00 Uhr
		<td>Computer-History<br>
		<td>Interaktive Führung<br>			
		<td>Kursfabrik<br>Wiesbaden<br>
	<tr>	<td>Freitag<br><b>17. März</b><br>10:00 Uhr
		<td>Computer-History 
		<td>Führung
		<td>Gutenberg Universität Mainz	
	<tr>	<td>Mittwoch<br><b>8. März</b><br>15:00 Uhr
		<td>Computer-History 
		<td>Führung
		<td>Vivo Wiesbaden
	<tr>	<td>Sonntag<br><b>5. März</b><br>14:00 Uhr
		<td>Computer der Stunde Null: Wie alles begann 
		<td>Führung
		<td>Einzelpersonen und Gruppen <br><a class="email" href="mailto:info@vhs-mtk.de">Anmeldung nur über die VHS-Main-Taunus</a>
 	<tr>	<td>Sonntag<br><b>26. Februar</b><br>14:00 Uhr
		<td>Computer-History 
		<td>Führung
		<td>Einzelpersonen und Gruppen <br><a class="email" href="mailto:info@vhs-mtk.de">Anmeldung nur über die VHS-Main-Taunus</a> (Ausgebucht!)
	<tr>	<td>Sonntag<br><b>19. Februar</b><br>14:00 Uhr
		<td>Computer-History 
		<td>Führung
		<td>Gruppe F.G. 
	<tr>	<td>Dienstag<br><b>7. Februar</b><br>11:00 Uhr
		<td>Computer-History <td>Interaktive Führung<br> + Workshop
		<td>Klasse 10 der IGS Schönenberg 
	<tr>	<td>Dienstag<br><b>24. Januar</b><br>10:00 Uhr
		<td>Computer-Entwicklung <td>Event
		<td>Hessischer Rundfunk
	<tr>	<td>Samstag<br><b>14. Januar</b><br>15:30 Uhr
		<td>Bilder-Klänge-<br>Kommunikation <td>Geburtstags-Event
		<td>Lukas wird 13 Jahre alt
	<tr>	<td>Donnerstag<br><b>5.Januar</b><br>
		<td>Computer-History <td>Filmaufnahmen
		<td>DOCUBYTE   
	</table>
	
	<h2>2016</h2>	
	<table class="termine">
	<tr class="title">
		<th style="width:9em">Datum
		<th style="width:13em;">Titel
		<th style="width:11em;">Typ
		<th>Teilnehmer     
	<tr>	<td>Dienstag<br><b>27.Dezember</b><br>16:30 Uhr
		<td>Computer-History <td>Geburtstags-Event
		<td>für H.   
	<tr>	<td>Mittwoch<br><b>14. Dezember</b><br>14:00 Uhr
 		<td>Computer-History <td>Führung
 		<td>IBM-Deutschland<br>ausgebucht!
	<tr>	<td>Dienstag<br><b>13. Dezember</b><br>18:00 Uhr
		<td>Computer-History <td>Führung 
		<td>IT-Abteilung<br>St. Josefs-Hospital Wiesbaden
	<tr>	<td>Freitag<br><b>9. Dezember</b><br>14:00 Uhr
		<td>Computer-History <td>Führung
		<td>IBM-Techniker<br>ausgebucht!
	<tr>	<td><b>3. Dezember</b> (Sa)<br>14:00 Uhr
		<td>Computer-History <td>Führung
		<td>Einzelpersonen und<br>Kleingruppen
	<tr>	<td><b>23. November</b> (Mi)<br>10:00 Uhr
		<td>Computer-History <td>Spezial-Führung
		<td>Kulturamt Kelkheim <br>ausgebucht!
	<tr>	<td><b>19. November</b> (Sa)<br>14:00 Uhr
		<td>Computer-History <td>Führung
		<td>ausgebucht! 
	<tr>	<td><b>11. November</b> (Sa)<br>14:00 Uhr
		<td>Computer-History <td>Führung
		<td>es gibt noch freie Plätze
		
	<tr>	<td><b>4. Sept.</b> (So)<br>14:30 Uhr
		<td>Computer-History<br>Experimental-Workshop<td>Geburtstags-Event
		<td>für Alexander (12J.) 
		
	<tr>	<td><b>28. Aug.</b> (So)<br>15:00 Uhr
		<td>Computer-History<br>Interaktive Führung<td>Geburtstags-Event
		<td>für Lorenzo (12J.)

	<tr>	<td>22.08-26.08.2016
		<td>Fortsetzungskurs Roboter
		<td colspan=2>Schüler in den Sommerferien 2017
		
	<tr>	<td>So 21.08.2016, 19 Uhr
		<td>Vortrag, Titel:  ...und sie dreht sich weiter! Von der Lust an  Weltuntergängen und warum sie nicht eintreten
		<td colspan=2>Woher rührt die Lust an drohenden, aber glücklicherweise dann doch nicht eintretenden Weltuntergängen? Und warum eigentlich geht die Welt nicht unter?
Diesen Fragen widmen sich der Philosoph Dr. <a href="http://patrick-hedfeld.de/">Patrick Hedfeld</a> und der Mathematiker Prof. Dr. <a href="http://www.analogmuseum.org/deutsch/">Bernd Ulmann</a> in diesem spannenden und zugleich unterhaltsamen Vortrag, in dem wenig heilig ist.
		
	<tr>	<td>15.08-19.08.2016
		<td>Einführungskurs Roboter
		<td colspan=2>Schüler in den Sommerferien 2017, 11-13-Jährige Kids: 
Täglich von 10:00 bis 12:00 Uhr können hier technikinteressierte Schüler/innen lernen, wie man Roboter immer intelligenter macht. Ein spannender und sehr beliebter Workshop, ausgeführt mit Lego Mindstrorms Education, siehe <a href="/robotik">Robotik-Website</a>
		
	<tr>	<td>So 14.08.2016, 14 Uhr
		<td>Vortrag: Klänge, Bilder Kommunikation: Faszinierende Entwicklung ab 1900</h4>
		<td colspan=2>Die Besucher dieser Zeitreise erleben mit vielen Vorführungen, wie sich die Technik für Ton- und Bild entwickelt hat: Innerhalb von zwei Menschenleben wurden die Möglichkeiten hierzu revolutioniert.
		Von den ersten Musikautomaten,  Bildübertragungen, Faxgeräte, Fernkopierer über kuriose Erfindungen bis zum selbst spielenden Klavier reicht die Palette der historischen, funktionsfähigen Technik. Auch für Kids ab ca. 12 Jahre bestens geeignet.
		
	<tr>	<td>13.08.2016, 13 Uhr
		<td>Votrag: Computer &ndash; Wie alles begann
		<td colspan=2>Computer sind heute aus unserem Leben nicht mehr wegzudenken. Die Geschichte dieser faszinierenden und zuweilen auch bedrohlichen Technik begann vor ca. 60 Jahren. Steigen Sie ein in die Zeitreise „Computer-History“:  Die ersten Rechner der Menschheit, tonnenschwer und noch funktionsfähig.  Einmalig in Deutschland zeigen wir Ihnen die revolutionäre Entwicklung dieser Technik mit ungewöhnlichen Vorführungen. Auch für Kids ab ca. 11 Jahre gut geeignet. Diese werden aktiv mit einbezogen.
		
	<tr>	<td><b>2. August</b> (Di)<br>16:00 Uhr
 		<td>Computer-History <td>Führung
		<td>Industriepark Höchst
		
	<tr>
		<td><b>27. Juli</b> (Mi)<br>10:00 Uhr
		<td>Computer-Dinosaurier <td>Interaktive Führung
		<td>Ferienspiele der Stadt Kelkheim 
	<tr>
		<td><b>28. Juli</b> (Do)<br>09:30 Uhr
		<td>Computer-History <td>Workshop
		<td>Ferienspiele der Stadt Kelkheim 

	<tr>
		<td><b>20. Juli</b> (Mi)<br>09:30 Uhr
		<td>Robotik-Camp <td>Workshop
		<td>Ferienspiele der Stadt Kelkheim  <br>

	<tr>
		<td><b>12. Juli</b> (Di)<br>10:00 Uhr
		<td>Computer-History <td>Workshop
		<td>Leibnitz-Schule Offenbach  
	<tr>
		<td><b>13. Juli</b> (Mi)<br>9:30 Uhr
		<td>Computer-History <td>Workshop
		<td>Hochtaunusschule

	<tr>
		<td><b>10. Juli</b> (So)<br>15:00 Uhr
		<td>Computer-History<br>Experimental-Workshop <td>Geburtstags-Event
		<td>für Tobia (dann 14J.) 

	<tr>
		<td><b>24. Juni</b> (Fr)<br>15:00 Uhr
		<td>Computer-History <td>Führung
		<td>Exxeta AG, Frankfurt
 	<tr>
		<td><b>14. Juni</b> (Di)<br>10:00 Uhr
		<td>Computer-Event <td>Programm-Erweiterungen
		<td>Gruppe Naumann 
	<tr>
		<td><b>04. Juni</b> (Sa)<br>15:00 Uhr
		<td>Computer-History<td>Workshop
		<td>Geburtstags-Event für Lorenzo 
	<tr>
		<td>Mi 01. Juni, 9:00
		<td>Computer-Dinosaurier (Interaktive Führung)
		<td>Pestalozzischule, Kelkheim
	<tr>
		<td><b>29. Mai</b> (So)<br>14:00 Uhr
		<td>Computer-History <td>Führung
		<td>Gruppe Sawitza  <br> 
 		
	<tr>
		<td><b>18. Mai</b> (Mi)<br>09:30 Uhr
		<td>Computer-Dinosaurier
		<td>Interaktive Führung
		<td>Uhlandschule Frankfurt <br>
		
	<tr>	<td>Do 05.05.2016, 11:00 Uhr
		<td>Computer-History
		<td>Führung
		<td>Gruppe Steinberg
	
	<tr>	<td>04.05.2016, 12:30 Uhr
		<td>Computer-History
		<td>
		<td>ADFC Frankfurt
	
	<tr>	<td>4.04.2016 - 08.04.2016, 14-16 Uhr
		<td>2. Robotik-Workshop in den Osterferien
		<td>
		<td>


	
	<tr>	<td>Freitag, der <b>15. April 2016</b> um 11:00 Uhr
		<td>Computer-History (Führung)
		<td>
		<td>CHILI GmbH
	
	<tr>	<td>Sonntag, der <b>10. April 2016</b> um 14:00 Uhr <br>
		<td>Computer-History (Führung)
		<td>
		<td>Biehl

	<tr>	<td>Mittwoch, der <b>23. März 2016</b> um 17:00 Uhr
		<td>Computer-History (Führung)</h4> 
		<td>
		<td>Internetpaten

	<tr>	<td>Sonntag, der <b>10. Januar 2016</b> um 14:00 Uhr
		<td>Computer-Dinosaurier (Führung)
		<td>
		<td>Für Kid`s + Eltern (ausgebucht!)
		
	</table>
	
	<h2>2015</h2>
	
	<div class="box termin clear-after">		
	<div class="left">
	<p class="date"><em>2015</em> 15. Dez.</p></div>
	<h4>Computer-History (Führung)</h4> 
	Termin: Dienstag, der <b>15. Dezember</b> um 14:30 Uhr <br>	
	</div> 	
	
	<ul>
		<li>Fr 11.12.2015, 16 Uhr: Computer-History (Führung), NITEX GmbH
		<li>15.12.2015, 14:30 Uhr: Computer-History (Führung)
		<li>20.12.2015: Computer-History (Führung)
	</ul>
	
	<div class="box termin clear-after">		
	<div class="left">
	<p class="date"><em>2015</em> 8. Dez.</p></div>
	<h4>Computer-History (Führung)</h4> 
	Termin: Dienstag, der <b>8. Dezember</b> um 14:30 Uhr <br>
	Wolfgang-Winckler-Haus
	</div> 	
	
 	<div class="box termin clear-after">		
 	<div class="left">
	<p class="date"><em>2015</em> 28. Nov.</p></div>
	<h4>Computer-History (Führung)</h4> 
	Termin: Samstag, der <b>28. November</b> um 14:00 Uhr <br>
	2 freie Plätze sind noch vorhanden.
	</div> 	
	
 	<div class="box termin clear-after">		
 	<div class="left">
	<p class="date"><em>2015</em> 13. Nov.</p></div>
	<h4>Computer-History + Experimental-Workshop</h4> 
	Termin: Freitag, der <b>13. November</b> um 15:00 Uhr <br>
	First Data Gruppe
	</div>
	
	<div class="box termin clear-after">		
	<div class="left">
	<p class="date"><em>2015</em> 8. Nov.</p></div>
	<h4>Computer-History + Kid´s Workshop</h4> 
	Termin: Sonntag, der <b>8. November</b> ab 13:00 Uhr <br>
	Stuttgarter-Gruppe
	</div>
	
	<div class="box termin clear-after">		
	<div class="left">
	<p class="date"><em>2015</em> 7. Nov.</p></div>
	<h4>Computer-History (Führung)</h4> 
	Termin: Samstag, der <b>7. November</b> um 10:00 Uhr <br>
	UNISYS-Gruppe
	</div>
	
<div class="box termin clear-after">
	<div class="left">
	<p class="date"><em>2015</em>19.-31.<br>Okt.</p></div>
	<h4>Robotik-Workshop in den Ferien für Kids von 11-13 Jahren.</h4> 
	Hochinteressante Kurse in welchen Roboter der neuesten Generation gebaut und programmiert werden. Weitere Informationen unter <a class="go" href="http://www.technikum29.de/robotik"> Robotik-Workshop</a><br>
	Termine: <b>19. bis 31. Oktober.</b> Diese Kurse sind ausgebucht.
	</div>
	
<div class="box termin clear-after">		
	<div class="left">
	<p class="date"><em>2015</em> 16. Okt.</p></div>
	<h4>Computer-History (Führung)</h4> 
	Termin: Freitag, der <b>16. Oktober</b> um 15:30 Uhr <br>
	Gruppe "Steinbach", Einzelinteressenten können sich noch anmelden.
	</div> 
	
	<div class="box termin clear-after">		
	<div class="left">
	<p class="date"><em>2015</em> 10. Okt.</p></div>
	<h4>Geburtstags-Event</h4> 
	Termin: Samstag, der <b>10. Oktober</b> ab 15:00 Uhr <br>
	Nick wird 13 Jahre alt. Computer-History + Experimental-Workshop
	</div> 
	
	<div class="box termin clear-after">		
	<div class="left">
	<p class="date"><em>2015</em> 4. Okt.</p></div>
	<h4>Computer-History (Führung)</h4> 
	Termin: Sonntag, der <b>4. Oktober</b> um 17:00 Uhr <br>
	Gruppe "Kammann", Einzelinteressenten können sich noch anmelden.
	</div> 
	
	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2015</em> 25. Juli</p>	</div>
	<h4>Computer-History</h4>
	Termin: Samstag, der <b>25. Juli</b> um 14:00 Uhr <br>
	Hochschule RheinMain
	</div>
	
	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2015</em> 19. Juli</p>	</div>
	<h4>Der Beginn des zweiten Maschinenzeitalters</h4>
	Termin: Sonntag, der <b>19. Juli</b> 14:00 Uhr <br>	
	<p class="small">Im ersten Maschinenzeitalter wurden die Muskelkraft von Mensch und Tier durch Maschinen ersetzt.
Im zweiten Maschinenzeitalter wird die menschliche Intelligenz durch die digitale Revolution zunehmend ersetzt. Wir stecken mitten drin.
<br> Wie fing das alles an? Wie sahen die ersten Computer aus? Hier erleben Sie riesige dinosaurierhafte Computer ab der Stunde Null, alle in Funktion! Wir gestalten sehr lebendig die Entwicklungsgeschichte unserer Computer bis in die 70er Jahre.  Auch sehr gut für technikinteressierte Kids ab 11 J. geeignet
</div>
	
	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2015</em> 18. Juli</p>	</div>
	<h4>Die Entwicklung moderner Kommunikationsmittel</h4>
	Termin: Samstag, der <b>18. Juli</b> 14:00 Uhr <br>	
	<p class="small">Sie erleben mit vielen Vorführungen und Experimenten die Entwicklungsgeschichte der Kommunikationstechnik vom Telegraphen über Rundfunk, Fernsehen, Beginn der Farbe, Telex, Fax, Schall- und Magnetbandaufzeichnung ein breites Spektrum der Zeiten zu denen das „Internet“ absolute Utopie war. Die Zeitreise beginnt 1915 mit selbst spielenden Klavieren und endet ca. 1971 mit dem ersten Rückprojektions-Farbfernseher der Welt. Alles bespickt mit teils ungewöhnlichen Experimenten. Auch für technikinteressierte Kids ab 12 bestens geeignet
	</div> 



	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2015</em> 8. Juli</p>	</div>
	<h4>Computer-History</h4>
	Termin: Mittwoch, der <b>8. Juli</b> um 15:00 Uhr <br>
	Wirtschaftsinformatiker der Goethe-Universität
	</div> 


	<div class="box termin clear-after">
		<div class="left">
 			<p class="date"><em>2015</em> 1. Juli</p>	</div>
 	<h4>Computer-History</h4>
 	Termin: Mittwoch, der <b>1. Juli</b> um 15:00 Uhr <br>
 	</div>

	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2015</em> 21. Juni</p>	</div>
	<h4>Computer-History</h4>
	Termin: Sonntag, der <b>21. Juni</b> um 14:00 Uhr <br>
	für Einzelbesucher und Kleingruppen (ausgebucht!)
	</div> 	
 	
 	<div class="box termin clear-after">
 		<div class="left">
			<p class="date"><em>2015</em> 20. Juni</p>	</div>
	<h4>Computer-History</h4>
	Termin: Samstag, der <b>20. Juni</b> um 16:00 Uhr <br>
	Gruppe Schuster
	</div> 	

	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2015</em> 17. Juni</p>	</div>
	<h4>Computer-Dinosaurier und Roboter</h4>
	Termin: Mittwoch, der <b>17. Juni</b> um 15:00 Uhr <br>
	Pestalozzischule
	</div> 	

	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2015</em> 16. Juni</p>	</div>
	<h4>Computer-Dinosaurier und Roboter</h4>
	Termin: Dienstag, der <b>16. Juni</b> um 15:00 Uhr <br>
	Pestalozzischule
	</div>
	
	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2015</em> 10. Juni</p>	</div>
	<h4>Computer-Dinosaurier</h4>
	Termin: Mittwoch, der <b>10. Juni</b>  <br>
	Uhlandschule Frankfurt
	</div> 	

	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2015</em> 6. Juni</p>	</div>
	<h4>Geburtstags-Event</h4>
	Termin: Samstag, der <b>6. Juni</b> ab 15.00 Uhr<br>
	für Jonathan (wird 13 J.)
	</div>
	
	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2015</em> 15. Mai</p>	</div>
	<h4>Computer-History</h4>
	Termin: Freitag, der <b>15. Mai</b> um 10 Uhr<br>
	Software Consult MSC
	</div> 	
	
<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2015</em> 16. Mai</p>	</div>
	<h4>Computer-History</h4>
	Termin: Samstag, der <b>16. Mai</b>  <br>
	Marburger Computer-Stammtisch
	</div> 	

<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2015</em> 9. Mai</p>	</div>
	<h4>Geburtstags-Event</h4>
	Termin: Samstag, der <b>9. Mai</b> ab 15.00 Uhr<br>
	für Moritz (wird 13 J.)
	</div> 	
	
	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2015</em> 3. Mai</p>	</div>
	<h4>Computer-History</h4>
	Termin: Sonntag, der <b>3. Mai</b> um 14.00 Uhr<br>
	Führungs-Event für Einzelanmeldungen
	</div> 	
	
	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2015</em> 12. Mai</p>	</div>
	<h4>Computer-History und Experimental-Workshop</h4>
	Termin: Dienstag, der <b>12. Mai</b> um 13:00 Uhr<br>
	Musterschule Frankfurt
	</div> 	
 
	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2015</em> 29. April</p>	</div>
	<h4>Computer-History und Experimental-Workshop</h4>
	Termin: Mittwoch, der <b>29. April</b> <br>
	Strothoff International School
	</div> 	

<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2015</em> 28. April</p>	</div>
	<h4>Computer-History</h4>
	Termin: Dienstag, der <b>28. April</b> um 11.00 Uhr<br>
	FEB Deutschland e.V.
	</div> 	
	
	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2015</em> 19. April</p>	</div>
	<h4>Computer-History</h4>
	Termin: Sonntag, der <b>19. April</b> um 14:00 Uhr <br>
	Physiker der Goethe-Universität
	</div> 
	
<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2015</em> 16. April</p>	</div>
	<h4>Computer-History + Experimental-Workshop</h4>
	Termin: Donnerstag, der <b>16. April</b> um 9:00 Uhr <br>
	Physik-LK, Main-Taunus-Schule
	</div> 

<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2015</em> 15. April</p>	</div>
	<h4>Computer-History + Experimental-Workshop</h4>
	Termin: Mittwoch, der <b>15. April</b> um 9:00 Uhr <br>
	Informatik-Kurse der Main-Taunus-Schule
	</div> 
	
	
	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2015</em> 29. März</p>	</div>
	<h4>Computer-History</h4>
	Termin: Sonntag, der <b>29. März</b> um 14:00 Uhr <br>
	Ausgebucht!
	</div>

	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2015</em> 1. März</p>	</div>
	<h4>Computer-History</h4>
	Termin: Sonntag, der <b>1. März</b> um 10:00 Uhr <br>
	Geburtstags-Event für P.K.
	</div> 

 <div class="box termin clear-after">
 		<div class="left">
			<p class="date"><em>2015</em> 28. April</p>	</div>
	<h4>Computer-History</h4>
	Termin: Dienstag, der <b>28. April</b> um 11.00 Uhr<br>
	FEB Deutschland e.V.
	</div> 	

	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2015</em> 24. Jan.</p>	</div>
	<h4>Computer-History</h4>
	Termin: Samstag, der <b>24. Januar</b> um 17:00 Uhr <br>
	</div> 	

<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2015</em> 23. Jan.</p>	</div>
	<h4>Computer-History + Experimental-Workshop</h4>
	Termin: Freitag, der <b>23. Januar</b> ab 15:30 Uhr <br>
	Linus wird 11 Jahre, Geburtstags-Event
	</div> 
	
<h2>2014</h2>

 <div class="box termin clear-after">
 		<div class="left">
			<p class="date"><em>2014</em> 16. Dez.</p>	</div>
 	<h4>Computer-History</h4>
	Termin: Dienstag, der <b>16. Dezember</b> um 18:00 Uhr <br>
 	Gruppe: IBM Deutschland
 	</div> 	
 	
	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2014</em> 29. Nov.</p>	</div>
	<h4>Computer-History + Experimental-Workshop</h4>
	Termin: Samstag, der <b>29. November</b> ab 15:00 Uhr <br>
	Kindergeburtstag von Olav-Moritz
	</div> 
	
	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2014</em> 23. Nov.</p>	</div>
	<h4>Computer-History</h4>
	Termin: Sonntag, der <b>23. November</b> um 14:00 Uhr <br>
	Ausgebucht!
	</div> 
	
	<div class="box termin clear-after">	
		<div class="left">
				<p class="date"><em>2014</em>Ende Okt.</p>	</div>
		<h4>Robotik-Ferienkurs für Kids von 11-13 Jahren.
		<br></h4> Hochinteressanter Kurs in welchem Roboter gebaut werden, die sich programmieren lassen und damit die verrücktesten Dinge tun. Weitere Informationen unter <a class="go" href="http://www.technikum29.de/robotik"> Robotik-Kurs</a><br>
		Termin: <b>Herbstferien</b>
	</div>

	
	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2014</em> 14. Okt.</p>	</div>
	<h4>Computer-History</h4>
	Termin: Dienstag, der <b>14. Oktober</b> Vormittags <br>
	Führung für den Informatik-LK der MTS
	
	</div>
	
	

	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2014</em> 16. Sept.</p>	</div>
	<h4>Computer-History</h4>
	Termin: Dienstag, der <b>16. September</b> um 18:00 Uhr <br>
	Führung der Gruppe Dr. Bach
	
	</div>

	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2014</em> 13. Sept.</p>	</div>
	<h4>Computer-History</h4>
	Termin: Samstag, der <b>13. September</b> um 14:00 Uhr <br>
	Spezial-Führung UNIVAC 9400
	
	</div>
	
	<div class="box termin clear-after">
			<div class="left">
				<p class="date"><em>2014</em>18. Aug.</p>	</div>
		<h4>Robotik-Ferienkurs für Kids von 11-13 Jahren.</h4> Hochinteressanter Kurs in welchem Roboter gebaut werden, die sich programmieren lassen und damit die verrücktesten Dinge tun. Weitere Informationen unter <a class="go" href="http://www.technikum29.de/robotik"> Robotik-Ferienkurs</a><br>
		Termin: 18. bis 22. August</h4>
	</div>
		
	<div class="box termin clear-after">
			<div class="left">
				<p class="date"><em>2014</em> 12. Aug.</p>	</div>
		<h4>Computer-History</h4>
		Termin: Dienstag, der <b>12. August</b> <br>
		Spezial-Führung
	</div>

	<div class="box termin clear-after">
			<div class="left">
				<p class="date"><em>2014</em> 9. Aug.</p>	</div>
		<h4>Computer-History</h4>
		Termin: Samstag, der <b>9. August</b> um 14:00 Uhr <br>
		

		
		</div>
		
		 
	<div class="box termin clear-after">
			<div class="left">
				<p class="date"><em>2014</em> 8. Aug.</p>	</div>
		<h4>Werbeaufnahmen, Hessischer Rundfunk</h4>
		Termin: Freitag, der <b>8. August</b> ganztägig<br>
	 
	</div>

	<div class="box termin clear-after">
			<div class="left">
				<p class="date"><em>2014</em> 4. Aug.</p>	</div>
		<h4>Die Urahnen des Smartphones, Experimental-Workshop</h4>
		Termin: Montag, der <b>4. August</b> 9:45-12:15 Uhr<br>
	Feriengruppe B<br>
	</div>
	
	 <div class="box termin clear-after">
 		<div class="left">
			<p class="date"><em>2014</em> 1. Aug.</p>	</div>
		<h4>Die Urahnen des Smartphones, Experimental-Workshop</h4>
		Termin: Freitag, der <b>1. August</b> 9:45-12:15 Uhr<br>
	Feriengruppe A<br>
	</div>
	
	<div class="box termin clear-after">
			<div class="left">
				<p class="date"><em>2014</em> 26. Juli</p>	</div>
		<h4>Deus ex machina - Computer im Kalten Krieg und ihr Erbe</h4>
	Termin: Samstag, der <b>26. Juli</b> um 19 Uhr<br>
	<p>Der Kalte Krieg – Schreckgespenst und zugleich Auslöser eines zuvor ungekannten technischen Fortschrittes. Zeiten, in denen gewaltige Computer über das Wohl der ganzen Welt wachten und letztlich einen Nuklearkrieg verhinderten, Zeiten, in denen Computer noch als Elektronengehirne bezeichnet wurden und nahezu alles möglich schien. 
	Ein spannender Vortrag von <b>Prof. Dr. Bernd Ulmann</b> (Mathematiker/Informatiker) und <b>Patrick Hedfeld</b> (Philosoph), in welchem nicht nur technische, sondern auch <b>philosophische Aspekte</b> behandelt werden. Auch für Jugendliche ab ca. 15 Jahren gut geeignet.
	<br>
	 </p>
	</div>


		<div class="box termin clear-after">
			<div class="left">
				<p class="date"><em>2014</em> 27. Juli</p>	</div>
		<h4>Die Geschichte der technischen Kommunikation</h4>
	Termin: Sonntag, der <b>27. Juli</b> um 14 Uhr<br>
	<p>Bei dieser Führung geht es um die historische Entwicklung von Rundfunk, Fernsehen, Tontechnik, Faximile, Telex und viel mehr.
	Alle Themen werden lebendig mit Experimenten und Demonstrationen funktionsfähiger Geräten aus der „Steinzeit“ dieser Technikepoche gezeigt. Ein 100 Jahre altes programmgesteuertes Klavier bildet den musikalischen Abschluss. 
	Auch für technikinteressierte Kids und Jugendliche ab ca. 12 Jahren bestens geeignet.<br>
	</p>
	</div>
	
<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2014</em> 19. Juli</p>	</div>
			
				
	<h4>Die Urahnen des Smartphones</h4>
Termin: Samstag, der <b>19. Juli</b> um 14 Uhr<br>
<p>Die Besucher dieser Führung erleben eine Zeitreise in die Welt der ganz frühen Vorgänger heutiger Computer:  Gigantische, tonnenschwere  Rechner  demonstrieren die Ära ihrer Zeit sehr lebendig denn all diese dinosaurierhaften Computer funktionieren noch. Diese in Deutschland einmalige „Computer-History“ ist auch für technikinteressierte Kids und Jugendliche ab ca. 11 Jahren sehr gut geeignet.  </p>
</div>

 <div class="box termin clear-after">
	<div class="left"><p class="date"><em>2014</em> 11. Juli</p>	</div>
 	<h4>Computer-History</h4>
 	Termin: Freitag, der <b>11. Juli</b> um 12:00 Uhr<br>
für eine Studentengruppe der Goethe-Universität Ffm.<br>
Studentengruppe der Goethe-Universität Ffm.<br>
 </div>

 
<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2014</em> 30. Juni</p>	</div>
	<h4>Computer-History + Workshop</h4>
	Termin: Montag, der <b>30. Juni</b> um 9:30 Uhr<br>
Schüler-Gruppe, Nidda<br>
</div>

 <div class="box termin clear-after">
 		<div class="left">
			<p class="date"><em>2014</em> 21. Juni</p>	</div>
	<h4>Computer-History</h4>
	Termin: Samstag, der <b>21. Juni</b> um 15:00 Uhr<br>
Oldtimer-Club Oppenheim<br>
</div>

 <div class="box termin clear-after">
 		<div class="left">
			<p class="date"><em>2014</em> 18. Juni</p>	</div>
	<h4>Computer-History</h4>
	Termin: Mittwoch, der <b>18. Juni</b> um 15:00 Uhr<br>
IBM-Gruppe Ffm.<br>
</div>

	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2014</em> 27. Mai</p>	</div>
	<h4>Computer-History</h4>
	Termin: Dienstag, der <b>27. Mai</b> um 8:30 Uhr<br>
Abi-Gruppe Darmstadt<br>
</div>

<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2014</em> 8. Mai</p>	</div>
	<h4>Computer-History</h4>
Termin: Donnerstag, der <b>8. Mai</b> um 11:15 Uhr<br>
für die Albert-Einstein-Schule, Q4<br>
</div>

<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2014</em> 7. Mai</p>	</div>
	<h4>Computer-History</h4>
Termin: Mittwoch, der <b>7. Mai</b> um 14:30 Uhr<br>
für den Tennisclub<br>
</div>

<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2014</em> 2. Mai</p>	</div>
	<h4>Computer-History</h4>
Termin: Freitag, der <b>2. Mai</b> um 9:30 Uhr <br>
für die Albert-Einstein-Schule<br>
	</div>
	
<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2014</em> 29. März</p>	</div>
	<b>Computer-History</b><br>
Termin: Samstag, der <b>29. März um 15 Uhr</b><br>
für das Kulturzentrum Wiesbaden<br>
</div>

<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2014</em> 22. März</p>	</div>
	<b>Computer-History + Rallye</b><br>
Termin: Samstag, der <b>22. März ab 14 Uhr</b><br>
Geburtstags-Event für Tim (13J.) und seine Freunde.<br>
	</div>	

	
	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2014</em> 8. März</p>	</div>
	<b>Computer-History</b><br>
Termin: Samstag, der <b>8. März um 14 Uhr</b><br>
für das Bildungs- und Kulturzentrum Wiesbaden e.V.<br>
</div>

<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2014</em> 2. März</p>	</div>
	<b>Computer-History</b><br>
Termin: Sonntag, der <b>2. März um 14 Uhr</b><br>
Auch für technikbegeisterte Kids/Jugendliche ab ca. 12J. bestens geeignet.<br>
	</div>	
	
	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2014</em> 23. Feb.</p>	</div>
	<b>Computer-History</b><br>
Termin: Sonntag, der <b>23. Februar um 14 Uhr</b><br>
Exklusiv-Führung für FR-Leser. Auch für technikbegeisterte Kids ab ca. 11J. gut geeignet.<br>
	</div>
	
	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2014</em> 22. Feb.</p>	</div>
	<b>Workshop "Computer-History" für Kids zwischen 10 und 13</b><br>
Termin: Samstag, der <b>22. Februar von 14 bis 16 Uhr</b><br>
Spezialführung für technikinteressierte Kids (auch mit Vater/Mutter) und Jugendliche mit anschließendem Experimentieren. Anmeldung bei der evangelischen Familienbildung Tel. 06196-560180<br>

	</div>
	

	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2014</em> 16. Feb.</p>	</div>
	<b>Computer-History</b><br>
Termin: Sonntag, der <b>16. Februar um 14 Uhr</b><br>
	 </div>

<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2014</em> 9. Feb.</p>	</div>
			
<b>Computer-History</b><br>Unsere legendäre und interessante Führung über die Entwicklung von Computern ab der Stunde Null. Auch für Kids ab ca. 11 Jahre gut geeignet.<br>
Termin: Sonntag, der <b>9. Februar um 14 Uhr</b><br>
 	</div>

<h2>2013</h2>
		
		<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2013</em> 24. Nov.</p></div>
					<h4>Die Geschichte der Kommunikation</h4>

		Eine lebendige Führung mit vielen Live-Demonstrationen und Experimenten. Auch für Kids ab ca. 10 Jahre bestens geeignet.<br>
		
		
			<b>Termin:</b> Sonntag, den 24. November 2013 um 14 Uhr (pünktlich).<br><br>
			
			
		
		</div>
		
			
	<div class="box termin clear-after">
	<div class="left">
			<p class="date"><em>2013</em> 2. Nov.</p>	</div>
			
			<p><b>Wie Sprache das Denken beeinflusst</b><br>
	
Referenten: Patrick Hedfeld und Prof. Dr. Bernd Ulmann<br>

Kann man über Probleme nachdenken, sie gar lösen, ohne dies in Form einer Sprache formulieren zu können? Kann es sein, dass unterschiedliche Sprachen unterschiedliche Einblicke in ein
Problem gewähren? Dabei wird der Bogen von abstrakten Dingen bis zu Donald-Duck-Comics gespannt.<br>
Im zweiten Teil des Vortrages liegt der Schwerpunkt auf künstlichen Sprachen, zu denen neben der bekannten mathematischen Notation auch Programmiersprachen zählen. Anhand solcher Sprachen werden Einflüsse von Sprachen auf Denken und die Entwicklung von Problemlösestrategien mit
Hilfe einer Reihe praktischer Beispiele verdeutlicht.<br>
Ca. 90 Minuten spannende, hochinteressante philosophische Vorträge. Geeignet für Interessenten ab ca. 16 Jahre.<br>
Termin: Samstag, der 2. November um 17 Uhr</p>

		</div>
		
		


<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2013</em> 27. Okt.</p>	</div>	
		<p><b>Computer-History</b><br>
Unsere legendäre Führung über die Entwicklung von Computern ab der Stunde Null. Auch für interessierte Kids ab 10 Jahre gut geeignet.<br>
Voraussichtlicher Termin: Sonntag, der 27. Oktober um 14 Uhr
<b>Computer-History</b>
</div>

	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2013</em> 18. Aug</p>
		</div>
		<h4>3. Computer History</h4>
		Unsere klassische Führung als Zeitreise durch die Computerwelten sowie die Entstehung von EDV und IT mit vielen einmaligen funktionsfähigen Urzeit-Rechnern. Auch für interessierte Kids ab ca. 10 Jahre bestens geeignet.<br>
		
 	</div>
 	
	<div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2013</em> 26. Juni</em></p>
		</div>
		<h4>Die lebendige Geschichte des Computers</h4>
		
		Eine vom Hessischen Kultusministerium akkreditierte Fortbildungsveranstaltung (<a href="https://akkreditierung.hessen.de/web/guest/catalog/detail?tspi=132543_">Nr. 01375122</a>).
	</div>
 <div class="box termin clear-after">
		<div class="left">
			<p class="date"><em>2013</em> 22. Juni</em></p>
			
		</div>
		<h4>Die Geschichte der Kommunikation</h4>
		
		Gruppe Stehling
		
		<dl class="daten">
			<dt>Termin</dt>
			<dd class="termin">Samstag, 22. Juni um 15 Uhr</dd>
		</dl>
	</div>
			
	<div class="box termin clear-after">
		<p class="date left"><em>2013</em> 19. Juni</em></p>
		<h4>Computer History</h4>
		
		Gruppe Kliche
		
		<dl class="daten">
			<dt>Termin</dt>
			<dd class="termin">Mittwoch, 19. Juni um 16:30 Uhr</dd>
		</dl>
	</div>
	
	<div class="box termin clear-after">
		<p class="date left"><em>2013</em> 13. Juni</em></p>
		<h4>Computer History</h4>
		
		Gruppe Steinke
		
		<dl class="daten">
			<dt>Termin</dt>
			<dd class="termin">Donnerstag, 13. Juni um 10:30 Uhr</dd>
		</dl>
	</div>
	
	<div class="box termin clear-after">
		<p class="date left"><em>2013</em> 03. Juni</em></p>
		<h4>Computer History</h4>
		
		Gruppe Weber
		
		<dl class="daten">
			<dt>Termin</dt>
			<dd class="termin">Montag, 3. Juni um 15 Uhr</dd>
			<!-- Beispiel:
			<dt>Anmeldung</dt>
			<dd><a href="/de/impressum">wird erbeten</a></dd>
			-->
		</dl>
	</div>
	
<div class="box termin clear-after">
		<p class="date left"><em>2013</em> 22. Mai</em></p>
		<h4>Die Geschichte der Kommunikation</h4>
		
		Pestalozzi-Schule
		
		<dl class="daten">
			<dt>Termin</dt>
			<dd class="termin">Mittwoch, 22. Mai um 15 Uhr</dd>
	
	</div>
	
	Vor 2013 gab es auf der Homepage keine Terminankündigungen.
	2013 war das erste Jahr, in dem das Museum an der <a href="https://www.krfrm.de/projekte/route-der-industriekultur/">Route der
	Industriekultur</a> teilnahm.
	
	<!--
	<h3>Weitere Angebote</h3>
	
	<div class="box termin clear-after">
		<h4>Robotik-Workshop in den Ferien für Kids von 11-13 Jahren</h4>
		
		<p>Hochinteressante Kurse, in welchen Roboter der neuesten Generation programmiert werden. Weitere Informationen unter <a href="/robotik" class="go">Robotik-Workshop</a></p>
		
	</div>
	
	
	<div class="box termin clear-after">
		<h4>Physical-Computing & Robotics für Jugendliche ab ca. 14 Jahre</h4>
		
		<p>Micro-Controller programmieren und intelligente Roboter bauen, siehe <a href="/physical-computing" class="go">Physical-Computing & Robotics</a><br>
		Die digitale Welt von heute und morgen verstehen.....</p>
		
	</div>
	
	
	<div class="box termin clear-after">
		<h4>Geburtstags-Event für Kids ab ca. 10 Jahren.</h4>
		
		<p>Computer-Dinosaurier hautnah erleben und anschließend selbst tolle Experimente ausführen. 2 bis 3 spannende Stunden für ca. 8 bis 12 technikbegeisterte Kids.
		
		
		<p><b>Weitere Informationen</b> <a class="go" href="/robotik/#geburtstag">Die intelligente Geburtstagsalternative!</a>
		<br><b>Termine</b> nach Absprache</p>
	</div>
	-->
	
