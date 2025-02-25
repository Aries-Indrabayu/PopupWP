<?php
/**
 * Plugin Name:     Artistudio Pop Up
 * Description:     Plugin pop-up untuk WordPress
 * Version:         0.1.0
 * Author:          Aries Indrabayu
 * Text Domain:     artistudio-popup
 */

namespace Artistudio\Popup;

// Autoload semua class di folder includes
spl_autoload_register(function ($class) {
    $prefix = __NAMESPACE__ . '\\';
    $base_dir = __DIR__ . '/includes/';
    $len = strlen($prefix);

    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = strtolower(substr($class, $len)); 
    $file = $base_dir . 'class-' . $relative_class . '.php';

    error_log("Trying to load class: " . $class);
    error_log("Looking for file: " . $file);

    if (!file_exists($file)) {
        error_log("File not found: " . $file);
        return;
    }

    include $file;
    error_log("File included: " . $file);
});

// Jalankan CPT
use Artistudio\Popup\CPT;
add_action('init', [CPT::class, 'register']);

// Jalankan REST API
use Artistudio\Popup\REST_API;
if (class_exists(REST_API::class)) {
    error_log("REST_API Class Exists");
} else {
    error_log("REST_API Class Not Found");
}
add_action('rest_api_init', [REST_API::class, 'register_routes']);
