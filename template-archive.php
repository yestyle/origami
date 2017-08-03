<?php
/*
Template Name: Archives
*/

get_header(); the_post();
?>

	<div <?php post_class('post') ?>>
		<h1 class="entry-title noinfo"><?php the_title(); ?></h1>

		<div class="content">
			<?php the_content() ?>
		</div>

		<div class="content" id="blog-archives">
			<?php $all_post = get_posts( array('numberposts' => -1) ); ?>
			<?php if(!empty($all_post)) : ?>
				<ul class="month_archive">
				<?php $month_title = ""; ?>
				<?php foreach($all_post as $each_post) : ?>
					<?php $month = get_the_date('F Y', $each_post->ID) ?>
					<?php if($month_title != $month) : ?>
						<?php $month_title = $month; ?>
						<h3><?php echo $month_title; ?></h3>
					<?php endif; ?>
							<li><a href="<?php echo get_permalink($each_post->ID) ?>"><?php echo $each_post->post_title ?></a></li>
				<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>
