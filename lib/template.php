<?php
/**
 * technikum29v6 Page Template
 *
 * Global vars:
 *  $lang = de | en
 *  $seiten_id = kurzkennung der aktuellen seite
 *  $root = Seiten-Root fuer URLs ($root/de, $root/shared, etc.)
 *  $titel = Seitentitel
 *  $header_cache_file, $footer_cache_file.
 **/

require dirname(__FILE__) . "/ressourceloader.php";

class t29Template {
	public $conf, $menu, $msg;
	public $body_classes = array();
	public $javascript_config = array();
	public $page_relations, $interlang_links;
	public $log; // lightweight logging system

	function __construct($conf_array) {
		$this->conf = $conf_array;
		
		// create a lightweight logging object:
		require_once $this->conf['lib'].'/logging.php';
		$this->log = new t29Log();

		// create a menu:
		require_once $this->conf['lib'].'/menu.php';
		$this->menu = new t29Menu($this->conf);

		// create localisation class:
		require_once $this->conf['lib'].'/messages.php';
		$this->msg = new t29Messages($this->conf['lang']);

		// fill up configuration
		// Path names in messages
		foreach(array('footer-legal-file', 'topnav-search-page') as $msg)
			$this->conf[$msg] = $this->conf['lang_path'] . $this->msg->_($msg);

		// setup body classes:
		$this->body_classes[] = "lang-" . $this->conf['lang'];
		$this->body_classes[] = "page-" . $this->conf['seiten_id'];
		
		// setup javascript configuration
		$this->javascript_config['lang'] = $this->conf['lang'];
		$this->javascript_config['seiten_id'] = $this->conf['seiten_id'];
		
		// get all kind of relations
		$this->page_relations = $this->menu->get_page_relations();
		$this->interlang_links = $this->menu->get_interlanguage_link();
		
		// check and load additional css
		$this->conf['pagecss'] = '/shared/css-v6/pagestyles/'.$this->conf['seiten_id'].'.css';
		$this->conf['has_pagecss'] = file_exists($this->conf['webroot'].$this->conf['pagecss']);
		// FIXME: There is no caching check yet for this setting
		//        (new pagecss file won't be detected and wont purge the tmpl cache)
	}
	
	/**
	 * Main caching and output system.
	 * Parameters (global configuration):
	 *    skip_cache  -  if true, skips writing output to cache file
	 *    purge_cache -  if true, forces creation of new cache file
	 *                   (does not change behaviour of this file's code)
	 **/
	function create_cache($cache_object) {
		$cache_object->start_cache(array($this, 'print_footer'));
		$this->print_header();
	}
	
	/**
	 * Write header and footer in separate cache files.
	 **/
	function create_separate_caches($header_cache, $footer_cache) {
		$header_cache->start_cache();
		$this->print_header();
		$header_cache->write_cache(); // will also print out header immediately.
		
		$footer_cache->start_cache();
		$this->print_footer();
		$footer_content = $footer_cache->write_cache(null, true); // don't print footer immediately.
		
		// print footer on exit.
		register_shutdown_function(function() use ($footer_content) {
			print $footer_content;
		});
	}

