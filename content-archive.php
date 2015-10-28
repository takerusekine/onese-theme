<div class="articlewrap">
	<article <?php post_class(); ?>>
					   <a href="<?php the_permalink(); ?>" style="font-size:1.5rem;text-decoration:none;">
					  		<?php the_title(); ?>
					  </a>
			   <section class="entry-content">
				   	<?php the_excerpt(); ?>
					<div class="pubtime">
					   <time pubdate="pubdate" datetime="<?php the_time('Y-m-d'); ?>" class="entry-date">
					   		<?php the_time(get_option('date_format')); ?>
					   </time>
					</div>
			   </section>
	</article>
</div>
