<?php


add_action('init', 'postProduction_register');
 
function postProduction_register() {
    $args = array(
        'label' => __('PostProductions'),
        'singular_label' => __('PostProduction'),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => true,
        'supports' => array('title','thumbnail')
    );
 
    register_post_type( 'postProduction' , $args );
}
 add_action('save_post', 'save_postProduction_info');
 
     
     
    function meta_options_postProduction(){
        global $post;
        $custom = get_post_custom($post->ID);
        $postProduction_priority = $custom["postProduction_priority"][0];
?>
        <label>PostProduction Image Priority</label><br/><input style="width:100%" name="postProduction_priority" value="<?php echo $postProduction_priority; ?>" />
    
<?php
    }
 
 
function save_postProduction_info(){
    global $post;
    update_post_meta($post->ID, "postProduction_priority", $_POST["postProduction_priority"]);
}
