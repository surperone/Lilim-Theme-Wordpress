<?php get_header(); ?>
	<div class="container">
		<section id="post" class="<?php echo $_COOKIE['layout'] == 1 ? 'grid--view':'list--view' ?>">
			<div class="pageload-overlay"></div>

			<?php if ( have_posts() ) :
				?>
				<div class="column--one column--post show--up <?php echo $_COOKIE['layout'] == 1 ? '':'column--invisible' ?>"></div>
				<div class="column--two column--post show--up <?php echo $_COOKIE['layout'] == 1 ? '':'column--invisible' ?>"></div>
				<div class="column--three column--post show--up <?php echo $_COOKIE['layout'] == 1 ? '':'column--invisible' ?>"></div>
				<div class="column--invisible <?php echo $_COOKIE['layout'] == 1 ? '':'column--show' ?>">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'content' );
					endwhile;
					?>
				</div>
			<?php
			else : ?>
				<article class="item i-404">
					<div class="wrap-content clearfix">
						<div class="not-found">
							<img src="<?php bloginfo( 'template_directory' ); ?>/images/404-not-found.jpg"/>
						</div>
					</div>
				</article>
			<?php endif; ?>
		</section>
		<?php wpbeginner_numeric_posts_nav(); ?>
	</div>
<?php get_footer(); ?>