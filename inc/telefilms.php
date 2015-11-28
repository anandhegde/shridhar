<?php


add_action('init', 'teleFilms_register');
 
function teleFilms_register() {
    $args = array(
        'label' => __('TeleFilms'),
        'singular_label' => __('TeleFilm'),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => true,
        'supports' => array('title','thumbnail','editor')
    );
 
    register_post_type( 'teleFilm' , $args );
}
 add_action('save_post', 'save_teleFilm_info');
 
     
     
    function meta_options_teleFilm(){
        global $post;
        $custom = get_post_custom($post->ID);
        $teleFilm_url =  $custom["teleFilm_url"][0];
        $tele_Film_priority = $custom["tele_Film_priority"][0];
?>
        <label> Tele Film Url</label><input style="width:100%" placeholder="youtube link" name="teleFilm_url" value="<?php echo $teleFilm_url; ?>" />
        <br/>
        <br/>
        <label>Tele Film Image Priority</label><br/><input style="width:100%" name="tele_Film_priority" value="<?php echo $tele_Film_priority; ?>" />
    
<?php
    }
 
 
function save_teleFilm_info(){
    global $post;
    update_post_meta($post->ID, "teleFilm_url", $_POST["teleFilm_url"]);
    update_post_meta($post->ID, "tele_Film_priority", $_POST["tele_Film_priority"]);
}
