<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Bosa Clinic
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function bosa_clinic_body_classes( $classes ) {
	// Adds a class of theme skin
	if( get_theme_mod( 'bosa_clinic_skin_select', 'default' ) == 'dark' ){
		$classes[] = 'dark-skin';
	}elseif( get_theme_mod( 'bosa_clinic_skin_select', 'default' ) == 'blackwhite' ){
		$classes[] = 'black-white-skin';
	}else{
		$classes[] = 'default-skin';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( get_theme_mod( 'bosa_clinic_sidebar_settings', 'right' ) == 'right' ){
		if( bosa_clinic_wooCom_is_shop() ){
			if ( !is_active_sidebar( 'woocommerce-right-sidebar' ) ) {
				$classes[] = 'no-sidebar';
			}
		}else{
			if ( !is_active_sidebar( 'right-sidebar' ) ) {
				$classes[] = 'no-sidebar';
			}
		}
	}elseif ( get_theme_mod( 'bosa_clinic_sidebar_settings', 'right' ) == 'left' ){
		if( bosa_clinic_wooCom_is_shop() ){
			if ( !is_active_sidebar( 'woocommerce-left-sidebar' ) ) {
				$classes[] = 'no-sidebar';
			}
		}else{
			if ( !is_active_sidebar( 'left-sidebar' ) ) {
				$classes[] = 'no-sidebar';
			}
		}
	}elseif ( get_theme_mod( 'bosa_clinic_sidebar_settings', 'right' ) == 'right-left' ){
		if( bosa_clinic_wooCom_is_shop() ){
			if ( !is_active_sidebar( 'woocommerce-left-sidebar' ) && !is_active_sidebar( 'woocommerce-right-sidebar' ) ) {
				$classes[] = 'no-sidebar';
			}
		}else{
			if ( !is_active_sidebar( 'left-sidebar' ) && !is_active_sidebar( 'right-sidebar' ) ) {
				$classes[] = 'no-sidebar';
			}
		}
	}else{
		$classes[] = 'content-no-sidebar';
	}
	if ( ( is_home() || ( is_archive() && !bosa_clinic_wooCom_is_shop() ) ) && get_theme_mod( 'bosa_clinic_disable_sidebar_blog_page', false ) ){
		$classes[] = 'no-sidebar';
	}
	if ( is_page() && get_theme_mod( 'bosa_clinic_disable_sidebar_page', true ) ){
		$classes[] = 'no-sidebar';
	}
	if ( is_single() && get_theme_mod( 'bosa_clinic_disable_sidebar_single_post', false ) ){
		$classes[] = 'no-sidebar';
	}
	if ( bosa_clinic_wooCom_is_shop() && get_theme_mod( 'bosa_clinic_disable_sidebar_woocommerce_page', false ) ){
		$classes[] = 'no-sidebar';
	}
	if( bosa_clinic_wooCom_is_cart() || bosa_clinic_wooCom_is_checkout() || bosa_clinic_wooCom_is_account_page() ){
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'bosa_clinic_body_classes' );

if( !function_exists( 'bosa_clinic_get_icon_by_post_format' ) ):
/**
* Gives a css class for post format icon
*
* @return string
* @since Bosa Clinic 1.0.0
*/
function bosa_clinic_get_icon_by_post_format(){
    $icons = array(
        'standard' => 'fas fa-thumbtack',
        'sticky'   => 'fas fa-thumbtack',
        'aside'    => 'fas fa-file-alt',
        'image'    => 'fas fa-image',
        'video'    => 'far fa-play-circle',
        'quote'    => 'fas fa-quote-right',
        'link'     => 'fas fa-link',
        'gallery'  => 'fas fa-images',
        'status'   => 'fas fa-comment',
        'audio'    => 'fas fa-volume-up',
        'chat'     => 'fas fa-comments',
    );
    $format = get_post_format();
    if( empty( $format ) ){
        $format = 'standard';
    }
    return apply_filters( 'bosa_clinic_post_format_icon', $icons[ $format ] );
}
endif;

/**
 * Page/Post title in frontpage and blog
 */
function bosa_clinic_page_title_display() {
	if ( is_singular() || ( !is_home() && is_front_page() ) ): ?>
		<h1 class="page-title entry-title"><?php single_post_title(); ?></h1>
	<?php elseif ( is_archive() ) : 
		the_archive_title( '<h1 class="page-title">', '</h1>' );
	elseif ( is_search() ) : ?>
		<h1 class="page-title entry-title">
		<?php
		/* translators: %s - Searched WordPress query variable*/ 
		printf( esc_html__( 'Search Results for: %s', 'bosa-clinic' ), get_search_query() ); ?></h1>
	<?php elseif ( is_404() ) :
		echo '<h1 class="page-title entry-title">' . esc_html__( 'Oops! That page can&#39;t be found.', 'bosa-clinic' ) . '</h1>';
	endif;
}

/**
 * Display page title
 */
function bosa_clinic_page_title() {
	if( get_theme_mod( 'bosa_clinic_disable_page_title', 'disable_front_page' ) == 'disable_all_pages' ){
		// this condition will disable page title from all pages
		echo '';
	}elseif( is_front_page() && get_theme_mod( 'bosa_clinic_disable_page_title', 'disable_front_page' ) == 'disable_front_page' ){
		// this condition will disable page title from front page only
		echo '';
	}else {
		bosa_clinic_page_title_display();
	}
}

/**
 * Display single post title
 */
function bosa_clinic_single_page_title() {
	if( get_theme_mod( 'bosa_clinic_disable_single_post_title', 'enable_all_pages' ) == 'disable_all_pages' ){
		// this condition will disable page title from all pages
		echo '';
	}else {
		bosa_clinic_page_title_display();
	}
}

/**
 * Display blog page title
 */
function bosa_clinic_blog_page_title() {
	if( get_theme_mod( 'bosa_clinic_disable_blog_page_title', 'enable_all_pages' ) == 'disable_all_pages' ){
		// this condition will disable page title from all pages
		echo '';
	}else {
		bosa_clinic_page_title_display();
	}
}

/**
 * Adds custom size in images
 */
function bosa_clinic_image_size( $image_size ){
	$image_id = get_post_thumbnail_id();
	
	the_post_thumbnail( $image_size, array(
		'alt' => esc_attr(get_post_meta( $image_id, '_wp_attachment_image_alt', true))
	) );
}

/**
* Adds a submit button in search form
* 
* @since Bosa Clinic 1.0.0
* @param string $form
* @return string
*/
function bosa_clinic_modify_search_form( $form ){
	return str_replace( '</form>', '<button type="submit" class="search-button"><span class="fas fa-search"></span></button></form>', $form );
}
add_filter( 'get_search_form', 'bosa_clinic_modify_search_form' );

/**
 * Add breadcrumb
 */

if ( ! function_exists( 'bosa_clinic_breadcrumb' ) ) :

	function bosa_clinic_breadcrumb() {

		// Bail if Home Page.
		if ( ! is_home() && is_front_page() ) {
			return;
		} ?>
		<?php if( function_exists( 'bcn_display' ) ){ ?>
			<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/"> 
			    <?php bcn_display(); ?>
			</div>
		<?php } ?>
		<?php
	}

endif;

if ( ! function_exists( 'bosa_clinic_breadcrumb_wrap' ) ) :
	/**
	 * Add Breadcrumb Wrapper
	 *
	 * @since Bosa Clinic 1.0.0
	 *
	 */
	
	function bosa_clinic_breadcrumb_wrap( $transparent = false ) {
		if( !is_home() ) { ?>
			<div class="breadcrumb-wrap">
	        	<?php if( $transparent ){ ?>
	        		<div class="container">
	        			<?php bosa_clinic_breadcrumb(); ?>
	        		</div>
				<?php } else{ bosa_clinic_breadcrumb(); } ?>
	        </div>
		<?php
		} 
	}
endif;

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function bosa_clinic_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'bosa_clinic_pingback_header' );

/**
* Add a class in body
*
* @since Bosa Clinic 1.0.0
* @param array $class
* @return array $class
*/
function bosa_clinic_body_class_modification( $class ){
	
	// Site Dark Mode
	if( !get_theme_mod( 'disable_dark_mode', true ) ){
		$class[] = 'dark-mode';
	}

	// Site Layouts
	if( get_theme_mod( 'bosa_clinic_site_layout', 'default' ) == 'default' ){
		$class[] = 'site-layout-default';
	}else if( get_theme_mod( 'bosa_clinic_site_layout', 'default' ) == 'box' ){
		$class[] = 'site-layout-box';
	}else if( get_theme_mod( 'bosa_clinic_site_layout', 'default' ) == 'frame' ){
		$class[] = 'site-layout-frame';
	}else if( get_theme_mod( 'bosa_clinic_site_layout', 'default' ) == 'full' ){
		$class[] = 'site-layout-full';
	}else if( get_theme_mod( 'bosa_clinic_site_layout', 'default' ) == 'extend' ){
		$class[] = 'site-layout-extend';
	}

	return $class;
}
add_filter( 'body_class', 'bosa_clinic_body_class_modification' );

if( !function_exists( 'bosa_clinic_transparent_body_class' ) ){
	/**
	* Add trasparent-header class in body
	*
	* @since Bosa Clinic 1.0.0
	* @param array $class
	* @return array $class
	*/
	function bosa_clinic_transparent_body_class( $class ){
		if( get_theme_mod( 'bosa_clinic_header_layout', 'header_one' ) == 'header_two' ){
			if( ( !get_theme_mod( 'bosa_clinic_disable_transparent_header_page', true ) && is_page() ) || ( !get_theme_mod( 'bosa_clinic_disable_transparent_header_post', true ) && is_single() ) || is_front_page() ){
				$class[] = 'transparent-header';
			}
		}
		return $class;
	}
	add_filter( 'body_class', 'bosa_clinic_transparent_body_class' );
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bosa_clinic_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'bosa_clinic_content_width', 720 );
}
add_action( 'after_setup_theme', 'bosa_clinic_content_width', 0 );

