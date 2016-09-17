<?php

add_action('init', 'homePageImage_register');
 
function homePageImage_register() {
    $args = array(
        'label' => __('HomePageImages'),
        'singular_label' => __('HomePageImage'),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => true,
        'supports' => array('title','thumbnail')
    );
 
    register_post_type( 'homePageImage' , $args );
}
 add_action('save_post', 'save_homePageImage_info');
 
     
     
    function meta_options_homePageImage(){
        global $post;
        $custom = get_post_custom($post->ID);
        $homePageImage_url =  $custom["homePageImage_url"][0];
        $homePageImage_priority = $custom["homePageImage_priority"][0];
        $homePageImage_caption = $custom["homePageImage_caption"][0];
?>
        <label> HomePageImage Url</label><input style="width:100%" placeholder="youtube link" name="homePageImage_url" value="<?php echo $homePageImage_url; ?>" />
        <br/>
        <br/>
        <label>HomePageImage Caption</label><br/><input style="width:100%" name="homePageImage_caption" value="<?php echo $homePageImage_caption; ?>" />
        <br/>
        <br/>
        <label>HomePageImage Priority</label><br/><input style="width:100%" name="homePageImage_priority" value="<?php echo $homePageImage_priority; ?>" />
    
<?php
    }
 
 
function save_homePageImage_info(){
    global $post;
    update_post_meta($post->ID, "homePageImage_url", $_POST["homePageImage_url"]);
    update_post_meta($post->ID, "homePageImage_priority", $_POST["homePageImage_priority"]);
    update_post_meta($post->ID, "homePageImage_caption", $_POST["homePageImage_caption"]);
}
