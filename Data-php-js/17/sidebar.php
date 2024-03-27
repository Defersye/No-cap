<?php
$social_links = get_theme_mod('my_theme_social_links');
if (!empty($social_links)) : ?>

   <ul class="social-links">
      <?php foreach ($social_links as $link) : ?>
         <li><a href="<?php echo esc_url($link['url']); ?>"><?php echo esc_html($link['title']); ?></a></li>
      <?php endforeach; ?>
   </ul>

<?php endif; ?>