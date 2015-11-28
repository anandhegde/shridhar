<?php


add_action('init', 'documentaryFilms_register');
 
function documentaryFilms_register() {
    $args = array(
        'label' => __('DocumentaryFilms'),
        'singular_label' => __('DocumentaryFilm'),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => true,
        'supports' => array('title','thumbnail','editor')
    );
 
    register_post_type( 'DocumentaryFilm' , $args );
}
 add_action('save_post', 'save_documentaryFilm_info');
 
     
     
    function meta_options_documentaryFilm(){
        global $post;
        $custom = get_post_custom($post->ID);
        $documentaryFilm_url =  $custom["documentaryFilm_url"][0];
        $documentary_Film_priority = $custom["documentary_Film_priority"][0];
?>
        <label> Documentary Film Url</label><input style="width:100%" placeholder="youtube link" name="documentaryFilm_url" value="<?php echo $documentaryFilm_url; ?>" />
        <br/>
        <br/>
        <label>Documentary Film Image Priority</label><br/><input style="width:100%" name="documentary_Film_priority" value="<?php echo $documentary_Film_priority; ?>" />
    
<?php
    }
 
 
function save_documentaryFilm_info(){
    global $post;
    update_post_meta($post->ID, "documentaryFilm_url", $_POST["documentaryFilm_url"]);
    update_post_meta($post->ID, "documentary_Film_priority", $_POST["documentary_Film_priority"]);
}
