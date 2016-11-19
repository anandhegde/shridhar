<?php


add_action('init', 'profesionalAudioVideo_register');
 
function profesionalAudioVideo_register() {
    $args = array(
        'label' => __('ProfesionalAudioStudios'),
        'singular_label' => __('ProfesionalAudioStudio'),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => true,
        'supports' => array('title','thumbnail')
    );
 
    register_post_type( 'profesionalAudioVdio' , $args );
}
 add_action('save_post', 'save_profesionalAudioVideo_info');
 
     
     
    function meta_options_profesionalAudioVideo(){
        global $post;
        $custom = get_post_custom($post->ID);
        $profesionalAudioVideo_priority = $custom["profesionalAudioVideo_priority"][0];
?>
        <label>Profesional Audio Studio Image Priority</label><br/><input style="width:100%" name="profesionalAudioVideo_priority" value="<?php echo $profesionalAudioVideo_priority; ?>" />
    
<?php
    }
 
 
function save_profesionalAudioVideo_info(){
    global $post;
    update_post_meta($post->ID, "profesionalAudioVideo_priority", $_POST["profesionalAudioVideo_priority"]);
}
