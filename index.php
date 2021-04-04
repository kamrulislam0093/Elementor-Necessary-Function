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

