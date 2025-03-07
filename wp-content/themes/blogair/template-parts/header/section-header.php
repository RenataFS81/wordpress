<?php
$option = blogone_theme_options();
$blogair_nav_marquee_text = get_theme_mod('blogair_nav_marquee_text', 'The Strength of a Plant-Based Diet | Adopting Minimalism: Streamline Your Life | Outdoor Adventures: Must-Have Gear for Hiking');
$blogair_nav_btn_label = get_theme_mod('blogair_nav_btn_label', 'Subscribe');
$blogair_nav_btn_link = get_theme_mod('blogair_nav_btn_link', '');
$blogair_nav_btn_target = get_theme_mod('blogair_nav_btn_target', false);
$blogair_nav_btn_show = get_theme_mod('blogair_nav_btn_show', true);
$blogair_nav_ticker_title = get_theme_mod('blogair_nav_ticker_title', 'Ticker');
?>
<header class="bs-header_wrapper">
	<div class="bs-navigation_wrapper <?php if( $option['blogone_h_sticky_show'] == true ){ echo 'is_sticky'; } ?>">
		<div class="container">
			<div class="navbar navbar-expand-lg bs-navbar_wraper">
				<?php 
				blogone_logo();
				?>
				<div class="bs-primary-menu">
					<button type="button" class="btn navbar-toggler">
						<i class="fa fa-align-left"></i>
					</button>
					<div class="nav-menu">
						<nav class="nav navbar-nav main-menu">
							<?php
							blogone_navigations();
							?>
						</nav>
						<button type="button" class="btn navbar-close"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<?php if($blogair_nav_btn_show==true){ ?>
					<a href="<?php echo esc_url($blogair_nav_btn_link); ?>" class="bs-book_btn" <?php if($blogair_nav_btn_target==true){ echo 'target="_blank"'; } ?>><?php echo esc_html($blogair_nav_btn_label); ?> <span></span><span></span><span></span><span></span></a>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="blf__ticker_list">
		<div class="container">
			<div class="ticker_list">
				<?php if ( ! empty( $blogair_nav_ticker_title ) ) : ?>
					<h3 class="ticker_title"><span class="text"><?php echo esc_html($blogair_nav_ticker_title); ?></span><span class="icon"><svg class="blf__svg" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
						<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
							<path d="M725 4672 c-120 -41 -205 -117 -258 -230 l-32 -67 0 -1715 0 -1715
							22 -70 c61 -191 219 -351 413 -418 l65 -22 1345 -5 c740 -3 1471 -3 1625 0
							252 5 286 8 345 28 189 63 347 221 413 412 l22 65 3 1161 2 1160 -23 45 c-13
							24 -43 58 -66 74 l-43 30 -358 3 -359 3 -3 477 c-3 464 -4 478 -25 530 -32 80
							-97 158 -166 203 -114 74 -9 69 -1516 69 -1260 -1 -1360 -2 -1406 -18z m1369
							-844 c57 -17 119 -82 135 -141 27 -95 -13 -195 -97 -244 l-47 -28 -345 -3
							c-411 -4 -431 -2 -500 67 -106 106 -81 269 51 335 l53 26 354 0 c252 0 367 -4
							396 -12z m899 -768 c21 -14 50 -43 65 -64 24 -35 27 -49 27 -116 0 -67 -3 -81
							-27 -116 -15 -21 -44 -50 -65 -64 l-37 -25 -800 -3 c-551 -2 -813 0 -838 8
							-147 42 -191 250 -76 357 58 54 27 53 904 50 l810 -2 37 -25z m1275 -1030 c2
							-697 0 -970 -9 -1009 -9 -43 -21 -63 -58 -101 -58 -58 -101 -70 -250 -70
							l-111 0 0 1070 0 1070 213 -2 212 -3 3 -955z m-1293 293 c76 -40 115 -105 115
							-188 0 -85 -48 -160 -125 -196 -38 -18 -82 -19 -831 -19 l-790 0 -53 26 c-134
							67 -158 244 -45 342 24 22 61 45 82 50 23 7 326 10 822 9 783 -2 785 -2 825
							-24z m-10 -742 c158 -72 167 -295 15 -381 l-45 -25 -770 -3 c-561 -2 -785 0
							-824 8 -74 16 -143 83 -160 156 -24 98 20 193 110 238 l53 26 790 0 c743 0
							793 -2 831 -19z"></path>
						</g>
					</svg>
				</span></h3>
			<?php endif; ?>
			<div class="marquee ready"><div style="width: 100000px; transform: translateX(0px); animation: 38.4375s linear 0s infinite normal none running marqueeAnimation-8774574;" class="js-marquee-wrapper"><div class="js-marquee" style="margin-right: 20px; float: left;">
				<?php if ( ! empty( $blogair_nav_marquee_text ) ) : ?>
					<div class="blf__item">
						<h4 class="post_title"><a href="javascript:void(0)"><?php echo wp_kses_post($blogair_nav_marquee_text); ?></a></h4>
						<span class="decor"><span></span></span>
					</div>
				<?php endif; ?>
			</div></div></div>
		</div>
	</div>
</div>
<div class="body-overlay"></div>
</header>