<?php
/**
 * Created by PhpStorm.
 * User: Akiba
 * Date: 14-7-21
 * Time: 下午8:58
 * A Category Template
 */
get_header(); ?>
	<div class="container">
		<section id="post" class="<?php echo $_COOKIE['layout'] == 1 ? 'grid--view':'list--view' ?>">
			<div class="pageload-overlay"></div>
			<div class="column--one column--post show--up <?php echo $_COOKIE['layout'] == 1 ? '':'column--invisible' ?>"></div>
			<div class="column--two column--post show--up <?php echo $_COOKIE['layout'] == 1 ? '':'column--invisible' ?>"></div>
			<div class="column--three column--post show--up <?php echo $_COOKIE['layout'] == 1 ? '':'column--invisible' ?>"></div>
			<div class="column--invisible <?php echo $_COOKIE['layout'] == 1 ? '':'column--show' ?>">
				<article id="cat-<?php the_category_ID(); ?> " class="item show-up kanban list--post">
					<div class="in-cat">
						<h2>这里是<span><?php single_cat_title(); ?></span></h2>
						<?php echo category_description( $category_id ); ?>
					</div>
				</article>
				<?php if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
						get_template_part( 'content' );
					endwhile;
				endif; ?>
			</div>
		</section>
		<?php wpbeginner_numeric_posts_nav(); ?>
	</div>

<?php get_footer(); ?>