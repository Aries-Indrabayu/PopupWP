<?php
namespace Artistudio\Popup;

final class Main {
    private static $instance = null;

    private function __construct() {
        $this->load_dependencies();
        $this->init_hooks();
    }

    public static function get_instance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function load_dependencies() {
        require_once plugin_dir_path(__FILE__) . 'class-cpt.php';
        require_once plugin_dir_path(__FILE__) . 'class-rest-api.php';
        require_once plugin_dir_path(__FILE__) . 'class-assets.php';
    }

    private function init_hooks() {
        add_action('init', ['Artistudio\Popup\CPT', 'register']);
        add_action('rest_api_init', ['Artistudio\Popup\Rest_API', 'register_routes']);
        add_action('wp_enqueue_scripts', ['Artistudio\Popup\Assets', 'enqueue']);
    }
}

Main::get_instance();
