<?php get_header(); ?>
<?php $tdu = get_template_directory_uri(); ?>
<article>
	<?php
		$img_bg = $tdu . '/img/man.jpg';
		$style=" background-size: contain; background-position: center center; background-color: black;";
	?>

		<header  class="event_header"  style="background-image:url(<?php echo $img_bg; ?>); <?php echo $style; ?>">
				<div class="event_title">
						<div class="container">
								<div class="row">
								<div class="col-sm-8">
								<div class="floatdiv floatleftdiv"><?php include('doublechevron.svg'); ?></div>
								<div class="floatdiv floatrightdiv">
									<h1>404 - Page non trouvée</h1>
								</div>
								<div class="endpoint"><?php include('endpoint.svg'); ?></div>
								</div>
								</div>
						</div>
				</div>
		</header>
	</article>


		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">

				<div class="container">

				<h2>La page que vous recherchez n'existe pas</h2>
				<p>
					Elle a peut-être été déplacée, ou vous avez peut-être saisi la mauvaise url.
					<a href="<?php echo home_url(); ?>">Retournez à l'accueil</a> pour découvrir tout le Programme du Festival!
				</p>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->

<?php get_footer(); ?>
