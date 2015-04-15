<?php
/**
 * The Header for our theme.
 *
 * @package progression
 * @since progression 1.0
 */
?><!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>  <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width">
    <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php if(of_get_option('favicon')): ?><link href="<?php echo of_get_option('favicon'); ?>" rel="shortcut icon" /><?php endif; ?>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="/mstile-310x310.png" />


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=498532236933854&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<header>
	<div class="width-container">
		<h1 id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo of_get_option('logo', get_template_directory_uri() . '/images/logo.png'); ?>" alt="<?php bloginfo('name'); ?>" width="<?php echo of_get_option('logo_width', '116'); ?>" /></a></h1>
		<nav>
			<?php wp_nav_menu( array('theme_location' => 'primary', 'depth' => 4, 'menu_class' => 'sf-menu') ); ?>
		</nav>

		<div id="header-search">
			<?php //get_template_part( 'social', 'header' ); ?>
			<?php //get_search_form(); ?>
		</div>
		<div class="clearfix"></div>
	</div><!-- close .width-container -->
</header>

<div id="contact-header">
	<div class="width-container"><div id="contact-header-text"><?php echo of_get_option('contact_text', '<strong>Address:</strong> <em>156 University Ave. Palo Alto, Ca</em>  &nbsp;&nbsp; <strong>Reservation Line:</strong> <em>1-800-244-2525</em>'); ?>&nbsp;&nbsp; <strong><a href="http://windwardmedispa.com/windward-medispa-pricing-list">Pricing List for Services</a></strong>  <?php get_template_part( 'social', 'header' ); ?></div></div><!-- close .width-container -->
</div>

<?php if( is_page_template('homepage.php') || is_page_template('page-blog-slider.php') ): ?>
	<?php echo do_shortcode( '[layerslider id="4"]' ); ?>
<?php endif; ?>

<div id="main" class="site-main">
	<div class="width-container">