<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="logo-footer">
          <img src="<?php bloginfo('template_url'); ?>/img/logo-white.png" />
        </div>
        <p>Коммерческая разработка сайтов на WordPress, комплексное продвижение и автоматизация бизнеса</p>
        <p><a href="#">Скачать презентацию</a></p>
      </div>
      <div class="col-md-4">
        <?php wp_nav_menu(array(
          'theme_location' => 'footer_menu',
          'menu_class' => 'footer-menu',
          'container' => false
        )); ?>
      </div>
      <div class="col-md-4">
        <p>
          г. Москва, Головинское шоссе 5к1<br/>
          +7 (927) 348-09-85<br/>
          info@websterlab.ru<br/>
          Пн-Вс: 10:00 - 20:00
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col text-center site-copy">
        Авторские права Веб-студия "WebsterLab" © 2010-<? echo date('Y'); ?>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
