<?php

add_action('init', 'clients_register');
 
function clients_register() {
    $args = array(
        'label' => __('Clients'),
        'singular_label' => __('Client'),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => true,
        'supports' => array('title','thumbnail')
    );
 
    register_post_type( 'Client' , $args );
}
 add_action('save_post', 'save_client_info');
 
     
     
    function meta_options_client(){
        global $post;
        $custom = get_post_custom($post->ID);
        $client_url =  $custom["client_url"][0];
        $client_info = $custom["client_info"][0];
        $client_priority = $custom["client_priority"][0];
?>
        <label> Client Url</label><input style="width:100%" placeholder="youtube link" name="client_url" value="<?php echo $client_url; ?>" />
        <br/>
        <br/>
        <label>Client Info</label><br/><input style="width:100%" placeholder="2 line info about the client" name="client_info" value="<?php echo $client_info; ?>" />
        <br/>
        <br/>
        <label>Client Priority</label><br/><input style="width:100%" name="client_priority" value="<?php echo $client_priority; ?>" />
    
<?php
    }
 
 
function save_client_info(){
    global $post;
    update_post_meta($post->ID, "client_url", $_POST["client_url"]);
     update_post_meta($post->ID, "client_info", $_POST["client_info"]);
    update_post_meta($post->ID, "client_priority", $_POST["client_priority"]);
}