/**
 * Get Related Posts
 *
 * @since Bosa Clinic 1.0.0
 * @param array $taxonomy
 * @param int $per_page Default 3
 * @return bool | object
 */

if( !function_exists( 'bosa_clinic_get_related_posts' ) ):
	function bosa_clinic_get_related_posts( $taxonomy = array(), $per_page = 4, $get_params = false ){
	   
	    # Show related posts only in single page.
	    if ( !is_single() )
	        return false;

	    # Get the current post object to start of
	    $current_post = get_queried_object();

	    # Get the post terms, just the ids
	    $terms = wp_get_post_terms( $current_post->ID, $taxonomy, array( 'fields' => 'ids' ) );

	    # Lets only continue if we actually have post terms and if we don't have an WP_Error object. If not, return false
	    if ( !$terms || is_wp_error( $terms ) )
	        return false;
	    
	    # Check if the users argument is valid
	    if( is_array( $taxonomy ) && count( $taxonomy ) > 0 ){

	        $tax_query_arg = array();

	        foreach( $taxonomy as $tax ){

	            $tax = filter_var( $tax, FILTER_UNSAFE_RAW );

	            if ( taxonomy_exists( $tax ) ){

	                array_push( $tax_query_arg, array(
	                    'taxonomy'         => $tax,
	                    'terms'            => $terms,
	                    'include_children' => false
	                ) );
	                
	            }
	        }

	        if( count( $tax_query_arg ) == 0 ){
	            return false;
	        }

	        if( count( $tax_query_arg ) > 1 ){
	            $tax_query_arg[ 'relation' ] = 'OR';
	        }
	        
	    }else
	        return false;
	    
	    # Set the default query arguments
	    $args = array(
	        'post_type'      => $current_post->post_type,
	        'post__not_in'   => array( $current_post->ID ),
	        'posts_per_page' => $per_page,
	        'tax_query'      => $tax_query_arg,
	    );

	    if( $get_params ){
	        return $args;
	    }
	    
	    # Now we can query our related posts and return them
	    $q = get_posts( $args );

	    return $q;
	}
