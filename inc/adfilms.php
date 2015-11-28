<?php
/**
 * TechSparks functions and definitions
 *
 * @package TechSparks
 */

add_action('init', 'adFilms_register');
 
function adFilms_register() {
    $args = array(
        'label' => __('AdFilms'),
        'singular_label' => __('AdFilm'),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => true,
        'supports' => array('title','thumbnail','editor')
    );
 
    register_post_type( 'adFilm' , $args );
}
 add_action('save_post', 'save_adFilm_info');
 
     
     
    function meta_options_adFilm(){
        global $post;
        $custom = get_post_custom($post->ID);
        $adFilm_url =  $custom["adFilm_url"][0];
        $adFilm_priority = $custom["adFilm_priority"][0];
?>
        <label> Ad Film Url</label><input style="width:100%" placeholder="youtube link" name="adFilm_url" value="<?php echo $adFilm_url; ?>" />
        <br/>
        <br/>
        <label>Ad Film Image Priority</label><br/><input style="width:100%" name="adFilm_priority" value="<?php echo $adFilm_priority; ?>" />
    
<?php
    }
 
 
function save_adFilm_info(){
    global $post;
    update_post_meta($post->ID, "adFilm_url", $_POST["adFilm_url"]);
    update_post_meta($post->ID, "adFilm_priority", $_POST["adFilm_priority"]);
}
