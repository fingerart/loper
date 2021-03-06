<?php get_header(); ?>
<div id="content">
	<section class="layout">

	<article class="index">
	
	<h1 class="searchicon">Search Results for : <?php the_search_query(); ?></h1>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="clear"></div>
						<section class="title">
						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<div class="clear"></div>
						<span class="cate left"><?php the_time('Y.m.j'); ?> , <?php the_category(', '); ?> , <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?> , <?php if(function_exists('the_views')) {the_views();} ?></span> <span class="time right" ><?php edit_post_link('<span class="edit">[edit]　</span>');?></span>
						</section>
						<div class="clear"></div>
						<?php if($options['thumbnail']) : ?> 
							<?php 
							echo '<div class="thumbnailbg">';echo '<a href="';the_permalink() ;echo '" rel="nofollow">';post_thumbnail( 120,100 );echo '</a>';echo '</div>';
							?>
						<?php else : ?>
							<?php if ( has_post_thumbnail() ) {
							echo '<div class="thumbnailbg">';echo '<a href="';the_permalink() ;echo '" rel="nofollow">';post_thumbnail( 120,100 );echo '</a>';echo '</div>';
							} else { } 
							?>
						<?php endif; ?>
						
						<div class="post-content">
						
						
							<?php the_content(__(''));?>
							
							<div class="post-meta" >
								<a class="post-more" href="<?php the_permalink() ?>" title="continue" rel="nofollow"></a>
								<span class="post-tags"><?php if (the_tags('Tags: ', ', ', ' ')); ?></span>
								<div class="clear"></div>	
							</div><!--.postMeta-->
						</div>
		
	<?php endwhile; else: ?>
	
					<!--错误页面-->	
					<div class="no-results">
						<h3>所有文章中没有出现你搜索的关键词</h3>
						<p>请换一个关键词搜索。另外你可以点击导航栏的Archives或Tags以找到你想要的东西。 </p>
						
						<p>以下是<strong>最近10篇文章</strong>，或许你会感兴趣。 </p>
						<ul><?php get_archives('postbypost', 10); ?></ul>
					</div>
	<?php endif; ?>
			<div class="clear"></div>	
				<nav id="oldernewer">
					<table>
						<tbody>
							<tr>
								<td><span class=pageprevious><?php previous_posts_link('上一页')?></span></td>
								<td class="pagenumber"><?php par_pagenavi(9); ?></td>
								<td><span class=pagenext><?php next_posts_link('下一页')?></span></td>
							</tr>
						</tbody>
					</table>
				</nav>

			
			</article>	
		</section>


	<?php get_sidebar(); ?>
	</div><!--#content-->
<?php get_footer(); ?>