<?php
$bosa_clinic_departmentsoneID = get_theme_mod( 'bosa_clinic_department_image_one', '' );
$bosa_clinic_departmentsone = get_theme_mod( 'bosa_clinic_department_one', '' );

$bosa_clinic_departmentstwoID = get_theme_mod( 'bosa_clinic_department_image_two', '' );
$bosa_clinic_departmentstwo = get_theme_mod( 'bosa_clinic_department_two', '' );

$bosa_clinic_departmentsthreeID = get_theme_mod( 'bosa_clinic_department_image_three', '' );
$bosa_clinic_departmentsthree = get_theme_mod( 'bosa_clinic_department_three', '' );

$bosa_clinic_departmentsfourID = get_theme_mod( 'bosa_clinic_department_image_four', '' );
$bosa_clinic_departmentsfour = get_theme_mod( 'bosa_clinic_department_four', '' );

$bosa_clinic_departmentsfiveID = get_theme_mod( 'bosa_clinic_department_image_five', '' );
$bosa_clinic_departmentsfive = get_theme_mod( 'bosa_clinic_department_five', '' );

$bosa_clinic_departmentssixID = get_theme_mod( 'bosa_clinic_department_image_six', '' );
$bosa_clinic_departmentssix = get_theme_mod( 'bosa_clinic_department_six', '' );

$bosa_clinic_departmentssevenID = get_theme_mod( 'bosa_clinic_department_image_seven', '' );
$bosa_clinic_departmentsseven = get_theme_mod( 'bosa_clinic_department_seven', '' );

$bosa_clinic_departmentseightID = get_theme_mod( 'bosa_clinic_department_image_eight', '' );
$bosa_clinic_departmentseight = get_theme_mod( 'bosa_clinic_department_eight', '' );

$bosa_clinic_departmentsnineID = get_theme_mod( 'bosa_clinic_department_image_nine', '' );
$bosa_clinic_departmentsnine = get_theme_mod( 'bosa_clinic_department_nine', '' );


