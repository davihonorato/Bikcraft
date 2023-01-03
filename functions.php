<?php 

add_action('init', 'remove_content_editor');
/**
 * Remove the content editor from ALL pages 
 */
function remove_content_editor() { 
    remove_post_type_support('page', 'editor');       
}

?>