	function print_header() {
		$p = $this->msg->get_shorthand_printer();
		$_ = $this->msg->get_shorthand_returner();
?>
<!doctype html>
<html class="no-js" lang="<?php echo $this->conf['lang']; ?>">
<head>
  <meta charset="utf-8">
  <title><?php echo isset($this->conf['titel']) ? $this->conf['titel'].' - ' : ''; $p('html-title'); ?></title>
  <meta name="description" content="Produziert am 08.01.2012">
  <meta name="author" content="Sven">
  <meta name="generator" content="t29v6">
  <meta name="t29.cachedate" content="<?php print date('r'); ?>">
  <?php
	if(isset($this->conf['version'])) printf('<meta name="t29.version" content="%s">', $this->conf['version']);
	if(isset($_GET['debug']))
		foreach(explode(' ','debug rl_debug skip_cache purge_cache verbose_cache') as $x)
			printf("\n  <meta name='t29.template.data-%s' content='%s'>", $x, isset($_GET[$x])?'true':'false');
  ?>
  
  <?php
	foreach(array_merge(array("first" => t29Menu::dom_new_link($this->conf['lang_path'], $_('head-rel-first'))),
	  $this->page_relations) as $rel => $a) {
		if($rel == 'start') continue; // not in standard
		printf("\n  <link rel='%s' href='%s' title='%s' />",
			$rel, $a['href'], sprintf($_('head-rel-'.$rel), $this->relational_link_to_string($a))
		);
	}
  ?>
  
  <link rel="copyright" href="<?php echo $this->conf['footer-legal-file']; ?>" title="<?php $p('footer-legal-link'); ?>">
  <link rel="search" type="application/opensearchdescription+xml" href="<?php print $this->conf['topnav-search-page'] . '?action=opensearch-desc'; ?>" title="<?php $p('opensearch-desc'); ?>">
  <?php
	// print interlanguage links for all languages except the active one
	foreach($this->interlang_links as $lang => $a) {
		if($lang != $this->conf['lang'] && !is_null($a)) {
			printf('<link rel="alternate" href="%s" hreflang="%s" title="%s">',
				$a['href'], $lang, sprintf($_('head-rel-interlang', $lang), $a)
			);
		}
	}
  ?>
  
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <?php
	$csslinktmpl = PHP_EOL.'  <link rel="stylesheet" href="%s">';
	foreach($this->get_ressourceloader_links('css') as $css)
		printf($csslinktmpl, $css);
  
	if($this->conf['has_pagecss'])
		printf($csslinktmpl, $this->conf['pagecss']);
  ?>

  <script src="/shared/js-v6/libs/modernizr-2.0.6.min.js"></script>
</head>

<body class="<?php echo implode(' ', $this->body_classes) ?>">
<div id="footer-background-container"><!-- helper -->
  <div id="container">
	<h1 role="banner"><a href="/" title="<?php $p('head-h1-title'); ?>"><?php $p('head-h1'); ?></a></h1>
	<div id="background-color-container"><!-- helper -->
	<section class="main content" role="main" id="content">
		<?php 
			if(!$this->log->is_empty()) {
				print '<div class="errorpane">';
				$this->log->print_all();
				print '</div>';
			}
		?>
		<!--<header class="teaser">
			<h2 id="pdp8L">Wissenschaftliche Rechner und Minicomputer</h2>
			<img width=880 src="http://www.technikum29.de/shared/photos/rechnertechnik/univac/panorama-rechts.jpg">
		</header>-->
	<!-- start content -->
<?php 
} // function print_header().

