<?php the_content(); ?>
<p>content-page.php</p>
<?php wp_link_pages(['before' => '<nav class="pagination"><p>' . __('Pages:', 'sage-'), 'after' => '</p></nav>']); ?>
