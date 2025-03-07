<?php
$bosa_clinic_blogAdvertoneID = get_theme_mod( 'bosa_clinic_blog_promotions_one','');
$bosa_clinic_blogDiscountoneLabel = get_theme_mod( 'bosa_clinic_blog_advert_one_label', '');
$bosa_clinic_blogAdverttwoID = get_theme_mod( 'bosa_clinic_blog_promotions_two','');       
$bosa_clinic_blogDiscounttwoLabel = get_theme_mod( 'bosa_clinic_blog_advert_two_label', '');
$bosa_clinic_blogAdvertthreeID = get_theme_mod( 'bosa_clinic_blog_promotions_three','');
$bosa_clinic_blogDiscountthreeLabel = get_theme_mod( 'bosa_clinic_blog_advert_three_label', '');

$bosa_clinic_Advert_array = array();
$bosa_clinic_has_Advert = false;
$bosa_clinic_has_label = false;
if( !empty( $bosa_clinic_blogAdvertoneID ) || !empty( $bosa_clinic_blogDiscountoneLabel ) ){
	$bosa_clinic_blog_promotions_one  = wp_get_attachment_image_src( $bosa_clinic_blogAdvertoneID,'bosa-clinic-590-310');
 	if ( is_array(  $bosa_clinic_blog_promotions_one ) ){
 		$bosa_clinic_has_Advert = true;
 		$bosa_clinic_has_label = true;
   	 	$bosa_clinic_blog_promotionss_one = $bosa_clinic_blog_promotions_one[0];
   	 	$bosa_clinic_Advert_array['image_one'] = array(
			'ID' => $bosa_clinic_blog_promotionss_one,
			'discount_label' => $bosa_clinic_blogDiscountoneLabel,
		);	
  	}
}
if( !empty( $bosa_clinic_blogAdverttwoID  ) || !empty( $bosa_clinic_blogDiscounttwoLabel ) ){
	$bosa_clinic_blog_promotions_two = wp_get_attachment_image_src( $bosa_clinic_blogAdverttwoID,'bosa-clinic-590-310');
	if ( is_array(  $bosa_clinic_blog_promotions_two ) ){
		$bosa_clinic_has_Advert = true;
		$bosa_clinic_has_label = true;	
        $bosa_clinic_blog_promotionss_two = $bosa_clinic_blog_promotions_two[0];
        $bosa_clinic_Advert_array['image_two'] = array(
			'ID' => $bosa_clinic_blog_promotionss_two,
			'discount_label' => $bosa_clinic_blogDiscounttwoLabel,
		);	
  	}
}
if( !empty( $bosa_clinic_blogAdvertthreeID ) || !empty( $bosa_clinic_blogDiscountthreeLabel )){	
	$bosa_clinic_blog_promotions_three = wp_get_attachment_image_src( $bosa_clinic_blogAdvertthreeID,'bosa-clinic-590-310');
	if ( is_array(  $bosa_clinic_blog_promotions_three ) ){
		$bosa_clinic_has_Advert = true;
		$bosa_clinic_has_label = true;
      	$bosa_clinic_blog_promotionss_three = $bosa_clinic_blog_promotions_three[0];
      	$bosa_clinic_Advert_array['image_three'] = array(
			'ID' => $bosa_clinic_blog_promotionss_three,
			'discount_label' => $bosa_clinic_blogDiscountthreeLabel,
		);	
  	}
}

if( !get_theme_mod( 'bosa_clinic_disable_promotions_section', true ) && $bosa_clinic_has_Advert && $bosa_clinic_has_label ){ ?>
	<section class="section-promotions-area">
		<div class="content-wrap">
			<div class="row justify-content-center">
				<?php foreach( $bosa_clinic_Advert_array as $bosa_clinic_each_Advert ){ ?>
					<div class="col-sm-6 col-md-4">
						<article class="promotions-content-wrap">
							<figure class= "featured-image">
								<?php if( !empty( $bosa_clinic_each_Advert['discount_label'] ) ) { ?>
									<span class="overlay-txt">
										<?php echo esc_html( $bosa_clinic_each_Advert['discount_label'] ); ?>
									</span>
								<?php } ?>
								<img src="<?php echo esc_url( $bosa_clinic_each_Advert['ID'] ); ?>">
							</figure>
						</article>
					</div>
				<?php } ?>
			</div>	
		</div>
	</section>
<?php } 