	function print_footer() {
		$p = $this->msg->get_shorthand_printer();
		$_ = $this->msg->get_shorthand_returner();
	?>
	<!-- end content -->
	</section>
	<hr>
	<section class="sidebar top">
			<h2 class="visuallyhidden"><?php $p("sidebar-h2-tour"); ?></h2>
			<nav class="side">
				<?php $this->menu->print_menu(t29Menu::sidebar_menu); ?>
			</nav>
			<!-- menu changing buttons are made with javascript -->
	</section>
	<section class="sidebar bottom">
		<!-- inhalte die unten ueber dem header sind -->
	</section>
	</div><!-- div id="background-color-container" helper end -->
	<hr>
	<header class="banner">
		<h2 class="visuallyhidden"><?php $p("sidebar-h2-mainnav"); ?></h2>
		<nav class="horizontal">
			<?php $this->menu->print_menu(t29Menu::horizontal_menu); ?>
		</nav>
		<nav class="top">
			<h3 class="visuallyhidden"><?php $p("sidebar-h2-lang"); ?></h3>
			<ul>
				<?php
					foreach($this->interlang_links as $lang => $a) {
						$is_current_lang = $lang == $this->conf['lang'];
						if(is_null($a)) {
							// when interlanguage link not present (null) = no translation exists
							$a = t29Menu::dom_new_link('#', 'not present');
							$title = sprintf($_('topnav-interlang-nonexistent', $lang));
							$class = 'nonexistent';
						} elseif($is_current_lang) {
							$title = sprintf($_('topnav-interlang-active'), $a);
							$class = 'active';
						} else {
							// ordinary interlang link
							$title = sprintf($_('topnav-interlang-title', $lang), $a);
							$class = '';
						}
						printf("\t\t\t\t<li%s><a href='%s' title='%s'>%s</a></li>\n",
							(empty($class) ? '' : " class='$class'"),
							$a['href'], htmlspecialchars($title),
							$this->conf['languages'][$lang][0] // verbose language name
						);
					}
				?>
			</ul>
			<form method="get" action="<?php print $this->conf['topnav-search-page']; ?>">
				<span class="no-js"><?php $p('topnav-search-label'); ?>:</span>
				<input type="text" value="" data-defaultvalue="<?php $p('topnav-search-label'); ?>" name="q" class="text">
				<input type="submit" value="<? $p('topnav-search-label'); ?>" class="button">
			</form>
		</nav>
    </header>
	<hr>
    <footer>
		<nav class="guide">
			<!-- hier wird nav.side die Liste per JS reinkopiert -->
		</nav>
		<nav class="rel clearfix">
		<ul>
			<?php
				foreach($this->page_relations as $rel => $a) {
					printf("\t<li class='%s'><a href='%s' title='%s'>%s <strong>%s</strong></a>\n",
						$rel, $a['href'], sprintf($_('head-rel-'.$rel), $this->relational_link_to_string($a)),
						$_('nav-rel-'.$rel), $this->relational_link_to_string($a)
					);
				}
			?>
		</ul>
		</nav>
		<div class="right">
			<img src="/shared/img-v6/logo.footer.png" title="technikum29 Logo" alt="Logo" class="logo">
			<?php $p('footer-copyright-tag'); ?>
			<br/><?php printf('<a href="%s">%s</a>', $this->conf['footer-legal-file'], $_('footer-legal-link')); ?>
			<div class="icons">
				<a href="<?php echo $this->conf['footer-legal-file']; ?>#image-copyright"><img src="/shared/img-v6/cc-icon.png"></a>
				<!--<a href="http://ufopixel.de" title="Designed by Ufopixel"><img src="http://svenk.homeip.net/dropbox/Ufopixel/Ufopixel-Design/logo_90x30/ufopixel_logo_90x30_version2.png"></a>-->
			</div>
			<!--CC<br>Viele Bilder können unter einer CreativeCommons-Lizenz
			verwendet werden. Erkundigen Sie sich.-->
		</div>
    </footer>
  </div> <!--! end of #container -->
</div><!-- end of div id="footer-background-container" helper -->

  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="/shared/js-v6/libs/jquery-1.7.2.min.js"><\/script>')</script>

  <script>window.t29={'conf': <?php print json_encode($this->javascript_config); ?>};</script>
  <?php
	foreach($this->get_ressourceloader_links('js') as $js)
		printf('  <script src="%s"></script>'.PHP_EOL, $js);
  ?>
</body>
</html>
<?php
	} // function print_footer()
	
	// Hilfsfunktionen
	private function relational_link_to_string($a) {
		// wenn es bei einem relationalen Link einen Titel gibt, diesen ausgeben, ansonsten die
		// Linkbeschreibung. Die Links sind XML-Elemente in der Navigation.
		return isset($a['title']) ? $a['title'] : $a;
	}

	function get_ressourceloader_links($type) {
		$rl = t29RessourceLoader::create_from_type($type, $this->conf);
		return $rl->get_urls( isset($_GET['rl_debug']) );
	}

} // class t29Template