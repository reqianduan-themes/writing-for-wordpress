<?php get_header(); ?>

	<!-- 主干 -->
	<div class="content">
		<div class="container">	        
	        <h5 class="archive-title">
	        	<?php if ( is_tag() ) : ?>
					<?php printf( __( '标签 “%s” 下的文章' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?>
				<?php elseif ( is_category() ) : ?>
					<?php printf( __( '分类 “%s” 下的文章' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
				<?php elseif ( is_search() ) : ?>
					<?php printf( __( '包含关键字 “%s” 的文章' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
				<?php elseif ( is_author() ) : ?>
					<?php printf( __( '“%s” 发布的文章' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
				<?php else : ?>
					<?php _e( 'Blog Archives' ); ?>
				<?php endif; ?>
	        </h5>
	        
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="entry">
						<div class="entry-left">
							<div class="entry-meta">
								<a itemprop="name" href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" rel="author" class="entry-author">
									<?php the_author_meta('display_name'); ?>
								</a>

								<small>post in</small>

								<?php the_category(','); ?>
							</div>

							<h2 class="entry-title">
								<a itemtype="url" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>
							
							<div class="entry-description"><?php get_post_meta($post->ID, 'description', true); ?></div>
						</div>

						<div class="entry-right">			
							<span class="date"><?php the_date('F j'); ?></span>
						</div>

						<div class="clearfix"></div>
					</div>
				<?php endwhile; ?>

				<div class="pagination" role="pagination">
					<?php getPageNav(9); ?>
				</div>
			<?php else : ?>
	    		<h2>Not Found</h2>
	    	<?php endif; ?>	
		</div>
	</div>

<?php get_footer(); ?>