endif;

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * @since Bosa Clinic 1.0.0
 */
function bosa_clinic_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'bosa-clinic' ),
		'id'            => 'right-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'bosa-clinic' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title-wrap"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Offcanvas Menu Sidebar', 'bosa-clinic' ),
		'id'            => 'menu-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'bosa-clinic' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Left Sidebar', 'bosa-clinic' ),
		'id'            => 'left-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'bosa-clinic' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title-wrap"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'WooCommerce Right Sidebar', 'bosa-clinic' ),
		'id'            => 'woocommerce-right-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'bosa-clinic' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title-wrap"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'WooCommerce Left Sidebar', 'bosa-clinic' ),
		'id'            => 'woocommerce-left-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'bosa-clinic' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title-wrap"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );

	for( $i = 1; $i <= 4; $i++ ){
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Sidebar', 'bosa-clinic' ) . ' ' . $i,
			'id'            => 'footer-sidebar-' . $i,
			'description'   => esc_html__( 'Add widgets here.', 'bosa-clinic' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="footer-item">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
}
add_action( 'widgets_init', 'bosa_clinic_widgets_init' );

/**
 * Check whether the sidebar is active or not.
 *
 * @see https://codex.wordpress.org/Conditional_Tags
 * @since Bosa Clinic 1.0.0
 * @return bool whether the sidebar is active or not.
 */
function bosa_clinic_is_active_footer_sidebar(){

	for( $i = 1; $i <= 4; $i++ ){
		if ( is_active_sidebar( 'footer-sidebar-'.$i ) ) : 
			return true;
		endif;
	}
	return false;
}


if( ! function_exists( 'bosa_clinic_sort_category' ) ):
/**
 * Helper function for bosa_clinic_get_the_category()
 *
 * @since Bosa Clinic 1.0.0
 */
function bosa_clinic_sort_category( $a, $b ){
    return $a->term_id < $b->term_id;
}
endif;

/**
 * Validation functions
 *
 * @package Bosa Clinic
 */

if ( ! function_exists( 'bosa_clinic_validate_excerpt_count' ) ) :
	/**
	 * Check if the input value is valid integer.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return string Whether the value is valid to the current preview.
	 */
	function bosa_clinic_validate_excerpt_count( $validity, $value ){
		$value = intval( $value );
		if ( empty( $value ) || ! is_numeric( $value ) ) {
			$validity->add( 'required', esc_html__( 'You must supply a valid number.', 'bosa-clinic' ) );
		} elseif ( $value < 1 ) {
			$validity->add( 'min_slider', esc_html__( 'Minimum no of Excerpt Lenght is 1', 'bosa-clinic' ) );
		} elseif ( $value > 50 ) {
			$validity->add( 'max_slider', esc_html__( 'Maximum no of Excerpt Lenght is 50', 'bosa-clinic' ) );
		}
		return $validity;
	}
endif;

/**
 * To disable archive prefix title.
 * @since Bosa Clinic 1.0.0
 */

function bosa_clinic_modify_archive_title( $title ) {
	if( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
    } elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>' ;
    } elseif ( is_year() ) {
        $title = get_the_date( _x( 'Y', 'yearly archives date format', 'bosa-clinic' ) );
    } elseif ( is_month() ) {
        $title = get_the_date( _x( 'F Y', 'monthly archives date format', 'bosa-clinic' ) );
    } elseif ( is_day() ) {
        $title = get_the_date( _x( 'F j, Y', 'daily archives date format', 'bosa-clinic' ) );
     } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }

	return $title;
}

