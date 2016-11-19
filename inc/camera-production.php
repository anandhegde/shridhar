<?php


add_action('init', 'cameraProduction_register');
 
function cameraProduction_register() {
    $args = array(
        'label' => __('CameranProductions'),
        'singular_label' => __('CameranProduction'),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => true,
        'supports' => array('title','thumbnail')
    );
 
    register_post_type( 'cameraproduction' , $args );
}
 add_action('save_post', 'save_cameraProduction_info');
 
     
     
    function meta_options_cameraProduction(){
        global $post;
        $custom = get_post_custom($post->ID);
        $cameraProduction_priority = $custom["cameraProduction_priority"][0];
?>
        <label>Camera and Production Image Priority</label><br/><input style="width:100%" name="cameraProduction_priority" value="<?php echo $cameraProduction_priority; ?>" />
    
<?php
    }
 
 
function save_cameraProduction_info(){
    global $post;
    update_post_meta($post->ID, "cameraProduction_priority", $_POST["cameraProduction_priority"]);
}
