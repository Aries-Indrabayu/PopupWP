<?php
namespace Artistudio\Popup;

class Assets {
    public static function enqueue() {
        wp_enqueue_script('artistudio-popup', plugin_dir_url(__FILE__) . '../assets/js/popup.js', ['wp-element'], '1.0', true);
        wp_enqueue_style('artistudio-popup', plugin_dir_url(__FILE__) . '../assets/css/popup.css');
    }
}