add_filter( 'get_the_archive_title', 'bosa_clinic_modify_archive_title' );

if( ! function_exists( 'bosa_clinic_get_the_category' ) ):
/**
* Returns categories after sorting by term id descending
* 
* @since Bosa Clinic 1.0.0
* @uses bosa_clinic_sort_category()
* @return array
*/
function bosa_clinic_get_the_category( $id = false ){
    $failed = true;

    if( !$id ){
        $id = get_the_id();
    }
    
    # Check if Yoast Plugin is installed 
    # If yes then, get Primary category, set by Plugin

    if ( class_exists( 'WPSEO_Primary_Term' ) ){

        # Show the post's 'Primary' category, if this Yoast feature is available, & one is set
        $wpseo_primary_term = new WPSEO_Primary_Term( 'category', $id );
        $wpseo_primary_term = $wpseo_primary_term->get_primary_term();

        $bosa_clinic_cat[0] = get_term( $wpseo_primary_term );

        if ( !is_wp_error( $bosa_clinic_cat[0] ) ) { 
           $failed = false;
        }
    }

    if( $failed ){

      $bosa_clinic_cat = get_the_category( $id );
      usort( $bosa_clinic_cat, 'bosa_clinic_sort_category' );  
    }
    
    return $bosa_clinic_cat;
}

endif;

/**
* Get post categoriesby by term id
* 
* @since Bosa Clinic 1.0.0
* @uses bosa_clinic_get_post_categories()
* @return array
*/
function bosa_clinic_get_post_categories(){

	$terms = get_terms( array(
	    'taxonomy' => 'category',
	    'hide_empty' => true,
	) );

	if( empty($terms) || !is_array( $terms ) ){
		return array();
	}

	$data = array();
	foreach ( $terms as $key => $value) {
		$term_id = absint( $value->term_id );
		$data[$term_id] =  esc_html( $value->name );
	}
	return $data;

}

/**
* Get Custom Logo URL
* 
* @since Bosa Clinic 1.0.0
*/
function bosa_clinic_get_custom_logo_url(){
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    if ( is_array($image) ){
	    return $image[0];
	}else{
		return '';
	}
}

