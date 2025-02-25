# Artistudio Popup Plugin

Artistudio Popup adalah plugin WordPress yang memungkinkan Anda untuk membuat dan mengelola popup menggunakan custom post type dan REST API. Plugin ini dikembangkan dengan pendekatan **OOP**, menggunakan **WordPress REST API**, serta terintegrasi dengan frontend modern seperti **React** atau **Vue.js**.

---

## Fitur

-   **Custom Post Type (CPT)**: Menggunakan CPT dengan nama `popup` untuk mengelola konten popup.
-   **REST API**: Endpoint khusus untuk mengambil data popup menggunakan namespace `artistudio/v1`.
-   **OOP Structure**: Dibangun dengan pendekatan Object-Oriented Programming untuk kemudahan pemeliharaan.
-   **Nonce & Authentication**: Menggunakan WordPress Nonce dan cookie `wordpress_logged_in` untuk autentikasi API.
-   **Integrasi Frontend**: Mudah diintegrasikan dengan React atau Vue untuk menampilkan popup secara dinamis.

---

## Instalasi

1. **Clone Repository atau Download ZIP**

    - Clone repository:
        ```bash
        git clone https://github.com/username/artistudio-popup.git
        ```
    - Atau download file ZIP, kemudian extract ke dalam folder:
        ```
        wp-content/plugins/artistudio-popup
        ```

2. **Aktifkan Plugin**

    - Buka Dashboard WordPress.
    - Navigasi ke **Plugins > Installed Plugins**.
    - Aktifkan plugin **Artistudio Popup**.

3. **Flush Permalinks**  
   Setelah mengaktifkan plugin, lakukan flush permalinks:
    - **Settings > Permalinks** > klik **Save Changes**.

---

## Endpoint REST API

| Method | Endpoint                             | Description                |
| ------ | ------------------------------------ | -------------------------- |
| GET    | `/wp-json/artistudio/v1/check-login` | Cek status login user      |
| GET    | `/wp-json/artistudio/v1/popup`       | Mengambil data semua popup |

---

## Contoh Penggunaan cURL

### Cek Status Login

```bash
curl --location 'http://wppopup.test/wp-json/artistudio/v1/check-login' --header 'X-WP-Nonce: YOUR_NONCE_HERE' --header 'Cookie: wordpress_logged_in_YOUR_COOKIE_HERE'
```

### Ambil Data Popup

```bash
curl --location 'http://wppopup.test/wp-json/artistudio/v1/popup' --header 'X-WP-Nonce: YOUR_NONCE_HERE' --header 'Cookie: wordpress_logged_in_YOUR_COOKIE_HERE'
```

---

## Struktur Folder

```
artistudio-popup/
│
├── includes/
│   ├── class-cpt.php          // Class untuk Custom Post Type 'popup'
│   └── class-rest_api.php     // Class untuk REST API
│
├── artistudio-popup.php       // File utama untuk mendaftarkan plugin
└── README.md                  // Dokumentasi plugin
```

---

## Catatan Penting

1. **Pastikan User Sudah Login:**

    - Endpoint API memerlukan autentikasi pengguna yang sudah login.
    - Gunakan `X-WP-Nonce` dan `Cookie` `wordpress_logged_in`.

2. **Periksa Nonce:**

    - Dapatkan Nonce dengan melakukan enqueuing di theme atau plugin:
        ```php
        wp_localize_script('your-script-handle', 'wpApiSettings', [
            'root' => esc_url_raw(rest_url()),
            'nonce' => wp_create_nonce('wp_rest')
        ]);
        ```
    - Gunakan nonce ini di `X-WP-Nonce` pada request.

3. **Cek Debugging:**
    - Aktifkan **WP_DEBUG** dan **WP_DEBUG_LOG** di `wp-config.php`:
        ```php
        define('WP_DEBUG', true);
        define('WP_DEBUG_LOG', true);
        ```
    - Lihat log di: `wp-content/debug.log`

---

## Rencana Pengembangan

-   [ ] CRUD untuk popup (Create, Read, Update, Delete)
-   [ ] Integrasi dengan React atau Vue.js di frontend
-   [ ] Styling dengan Tailwind CSS
-   [ ] Custom Settings di Dashboard WordPress

---

## Kontribusi

Ingin berkontribusi? Pull Request dipersilakan!  
Jika menemukan bug atau ingin menambah fitur, silakan buka **Issue** di repository ini.

---

## Lisensi

Plugin ini dirilis di bawah lisensi **GPL-2.0-or-later**.  
Lihat detail di [LICENSE](./LICENSE).

---

## Kontak

Developer: **Aries Indrabayu**  
Email: [indra13498@gmail.com](mailto:indra13498@gmail.com)
