<?php
/*
Template Name:sitemap（网站地图）
*/
?>


<?php get_header(); ?>
<div id="content">
	<section class="layout">	
		
    <article class="pages">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					
				

<h2><?php the_title(); ?></h2>	
	
                <p><strong><a href="<?php bloginfo('url'); ?>" alt="<?php bloginfo('name'); ?>">Home</a></strong></p>
				<h3>All internal pages:</h3>
				<ul>
					<?php wp_list_pages('title_li='); ?>
				</ul>
				<h3>All internal blog posts:</h3>
				<ul>
					<?php $archive_query = new WP_Query('showposts=1000');
						while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
					<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a> <strong><?php comments_number('0', '1', '%'); ?></strong></li>
					<?php endwhile; ?>
				</ul>
				<h3>Monthly archive pages:</h3>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
				<h3>Topical archive pages:</h3>
				<ul>
					<?php wp_list_categories('title_li=0'); ?>
				</ul>
				<h3>Available RSS Feeds:</h3>
				<ul>
					<li><a href="<?php bloginfo('rdf_url'); ?>" alt="RDF/RSS 1.0 feed"><acronym title="Resource Description Framework">RDF</acronym>/<acronym title="Really Simple Syndication">RSS</acronym> 1.0 feed</a></li>
					<li><a href="<?php bloginfo('rss_url'); ?>" alt="RSS 0.92 feed"><acronym title="Really Simple Syndication">RSS</acronym> 0.92 feed</a></li>
					<li><a href="<?php bloginfo('rss2_url'); ?>" alt="RSS 2.0 feed"><acronym title="Really Simple Syndication">RSS</acronym> 2.0 feed</a></li>
					<li><a href="<?php bloginfo('atom_url'); ?>" alt="Atom feed">Atom feed</a></li>
				</ul>
			
			<div class="clear rule"></div>


			<?php endwhile; else: ?>
			<!--错误页面-->	
					<div class="no-results">
						<h3>出错了，你查看的内容不存在。</h3>
						<p>请试试搜索。另外你可以点击导航栏的Archives或Tags以找到你想要的东西。 </p>
						<p>以下是<strong>最近10篇文章</strong>，或许你会感兴趣。 </p>
						<ul><?php get_archives('postbypost', 10); ?></ul>
					</div>
				<?php endif; ?>
		</article>	
	</section>

	<?php get_sidebar(); ?>
	</div><!--#content-->
<?php get_footer(); ?>