$bosa_clinic_category_product_one_array = array();
$bosa_clinic_category_product_two_array = array();
$bosa_clinic_category_product_three_array = array();
$bosa_clinic_has_product_one = false;
$bosa_clinic_has_product_two = false;
$bosa_clinic_has_product_three = false;
if( !empty( $bosa_clinic_departmentsoneID ) || !empty( $bosa_clinic_departmentsone ) ){
	$bosa_clinic_category_product_one = wp_get_attachment_image_src( $bosa_clinic_departmentsoneID ,'bosa-clinic-1370-550');
 	if ( is_array( $bosa_clinic_category_product_one ) ){
 		$bosa_clinic_has_product_one = true;
   	 	$bosa_clinic_category_products_one = $bosa_clinic_category_product_one[0];
   	 	$bosa_clinic_category_product_one_array['image_one'] ['ID'] = $bosa_clinic_category_products_one;	 	
  	}
  	if ( !empty( $bosa_clinic_departmentsone ) ){
 		$bosa_clinic_has_product_one = true;
   	 	$bosa_clinic_category_product_one_array['image_one']['category'] = $bosa_clinic_departmentsone;	
  	}
}
if( !empty( $bosa_clinic_departmentstwoID ) || !empty( $bosa_clinic_departmentstwo ) ){
	$bosa_clinic_category_product_two = wp_get_attachment_image_src( $bosa_clinic_departmentstwoID ,'bosa-clinic-420-300');
 	if ( is_array( $bosa_clinic_category_product_two ) ){
 		$bosa_clinic_has_product_two = true;
   	 	$bosa_clinic_category_products_two = $bosa_clinic_category_product_two[0];
   	 	$bosa_clinic_category_product_two_array['image_two'] ['ID'] = $bosa_clinic_category_products_two;	 	
  	}
  	if ( !empty( $bosa_clinic_departmentstwo ) ){
 		$bosa_clinic_has_product_two = true;
   	 	$bosa_clinic_category_product_two_array['image_two']['category'] = $bosa_clinic_departmentstwo;	
  	}
}
if( !empty( $bosa_clinic_departmentsthreeID ) || !empty( $bosa_clinic_departmentsthree ) ){
	$bosa_clinic_category_product_three = wp_get_attachment_image_src( $bosa_clinic_departmentsthreeID ,'bosa-clinic-420-300');
 	if ( is_array( $bosa_clinic_category_product_three ) ){
 		$bosa_clinic_has_product_two = true;
   	 	$bosa_clinic_category_products_three = $bosa_clinic_category_product_three[0];
   	 	$bosa_clinic_category_product_two_array['image_three'] ['ID'] = $bosa_clinic_category_products_three;	 	
  	}
  	if ( !empty( $bosa_clinic_departmentsthree ) ){
 		$bosa_clinic_has_product_two = true;
   	 	$bosa_clinic_category_product_two_array['image_three']['category'] = $bosa_clinic_departmentsthree;	
  	}
}
if( !empty( $bosa_clinic_departmentsfourID ) || !empty( $bosa_clinic_departmentsfour ) ){
	$bosa_clinic_category_product_four = wp_get_attachment_image_src( $bosa_clinic_departmentsfourID ,'bosa-clinic-420-300');
 	if ( is_array( $bosa_clinic_category_product_four ) ){
 		$bosa_clinic_has_product_two = true;
   	 	$bosa_clinic_category_products_four = $bosa_clinic_category_product_four[0];
   	 	$bosa_clinic_category_product_two_array['image_four'] ['ID'] = $bosa_clinic_category_products_four;	 	
  	}
  	if ( !empty($bosa_clinic_departmentsfour) ){
 		$bosa_clinic_has_product_two = true;
   	 	$bosa_clinic_category_product_two_array['image_four']['category'] = $bosa_clinic_departmentsfour;	
  	}
}
if( !empty( $bosa_clinic_departmentsfiveID ) || !empty( $bosa_clinic_departmentsfive ) ){
	$bosa_clinic_category_product_five = wp_get_attachment_image_src( $bosa_clinic_departmentsfiveID ,'bosa-clinic-420-300');
 	if ( is_array( $bosa_clinic_category_product_five ) ){
 		$bosa_clinic_has_product_two = true;
   	 	$bosa_clinic_category_products_five = $bosa_clinic_category_product_five[0];
   	 	$bosa_clinic_category_product_two_array['image_five'] ['ID'] = $bosa_clinic_category_products_five;	 	
  	}
  	if ( !empty( $bosa_clinic_departmentsfive ) ){
 		$bosa_clinic_has_product_two = true;
   	 	$bosa_clinic_category_product_two_array['image_five']['category'] = $bosa_clinic_departmentsfive;	
  	}
}
if( !empty( $bosa_clinic_departmentssixID ) || !empty( $bosa_clinic_departmentssix ) ){
	$bosa_clinic_category_product_six = wp_get_attachment_image_src( $bosa_clinic_departmentssixID ,'bosa-clinic-420-300');
 	if ( is_array( $bosa_clinic_category_product_six ) ){
 		$bosa_clinic_has_product_three = true;
   	 	$bosa_clinic_category_products_six = $bosa_clinic_category_product_six[0];
   	 	$bosa_clinic_category_product_three_array['image_six'] ['ID'] = $bosa_clinic_category_products_six;	 	
  	}
  	if ( !empty( $bosa_clinic_departmentssix ) ){
 		$bosa_clinic_has_product_three = true;
   	 	$bosa_clinic_category_product_three_array['image_six']['category'] = $bosa_clinic_departmentssix;	
  	}
}
if( !empty( $bosa_clinic_departmentssevenID ) || !empty( $bosa_clinic_departmentsseven ) ){
	$bosa_clinic_category_product_seven = wp_get_attachment_image_src( $bosa_clinic_departmentssevenID ,'bosa-clinic-420-300');
 	if ( is_array( $bosa_clinic_category_product_seven ) ){
 		$bosa_clinic_has_product_three = true;
   	 	$bosa_clinic_category_products_seven = $bosa_clinic_category_product_seven[0];
   	 	$bosa_clinic_category_product_three_array['image_seven'] ['ID'] = $bosa_clinic_category_products_seven;	 	
  	}
  	if ( !empty( $bosa_clinic_departmentsseven ) ){
 		$bosa_clinic_has_product_three = true;
   	 	$bosa_clinic_category_product_three_array['image_seven']['category'] = $bosa_clinic_departmentsseven;	
  	}
}
if( !empty( $bosa_clinic_departmentseightID ) || !empty( $bosa_clinic_departmentseight ) ){
	$bosa_clinic_category_product_eight = wp_get_attachment_image_src( $bosa_clinic_departmentseightID ,'bosa-clinic-420-300');
 	if ( is_array( $bosa_clinic_category_product_eight ) ){
 		$bosa_clinic_has_product_three = true;
   	 	$bosa_clinic_category_products_eight = $bosa_clinic_category_product_eight[0];
   	 	$bosa_clinic_category_product_three_array['image_eight'] ['ID'] = $bosa_clinic_category_products_eight;	 	
  	}
  	if ( !empty( $bosa_clinic_departmentseight ) ){
 		$bosa_clinic_has_product_three = true;
   	 	$bosa_clinic_category_product_three_array['image_eight']['category'] = $bosa_clinic_departmentseight;	
  	}
}
if( !empty( $bosa_clinic_departmentsnineID ) || !empty( $bosa_clinic_departmentsnine ) ){
	$bosa_clinic_category_product_nine = wp_get_attachment_image_src( $bosa_clinic_departmentsnineID ,'bosa-clinic-420-300');
 	if ( is_array( $bosa_clinic_category_product_nine ) ){
 		$bosa_clinic_has_product_three = true;
   	 	$bosa_clinic_category_products_nine = $bosa_clinic_category_product_nine[0];
   	 	$bosa_clinic_category_product_three_array['image_nine'] ['ID'] = $bosa_clinic_category_products_nine;	 	
  	}
  	if ( !empty( $bosa_clinic_departmentsnine ) ){
 		$bosa_clinic_has_product_three = true;
   	 	$bosa_clinic_category_product_three_array['image_nine']['category'] = $bosa_clinic_departmentsnine;	
  	}
}

