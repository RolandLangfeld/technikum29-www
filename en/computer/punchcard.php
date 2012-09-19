<?php
	$seiten_id = 'lochkarten';
	$version = '$Id$';
	$title = 'Punch card computing';
	
	require "../../lib/technikum29.php";
?>
    <h2>Punch card computing</h2>

    <p>Punch cards are used since the beginnings of the 20th century
       as storage media. They are handy, can be labeled automatically or by
       hand, and can be sorted quickly. Therefore they were used until
       the late 1980s. Indeed they were mainly used in the 1960s, when
       EDP conquered the world. Today's folk is astonished at the size,
       the clearness and functionality of these machines. At technikum29
       most of these archaic devices still work.</p>

	<h3>Card puncher devices</h3>
    <div class="box left clear-after">
        <img src="/shared/photos/rechnertechnik/lochkartenstanzer.jpg"
	         alt="Various card punchers" width="330" height="368"
	         class="nomargin-bottom" />
        <div class="bildtext">
           <p>For punching cards only occasionally, the small bottom device
	       was quite sufficient, e.g. for small companies. The device in
	       the middle of the picture is a puncher from BULL and the topmost
	       device is a so-called "magnetic puncher" that is equipped with
	       solenoids that punch the holes. For even higher amounts of
	       punching requirements, there were quite more expensive
	       "motor-driven punchers".
	    </p>
    </div>
    </div>

    <p>A typical machinery consists of a card puncher which punches the
       information and data on the cards, a card collator which sorts
       the cards from different stacks (for instance <i>adresses</i>
       and <i>bills</i>), a sorter which sorts with specified loads
       and possibly a punch card interpreter that writes the punched
       information on a prescribed position on the punch card.</p>

    <div class="box center auto-bildbreite">
        <img src="/shared/photos/rechnertechnik/ibm_029-juki.jpg" alt="IBM 029 und Juki" width="580" height="340" />
        <p class="bildtext"><b>IBM 029 and JUKI card puncher.</b></p>
	</div>
	
	<p> On the left hand in the picture there is the legendary
	    IBM 029 (build since 1964), on the right hand the JUKI puncher
	    (made in Japan). The JUKI puncher is not accidentally looking
	    like the IBM: In 1971 IBM brought the puncher 129 on the market
            which buffers the content of the whole punchcard while reading.
	    Therefore IBM selled the license to reproduce the machine. In
	    1971, the IBM 029 costed about 15.500 DM.
	</p>
	
	<div class="box center auto-bildbreite" id="u1710">
        <a name="univac1710"><img src="/shared/photos/rechnertechnik/univac1710.jpg" alt="UNIVAC 1710 Verifying Interpreting Punch" width="580" height="435" /></a>
        <p class="bildtext"><b>UNIVAC 1710 Verifying Interpreting Punch</b> (VIP)</p>
	</div>
	
	<p>
           The Univac 1710 VIP was released at
           the same time like the <a href="univac9400.php">UNIVAC 9400 mainframe</a>
           in the year 1969. This device is very fast and versatile and works mostly
           electronically. Most likely, Univac wanted to trump IBM with this
           trendsetting device. The device's internals are very elaborate, but offer
           many advantages, compared to usual apperatures at that time:
           <br/>It featured a core memory with 12 x 80 x 2 cells for both data and programs. It could
           handle two programs and one data storage. Programming
           was performed automatically once program cards have been inserted, and
           programs could be changed at the touch of a key. The device furthermore
           featured program-controlled printing during punching.
           Keypunching errors were electronically corrected, since cards were punched
           only after all entries were in storage. Verifying and correction comprised
           a one-pass operation. Verified cards were uniquely notched while error
           cards were automatically ejected to a separate stacker.
           <br/>The device also features a large illuminated digital display that
           indicates which program is in control, furthermore the device could be
           used for subsequent card labeling. However, the device had always
           mechanical problems: The type wheel print was of bad quality and the
           card feeding could easily stop working when the adjustment wasn't
           perfectly fitting.
    </p>

	
	<h3>Sorters</h3>

    <div class="box center">
        <a href="/en/devices/punchcard-sorter.php" name="backlink-sorter"><img src="/shared/photos/rechnertechnik/ibm-082-sorter.jpg" alt="IBM 082 sorter" width="361" height="287" /><img style="margin-left: 2px;" src="/shared/photos/rechnertechnik/ibm-082-sorter.offen.jpg" alt="IBM 082 sorter (without cover)" width="215" height="287" /></a>
        <p class="center">
            <b>IBM 082 punch card sorter</b>, Built since 1949
            <br/><a class="go" href="/en/devices/punchcard-sorter.php">The function of the punch card sorter</a>
         </p>
    </div>

    <div class="box center auto-bildbreite">
        <a href="/en/devices/punchcard-sorter.php"><img src="/shared/photos/rechnertechnik/ibm083.jpg" alt="IBM 083 punch card sorter" width="602" height="630" /></a>
        <p class="bildtext">
            <b>IBM 083 sorter</b>
            <br/>Compared to the IBM 082 the sorting mechanics were greatly improved. The machine can sort 1000 cards
            per minute. Much more than 16 cards per second are not possible, due to the mechanic's inertia. This
            type was built since 1958.
            <br/><a class="go" href="/en/devices/punchcard-sorter.php">The function of the punch card sorter</a>
        </p>
    </div>
	
	
	<h3>Collators</h3>

    <div class="box left clear-after">
        <a href="/en/devices/punchcard-collator.php" name="backlink-ibm077"><img src="/shared/photos/rechnertechnik/ibm77.jpg" alt="IBM 077" width="450" height="526" /></a>
        <p class="bildtext"><b>IBM punch card collator 077</b></p>
		<p>
	    The picture above shows the back of a collator, year of manufacture 1959.
		The collector reads 480 cards per minute. It is capable of changing the 
		order of the cards, looking for copies (and seperating them out) or
		comparing two stacks and finding out the differences. Compared to 
		today's database storages this card collator is a kind of mechanical
		database query language interpreter.
        <!--<br/>The programs are plugged together on a patch panel. Thus they can easily be changed. -->
        <br />The electronics comprises of relays and camshafts which control
	     switches. Early engineers had to use oilcans for the bearing's
	     maintenance as often as a checking device.
	     <br />The programs could be changed by replacing the programing field.
	     <br/><a class="go" href="/en/devices/punchcard-collator.php">The function of the punch card collator</a>
		</p>
	</div>

    <div class="box left clear-after">
         <a href="/en/devices/punchcard-collator.php"><img src="/shared/photos/rechnertechnik/bull-mischer.jpg" alt="Bull punch card collator 56.00" width="450" height="536" /></a>
         <p class="bildtext"><b>Bull punch card collator 56.00.</b></p>
		<p>
	    This very big device features very much chrome and almost 1000 relays,
		assembled to allow developers to implement varoius mixing algorithms
		with wired panels. Thus collating and sorting could be performed in only
		one working cycle. Depending on the task, the device could process about
		250 - 500 cards per minute.
		</p>
	</div>
	
	<h3>Card interpreter</h3>
	
    <div class="box left clear-after">
         <img src="/shared/photos/rechnertechnik/ibm_548.jpg" alt="IBM 548" width="450" height="509" />
         <p class="bildtext"><b>IBM 548</b></p>
		<p>
			A huge punch card interpreter made by IBM. This machine can label 60 cards
			per minute in 60 cols and two rows, according to the settings which you can set.
		</p>
	</div>

	<h3>ANELEX high speed printer</h3>
     <div class="box left clear-after">
        <img src="/shared/photos/rechnertechnik/anelex-drucker.jpg"
          alt="ANELEX high speed printer" width="485" height="423" />
        <div class="bildtext">
          <p><b>ANELEX high speed printer, series 5</b>,
             with lifted cover.</p>
		  <p>This printer could be a good auxillary device to the GAMMA 10
		     computer: It is a drum printer, like the original printer,
			 and the cirtcuitry operates also on a negative logic level
			 (germanium transistors). Anelex uses a core memory for the
			 buffer, too. Anyway the printer cannot simply be plugged into
			 the computer, because the original BULL printer works with
			 the buffer memory which is placed directly in the CPU of the
			 GAMMA 10. Since we don't want to modify the GAMMA 10 internal
			 architecture, we currently implement a microcontroller driven
			 interface between those two systems.
		  </p>
        </div>
     </div>
	