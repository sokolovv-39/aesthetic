<?php
$is_Server = strpos($_SERVER['HTTP_HOST'], 'local') === false ? true : false;

add_action('after_setup_theme', 'setup_theme');
function setup_theme()
{
    add_theme_support('post-thumbnails');
}

add_action('wp_enqueue_scripts', 'aesthetic_scripts_styles');

function aesthetic_scripts_styles()
{
    global $is_Server;

    function detectVersion($file_path)
    {
        global $is_Server;
        if ($is_Server) {
            return filectime($file_path);
        } else return false;
    }
    wp_enqueue_style('swiper-styles', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    $css_path = null;
    if ($is_Server) {
        $css_path = get_template_directory_uri() . '/assets/css/all.css';
    } else {
        $css_path = get_template_directory_uri() . '/dist/assets/css/all.css';
    }
    wp_enqueue_style('all-css', $css_path, [], detectVersion($css_path));
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], false, [
        'in_footer' => true
    ]);
    $js_path = null;
    if ($is_Server) {
        $js_path = get_template_directory_uri() . '/assets/js/all.js';
    } else {
        $js_path = get_template_directory_uri() . '/dist/assets/js/all.js';
    }
    wp_enqueue_script('all-js', $js_path, [], detectVersion($js_path), [
        'in_footer' => true
    ]);
}

add_action('customize_register', 'theme_customize_register', 11);

function theme_customize_register(WP_Customize_Manager $wp_customize)
{
    $wp_customize->add_section('contacts_section', array(
        'title'    => __('Связь со мной', 'aesthetic'),
        'priority' => 2,
    ));

    $wp_customize->add_setting('phone_settings', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('phone_control', array(
        'label'    => __('Телефон', 'aesthetic'),
        'section'  => 'contacts_section',
        'settings' => 'phone_settings',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('telegram_settings', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('telegram_control', array(
        'label'    => __('Ваш Telegram', 'aesthetic'),
        'section'  => 'contacts_section',
        'settings' => 'telegram_settings',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('whatsapp_settings', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('whatsapp-control', array(
        'label' => __('Ваш WhatsApp', 'aesthetic'),
        'section' => 'contacts_section',
        'settings' => 'whatsapp_settings',
        'type' => 'text',
    ));

    $wp_customize->add_setting('instagram_settings', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('instagram-control', array(
        'label' => __('Ваш Instagram', 'aesthetic'),
        'section' => 'contacts_section',
        'settings' => 'instagram_settings',
        'type' => 'text',
    ));

    $wp_customize->add_section('location_section', array(
        'title'    => __('Местоположение и адреса', 'aesthetic'),
        'priority' => 3,
    ));

    $wp_customize->add_setting('address_settings', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('address_control', array(
        'label'    => __('Адрес', 'aesthetic'),
        'section'  => 'location_section',
        'settings' => 'address_settings',
        'type'     => 'textarea',
    ));

    $wp_customize->add_setting('transport_settings', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('transport_control', array(
        'label'    => __('Остановка транспорта', 'aesthetic'),
        'section'  => 'location_section',
        'settings' => 'transport_settings',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('open_hours_settings', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('open_hours_control', array(
        'label'    => __('Часы работы', 'aesthetic'),
        'section'  => 'title_tagline',
        'settings' => 'open_hours_settings',
        'type'     => 'text',
    ));

    $wp_customize->add_section('info_section', array(
        'title'    => __('Общая информация', 'aesthetic'),
        'priority' => 1,
    ));

    $wp_customize->add_setting('studio_name_settings', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('studio_name_control', array(
        'label'    => __('Название студии', 'aesthetic'),
        'section'  => 'info_section',
        'settings' => 'studio_name_settings',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('intro_text_settings', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('intro_text_control', array(
        'label'    => __('Вводный текст', 'aesthetic'),
        'section'  => 'info_section',
        'settings' => 'intro_text_settings',
        'type'     => 'textarea',
    ));

    $wp_customize->add_section('unique_offer_section', array(
        'title'    => __('Уникальное предложение', 'aesthetic'),
        'priority' => 4,
    ));

    $wp_customize->add_setting('unique_offer_title_settings', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_setting('unique_offer_text_settings', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('unique_offer_title_control', array(
        'label'    => __('Заголовок уникального предложения', 'aesthetic'),
        'section'  => 'unique_offer_section',
        'settings' => 'unique_offer_title_settings',
        'type'     => 'text',
    ));

    $wp_customize->add_control('unique_offer_text_control', array(
        'label'    => __('Заголовок уникального предложения', 'aesthetic'),
        'section'  => 'unique_offer_section',
        'settings' => 'unique_offer_text_settings',
        'type'     => 'textarea',
    ));

    $wp_customize->add_setting('open_hours_settings', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('open_hours_control', array(
        'label'    => __('Часы работы', 'aesthetic'),
        'section'  => 'info_section',
        'settings' => 'open_hours_settings',
        'type'     => 'text',
    ));

    $wp_customize->remove_panel('nav_menus');
    $wp_customize->remove_panel('themes');

    $wp_customize->remove_section('custom_css');
}

add_action('init', 'register_post_types');

function register_post_types()
{
    register_post_type('slider', [
        'label'  => null,
        'labels' => [
            'name'               => 'Слайдер', // основное название для типа записи
            'singular_name'      => 'Слайд', // название для одной записи этого типа
            'add_new'            => 'Добавить слайд', // для добавления новой записи
            'add_new_item'       => 'Добавление слайда', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование слайда', // для редактирования типа записи
            'new_item'           => 'Новый текст', // текст новой записи
            'view_item'          => 'Смотреть слайд', // для просмотра записи этого типа.
            'search_items'       => 'Искать слайды', // для поиска по этим типам записи
            'not_found'          => 'Слайды не найдены', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Нет слайдов в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Слайдер', // название меню
        ],
        'description'            => 'Слайдер',
        'public'                 => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'           => true, // показывать ли в меню админки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => ['title', 'editor', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ]);
}

add_filter('wp_handle_upload_prefilter', 'slider_limit_upload_images');

function slider_limit_upload_images($file)
{
    $attachment_count = count(get_posts(array(
        'post_type'      => 'slider',
        'post_mime_type' => 'image',
        'post_parent'    => isset($_REQUEST['post_id']) ? $_REQUEST['post_id'] : 0,
    )));

    if ($attachment_count >= 1) {
        $file['error'] = 'Превышено максимальное количество загружаемых изображений (1 изображение разрешено).';
    }

    return $file;
}

add_action( 'login_head', 'my_custom_login_logo' );
function my_custom_login_logo(){

	echo '
	<style type="text/css">
	h1 a {  background-image:url('.get_bloginfo('template_directory').'/assets/images/AElogo.svg) !important;  
            background-size: 241px !important;
            background-position: bottom !important;
            width: 254px !important;
    }
	</style>
	';
}
