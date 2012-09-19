<?php
	$seiten_id = 'details1';
	$version = '$Id$';
	$titel = 'Besonders interessante Tischrechner und Kleinanlagen aus dem Museumsbestand';
	
	require "../lib/technikum29.php";
?>

<h2><?php print $titel; ?></h2>

<table width="100%" border="0" cellpadding="0" cellspacing="1">
  <colgroup>
    <col class="middle" /> <!-- middle-Klasse nicht -->
    <col class="middle" /> <!-- eingerichtet        -->
    <col class="middle" />
    <col class="bemerkungen" />
  </colgroup>
<!-- <tr>
    <th colspan="4">Besonders interessante Tischrechner aus dem Museumsbestand</th>
  </tr>-->
  <tr>
    <th width="20%">Typ bzw. Hersteller[Baujahr]</th>
    <th width="10%">Speicher</th>
    <th width="15%">Angeschlossene Peripherie</th>
    <th width="55%">Bemerkungen</th>
  </tr>
  <tr>
    <td><b>Anita</b>[1962]</td>
    <td>Glimm-<br/>relaisr&ouml;hren</td>
    <td>-</td>
    <td>Erster elektronischer Tischrechner der Welt. 1. Generation, R&ouml;hrentechnik (vorwiegend Glimmrelaisr&ouml;hren). Nixie-Anzeige</td>
  </tr>
  <tr>
    <td><b>IME 84</b>[1964]</td>
    <td>Kernspeicher</td>
    <td>-</td>
    <td>Erster transistorisierter Tischrechner der Welt. Nixier&ouml;ren-Anzeige</td>
  </tr>
  <tr>
    <td><b>Canola 130</b>[1965]</td>
    <td>Flip-Flop</td>
    <td>-</td>
    <td>Erster Rechner mit "Flutlichtanzeige", Makro-Transistortechnik</td>
  </tr>
  <tr>
    <td><b>WANDERER Conti</b>[1965]</td>
    <td>Kernspeicher</td>
    <td>-</td>
    <td>Erster druckender elektronischer Tischrechner der Welt. Mit gef&auml;deltem ROM f&uuml;r sehr einfache feste Programme</td>
  </tr>
  <tr>
    <td><b>FRIDEN 130, FRIDEN 132</b>[1965]</td>
    <td>Laufzeit-<br/>speicher</td>
    <td>-</td>
    <td>Erster Tischrechner der Welt mit Anzeige auf Kathodenstrahlr&ouml;hre, angezeigt werden 4 Register (mit Germaniumtransistoren). Der Typ 132 hat eine Wurzelautomatik.</td>
  </tr>
  <tr>
    <td><b>Olivetti Programma 101</b>[1965]</td>
    <td>Laufzeit-<br/>speicher</td>
    <td>Integrierter Magnetkartenleser</td>
    <td>Erster Tischrechner mit Aufzeichnung von Programmen auf Magnetkarten (speichert bis 120 Anweisungen). Der Laufzeitspeicher hat eine Kap. von 240 Byte. Reine Transistortechnik</td>
  </tr>
  <tr>
    <td><b>IME 86</b>[1966]</td>
    <td>Kernspeicher</td>
    <td>Fernbedienung</td>
    <td>Nixie-Anzeige. Fernbedienung mit sch&ouml;nem Design.</td>
  </tr>
  <tr>
    <td><b>DIEHL Combitron</b>[1966]</td>
    <td>Laufzeit-<br/>speicher</td>
    <td>Lochstreifenstanzer und Lochstreifenleser</td>
    <td>Erster frei <i>programmierbarer</i> Tischrechner aus Deutschland.
        <br/>Vollst&auml;ndige Version ist extrem selten. Ger&auml;t hat nur 130 Transistoren im Rechenwerk. Das Betriebssystem wird intern &uuml;ber Metalllochstreifen gebootet. Rarit&auml;t!</td>
  </tr>
  <tr>
    <td><b>WANG 320 SE</b>[1966/67]</td>
    <td>Kernspeicher</td>
    <td>Lochkartenleser, Manueller Lochkartenleser</td>
    <td>Einer der ersten wissenschaftlichen programmierbaren Tischrechner der Welt. Extrem selten. Mit 2 von 4 anschlie&szlig;baren Keyboards. Reine Transistortechnik. Sehr schnelle Berechnung der Exp. und Logarithmenwerte.</td>
  </tr>
  <tr>
    <td><b>HP 9100 A bzw. 9100 B</b>[1968]</td>
    <td>Kernspeicher</td>
    <td>Inkl. aufgesetztem Drucker</td>
    <td>Erster Tischrechner von HP. Voll wissenschaftlich, gef&auml;deltes ROM, Aufzeichnen von Programmen auf Magnetkarten. Bildschirmanzeige. Transistortechnik</td>
  </tr>
  <tr>
    <td><b>Olivetti P 203</b>[1968]</td>
    <td>Laufzeitspeicher</td>
    <td>Integrierte Schreibmaschine und Trommeldrucker als Ausgabeger&auml;te</td>
    <td>Erweiterte Programma 101, au&szlig;rgew&ouml;hnlich sch&ouml;nes Design, 120 kg schwer!</td>
  </tr><tr>
     <td><b>NCR 446</b>[1968]</td>
    <td>Kernspeicher</td>
    <td>IBM Kugelkopfmaschine als Ausgabeger&auml;t, 1 Lochstreifenleser f&uuml;r Programme, 2 Lochstreifenleser f&uuml;r Daten, 1 Lochstreifenstanzer f&uuml;r Daten</td>
    <td>Wurde als elektronischer Fakturierrechner angeboten</td>
  </tr><tr>
    <td><b>WANG 700</b>[1969/70]</td>
    <td>Kernspeicher 2KB</td>
    <td>Aufwendiger Drucker (Standger&auml;t) der auch plotten kann. Markierungskartenleser, Lochkartenleser, DIN A0 Flachbett Plotter, zus&auml;tzl. alphanumerische Eingabetastatur, Mikroface, Doppelkassettenlaufwerk mit formatierten B&auml;ndern</td>
    <td>Meilenstein der Rechnertechnik! Erste IC-Technik (DTL, TTL). Sehr aufwendig gef&auml;deltes ROM. F&uuml;r Jahre schnellster Tischrechner der Welt. Gro&szlig;es zweizeiliges Nixier&ouml;hren-Display (x-, y-Register). Programmspeicherung auf Kassetten. Extrem teures Ger&auml;t (28.000,-DM + weit &uuml;ber 50.000 DM f&uuml;r Peripherie). Sehr selten.</td>
  </tr>
  <tr>
    <td><b>WANG 500</b>[1971]</td>
    <td>Halbleiter-<br/>speicher</td>
    <td>-</td>
    <td>Abgespeckte Version des WANG 700 - Einzeilige Nixier&ouml;hrenanzeige. Thermodrucker. Kassettenlaufwerk.</td>
  </tr>
  <tr>
    <td><b>HP 9810</b>[1971]</td>
    <td>Halbleiter-<br/>speicher</td>
    <td>Plotter, Lochstreifenleser, externes Kassettenlaufwerk</td>
    <td>Hat die gleiche Logik wie HP 9100, Aufbau jedoch mit TTL-Technik. Erstes Ger&auml;t mit LED-Anzeige (3-zeilig). Magnetkartenleser, thermischer Drucker</td>
  </tr>
  <tr>
    <td><b>WANG 600</b>[1972]</td>
    <td>Halbleiter-<br/>speicher</td>
    <td>Drucker/Plotter, Makierungskartenleser</td>
    <td>Leistungsm&auml;&szlig;ig zwischen WANG 700 und WANG 500. Immer noch mit gef&auml;deltem ROM. Programme auf Kassetten.</td>
  </tr>
  <tr>
    <td><b>HP 9820</b>[1972]</td>
    <td>Halbleiter-<br/>speicher</td>
    <td>Drucker, Plotter, Lochstreifenleser, externes Kassettenl.</td>
    <td>Erster Tischrechner der Welt mit algebraischer Sprache und alphanumerischer Anzeige auf 5x7 Punkte LED-Matrix, Magnetkartenleser, thermischer Drucker</td>
  </tr>
  <tr>
    <td><b>HP 9830</b>[1972]</td>
    <td>Halbleiter-<br/>speicher</td>
    <td>Thermodrucker, Plotter, Hochgeschwindigkeits- Lochstreifenstanzer, Lochstreifenleser.</td>
    <td>Erster BASIC-programmierbarer Tischrechner der Welt. Alphanumerische Anzeige f&uuml;r 32 Zeichen auf 5x7-Punkte LED-Matrix. Selten existiert ein solcher Rechner mit so viel Peripherie</td>
  </tr>
  <tr>
    <td><b>Olivetti Programma 652**</b>[1973]</td>
    <td>Halbleiter-<br/>speicher</td>
    <td>Ausgabe-Schreibmaschine, Lochstreifenstanzer, Kassettenlaufwerke, Bandlaufwerke, Festplattenlaufwerk</td>
    <td>Komplettanlage in eigenwilligem "Bauhausstil" der 70iger-Jahre. Bemerkenswert ist die schlechte Dokumentation von Olivetti. Festplattenlaufwerk mit unbeweglichen Mehrfachk&ouml;pfen.</td>
  </tr>
  <tr>
    <td colspan="4">
        <p>Weitere Tischrechner: Olympia RAE (verschiedene Typen, 1965): nicht programmierbare Rechner mit Kernspeicher, Germaniumtransistoren und Nixie-Anzeige (Gleitkomma).
        Compucorp 322, 324 (1972): Wissenschaftliche "Taschen"rechner.
        Olivetti Programma 602 (1971): Gleiche Logik wie Programma 101, jedoch mit DTL, TTL IC-Technik und Halbleiterspeicher.
        DIEHL Combitronic (1971): Gleiche Logik wie Combitron, jedoch mit MOS-Technik (Logik mit nur 6 ICs) aber noch mit Laufzeitspeicher und Booten &uuml;ber Metall-Lochstreifen. DIEHL Alphatronic, Schieberegister als Speicher, mit sep. Lochstreifenstanzer und Lochstreifenleser (ca. 1973).**
        Canon 1614 P (1973): Programmierbarer Rechner mit integr. Kartenleser und separatem Drucker (Bedienungsanleitung fehlt). **
        TI 59 auf PC 100 Druckerkonsole (1977): Programmierbarer Taschenrechner mit Magnetkarten-Aufzeichnug.
        HP 9821 (1973, entspr. 9820 aber mit Kassettenlaufwerk), HP 9815 (1976) ** und viele mehr...</p>
        <i>**) Diese Ger&auml;te befinden sich aus Platzgr&uuml;nden im Archiv.</i>
    </td>
</table>