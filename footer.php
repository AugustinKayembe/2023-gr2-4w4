<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="widget">
          <?php dynamic_sidebar( 'footer_1' ); ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="widget">
          <div class="menu-recherche text-center">
            <?php get_search_form(); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="widget">
          <h3>Coordonnées</h3>
          <ul>
            <li>Email : contact@example.com</li>
            <li>Téléphone : +1234567890</li>
            <li>Adresse : 123 Rue de l'Exemple, Ville, Pays</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div class="widget">
          <h3>Liens importants</h3>
          <ul>
            <li><a href="https://github.com/AugustinKayembe">Accédez à mon Github</a></li>
            <li><a href="https://github.com/AugustinKayembe">Accédez à mon Github</a></li>
          </ul>
        </div>
      </div>
      <!-- <div class="col-md-4">
        <div class="widget">
          <h3>Suivez-nous</h3>
          <ul class="social-icons">
            <li><a href="https://www.facebook.com/tonprofil" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://www.twitter.com/tonprofil" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/tonprofil" target="_blank"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div> -->
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="widget text-center">
          <p>&copy; <?php echo date('Y'); ?> MonSite.com. Tous droits réservés.</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?> 
 
</body>
</html>
