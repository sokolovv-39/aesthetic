<?php
add_action('after_setup_theme', 'setup_theme');
function setup_theme()
{
    add_theme_support('post-thumbnails');
}

add_action('wp_enqueue_scripts', 'aesthetic_scripts_styles');

function aesthetic_scripts_styles()
{

    wp_enqueue_style('swiper-styles', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    $css_files = glob(get_template_directory() . '/styles/*.css');
    foreach ($css_files as $file) {
        $file_name = basename($file);
        $version = strval(filectime(get_template_directory_uri() . '/styles/' . $file_name));
        echo $version;
        wp_enqueue_style($file_name, get_template_directory_uri() . '/styles/' . $file_name, [], $version);
    }
    
    wp_enqueue_style('lovelace-font', get_template_directory_uri() . '/assets/fonts/Lovelace/stylesheet.css');
    wp_enqueue_style('montserrat-font', get_template_directory_uri() . '/assets/fonts/Montserrat/stylesheet.css');
    wp_enqueue_style('windsong-font', get_template_directory_uri() . '/assets/fonts/WindSong/stylesheet.css');

    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], false, true);
    $js_files = glob(get_template_directory() . '/scripts/*.js');
    foreach ($js_files as $file) {
        $file_name = basename($file);
        $version = strval(filectime(get_template_directory_uri() . '/scripts/' . $file_name));
        wp_enqueue_script($file_name, get_template_directory_uri() . '/scripts/' . $file_name, ['swiper'], $version, [
            'in_footer' => true
        ]);
    }
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