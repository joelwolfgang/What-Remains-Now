<?php get_header(); ?>
<div id="wrap">
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="content-top"></div>
	<div class="post" id="post-<?php the_ID(); ?>">
		<div class="page-entry">
			<h2 class="page_title"><?php the_title(); ?></h2>	
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			<div class="navigation">
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
		</div>
	</div>
	<div id="content-bottom"></div>
	<?php endwhile; endif; ?>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
