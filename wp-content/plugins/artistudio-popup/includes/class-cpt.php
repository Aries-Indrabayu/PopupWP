<?php
namespace Artistudio\Popup;

class CPT {
    public static function register() {
        register_post_type('popup', [
            'labels' => [
                'name' => 'Pop Ups',
                'singular_name' => 'Pop Up',
                'add_new' => 'Tambah Pop Up',
                'add_new_item' => 'Tambah Pop Up Baru',
                'edit_item' => 'Edit Pop Up',
                'new_item' => 'Pop Up Baru',
                'view_item' => 'Lihat Pop Up',
                'search_items' => 'Cari Pop Up',
                'not_found' => 'Tidak ada Pop Up ditemukan',
                'not_found_in_trash' => 'Tidak ada Pop Up di Tong Sampah'
            ],
            'public' => true,
            'has_archive' => false,
            'supports' => ['title', 'editor'],
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-format-aside',
        ]);
    }
}

// Hook untuk memanggil register pada waktu yang tepat
add_action('init', [CPT::class, 'register']);