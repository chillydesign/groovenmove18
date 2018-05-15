<?php $tdu = get_template_directory_uri(); ?>


    <?php get_template_part( 'social-bar' ); ?>


    <div id="bg_chevron_1"></div>
    <div id="bg_chevron_2"></div>

<?php if(!isset($_COOKIE['popup'])): ?>

    <div class="popup">
      <div class="popup_inner">
        <div class="close"><span>+</span></div>
        <h2>Merci à tous pour votre participation ! <div class="endpoint"><?php include('endpoint.svg'); ?></div></h2>

        <div class="inner_box">
          <h3>Retrouvez l'essentiel du festival 2018 en vidéo</h3>
          <iframe width="560" height="315" margin-bottom:"20px" src="https://www.youtube.com/embed/Z7gtfSZ3xrs?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

          <h3>Au plaisir de vous retrouver pour l'édition 2019!</h3>
        </div>

      </div>
  </div>
<?php setcookie('popup', 'true', time()+86400, '/'); ?>
<?php endif; ?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <p>Demande générale : <a href="mailto:contact@groove-n-move.ch">contact@groove-n-move.ch </a><br>
                    Presse: <a href="mailto:communication@groove-n-move.ch">communication@groove-n-move.ch</a></p>

                </div>
                <div class="col-sm-4">
                    <p>ABONNEZ-VOUS À LA NEWSLETTER</p>
                    <?php include('mailchimp.php'); ?>


                </div>
                <div class="col-sm-4">
                    <img src="<?php echo $tdu; ?>/img/logo.svg" alt="">
                </div>
            </div>
        </div>

        <p id="copyright">&copy; <?php echo date('Y'); ?> Festival Groove'N'Move | Website by <a href="//webfactor.ch" title="Webfactor">Webfactor</a></p>
    </footer>
  <?php wp_footer(); ?>

  <script type="text/javascript" src="<?php echo $tdu; ?>/js/slick.min.js?v=<?php echo wf_version(); ?>"></script>
  <script type="text/javascript" src="<?php echo $tdu; ?>/js/featherlight.min.js?v=<?php echo wf_version(); ?>"></script>
  <script type="text/javascript" src="<?php echo $tdu; ?>/js/jquery.masonry.min.js?v=<?php echo wf_version(); ?>"></script>
  <script type="text/javascript" src="<?php echo $tdu; ?>/js/jquery.lazyload.js?v=<?php echo wf_version(); ?>"></script>
  <script type="text/javascript" src="<?php echo $tdu; ?>/js/jquery.matchHeight.js?v=<?php echo wf_version(); ?>"></script>
  <script type="text/javascript" src="<?php echo $tdu; ?>/js/scripts.js?v=<?php echo wf_version(); ?>"></script>


</body>
</html>