/**
* Add a home page custom banner
* @since Bosa Clinic 1.0.0
*/
function bosa_clinic_banner(){

	$width_control = '';
	if( get_theme_mod( 'bosa_clinic_banner_width_controls', 'full' ) == 'boxed' ){
		$width_control = 'container boxed';
	}
	$banner_image_ID 		= get_theme_mod( 'bosa_clinic_banner_image', '' );
	$render_banner_image 	= get_theme_mod( 'bosa_clinic_render_banner_image_size', 'bosa-clinic-1920-550' );
	$banner_obj 			= wp_get_attachment_image_src( $banner_image_ID, $render_banner_image );
	if( !$banner_image_ID ){
		$banner_image = get_theme_file_uri( '/assets/images/bosa-clinic-1920-550.jpg' );
	}else{
		$banner_image = $banner_obj[0];
	}
	$alignmentClass = 'text-center';
	if ( get_theme_mod( 'bosa_clinic_main_banner_content_alignment' , 'center' ) == 'left' ){
		$alignmentClass = 'text-left';
	}elseif ( get_theme_mod( 'bosa_clinic_main_banner_content_alignment' , 'center' ) == 'right' ){
		$alignmentClass = 'text-right';
	}
 	?>

 	<div class="section-banner main-banner <?php echo esc_attr( $width_control ); ?>">
		<div class="banner-img" style="background-image: url( <?php echo esc_url( $banner_image ); ?> );">
			<div class="banner-content <?php echo esc_attr( $alignmentClass ); ?>">
				<?php if( !get_theme_mod( 'bosa_clinic_disable_banner_title', false ) ){ ?>
					<h2 class="entry-title">
						<?php 
						$banner_title = get_theme_mod( 'bosa_clinic_banner_title', '' );
						echo esc_html( $banner_title ? $banner_title : '' ); ?>
					</h2>
				<?php } ?>
				<?php if( !get_theme_mod( 'bosa_clinic_disable_banner_subtitle', false ) ){ ?>
					<p class="entry-subtitle">
						<?php 
						$banner_subtitle = get_theme_mod( 'bosa_clinic_banner_subtitle', '' );
						echo esc_html( $banner_subtitle ? $banner_subtitle : '' ); 
						?> 
					</p>
				<?php } ?>
				<?php
					if( !get_theme_mod( 'bosa_clinic_disable_banner_buttons', false ) ){
						$banner_btn_defaults = array(
							array(
								'banner_btn_type' 			=> 'button-outline',
								'banner_btn_bg_color' 		=> '#E12454',
								'banner_btn_border_color' 	=> '#ffffff',
								'banner_btn_text_color' 	=> '#ffffff',
								'banner_btn_hover_color' 	=> '#8cb46c',
								'banner_btn_text' 			=> '',
								'banner_btn_link' 			=> '',
								'banner_btn_target'			=> true,
								'banner_btn_radius' 		=> 0,
							),		
						);
				        $banner_buttons = get_theme_mod( 'bosa_clinic_main_banner_buttons_repeater', $banner_btn_defaults );
				        
				        if( !empty( $banner_buttons ) && is_array( $banner_buttons ) ){ ?>
				        	<div class="button-container">
				        		<?php
						            $count = 0.2;
						            $i = 1;
						            foreach( $banner_buttons as $value ){
						            	$link_target = '';
										if( $value['banner_btn_target'] ){
											$link_target = '_blank';
										}else {
											$link_target = '';
										}
						            	if( !empty( $value['banner_btn_text'] ) ){
						                	echo '<a href="' . esc_url( $value['banner_btn_link'] ) . '" class="banner-btn-'. esc_attr($i) .' ' . esc_attr( $value['banner_btn_type'] ) . ' " target="' . esc_attr( $link_target ) . '">' . esc_html( $value['banner_btn_text'] ) . '</a>';
						                	$count = $count + 0.2;
						                }
						                $i++;
						            }
						        ?>
						    </div>
						    <?php
        				}
        			}
    			?>
			</div>
			<div class="overlay"></div>
		</div>
	</div>
	<?php
}

/**
* Add a footer image
* @since Bosa Clinic 1.0.0
*/
function bosa_clinic_footer_image(){
	$render_bottom_footer_image_size 	= get_theme_mod( 'bosa_clinic_render_bottom_footer_image_size', 'full' );
	$bottom_footer_image_id 			= get_theme_mod( 'bosa_clinic_bottom_footer_image', '' );
	$get_bottom_footer_image_array 		= wp_get_attachment_image_src( $bottom_footer_image_id, $render_bottom_footer_image_size );
	if( is_array( $get_bottom_footer_image_array ) ){
		$bottom_footer_image = $get_bottom_footer_image_array[0];
	}else{
		$bottom_footer_image = '';
	}
	$alt = get_post_meta( get_theme_mod( 'bosa_clinic_bottom_footer_image', '' ), '_wp_attachment_image_alt', true );
	if ( $bottom_footer_image ){
		$bottom_footer_image_target = get_theme_mod( 'bosa_clinic_bottom_footer_image_target', true );
		$link_target = '';
		if( $bottom_footer_image_target ){
			$link_target = '_blank';
		}
 	?>
	 	<div class="bottom-footer-image-wrap">
	 		<a href="<?php echo esc_url( get_theme_mod( 'bosa_clinic_bottom_footer_image_link', '' ) ); ?>" alt="<?php echo esc_attr($alt); ?>" target="<?php echo esc_attr( $link_target ); ?>">
	 			<img src="<?php echo esc_url( $bottom_footer_image ); ?>">
	 		</a>
	 	</div>
	<?php
	}
}

