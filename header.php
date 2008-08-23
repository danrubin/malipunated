<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php bloginfo('name'); if ( is_404() ) : _e(' &raquo; ', 'sandbox'); _e('Not Found', 'sandbox'); elseif ( is_home() ) : _e(' &raquo; ', 'sandbox'); bloginfo('description'); else : wp_title(); endif; ?></title>
	
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<meta http-equiv="Content-Language" content="en-uk" />
	<meta name="robots" content="all" />
	<meta http-equiv="imagetoolbar" content="false" />
	<meta name="MSSmartTagsPreventParsing" content="true" />
	
	<meta name="author" content="Helen Rubin" />
	<meta name="Copyright" content="Copyright (c) 2007 Helen C. Rubin" />
	<meta name="description" content="<?php bloginfo('description') ?>" />
	<meta name="keywords" content="" />
	
	<meta name="generator" content="WordPress <?php bloginfo('version') ?>" /><!-- Please leave for stats -->
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="stylesheet" type="text/css" media="print" href="<?php bloginfo('stylesheet_directory'); ?>/styles/print.css" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Posts RSS feed', 'sandbox'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
<?php wp_head() ?>

</head>

<body class="<?php sandbox_body_class() ?>">

<div id="wrapper" class="hfeed">

	<div id="header">
		<h1 id="logo"><a href="<?php echo get_option('home') ?>/" title="<?php bloginfo('name') ?>" rel="home"><?php bloginfo('name') ?></a></h1>
		<p id="tagline"><?php bloginfo('description') ?></p>
	
		<ul id="nav">
			<li id="nav-home"><a href="/" title="Home"><span><strong>Home</strong></span></a></li>
			<li id="nav-books"><a href="/books-of-interest/" title="Books"><span><strong>Books</strong></span></a></li>
			<li id="nav-history"><a href="/history/" title="History"><span><strong>History</strong></span></a></li>
			<li id="nav-experiences"><a href="/experiences/" title="Experiences"><span><strong>Experiences</strong></span></a></li>
			<li id="nav-contact"><a href="/contact/" title="Contact"><span><strong>Contact</strong></span></a></li>
		</ul>
		
		<form id="search" action="search" method="post" accept-charset="utf-8">
			<input type="text" name="search-terms" value="Search blog posts" id="search-terms" />
			<p><input type="submit" value="Search &raquo;"></p>
		</form>
	</div><!--  #header -->

