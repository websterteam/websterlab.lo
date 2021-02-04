<?php get_header(); ?>

<div class="container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><? the_title(); ?></h1>
    <article>
      <? the_content(); ?>
    </article>
  <? endwhile; else: ?>
    <h1>Страница не найдена</h1>
  <? endif; ?>
</div>

<?php get_footer(); ?>
