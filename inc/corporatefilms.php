<?php


add_action('init', 'corporateFilms_register');
 
function corporatefilms_register() {
    $args = array(
        'label' => __('CorporateFilms'),
        'singular_label' => __('CorporateFilm'),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => true,
        'supports' => array('title','thumbnail')
    );
 
    register_post_type( 'corporateFilm' , $args );
}
 add_action('save_post', 'save_corporateFilm_info');
 
     
     
    function meta_options_corporateFilm(){
        global $post;
        $custom = get_post_custom($post->ID);
        $corporateFilm_url =  $custom["corporateFilm_url"][0];
        $corporateFilm_priority = $custom["corporateFilm_priority"][0];
?>
        <label> Corporate Film Url</label><input style="width:100%" placeholder="youtube link" name="corporateFilm_url" value="<?php echo $corporateFilm_url; ?>" />
        <br/>
        <br/>
        <label>Corporate Film Image Priority</label><br/><input style="width:100%" name="corporateFilm_priority" value="<?php echo $corporateFilm_priority; ?>" />
    
<?php
    }
 
 
function save_corporateFilm_info(){
    global $post;
    update_post_meta($post->ID, "corporateFilm_url", $_POST["corporateFilm_url"]);
    update_post_meta($post->ID, "corporateFilm_priority", $_POST["corporateFilm_priority"]);
}
