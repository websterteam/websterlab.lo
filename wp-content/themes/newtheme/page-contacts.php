<?
/*
    Template Name: Контакты
    Template Post Type: page
*/
?>

<?php get_header(); ?>

<div class="header-page d-flex align-items-center justify-content-center">
	<div class="">
		<h1 class="text-center"><? the_title(); ?></h1>
		<div class="bread text-center"><a href="/">Главная</a></div>
	</div>
</div>

<div class="container my-5">
	<div class="row">

		<div class="col-8">
			<h1>Свяжитесь с нами</h1>
			<p>Оставьте заявку и наш менеджер свяжется с вами для уточнения подробностей.</p>
			<h2>Форма обратной связи</h2>
		</div>

		<div class="col-4">

		</div>

	</div>
</div>

<div class="container py-5">
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
