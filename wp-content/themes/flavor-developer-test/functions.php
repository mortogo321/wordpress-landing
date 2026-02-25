<?php
/**
 * Flavor Developer Test - Landing Page Theme Functions
 *
 * @package flavor-developer-test
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'FDT_VERSION', '1.0.0' );
define( 'FDT_DIR', get_template_directory() );
define( 'FDT_URI', get_template_directory_uri() );

/**
 * Theme setup.
 */
function fdt_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}
add_action( 'after_setup_theme', 'fdt_setup' );

/**
 * Enqueue styles and scripts - optimized for performance.
 */
function fdt_enqueue_assets() {
    // Main CSS - inlined for performance via wp_add_inline_style
    wp_enqueue_style( 'fdt-style', FDT_URI . '/assets/css/landing.css', array(), FDT_VERSION );

    // Defer JS
    wp_enqueue_script( 'fdt-script', FDT_URI . '/assets/js/landing.js', array(), FDT_VERSION, true );

    // Remove unnecessary default assets for performance
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' );
    wp_dequeue_style( 'global-styles' );
    wp_dequeue_style( 'classic-theme-styles' );
}
add_action( 'wp_enqueue_scripts', 'fdt_enqueue_assets', 20 );

/**
 * Remove emoji scripts and styles for performance.
 */
function fdt_disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'fdt_disable_emojis' );

/**
 * Clean up wp_head for performance.
 */
function fdt_cleanup_head() {
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'wp_shortlink_wp_head' );
    remove_action( 'wp_head', 'rest_output_link_wp_head' );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
    remove_action( 'wp_head', 'wp_resource_hints', 2 );
    remove_action( 'wp_head', 'feed_links', 2 );
    remove_action( 'wp_head', 'feed_links_extra', 3 );
}
add_action( 'after_setup_theme', 'fdt_cleanup_head' );

/**
 * Disable jQuery migrate for performance.
 */
function fdt_dequeue_jquery_migrate( $scripts ) {
    if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
        $script = $scripts->registered['jquery'];
        if ( $script->deps ) {
            $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
        }
    }
}
add_action( 'wp_default_scripts', 'fdt_dequeue_jquery_migrate' );

/**
 * Add preconnect and preload hints.
 */
function fdt_resource_hints() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
    echo '<link rel="dns-prefetch" href="https://www.googletagmanager.com">' . "\n";
}
add_action( 'wp_head', 'fdt_resource_hints', 1 );

/**
 * Add defer/async attributes to scripts.
 */
function fdt_script_loader_tag( $tag, $handle, $src ) {
    if ( is_admin() ) {
        return $tag;
    }

    // Defer non-critical scripts
    $defer_scripts = array( 'fdt-script', 'google-fonts' );
    if ( in_array( $handle, $defer_scripts, true ) ) {
        return str_replace( ' src', ' defer src', $tag );
    }

    return $tag;
}
add_filter( 'script_loader_tag', 'fdt_script_loader_tag', 10, 3 );

/**
 * Register Landing Page template.
 */
function fdt_add_page_templates( $templates ) {
    $templates['template-landing.php'] = 'Landing Page - ล้างแอร์ Premium';
    return $templates;
}
add_filter( 'theme_page_templates', 'fdt_add_page_templates' );

/**
 * Theme Customizer settings for landing page.
 */
