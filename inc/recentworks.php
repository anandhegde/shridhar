<?php
/**
 * TechSparks functions and definitions
 *
 * @package TechSparks
 */

add_action('init', 'recentWorksRegister');
 
function recentWorksRegister() {
    $args = array(
        'label' => __('RecentWorks'),
        'singular_label' => __('RecentWork'),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => true,
        'supports' => array('title')
    );
 
    register_post_type( 'recentworks' , $args );
}
 add_action('save_post', 'saveRecentWorks');
     
    function meta_options_RecentWorks(){
        global $post;
        $custom = get_post_custom($post->ID);
        $description =  $custom["description"][0];
        $date = $custom["date"][0];
        ?>

        <label> Description </label><input style="width:100%" placeholder="Description goes here" name="description" value="<?php echo $description; ?>" />
        <br/>
        <br/>
        <label>Date</label><br/><input type = 'date' style="width:100%" name="date" value="<?php echo $date; ?>" />
    
<?php
    }
 
 
function saveRecentWorks(){
    global $post;
    update_post_meta($post->ID, "description", $_POST["description"]);
    update_post_meta($post->ID, "date", $_POST["date"]);
}
