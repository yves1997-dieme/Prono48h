<div class="<?php mesmerize_print_archive_entry_class(); ?>"
     data-masonry-width="<?php mesmerize_print_masonry_col_class( true ); ?>">
    <div id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post card ' ); ?>>
        <div class="post-content shadow-small">

			<?php mesmerize_print_post_thumb(); ?>

            <div class="col-xs-12 col-padding col-padding-xs">

				<?php $over_class = (empower_has_post_thumbnail() ? 'over' : 'over-off'); ?>
                <div class="<?php echo esc_attr( $over_class ); ?>">

                    <h3 class="post-title">
                        <a href="<?php the_permalink(); ?>" rel="bookmark">
							<?php the_title(); ?>
                        </a>
                    </h3>
					<?php get_template_part( 'template-parts/content-list-post-meta' ); ?>


                    <div class="post-excerpt">
						<?php the_excerpt(); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
