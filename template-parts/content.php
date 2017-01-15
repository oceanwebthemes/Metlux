<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package metlux
 */

?>

			<div  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post-single">
					<div class="date-title">
						<div class="date">
							<?php metlux_date();?>
						</div>
						<div class="title">
							<h2><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h2>
						</div>
					</div>
					<div class="clearfix"></div>
					
					<ul class="post-info list-inline">
						<i class="fa fa-user"></i> <?php echo esc_html( get_the_author_meta('display_name') );?>
						<i class="fa fa-comments-o"></i> <?php comments_popup_link(esc_html__('0 comment','metlux'),esc_html__('one comment','metlux'), esc_html__('% comments','metlux'));?>
						<i class="fa fa-folder-open"></i> <?php the_category(', '); ?>
					</ul>
					<div class="post-content">
						<?php the_excerpt();?>
					</div>
					<div><a href="<?php the_permalink(); ?>" class="btn btn-theme" title=""><?php _e('Read More','metlux'); ?></a></div>
				</div>
			</div>
