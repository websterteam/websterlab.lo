<?php get_header(); ?>

<div class="header-page d-flex align-items-center justify-content-center">
	<div class="">
		<h1 class="text-center"><? the_title(); ?></h1>
		<div class="bread text-center">Главная - Не главная</div>
	</div>
</div>

<div class="container py-5">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
      <? the_content(); ?>
    </article>
  <? endwhile; else: ?>
    <h1>Страница не найдена</h1>
  <? endif; ?>
</div>

<?php get_footer(); ?>