$bosa_clinic_product_cat = bosa_clinic_get_post_categories();

if( !get_theme_mod( 'bosa_clinic_disable_departments_section', true ) && ( $bosa_clinic_has_product_one || $bosa_clinic_has_product_two || $bosa_clinic_has_product_three || get_theme_mod( 'bosa_clinic_department_title_one' ) || get_theme_mod( 'bosa_clinic_department_title_two' ) || get_theme_mod( 'bosa_clinic_department_title_three' ) ) ){ ?>
	<section class="section-product-category-area">
		<div class="row">
			<?php if( $bosa_clinic_has_product_one || get_theme_mod( 'bosa_clinic_department_title_one' ) ){ ?>
				<div class="col-md-12 col-lg-4">
					<div class="category-wraper">
						<?php if( get_theme_mod( 'bosa_clinic_department_title_one' ) ){ ?>
							<div class="section-title-wrap">
								<h2 class="product-section-title">	
									<?php echo esc_html( get_theme_mod( 'bosa_clinic_department_title_one' ) ); ?>
								</h2>
							</div>
						<?php } ?>
						<div class="content-wrap">
							<div class="row">
								<?php foreach( $bosa_clinic_category_product_one_array as $bosa_clinic_each_departmentsone ){ ?>
									<div class="col-sm-12">
										<article class="category-content-wrap">
											<?php 
											if ( isset( $bosa_clinic_each_departmentsone['ID'] ) && !empty( $bosa_clinic_each_departmentsone['ID'] ) ){
												$bosa_clinic_cat_url = '';
												if( isset( $bosa_clinic_each_departmentsone['category'] ) && !empty( $bosa_clinic_each_departmentsone['category'] ) ) {
													$bosa_clinic_cat_url = $bosa_clinic_each_departmentsone['category'];
												}
											?>
												<figure class= "featured-image">
													<a href="<?php echo esc_url( get_category_link( $bosa_clinic_cat_url ) ); ?>">
														<img src="<?php echo esc_url( $bosa_clinic_each_departmentsone['ID'] ); ?>">
													</a>	
												</figure>
											<?php } ?>
											<?php if ( isset( $bosa_clinic_each_departmentsone['category'] ) && !empty( $bosa_clinic_each_departmentsone['category'] ) ){ ?>
												<h5 class="entry-title">
													<a href="<?php echo esc_url( get_category_link( $bosa_clinic_each_departmentsone ['category'] ) ); ?>">
														<?php echo esc_html($bosa_clinic_product_cat[$bosa_clinic_each_departmentsone['category'] ] ); ?>
													</a>	
												</h5>
											<?php } ?>
										</article>	
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			<?php if( $bosa_clinic_has_product_two || get_theme_mod( 'bosa_clinic_department_title_two' ) ){ ?>
				<div class="col-md-6 col-lg-4">
					<div class="category-wraper">
						<?php if( get_theme_mod( 'bosa_clinic_department_title_two' ) ){ ?>
							<div class="section-title-wrap">
								<h2 class="product-section-title">	
									<?php echo esc_html( get_theme_mod( 'bosa_clinic_department_title_two' ) ); ?>
								</h2>
							</div>
						<?php } ?>
						<div class="content-wrap">
							<div class="row flex-row-container">
								<?php foreach( $bosa_clinic_category_product_two_array as $bosa_clinic_each_departmentstwo ){ ?>
									<div class="col-sm-6 px-lg-2 flex-col-container">
										<article class="category-content-wrap">
											<?php 
											if ( isset( $bosa_clinic_each_departmentstwo['ID'] ) && !empty( $bosa_clinic_each_departmentstwo['ID'] ) ){
												$bosa_clinic_cat_url = '';
												if( isset( $bosa_clinic_each_departmentstwo['category'] ) && !empty( $bosa_clinic_each_departmentstwo['category'] ) ) {
													$bosa_clinic_cat_url = $bosa_clinic_each_departmentstwo['category'];
												}
											?>
												<figure class= "featured-image">
													<a href="<?php echo esc_url( get_category_link( $bosa_clinic_cat_url ) ); ?>">
														<img src="<?php echo esc_url( $bosa_clinic_each_departmentstwo['ID'] ); ?>">
													</a>	
												</figure>
											<?php } ?>
											<?php if ( isset( $bosa_clinic_each_departmentstwo['category'] ) && !empty( $bosa_clinic_each_departmentstwo['category'] ) ){ ?>
												<h5 class="entry-title">
													<a href="<?php echo esc_url( get_category_link( $bosa_clinic_each_departmentstwo ['category'] ) ); ?>">
														<?php echo esc_html($bosa_clinic_product_cat[$bosa_clinic_each_departmentstwo['category'] ] ); ?>
													</a>	
												</h5>
											<?php } ?>
										</article>	
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			<?php if( $bosa_clinic_has_product_three || get_theme_mod( 'bosa_clinic_department_title_three' ) ){ ?>
				<div class="col-md-6 col-lg-4">
					<div class="category-wraper">
						<?php if( get_theme_mod( 'bosa_clinic_department_title_three' ) ){ ?>
							<div class="section-title-wrap">
								<h2 class="product-section-title">	
									<?php echo esc_html( get_theme_mod( 'bosa_clinic_department_title_three' ) ); ?>
								</h2>
							</div>
						<?php } ?>
						<div class="content-wrap">
							<div class="row flex-row-container">
								<?php foreach( $bosa_clinic_category_product_three_array as $bosa_clinic_each_departmentsthree ){ ?>
									<div class="col-sm-6 px-lg-2 flex-col-container">
										<article class="category-content-wrap">
											<?php 
											if ( isset( $bosa_clinic_each_departmentsthree['ID'] ) && !empty( $bosa_clinic_each_departmentsthree['ID'] ) ){
												$bosa_clinic_cat_url = '';
												if( isset( $bosa_clinic_each_departmentsthree['category'] ) && !empty( $bosa_clinic_each_departmentsthree['category'] ) ) {
													$bosa_clinic_cat_url = $bosa_clinic_each_departmentsthree['category'];
												}
											?>
												<figure class= "featured-image">
													<a href="<?php echo esc_url( get_category_link( $bosa_clinic_cat_url ) ); ?>">
														<img src="<?php echo esc_url( $bosa_clinic_each_departmentsthree['ID'] ); ?>">
													</a>	
												</figure>
											<?php } ?>
											<?php if ( isset( $bosa_clinic_each_departmentsthree['category'] ) && !empty( $bosa_clinic_each_departmentsthree['category'] ) ){ ?>
												<h5 class="entry-title">
													<a href="<?php echo esc_url( get_category_link( $bosa_clinic_each_departmentsthree ['category'] ) ); ?>">
														<?php echo esc_html($bosa_clinic_product_cat[$bosa_clinic_each_departmentsthree['category'] ] ); ?>
													</a>	
												</h5>
											<?php } ?>
										</article>	
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</section>
<?php }
