<?php /* Template Name: Custom Page template */ ?>

<?php get_header(); ?>

	<div id="content" class="container">
		<div id="inner-content" class="row clearfix">
			<div id="main" class="col-md-12 clearfix" role="main">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					<header class="article-header">
						<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
					</header> <?php // end article header ?>
					<section class="entry-content cf" itemprop="articleBody">
						<?php the_content(); ?>
					</section> <?php // end article section ?>
					<footer class="article-footer cf">
					</footer>
					<?php comments_template(); ?>

				</article>
				<?php endwhile; else : ?>

				<article id="post-not-found" class="hentry cf">
					<header class="article-header">
						<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
					</header>
					<section class="entry-content">
						<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
					</section>
					<footer class="article-footer">
						<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
					</footer>
				</article>
				<?php endif; ?>

			</div>
		</div>
	</div>
<?php get_footer(); ?>