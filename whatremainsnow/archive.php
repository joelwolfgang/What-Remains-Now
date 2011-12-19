<?php get_header(); ?>
<div id="wrap">
<div id="content">
	<?php if (have_posts()): ?>
		<h1 class="pagetitle category_pt">
			<?php $post = $posts[0]; ?>
			<?php if (is_category()): ?>
				<?php echo get_cat_name($cp_pC); ?>
			<?php elseif (is_day()): ?>
				Archive for <?php the_time('F jS, Y'); ?>
			<?php elseif (is_month()): ?>
				Archive for <?php the_time('F, Y'); ?>
			<?php elseif (is_year()): ?>
				Archive for <?php the_time('Y'); ?>
			<?php elseif (is_author()): ?>
				Author Archive
			<?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])): ?>
				Blog Archives
			<?php endif; ?>
		</h1>
		<?php while (have_posts()) : the_post(); ?>
		<div id="content-top"></div>
			<div id="post-<?php the_ID(); ?>" class="post">
				<p class="date"><?php the_time('F'); ?> <b><?php the_time('j'); ?></b></p>
				<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry">
					<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
				</div>
				<p class="meta"><small>Posted by <?php the_author(); ?> <?php edit_post_link('Edit', ' | ', ''); ?>. Filed under <?php the_category(', ') ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments'); ?></small></p>
			</div>
		<div id="content-bottom"></div>
		<?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft"><?php previous_posts_link('&laquo; Newer Entries') ?></div>
			<div class="alignright"><?php next_posts_link('Older Entries &raquo;') ?></div>
		</div>
	<?php else: ?>
		<h1 class="pagetitle">Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>
	<?php endif; ?>
</div>
</div>
<!-- end content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
