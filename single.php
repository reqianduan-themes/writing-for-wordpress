<?php get_header(); ?>

	<div class="content">
		<div class="container">
			<?php while (have_posts()) : the_post(); ?>
				<div class="post-heading">
					<div class="entry-left">
						<div class="entry-meta">
							<a itemprop="name" href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" rel="author" class="entry-author">
								<?php the_author_meta('display_name'); ?>
							</a>

							<small>post in</small>

							<?php the_category(','); ?>
						</div>

						<h1 class="entry-title">
							<a itemtype="url" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h1>
						
						<div class="entry-description"><?php get_post_meta($post->ID, 'description', true); ?></div>
					</div>

					<div class="entry-right">			
						<span class="date"><?php the_date('F j'); ?></span>
					</div>

					<div class="clearfix"></div>
				</div>

				<div class="post-content" itemprop="articleBody">
	                <?php the_content(); ?>
	            </div>

				<div class="post-tags" itemprop="keywords">
					<?php the_tags('',' ',''); ?>
				</div>

				<?php include('inc/share.baidu.php'); ?>
				
				<?php include('inc/post.related.php'); ?>

				<?php comments_template(); ?>
			<?php endwhile; ?>
		</div>

		<div class="pager" role="pager">
			<div class="prev">
				<?php previous_post_link('%link'); ?>
				<span>&larr;</span>
			</div>

			<div class="next">
				<?php next_post_link('%link'); ?>
				<span>&rarr;</span>
			</div>

			<div class="clearfix"></div>
		</div>
	</div>

<?php get_footer(); ?>