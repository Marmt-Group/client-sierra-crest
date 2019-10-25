<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sierra-crest-2019
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Basic Page Needs -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Construction - Ultimate Construction Template</title>
    <meta name="description" content="Template built for Construction Company, Building Services, Architecture, Engineering, Cleaning Service and other Construction related services">
    <meta name="keywords" content=" architecture, builder, building, building company, cleaning services, construction, construction business, construction company">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Favicon and touch icons  -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/icon/favicon.ico">

	<?php wp_head(); ?>
</head>

<?php
    $body_classes = 'front-page no-sidebar site-layout-full-width menu-has-search header-sticky';
    $blog_classes = 'header-style-1 menu-has-search header-sticky';
    $contact_classes = 'page no-sidebar header-style-1 menu-has-search';
?>

<body <?php if (is_page_template('inc/template-blog.php') || is_single()) {body_class($blog_classes);} elseif (is_page_template('inc/template-contact.php')) {body_class($contact_classes);} else {body_class($body_classes);} ?>>

<div id="wrapper" class="animsition">
<div id="page" class="clearfix">

<div id="site-header-wrap">
	<!-- Top Bar -->
	<div id="top-bar">
	    <div id="top-bar-inner" class="container">
	        <div class="top-bar-inner-wrap">
	            <div class="top-bar-content">
	                <span id="top-bar-text">
	                    <i class="fa fa-map-marker"></i>4115 Blackhawk Plaza Circle, Ste. 100, Danville CA 94506
	                    <i class="fa fa-phone"></i><a href="tel:+19253628898">925-362-8898</a>
	                </span><!-- /#top-bar-text -->
	            </div><!-- /.top-bar-content -->

	            <div class="top-bar-socials">
	                <div class="inner">
	                    <span class="icons">
	                        <a href="https://www.facebook.com/SierraCrestConstruction" title="Facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                            <a href="https://www.linkedin.com/in/sierracrestconstruction" title="LinkedIn"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                            <a href="https://www.yelp.com/biz/sierra-crest-construction-and-developers-danville" title="Yelp"><span class="fa fa-yelp" aria-hidden="true"></span></a>
	                    </span>
	                </div>
	            </div><!-- /.top-bar-socials -->
	        </div>
	    </div>
	</div><!-- /#top-bar -->

    <!-- Header -->
    <header id="site-header" class="header-front-page style-1">
        <div id="site-header-inner" class="container">
            <div class="wrap-inner">          
                <div id="site-logo" class="clearfix">
                    <div id="site-logo-inner">
                        <a href="/" title="Construction" rel="home" class="main-logo">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="Construction" data-width="204" data-height="30">
                        </a>
                    </div>
                </div><!-- /#site-logo -->

                <div class="mobile-button"><span></span></div><!-- //mobile menu button -->

                <nav id="main-nav" class="main-nav">
                    <ul class="menu">
                        <li class="menu-item current-menu-item"><a href="/">Home</a></li>
                        <li class="menu-item"><a href="/contact">Contact</a></li>
                    </ul>
                </nav><!-- /#main-nav -->

                <div id="header-search">
                    <a class="header-search-icon" href="#"><span class="fa fa-search"></span></a>

                    <form role="search" method="get" class="header-search-form" action="#">
                        <input type="text" value="" name="s" class="header-search-field" placeholder="Type and hit enter...">
                        <button type="submit" class="header-search-submit" title="Search">Search</button>
                        <input type="hidden" name="post_type" value="post">
                    </form>
                </div><!-- /#header-search -->
            </div>
        </div><!-- /#site-header-inner -->
    </header><!-- /#site-header -->
</div><!-- /#site-header-wrap -->
