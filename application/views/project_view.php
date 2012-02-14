<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div id="content_wrapp">
	<div id="content">
		<article class="project_page main">
			<header class="project_header">
				<h1 title="<?php if(isset($page_title)){echo $page_title;}else{echo " ";}?>"><?php if(isset($page_title)){echo $page_title;}else{echo " ";}?></h1>
				<p class="post_info">
					<span class="category">Project</span>
					<span class="date nobrd">
						<span class="day"><?php echo $project['date']['day']; ?></span>
						<span class="month"><?php echo $project['date']['month']; ?></span>
						<span class="year"><?php echo $project['date']['year']; ?></span>
					</span>
				</p>
				<img src="<?php echo asset_url('post_img').$project['thumb']; ?>" width="710" height="463" alt="<?php echo $page_title; ?>" title="<?php echo $page_title; ?>" />
				<?php 
					if(isset($project['meta']['thumb_source'])){
						echo anchor(prep_url($project['meta']['thumb_source']),'Source', array("target"=>"_blank")); 
					}
				?>
				<section class="post_meta">
					<dl>
						<?php if(isset($project['meta']['link'])): ?>
							<dt class="link">Link:</dt>
								<dd>
									<?php echo anchor($project['meta']['link'],$project['meta']['link'],array('title' => $page_title, 'target'=>"_blank")); ?>
								</dd>
						<?php endif; ?>

						<?php if(isset($project['meta']['client'])): ?>
							<dt class="client">Client:</dt>
								<dd><?php echo $project['meta']['client']; ?></dd>
						<?php endif; ?>
						<?php //if(isset($project['meta']['category'])): ?>
							<!-- <dt class="category">Category:</dt> -->
								<!-- <dd><?php //echo $project['meta']['category']; ?></dd> -->
						<?php //endif; ?>
						<?php if(isset($project['meta']['tags'])):?>
						<dt class="tags">Tags:</dt>
							<dd>
								<?php foreach($project['meta']['tags'] as $tag){
									echo anchor('tag/'.$tag, $tag, array('title' => $tag, 'class'=>'tag'));
								}?>
							</dd>
						<?php endif; ?>
					</dl>
				</section>
			</header>
			<section class="post_body">
				<?php
					echo $project['data']['teaser'];
				?>
				<?php
					echo $project['data']['body'];
				?>
			</section>
			<section class="post_footer">
				<!--Add author bio for google author SEO -->
				<footer>
					<section class="share">
						<a href="" class="btn appreciate"><span>O</span>Appreciate</a>
						<div class="sharing">
							<span href="" class="btn">Share<span>></span></span>
							<ul class="social">
								<li class="google+">
									<div class="g-plusone" data-size="medium" data-annotation="none" data-href="<?php echo current_url(); ?>"></div>

								</li>
								<li class="twitter">
									<a href="https://twitter.com/share" class="twitter-share-button" data-text="<?php echo current_url();?>" data-via="danmois" data-count="none">Tweet</a>
								</li>
							</ul>
						</div>
					</section>
					<section class="author_info">
						<h5>Author</h5>
						<a href="https://plus.google.com/107915062498309785057?rel=author">Daniel Mois</a>
						<p>Web Developer</p>
						<img src="<?php echo asset_url('img');?>daniel_mois_author.jpg" class="author" width="48" height="48" alt="Daniel Mois - Web Developer" title="Daniel Mois - Web Developer" />
						<a href="<?php echo site_url('about');?>">Read more about Daniel</a>
					</section>
				</footer>
			</section>
		</article>
		<aside class="sidebar">
			<?php //$this->load->view('related_content_widget_view'); ?>
			<?php $this->load->view('categories_widget_view'); ?>
		</aside>
	</div>
</div>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>