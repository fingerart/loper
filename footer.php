	</div><!--.container-->
	<div class="clear"></div>
	<?php $options = get_option('loper_options'); ?>
	<?php if($options['updown']) : ?> 
	<?php else : ?>	
	<div id="updown"><div class="loperupwards"></div><div class="loperdownwards"></div></div>
	<?php endif; ?>
	<footer>	
	<div class="footertop">
	
	<?php if($options['footerswitch']) : ?> 
	<div class="footerwidgitswitch"></div>
		<div class="footerwidgitopen">
			<div class="container-footer">
				<div class="footerwidgitair">
<!--.设置分类名称1-->			
					<div class="footerwidgit">
					<h3>日志</h3>   
					<ul>
					<?php query_posts('cat=4&showposts=5'); ?>   
					<?php while (have_posts()) : the_post(); ?>   
					<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>  
					<?php endwhile; ?></ul>  
					</div>
					
<!--.设置分类名称2-->
					<div class="footerwidgit">
					<h3>音乐</h3>   
					<ul>					
					<?php query_posts('cat=5&showposts=5'); ?>   
					<?php while (have_posts()) : the_post(); ?>   
					<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>  
					<?php endwhile; ?></ul>  
					</div>					
					
<!--.设置分类名称3-->			
					<div class="footerwidgit">
					<h3>视频</h3>   
					<ul>					
					<?php query_posts('cat=6&showposts=5'); ?>   
					<?php while (have_posts()) : the_post(); ?>   
					<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>  
					<?php endwhile; ?></ul>  
					</div>	
					
<!--.设置分类名称4-->			
					<div class="footerwidgit">
					<h3>相册</h3>   
					<ul>					
					<?php query_posts('cat=37&showposts=5'); ?>   
					<?php while (have_posts()) : the_post(); ?>   
					<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>  
					<?php endwhile; ?></ul>  
					</div>							
				</div>
			</div>
		</div>
		<?php endif; ?>
<!--.分类文章结束-->	
	
		
		<div class="footerinfo">
			<div class="container-footer">
				<div class="footerinfotext">
				<p><a href="<?php echo get_option('home');?>/"><?php bloginfo('name');?></a>  © 2010-2011 <a title="版权所有" href="http://luzhongya.com/all-rights-reserved" target="_blank">版权所有</a> | <a title="体验手机版" href="http://luzhongya.com/?mobile=1" target="_blank">手机版</a> | <a title="管理" href="http://luzhongya.com/wp-login.php" target="_blank">管理</a></p>
				<p><a title="谷歌地图" href="http://luzhongya.com/sitemap.xml" target="_blank">谷歌地图</a> | <a title="百度地图" href="http://luzhongya.com/sitemap.html" target="_blank">百度地图</a> | 基于 <a href="http://wordpress.org/">WordPress</a> 技术构建 | <a title="衡天主机" href="http://my.hengtian.org/aff.php?aff=367" target="_blank">衡天主机</a> 强力驱动 | 共<?php echo get_num_queries(); ?> 次查询,用时 <?php timer_stop(1); ?> 秒. </p>
				</div>
 
				<div id="loperlogo"><abbr class="logoinfo" title="Designed &amp; Made by Ongakuer"></abbr></div>
				<div class="clear"></div>
			</div>
		</div><!--.contasoeiner-->	
		
		<?php if($options['footercode']) : ?> 
			<div class="footercodediv"><?php echo($options['footercode']); ?></div>
	<?php endif; ?>
	</div>

	<script  src="<?php bloginfo('template_url');?>/scripts/jquery.lavalamp-1.3.4.js"></script>	
	<script  src="<?php bloginfo('template_url');?>/scripts/loperjs.js"></script>
	<?php if($options['lazyload']) : ?>
		<script  src="<?php bloginfo('template_url');?>/scripts/jquery.lazyload.mini.js"></script>	
	<?php endif; ?>	

	</footer>

</div><!--#main-->
<?php wp_footer(); ?>
</body>
</html>