/**
* Add banner title
* @since Bosa Clinic 1.0.0
*/
function bosa_clinic_get_banner_title(){
	return esc_html( get_theme_mod( 'bosa_clinic_banner_title', '' ) );
}

/**
* Add banner subtitle
* @since Bosa Clinic 1.0.0
*/
function bosa_clinic_get_banner_subtitle(){
	return esc_html( get_theme_mod( 'bosa_clinic_banner_subtitle', '' ) );
}

/**
* Add excerpt length
* @since Bosa Clinic 1.0.0
*/
function bosa_clinic_excerpt_length( $length ) {
	if ( is_admin() ) return $length;
	$excerpt_length = get_theme_mod( 'excerpt_length' , 60 );
	return $excerpt_length;	
}
add_filter( 'excerpt_length', 'bosa_clinic_excerpt_length', 999 );

if( !function_exists( 'bosa_clinic_has_social' ) ){
	/**
	* Check if social media icon is empty.
	* 
	* @since Bosa Clinic 1.0.0
	* @return bool
	*/
	function bosa_clinic_has_social(){
		$social_defaults = array(
			array(
				'icon' 		=> '',
				'link' 		=> '',
				'target' 	=> true,
			)			
		);
		$social_icons = get_theme_mod( 'bosa_clinic_social_media_links', $social_defaults );
		$has_social = false;
		if ( is_array( $social_icons ) ){
			foreach( $social_icons as $value ){
				if( !empty( $value['icon'] ) ){
					$has_social = true;
					break;
				}
			}
		}
		return $has_social;
	}
}

if( !function_exists( 'bosa_clinic_social' ) ){
	/**
	* Add social icons.
	* 
	* @since Bosa Clinic 1.0.0
	*/
	function bosa_clinic_social(){
		
	    echo '<ul class="social-group">';
		    $count = 0.2;
		    $social_defaults = array(
				array(
					'icon' 		=> '',
					'link' 		=> '',
					'target' 	=> true,
				)			
			);
			$social_icons = get_theme_mod( 'bosa_clinic_social_media_links', $social_defaults );
		    foreach( $social_icons as $value ){
		        if( $value['target'] ){
		    		$link_target = '_blank';
		    	}else{
		    		$link_target = '';
		    	}
		        if( !empty( $value['icon'] ) ){
		            echo '<li><a href="' . esc_url( $value['link'] ) . '" target="' .esc_attr( $link_target ). '"><i class=" ' . esc_attr( $value['icon'] ) . '"></i></a></li>';
		            $count = $count + 0.2;
		        }
		    }
	    echo '</ul>';
	}
}

if( !function_exists( 'bosa_clinic_has_header_media' ) ){
	/**
	* Check if header media slider item is empty.
	* 
	* @since Bosa Clinic 1.0.0
	* @return bool
	*/
	function bosa_clinic_has_header_media(){
		$header_slider_defaults = array(
			array(
				'slider_item' 	=> '',
			)			
		);
		$header_image_slider = get_theme_mod( 'bosa_clinic_header_image_slider', $header_slider_defaults );
		$has_header_media = false;
		if ( is_array( $header_image_slider ) ){
			foreach( $header_image_slider as $value ){
				if( !empty( $value['slider_item'] ) ){
					$has_header_media = true;
					break;
				}
			}
		}
		return $has_header_media;
	}
}

if( !function_exists( 'bosa_clinic_header_media' ) ){
	/**
	* Add header banner/slider.
	* 
	* @since Bosa Clinic 1.0.0
	*/
	function bosa_clinic_header_media(){
		$header_slider_defaults = array(
			array(
				'slider_item' 	=> '',
			)			
		);
		$header_image_slider = get_theme_mod( 'bosa_clinic_header_image_slider', $header_slider_defaults ); ?>
		<div class="header-image-slider">
		    <?php
		    $render_header_image_size = get_theme_mod( 'bosa_clinic_render_header_image_size', 'full' ); 
		    foreach( $header_image_slider as $slider_item ) :
		    	if( wp_attachment_is_image( $slider_item['slider_item'] ) ){
	    			$get_header_image_array = wp_get_attachment_image_src( $slider_item['slider_item'], $render_header_image_size );
	    			if( is_array( $get_header_image_array ) ){
	    				$header_image_url = $get_header_image_array[0];
	    			}else{
	    				$header_image_url = '';
	    			}
		    	}else{
		    		if( empty( $slider_item['slider_item'] ) ){
	    				$header_image_url = '';
	    			}else{
	    				$header_image_url = $slider_item['slider_item'];
	    			}
		    	} ?>
		    	<div class="header-slide-item" style="background-image: url( <?php echo esc_url( $header_image_url ); ?> )">
		    		<div class="slider-inner"></div>
		      </div>
		    <?php endforeach; ?>
		</div>
		<?php if( !get_theme_mod( 'bosa_clinic_disable_header_slider_arrows', false ) ) { ?>
			<ul class="slick-control">
		        <li class="header-slider-prev">
		        	<span></span>
		        </li>
		        <li class="header-slider-next">
		        	<span></span>
		        </li>
		    </ul>
		<?php }
		if ( !get_theme_mod( 'bosa_clinic_disable_header_slider_dots', false ) ){ ?>
			<div class="header-slider-dots"></div>
		<?php }
	}
}

