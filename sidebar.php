<?php
/**
 * The sidebar containing the main widget area.
 * @package WordPress - Themonic Framework
 * @subpackage Iconic_One
 * @since Iconic One 1.0
 */
?>

	<?php if ( is_active_sidebar( 'themonic-sidebar' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'themonic-sidebar' ); ?>
		</div><!-- #secondary -->
	<?php else : ?>	
	 		<div id="secondary" class="widget-area" role="complementary">
			<div class="widget widget_search">
				<?php get_search_form(); ?>
			</div>
			<aside id="php_text-8" class="widget php_text wow fadeInUp" data-wow-delay="0.3s">
			<div class="textwidget widget-text">
        	<style type="text/css">#container-box-1{color:#526372;text-transform:uppercase;width:100%;font-size:16px;line-height:50px;text-align:center}#flip-box-1{overflow:hidden;height:50px}#flip-box-1 div{height:50px}#flip-box-1>div>div{color:#fff;display:inline-block;text-align:center;height:50px;width:100%}#flip-box-1 div:first-child{animation:show 8s linear infinite}.flip-box-1-1{background-color:#FF7E40}.flip-box-1-2{background-color:#C166FF}.flip-box-1-3{background-color:#737373}.flip-box-1-4{background-color:#4ec7f3}.flip-box-1-5{background-color:#42c58a}.flip-box-1-6{background-color:#F1617D}@keyframes show{0%{margin-top:-300px}5%{margin-top:-250px}16.666%{margin-top:-250px}21.666%{margin-top:-200px}33.332%{margin-top:-200px}38.332%{margin-top:-150px}49.998%{margin-top:-150px}54.998%{margin-top:-100px}66.664%{margin-top:-100px}71.664%{margin-top:-50px}83.33%{margin-top:-50px}88.33%{margin-top:0px}99.996%{margin-top:0px}100%{margin-top:300px}}</style>
             <div id="container-box-1"><div class="container-box-1-1">坚持每天来逛逛，会让你</div><div id="flip-box-1"><div><div class="flip-box-1-1">工作也轻松了！</div></div><div><div class="flip-box-1-2">生活也美好了！</div></div><div><div class="flip-box-1-3">心情也舒畅了！</div></div><div><div class="flip-box-1-4">走路也有劲了！</div></div><div><div class="flip-box-1-5">腿也不痛了！</div></div><div><div class="flip-box-1-6">腰也不酸了！</div></div><div><div class="flip-box-1-1">工作也轻松了！</div></div></div><div class="container-box-1-2">你好我也好，不要忘记哦！</div></div></div><div class="clear">     	
             </div>
             </aside>
			<div class="widget widget_recent_entries">
				<p class="widget-title"><?php _e( 'Recent Posts', 'iconic-one' ); ?></p>
				<ul><?php wp_get_archives('type=postbypost&limit=5'); ?></ul>
			</div>
			<div class="widget widget_pages">
			<p class="widget-title"><?php _e( 'Pages', 'iconic-one' ); ?></p>
          <ul><?php wp_list_pages('title_li='); ?></ul>
      </div>
	  
	  <div class="widget widget_tag_cloud">
       <p class="widget-title"><?php _e( 'Tag Cloud', 'iconic-one' ); ?></p>
        <?php wp_tag_cloud('smallest=10&largest=20&number=30&unit=px&format=flat&orderby=name'); ?>
			</div>
		</div><!-- #secondary -->
	<?php endif; ?>