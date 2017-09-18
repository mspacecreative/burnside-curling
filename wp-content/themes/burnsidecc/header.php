<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
    </script>
    
    <script>
      (function(d) {
        var config = {
          kitId: 'uln3drd',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>

	</head>
	<body <?php body_class(); ?>>

		<!--Mobile Menu Overlay-->
		<div class="menu-overlay"></div>
		
		<!--Mobile Menu-->
		<div class="mobile-menu">
			<?php site_nav(); ?>
		</div>
		
		<!--Mobile Menu Hamburger Icon-->
		<button class="hamburger hamburger--spin" type="button">
		  <span class="hamburger-box">
		    <span class="hamburger-inner"></span>
		  </span>
		</button>
		<!--Mobile Menu Hamburger Icon-->
		
		<!--Mobile Menu-->
		
		<!-- header -->
		<header class="header" role="banner">
		
			<div class="inner clear">
				<!-- logo -->
				<div class="logo">
					<a href="<?php echo home_url(); ?>">
						<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo-wh.png" alt="Logo" class="logo-img light">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img dark">
					</a>
				</div>
				<!-- /logo -->
				
			  <!-- nav -->
			  <nav class="nav" role="navigation">
			  	<?php site_nav(); ?>
			  </nav>
			  <!-- /nav -->
			</div>
		
		</header>
		<!-- /header -->
		
		<!-- wrapper -->
		<div class="wrapper">