/**
* Add post banner to transparent header
* @since Bosa Clinic 1.0.0
*/
function bosa_clinic_post_transparent_banner() { ?>
	<div class="overlay-post inner-banner-wrap">
		<?php
		$feature_image_id 				= get_post_thumbnail_id();
		$render_single_post_image_size 	= get_theme_mod( 'bosa_clinic_render_single_post_image_size', 'bosa-clinic-1370-550' );
		$feature_image_obj 				= wp_get_attachment_image_src( $feature_image_id, $render_single_post_image_size );
		if( is_array( $feature_image_obj ) ){
			$transparent_header_inner_banner = $feature_image_obj[0];
		}else{
			$transparent_header_inner_banner = '';
		}
		?>
		<div class="inner-banner-content" style="background-image: url( <?php echo esc_url( $transparent_header_inner_banner ); ?> );">
			<div class="container">
				<?php bosa_clinic_single_page_title(); ?>
			</div>
		</div>
		<?php if ( get_theme_mod( 'bosa_clinic_breadcrumbs_controls', 'show_in_all_page_post' ) == 'disable_in_all_pages' || get_theme_mod( 'bosa_clinic_breadcrumbs_controls', 'show_in_all_page_post' ) == 'show_in_all_page_post' ){
			bosa_clinic_breadcrumb_wrap( true );
		} ?>
	</div>
<?php }

/**
* Add page banner to transparent header
* @since Bosa Clinic 1.0.0
*/
function bosa_clinic_page_transparent_banner() { ?>
	<div class="overlay-page inner-banner-wrap">
		<?php
		$feature_image_id 			= get_post_thumbnail_id();
		$render_pages_image_size 	= get_theme_mod( 'bosa_clinic_render_pages_image_size', 'bosa-clinic-1370-550' );
		$feature_image_obj 			= wp_get_attachment_image_src( $feature_image_id, $render_pages_image_size );
		if( is_array( $feature_image_obj ) ){
			$transparent_header_inner_banner = $feature_image_obj[0];
		}else{
			$transparent_header_inner_banner = '';
		}
		?>
		<div class="inner-banner-content" style="background-image: url( <?php echo esc_url( $transparent_header_inner_banner ); ?> );">
			<div class="container">
				<?php bosa_clinic_page_title(); ?>
			</div>
		</div>
		<?php if ( get_theme_mod( 'bosa_clinic_breadcrumbs_controls', 'show_in_all_page_post' ) == 'show_in_all_page_post' ){
			bosa_clinic_breadcrumb_wrap( true );	
		} ?>
	</div>
<?php }


if( !function_exists( 'bosa_clinic_get_intermediate_image_sizes' ) ){
	/**
	* Array of image sizes.
	* 
	* @since Bosa Clinic 1.0.0
	* @return array
	*/
	function bosa_clinic_get_intermediate_image_sizes(){

		$data 	= array(
			'full'			=> esc_html__( 'Full Size', 'bosa-clinic' ),
			'large'			=> esc_html__( 'Large Size', 'bosa-clinic' ),
			'medium'		=> esc_html__( 'Medium Size', 'bosa-clinic' ),
			'medium_large'	=> esc_html__( 'Medium Large Size', 'bosa-clinic' ),
			'thumbnail'		=> esc_html__( 'Thumbnail Size', 'bosa-clinic' ),
			'1536x1536'		=> esc_html__( '1536x1536 Size', 'bosa-clinic' ),
			'2048x2048'		=> esc_html__( '2048x2048 Size', 'bosa-clinic' ),
			'bosa-clinic-1920-550' => esc_html__( '1920x550 Size', 'bosa-clinic' ),
			'bosa-clinic-1370-550'	=> esc_html__( '1370x550 Size', 'bosa-clinic' ),
			'bosa-clinic-590-310'	=> esc_html__( '590x310 Size', 'bosa-clinic' ),
			'bosa-clinic-420-380'	=> esc_html__( '420x380 Size', 'bosa-clinic' ),
			'bosa-clinic-420-300'	=> esc_html__( '420x300 Size', 'bosa-clinic' ),
			'bosa-clinic-420-200'	=> esc_html__( '420x200 Size', 'bosa-clinic' ),
			'bosa-clinic-290-150'	=> esc_html__( '290x150 Size', 'bosa-clinic' ),
			'bosa-clinic-80-60'	=> esc_html__( '80x60 Size', 'bosa-clinic' ),
		);
		
		return $data;

	}
}

