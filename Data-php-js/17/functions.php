<?
add_action('customize_register', 'my_theme_customize_register');

function my_theme_customize_register($wp_customize)
{

   // Настройка цвета фона
   $wp_customize->add_setting('my_theme_background_color', array(
      'default' => '#ffffff',
      'sanitize_callback' => 'sanitize_hex_color',
   ));

   $wp_customize->add_control('my_theme_background_color_control', array(
      'label' => __('Цвет фона', 'my-theme'),
      'section' => 'colors',
      'settings' => 'my_theme_background_color',
      'type' => 'color',
   ));

   // Настройка авторских прав
   $wp_customize->add_setting('my_theme_copyright', array(
      'default' => '&copy; ' . date('Y'),
      'sanitize_callback' => 'wp_kses_post',
   ));

   $wp_customize->add_control('my_theme_copyright_control', array(
      'label' => __('Авторские права', 'my-theme'),
      'section' => 'title_tagline',
      'settings' => 'my_theme_copyright',
      'type' => 'text',
   ));

   // Настройки ссылок на социальные сети
   $wp_customize->add_setting('my_theme_social_links', array(
      'default' => array(),
      'sanitize_callback' => 'my_theme_sanitize_social_links',
   ));

   $wp_customize->add_control('my_theme_social_links_control', array(
      'label' => __('Ссылки на социальные сети', 'my-theme'),
      'section' => 'header_image',
      'settings' => 'my_theme_social_links',
      'type' => 'repeater',
      'fields' => array(
         'title' => array(
            'label' => __('Название', 'my-theme'),
            'type' => 'text',
         ),
         'url' => array(
            'label' => __('Ссылка', 'my-theme'),
            'type' => 'url',
         ),
      ),
   ));
}
