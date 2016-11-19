<?php


add_action('init', 'motionGraphicVfx_register');
 
function motionGraphicVfx_register() {
    $args = array(
        'label' => __('MotionGraphicVfxs'),
        'singular_label' => __('MotionGraphicVfx'),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => true,
        'supports' => array('title','thumbnail')
    );
 
    register_post_type( 'motiongraphic' , $args );
}
 add_action('save_post', 'save_motionGraphicVfx_info');
 
     
     
    function meta_options_motionGraphicVfx(){
        global $post;
        $custom = get_post_custom($post->ID);
        $motionGraphicVfx_priority = $custom["motionGraphicVfx_priority"][0];
?>
        <label>Motion Graphic Vfx Image Priority</label><br/><input style="width:100%" name="motionGraphicVfx_priority" value="<?php echo $motionGraphicVfx_priority; ?>" />
    
<?php
    }
 
 
function save_motionGraphicVfx_info(){
    global $post;
    update_post_meta($post->ID, "motionGraphicVfx_priority", $_POST["motionGraphicVfx_priority"]);
}
