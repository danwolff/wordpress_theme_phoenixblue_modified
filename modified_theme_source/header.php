<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>

    <?php if (is_user_logged_in()) : ?>
    href="<?php echo do_shortcode('[user_rss_feed_url]'); ?>"
    href="<?php echo do_shortcode('[user_atom_feed_url]'); ?>"
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php echo do_shortcode('[user_rss_feed_url]'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php echo do_shortcode('[user_rss_feed_url]'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php echo do_shortcode('[user_atom_feed_url]'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php endif; ?>

	<?php wp_get_archives('type=monthly&format=link'); ?>

	<?php wp_head(); ?>
</head>

<body>

<div id="wrapper">

<div class="pusher"></div>
<div id="header">
	<div class="nav_title">
		<h1><a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a></h1>
	</div>
	<div class="navigation">
		<ul id="miniflex">
			<?php if (is_home() or is_single()) { ?>
				<li class="current_page_item"><a href="<?php echo get_settings('home'); ?>">Home</a></li>
			<?php } else { ?>
				<li><a href="<?php echo get_settings('home'); ?>">Home</a><li>
			<?php } ?>
			<?php wp_list_pages('title_li=&sort_column=menu_order&depth=1'); ?> 
		</ul>
	</div>
</div>

<div id="content">
