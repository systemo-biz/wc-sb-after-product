<?php
/*
Plugin Name: WC: SB After Product
Description: Add sidebar after product WooCommerce
Author: Systemo
Version: 1.0
Author URI: http://systemo.biz/
*/



function woocommerce_after_single_product_systemo_biz_callback(){
 
 if ( is_active_sidebar( 'after_product_s' ) ) :
    ?>
    <div class="after_product_s_wrapper">
        <style type = "text/css" scoped>
        .product .related h2 {
            padding-bottom: 16px;
            font-size: 26px !important;
        }
        
        .after_product_s_item {
                width: 100%;
        }
        </style>
	    <?php dynamic_sidebar( 'after_product_s' ); ?>
	</div>
	<?php
	
 endif;
}
add_action('woocommerce_after_single_product', 'woocommerce_after_single_product_systemo_biz_callback');


function reg_sb_after_product() {
	register_sidebar( array(
		'name' => 'Блок после продуктов',
		'id' => 'after_product_s',
		'before_widget' => '<div id="%1$s" class="after_product_s_item %2$s">',
		'after_widget' => '</div> <!-- end .et_pb_widget -->', 
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'reg_sb_after_product' );
