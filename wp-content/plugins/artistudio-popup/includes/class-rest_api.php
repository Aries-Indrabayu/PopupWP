<?php
namespace Artistudio\Popup;

class REST_API {
    public function __construct() {
        add_action('rest_api_init', array($this, 'register_routes'));
    }
    public static function register_routes() {
        error_log("REST_API Class Loaded");
        
        register_rest_route('artistudio/v1', '/popup', [
            'methods'  => 'GET',
            'callback' => [self::class, 'get_popups'],
            // 'callback' => function() {
            //     return is_user_logged_in() 
            //         ? new \WP_REST_Response(['message' => 'User is logged in'], 200) 
            //         : new \WP_REST_Response(['message' => 'User is not logged in'], 401);
            // },
            // 'permission_callback' => function() {
            //     return is_user_logged_in();
            // }
            // 'permission_callback' => function($request) {
            //     return current_user_can('read') && 
            //         isset($_GET['_wpnonce']) && 
            //         wp_verify_nonce($_GET['_wpnonce'], 'wp_rest');
            // }
            // 'permission_callback' => function() {
            //     return current_user_can('read');
            // }
            'permission_callback' => '__return_true'
        ]);

        // register_rest_route('artistudio/v1', '/check-login', [
        //     'methods'  => 'GET',
        //     'callback' => [self::class, 'check_login'],
        //     'permission_callback' => '__return_true'
        // ]);
        register_rest_route('artistudio/v1', '/check-login', array(
            'methods'  => 'GET',
            'callback' => [self::class, 'check_login'],
            'permission_callback' => '__return_true'
        ));
        error_log("Registering REST API Routes");
    }

    public static function get_popups() {
        $args = [
            'post_type' => 'popup', 
            'post_status' => 'publish',
            'posts_per_page' => -1
        ];
        $query = new \WP_Query($args);
        $popups = [];
    
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $popups[] = [
                    'id' => get_the_ID(),
                    'title' => get_the_title(),
                    'content' => get_the_content()
                ];
            }
            wp_reset_postdata();
        }
    
        return new \WP_REST_Response($popups, 200);
    }
    public static function check_login() {
        if (is_user_logged_in()) {
            return new \WP_REST_Response(['message' => 'User is logged in'], 200);
        } else {
            return new \WP_REST_Response(['message' => 'User is not logged in'], 401);
        }
    }

    public function is_logged_in() {
        return is_user_logged_in();
    }
}
