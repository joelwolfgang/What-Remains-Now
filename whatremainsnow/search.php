<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="content">

	<?php if (have_posts()) : ?>
	
		<h1 class="pagetitle">Search results for &ldquo;<?php the_search_query(); ?>&rdquo;</h1>

		<?php while (have_posts()) : the_post(); ?>
		
			<div id="post-<?php the_ID(); ?>" class="post">
				<p class="date"><?php the_time('F'); ?> <b><?php the_time('j'); ?></b></p>
				<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<p class="meta"><small>Posted by <?php the_author(); ?> <?php edit_post_link('Edit', ' | ', ''); ?><br />
					Filed under <?php the_category(', ') ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments'); ?></small></p>
				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
			</div>
			
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php previous_posts_link('&laquo; Newer Entries') ?></div>
			<div class="alignright"><?php next_posts_link('Older Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h1 class="pagetitle">Search Results for &ldquo;<?php the_search_query(); ?>&rdquo;</h1>
		<p>No posts found. Try a different search?</p>

	<?php endif; ?>

</div>
<!-- end content -->


<?php get_footer(); ?>