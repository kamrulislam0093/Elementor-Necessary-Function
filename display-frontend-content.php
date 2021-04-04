<?php 

/****************************************************************
*********** Display Frontend Content using Post ID **************
*****************************************************************/


  // namespace Elementor;
  // Plugin::instance()->frontend->get_builder_content_for_display($post_id);


/****************************************************************
*********** End Display Frontend Content using Post ID **********
*****************************************************************/



/**********************************************
************** Check is editor mode ***********
***********************************************/


// namespace Elementor;
// $editor = Plugin::$instance->editor;
// $editor->is_edit_mode()


/**********************************************
************* End Check is editor mode ********
***********************************************/





namespace Elementor;

function rselements_shortcode_insert_elementor($post_id){
    if(!class_exists('Elementor\Plugin')){
        return '';
    }
    $response = Plugin::instance()->frontend->get_builder_content_for_display($post_id);
    return $response;
}
// rselements_shortcode_insert_elementor(52)

add_action( 'wp_footer', function(){


    if(!class_exists('Elementor\Plugin')){
        return '';
    }
    
    $response = Plugin::instance()->frontend->get_builder_content_for_display(55);
    var_dump( $response );

});



add_action( 'manage_elementor_library_posts_columns', function( $defaults ){
    $defaults['shortcode'] = __( 'Shortcode', 'elementor-pro' );

    return $defaults;
});

add_action( 'manage_elementor_library_posts_custom_column', function($column_name, $post_id){
    if ( 'shortcode' === $column_name ) {
      // %s = shortcode, %d = post_id
      $shortcode = esc_attr( sprintf( '[%s id="%d"]', 'elementor-template', $post_id ) );
      printf( '<input class="elementor-shortcode-input" type="text" readonly onfocus="this.select()" value="%s" />', $shortcode );
    }  
}, 10, 2 );
