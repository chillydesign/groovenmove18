<?php $tdu = get_template_directory_uri(); ?>


    <?php get_template_part( 'social-bar' ); ?>


    <div id="bg_chevron_1"></div>
    <div id="bg_chevron_2"></div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <p>Demande générale : <a href="mailto:contact@groove-n-move.ch">contact@groove-n-move.ch </a><br>
                    Presse: <a href="mailto:presse@groove-n-move.ch">presse@groove-n-move.ch</a></p>

                </div>
                <div class="col-sm-4">
                    <p>ABONNEZ-VOUS À LA NEWSLETTER</p>
                    <form action="">
                        <input type="text" placeholder="email" />
                        <input type="submit" class="submit_button" id="subscribe_button" value="envoyer" />
                    </form>


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
  <script type="text/javascript" src="<?php echo $tdu; ?>/js/masonry.pkgd.min?v=<?php echo wf_version(); ?>"></script>
  <script type="text/javascript" src="<?php echo $tdu; ?>/js/jquery.lazyload?v=<?php echo wf_version(); ?>"></script>
  <script type="text/javascript" src="<?php echo $tdu; ?>/js/scripts.js?v=<?php echo wf_version(); ?>"></script>

    <script>
    // (function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
    // (f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
    // l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
    // })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    // ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
    // ga('send', 'pageview');
    </script>

</body>
</html>
