<!DOCTYPE html>
<!--
******主题信息******
* Theme Name: Writing for WordPress
* Theme URI: http://themes.xiguabaobao.com/Writing/
* Description: Writing主题（免费） BUG反馈：<a href="http://themes.xiguabaobao.com/Writing-for-typecho/#respond">西瓜宝宝主题</a>
* Author: 西瓜宝宝主题
* Author URI: http://themes.xiguabaobao.com
* Version: 1.0
* © 2014 themes.xiguabaobao.com. All rights reserved.
-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php wp_title('-', true, 'right'); echo get_option('blogname'); if (is_home ()) echo "-", get_option('blogdescription'); if ($paged > 1) echo '-Page ', $paged; ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?20140826">
	<!-- 通过自有函数输出HTML头部信息 -->
    <?php wp_head(); ?>
</head>
<body>
	<div class="header">
		<div class="container">
			<a href="<?php bloginfo('url'); ?>" class="site-title">
				<?php bloginfo('name'); ?>
			</a>
			
			<p class="site-description"><?php bloginfo('description'); ?></p>

			<?php wp_nav_menu(array(
				'theme_location' => 'menu-navbar',
				'container' => '',
				'menu_id' => 'menu-navbar',
				'menu_class' => 'nav',
				'before' => '',
				'after' => ''
				)); 
			?>
		</div>
	</div>