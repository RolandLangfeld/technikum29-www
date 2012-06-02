<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head><!--#set var="title"        value="Telefunken T 40W"
   --><!--#set var="location"     value="telefunkent40w"
   --><!--#set var="part"         value="extra"
   --><!--#set var="url_de"       value="geraete/telefunken_t40w.shtm"
   --><!--#set var="title_de"     value="Telefunken T 40W"
   --><!--#set var="prev"         value="/en/communication/broadcasting.shtm"
   --><!--#set var="prev_title"   value="Broadcasting"
   --><!--#set var="next"         value=""
   --><!--#set var="next_title"   value=""
   --><title>technikum29 - <!--#echo var="title" --></title>

    <!--#include virtual="/en/inc/head.inc.shtm" -->
    <meta name="t29.this.SVN" content="$Id$" />

    <!-- slider widget implementation -->
    <script type="text/javascript" src="/shared/js/slider/slider.js"></script>
    <link rel="stylesheet" type="text/css" href="/shared/js/slider/slider.css" />
    <script type="text/javascript">
	//<!-- setup
	var slider = new Array();
	slider[1] = new Object();
	slider[1].min = 0;
	slider[1].max = 100;
	slider[1].val = 0;
	slider[1].playerStepTimeout = 100; // ms
	slider[1].playerStepDistance = 1.6; // in min/max/val-Einheiten!
	slider[1].playerStopLabel = "start animation";
	slider[1].playerStartLabel = "stop animation";
	slider[1].playerRepeatLabel = "repeat animation"
	slider[1].playerAutoReverse = false;
	slider[1].playerAutoStart = true;
	slider[1].playerRepeatFromMin = true;
	slider[1].onchange = setTransparency;

	function setTransparency(val, blubb) {
		// see german page for full documentation
		val = val / 100; // normierung auf [0,1]
		// bereits ab 0.75 ist der Kasten nicht mehr zu sehen
		setOpacity("zu",            -val/0.75 + 1);
		// ab 0.75 erscheint die Beschriftung, hoch 3 potenziert
		setOpacity("beschriftung",  Math.pow(val - 0.75, 3)*64 );
	}

	function setOpacity(id, value) {
		if(value >= 1) value = 1.0;
		if(value <= 0) value = 0;
		document.getElementById(id).style.opacity = value;
		if(document.all) {
			// IE 7 kann (immer!) noch kein opacity, daher ein
			// haessliches workaround:
			document.getElementById(id).style.setAttribute("filter", "alpha(opacity="+Math.round(100*value)+")", 0);
			if(value == 1.0)
				// der filter zerschiesst alpha-Transparenz -- noch ein workaround
				document.getElementById(id).style.removeAttribute("filter", 0);
		}
	}
	// -->
    </script>
</head>
<body>
<!--#echo encoding="none" var="heading" -->
<div id="content">
    <h2><!--#echo var="title" --></h2>

    <div class="box center">
      <div id="rel">
        <img id="offen" src="/shared/photos/kommunikationstechnik/telefunken_t40w/offen.jpg"
             alt="Telefunken T40W: A photography of the inner life" />
        <img id="zu" src="/shared/photos/kommunikationstechnik/telefunken_t40w/geschlossen.jpg"
             alt="Telefunken T40W: A photography of the closed device" />
        <img id="beschriftung" src="/shared/photos/kommunikationstechnik/telefunken_t40w/beschriftung.en.png"
             alt="Telefunken T40W key: Labels of the amplifier stages, tubes, etc." />
      </div>
      <div id="controls">
         <noscript>Please switch on <b>javascript</b> in your browser
           to see the animation.</noscript>
         <div class="cols">
           <div class="leftcol">
             <input type="button" value="Abspielen" id="slider-button1" />
             <div class="slider" id="slider01">
                <div class="left"></div><div class="right"></div>
                <img src="/shared/js/slider/img/knob.png" width="31" height="15" />
             </div>
           </div><!--left-->
           <div class="rightcol">
               Use the slider to gain insight into the device or click
               on "start animation".
           </div><!--right--> 
           <div class="clear"></div>
         </div><!--cols-->
       </div><!--controls-->
    </div>

    <p>The Telefunken broadcasting device Type 40W (year of manufacture 1929) is build
     aesthetically appealing. At that time, technology was comprehensible even for
     (educated) laymen. On the other hand, the operation was not very comfortable:
     The volume had to be adjusted by combining the antenna matching (the turn-switch
     on the left) and the feedback (turn-switch on the right). When the feedback was
     increased too much, the broadcasting reciever became an "jamming transmitter".</p>

     <div class="box center">
        <img src="/shared/photos/kommunikationstechnik/telefunken_t40w/unterseite.jpg"
         width="750" height="388" alt="Telefunken 40W underside" />
     </div>

    <p>The device looks good from below, too. It's built on a pressed paper sheet
      instead of a sheet chassis. Electrical connections are partially realized by
      rivet strip conductors. Not until the 1950s, that method was implemented again,
      leading to the printed circuit boards.</p>

</div><!-- content -->
<!--#include virtual="/en/inc/menu.inc.shtm" -->
</body>
</html>