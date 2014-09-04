<?php get_header(); ?>

	<div class="content">
		<div class="container">
			<?php while (have_posts()) : the_post(); ?>
				<div class="post-heading">
					<div class="entry-left">
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

				<?php include('inc/share.baidu.php'); ?>

				<?php comments_template(); ?>
				
			<?php endwhile; ?>
		</div>
	</div>

<?php get_footer(); ?>