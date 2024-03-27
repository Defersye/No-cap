<?php

add_action('admin_menu', 'my_post_background_add_menu');

function my_post_background_add_menu()
{
   add_meta_box('my_post_background_meta_box', 'Фон страницы', 'my_post_background_meta_box_callback', 'post', 'normal', 'high');
}

function my_post_background_meta_box_callback($post)
{
   $background_image = get_post_meta($post->ID, 'my_post_background_image', true);
?>
   <p>
      <label for="my_post_background_image">Изображение фона:</label>
      <input type="text" name="my_post_background_image" id="my_post_background_image" value="<?php echo esc_attr($background_image); ?>" size="50" />
      <button type="button" id="my_post_background_image_upload">Загрузить</button>
   </p>
   <script>
      jQuery(document).ready(function($) {
         $('#my_post_background_image_upload').click(function() {
            wp.media.editor.open();
         });
      });
   </script>
<?php
}

add_action('save_post', 'my_post_background_save_meta_box');

function my_post_background_save_meta_box($post_id)
{
   if (isset($_POST['my_post_background_image'])) {
      update_post_meta($post_id, 'my_post_background_image', sanitize_text_field($_POST['my_post_background_image']));
   }
}

function my_post_background_enqueue_scripts()
{
   wp_enqueue_style('my-post-background', plugin_dir_url(__FILE__) . 'style.css');
}

add_action('wp_enqueue_scripts', 'my_post_background_enqueue_scripts');

?>