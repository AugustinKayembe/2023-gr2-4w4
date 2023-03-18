<footer class="site__footer">
    <section> <?php the_custom_logo(); ?></section>
    <!-- <a<sectionhref="https://github.com/AugustinKayembe">Accédez à mon Github</a></section> -->

   <section class="site__footer__link">
   <a href="https://github.com/AugustinKayembe">Accédez à mon Github</a>
   </section>

    <section><div class="menurecherche">
            <input type="checkbox" id="chkMenu">
            <?php  get_search_form(); ?>
      </div>  </section>
</footer>
<?php wp_footer(); ?>
</body>
</html>