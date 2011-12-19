<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /><!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( �comment-reply� ); wp_head(); ?>
<?php wp_head(); ?>
</head>
<body>

<!-- start header -->
<div id="wrapper">
<div id="header">
	<div>
		<h1 style="margin: 0; background: url('<?php header_image(); ?>') no-repeat; width: <?php echo HEADER_IMAGE_WIDTH; ?>px; height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;><?php bloginfo('name'); ?></a></h1>
		<h2 style="text-indent: -9999px"><?php bloginfo('description'); ?></h2>
	</div>
	<div id="access" role="navigation">
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>
	</div>
</div>
<!-- end header -->

<!-- start page -->

<div id="page">