function fdt_customize_register( $wp_customize ) {
    // Landing Page Section
    $wp_customize->add_section( 'fdt_landing', array(
        'title'    => 'Landing Page Settings',
        'priority' => 30,
    ) );

    // LINE OA URL
    $wp_customize->add_setting( 'fdt_line_url', array(
        'default'           => 'https://line.me/R/ti/p/@your-line-id',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'fdt_line_url', array(
        'label'   => 'LINE OA URL',
        'section' => 'fdt_landing',
        'type'    => 'url',
    ) );

    // Phone number
    $wp_customize->add_setting( 'fdt_phone', array(
        'default'           => '02-xxx-xxxx',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'fdt_phone', array(
        'label'   => 'Phone Number',
        'section' => 'fdt_landing',
        'type'    => 'text',
    ) );

    // GTM Container ID
    $wp_customize->add_setting( 'fdt_gtm_id', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'fdt_gtm_id', array(
        'label'       => 'Google Tag Manager ID',
        'description' => 'e.g. GTM-XXXXXXX',
        'section'     => 'fdt_landing',
        'type'        => 'text',
    ) );
}
add_action( 'customize_register', 'fdt_customize_register' );

/**
 * AJAX handler for lead form submission.
 */
function fdt_handle_lead_form() {
    // Verify nonce
    if ( ! isset( $_POST['fdt_nonce'] ) || ! wp_verify_nonce( $_POST['fdt_nonce'], 'fdt_lead_form' ) ) {
        wp_send_json_error( array( 'message' => 'Security check failed.' ), 403 );
    }

    $name  = isset( $_POST['lead_name'] ) ? sanitize_text_field( $_POST['lead_name'] ) : '';
    $phone = isset( $_POST['lead_phone'] ) ? sanitize_text_field( $_POST['lead_phone'] ) : '';

    if ( empty( $name ) || empty( $phone ) ) {
        wp_send_json_error( array( 'message' => 'กรุณากรอกชื่อและเบอร์โทรศัพท์' ), 400 );
    }

    // Validate Thai phone number format
    if ( ! preg_match( '/^0[0-9]{8,9}$/', preg_replace( '/[\s\-]/', '', $phone ) ) ) {
        wp_send_json_error( array( 'message' => 'กรุณากรอกเบอร์โทรศัพท์ที่ถูกต้อง' ), 400 );
    }

    // Store lead as custom post type or option
    $lead_data = array(
        'post_title'   => $name . ' - ' . $phone,
        'post_content' => wp_json_encode( array(
            'name'      => $name,
            'phone'     => $phone,
            'submitted' => current_time( 'mysql' ),
            'ip'        => sanitize_text_field( $_SERVER['REMOTE_ADDR'] ?? '' ),
            'referrer'  => sanitize_url( $_SERVER['HTTP_REFERER'] ?? '' ),
        ) ),
        'post_type'    => 'fdt_lead',
        'post_status'  => 'publish',
    );

    $post_id = wp_insert_post( $lead_data );

    if ( is_wp_error( $post_id ) ) {
        wp_send_json_error( array( 'message' => 'เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง' ), 500 );
    }

    wp_send_json_success( array(
        'message' => 'ขอบคุณค่ะ! ทีมงานจะติดต่อกลับภายใน 30 นาที',
        'lead_id' => $post_id,
    ) );
}
add_action( 'wp_ajax_fdt_lead_form', 'fdt_handle_lead_form' );
add_action( 'wp_ajax_nopriv_fdt_lead_form', 'fdt_handle_lead_form' );

/**
 * Register Lead custom post type.
 */
function fdt_register_lead_cpt() {
    register_post_type( 'fdt_lead', array(
        'labels'       => array(
            'name'          => 'Leads',
            'singular_name' => 'Lead',
        ),
        'public'       => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'menu_icon'    => 'dashicons-phone',
        'supports'     => array( 'title', 'editor' ),
    ) );
}
add_action( 'init', 'fdt_register_lead_cpt' );

/**
 * Output GTM scripts if configured.
 */
function fdt_gtm_head() {
    $gtm_id = get_theme_mod( 'fdt_gtm_id', '' );
    if ( empty( $gtm_id ) ) {
        return;
    }
    ?>
    <!-- Google Tag Manager -->
    <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?php echo esc_js( $gtm_id ); ?>');
    </script>
    <!-- End Google Tag Manager -->
    <?php
}
add_action( 'wp_head', 'fdt_gtm_head', 2 );

function fdt_gtm_body() {
    $gtm_id = get_theme_mod( 'fdt_gtm_id', '' );
    if ( empty( $gtm_id ) ) {
        return;
    }
    ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo esc_attr( $gtm_id ); ?>"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php
}

/**
 * Pass AJAX URL and nonce to JS.
 */
function fdt_localize_script() {
    wp_localize_script( 'fdt-script', 'fdtAjax', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'fdt_lead_form' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'fdt_localize_script' );
