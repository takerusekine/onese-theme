<div class="articlewrap">
	<article>
		<?php if (is_page('officers')): ?>
		<header class="entry-header">
			<h3 class="entry-title"><?php the_title(); ?></h3>
		</header>
	<?php endif; ?>
		<section class="entry-content">
			<?php the_content(); ?>
		</section>
	</article>
</div>
