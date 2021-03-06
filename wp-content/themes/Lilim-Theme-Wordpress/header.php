<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="viewport"
	      content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	<meta name="author" content="Rika Akiba">
	<link rel="profile" href="http://gmpg.org/xfn/11"/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
	<!-- style file -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/styles.css">
	<link rel="Shortcut Icon" href="<?php bloginfo( 'template_directory' ); ?>/favicon.ico">
	<?php wp_head(); ?>
</head>
<body>
<header id="header">
	<nav class="top">
		<h2 class="hitokoto">
			<script src="http://api.hitokoto.us/rand?encode=js&charset=utf-8"></script>
			<script>hitokoto()</script>
		</h2>
		<ul class="right">
			<li class="login">
				<?php
				if ( is_user_logged_in() ) {
					echo '御主人様お帰り';
					?><a href="<?php echo $url = admin_url(); ?>" title="Admin">后宫</a><?php
				}
				else {
					echo 'お前、誰？';
					?><a href="<?php echo wp_login_url(); ?>" title="Login">Login</a><?php
				}
				?>
			</li>
		</ul>
	</nav>
	<nav class="main">
		<a id="logo" href="<?php echo home_url() ?>">
			<?php if(is_home()): ?>
			<h1>Akiba<span>Rika</span></h1>
			<?php else: ?>
			Akiba<span>Rika</span>
			<?php endif ?>
		</a>
		<?php wp_nav_menu( array(
			'theme_location' => 'page-menu',
			'container'      => '',
			'menu_class'     => 'menu right',
			'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s<li class="rika--mark"><span>Cherish Life</span></li><li class="search"><span class="bt-search"><i class="icon-search"></i></span></li></ul>'
		) ); ?>
		<div class="search-text">
			<?php get_search_form(); ?>
		</div>
	</nav>
	<section id="menu-mobile">
		<span class="bt-menu">Menu</span>

		<div class="wrapper-menu">
			<?php wp_nav_menu( array(
				'theme_location' => 'page-menu',
				'container'      => '',
				'menu_class'     => 'menu right'
			) ); ?>
			<div class="search-text">
				<span>SEARCH</span>
				<?php get_search_form(); ?>
			</div>
			<li class="others dropdown">
			</li>
		</div>
	</section>
	<div class="box-overlay"></div>
	<nav class="search open visible">
		<div class="left">
			<!--Nothing here?-->
		</div>
		<div class="right">
			<ul class="menu2">
				<li class="view-list">
					<i class="icon-layout icon-th <?php echo $_COOKIE['layout'] == 1 ? 'active':'' ?>">Grid</i>
					<i class="icon-layout icon-th-list <?php echo $_COOKIE['layout'] == 2 ? 'active':'' ?>">List</i>
				</li>
				<li class="bt-filters open-nav icon-inbox"><span>filter sites by topic</span></li>
			</ul>
		</div>
	</nav>
	<nav class="nav-sidebar" id="nav-filters">
		<div class="wrapper-nav">
			<p class="search-title">Searching is fun.</p>

			<div class="wrapper-dropdown" id="lilim-category">
				<span>By Category</span>
				<?php wp_nav_menu( array( 'theme_location' => 'cat-menu', 'container' => '' ) ); ?>
			</div>
			<div class="wrapper-dropdown" id="lilim-tag">
				<span>By Tag</span>
				<?php wp_tag_cloud('smallest=13&largest=13&number=50&format=list&unit=px');?>
			</div>
		</div>
		<div class="bt-close close-nav"></div>
	</nav>
</header>