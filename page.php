<?php get_header(); ?>
<?php $tdu = get_template_directory_uri(); ?>

<article>

		<header  class="event_header"  style="background-image:url(<?php echo $tdu; ?>/img/man.jpg); background-size: contain; background-position: center right 20%; background-color: black;">
				<div class="event_title">
						<div class="container">
								<div class="row">
								<div class="col-sm-8">
								<div class="floatdiv floatleftdiv"><?php include('doublechevron.svg'); ?></div>
								<div class="floatdiv floatrightdiv">
									<h1>
										<?php the_title(); ?></h1>
								</div>
								<div class="endpoint"><?php include('endpoint.svg'); ?></div>
								</div>
								</div>
						</div>
				</div>
		</header>
	</article>



</div>

<!-- section -->
<section >


	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>




			<div class="container">
				<?php include('section-loop.php'); ?>
				<?php // comments_template( '', true ); // Remove if you don't want comments ?>
				<?php edit_post_link(); ?>
			</div>



		</article>
		<!-- /article -->

	<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article class="container">

		<h2><?php _e( 'Sorry, nothing to display.', 'webfactor' ); ?></h2>

	</article>
	<!-- /article -->

<?php endif; ?>

</section>
<!-- /section -->




<?php get_footer(); ?>
