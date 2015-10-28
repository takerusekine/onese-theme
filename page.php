<?php get_header(); ?>
	<section id="contents">

		<?php if (have_posts()):
            while (have_posts()):
                the_post();
                                if (is_page('access')):
                                    get_template_part('access');
                                else:
             get_template_part('content');
                        endif;
         endwhile;
     endif;
              ?>
	</section>
<?php get_footer();?>