/**
 * Adds custom classes to the array of body classes for WooCommerce pages.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function bosa_clinic_woocommerce_body_classes( $classes ) {
	
	if( bosa_clinic_wooCom_is_shop() && get_theme_mod( 'bosa_clinic_disable_sidebar_woocommerce_shop', false ) ){
		$classes[] = 'no-sidebar';
	}
	return $classes;
}
add_filter( 'body_class', 'bosa_clinic_woocommerce_body_classes' );

/**
 * Adds filter to force import demo for advanced import plugin.
 *
 */
function bosa_clinic_prefix_advanced_import_force_proceed() {
	return true;
}

add_action( 'advanced_import_force_proceed', 'bosa_clinic_prefix_advanced_import_force_proceed', 10 );

/**
* Get pages by post id.
* 
* @since Bosa Clinic 1.0.0
* @return array.
*/
function bosa_clinic_get_pages(){
    $page_array = get_pages();
    $pages_list = array();
    foreach ( $page_array as $key => $value ){
        $page_id = absint( $value->ID );
        $pages_list[ $page_id ] = $value->post_title;
    }
    return $pages_list;
}

/**
* Get woocommerce product categories.
* 
* @since Bosa Clinic 1.0.0
* @uses get_categories()
* @return array
*/
function bosa_clinic_get_product_categories(){

    $categories = get_categories( 'taxonomy=product_cat' );

    if( empty($categories) || !is_array( $categories ) ){
        return array();
    }

    $data = array();
    foreach ( $categories as $key => $value) {
        $cat_ID = absint( $value->cat_ID );
        $data[$cat_ID] =  esc_html( $value->name );
    }
    return $data;

}

/**
* Add botton to header 14 top header
* @since Bosa Clinic 1.0.0
*/

if( !function_exists( 'bosa_clinic_has_header_buttons' ) ){
    /**
    * Check if header button text is empty.
    * 
    * @since Bosa Clinic 1.0.0
    * @return bool
    */
    function bosa_clinic_has_header_buttons(){
        $header_btn_defaults = array(
            array(
                'header_btn_type'           => 'button-outline',
                'header_btn_bg_color'       => '#E12454',
                'header_btn_border_color'   => '#1a1a1a',
                'header_btn_text_color'     => '#1a1a1a',
                'header_btn_hover_color'    => '#8cb46c',
                'header_btn_text'           => '',
                'header_btn_link'           => '#',
                'header_btn_target'         => true,
                'header_btn_radius'         => 0,
            ),      
        );
        $header_buttons = get_theme_mod( 'bosa_clinic_header_button_repeater', $header_btn_defaults );
        $has_header_btn = false;
        if ( is_array( $header_buttons ) ){
            foreach( $header_buttons as $value ){
                if( !empty( $value['header_btn_text'] ) ){
                    $has_header_btn = true;
                    break;
                }
            }
        }
        return $has_header_btn;
    }
}

if( !function_exists( 'bosa_clinic_header_buttons' ) ){
    /**
    * Add header buttons.
    * 
    * @since Bosa Clinic 1.0.0
    */
    function bosa_clinic_header_buttons(){
        $header_btn_defaults = array(
            array(
                'header_btn_type'           => 'button-outline',
                'header_btn_bg_color'       => '#E12454',
                'header_btn_border_color'   => '#1a1a1a',
                'header_btn_text_color'     => '#1a1a1a',
                'header_btn_hover_color'    => '#8cb46c',
                'header_btn_text'           => '',
                'header_btn_link'           => '#',
                'header_btn_target'         => true,
                'header_btn_radius'         => 0,
            ),      
        );
        $header_buttons = get_theme_mod( 'bosa_clinic_header_button_repeater', $header_btn_defaults );
        $i = 1;
        foreach( $header_buttons as $value ){
            if( !empty( $value['header_btn_text'] ) ){
                $link_target = '';
                if( $value['header_btn_target'] ){
                    $link_target = '_blank';
                }else {
                    $link_target = '';
                } ?>
                <a href="<?php echo esc_url( $value['header_btn_link'] ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="header-btn-<?php echo esc_attr($i).' '.esc_attr( $value['header_btn_type'] ); ?>">
                    <?php echo esc_html( $value['header_btn_text'] ); ?>
                </a>    
            <?php }
            $i++;
        }
    }
}