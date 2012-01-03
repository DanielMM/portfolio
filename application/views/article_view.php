<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div id="content_wrapp">
	<div id="content">
		<article class="project">
			<header class="project_header">
				<?php
					$thumb = $article->post_thumb;
					$thumb = "<img class=\"thumb\" src=".asset_url('img').$thumb." width=\"170\" height=\"170\" alt=\"{$page_title}\" title=\"{$page_title}\" />";
					echo $thumb;
				?>
				<div class="date">
					<span class="day"><?php //echo $project['date']['day']; ?></span>
					<span class="month"><?php //echo $project['date']['month']; ?></span>
					<span class="year"><?php //echo $project['date']['year']; ?></span>
				</div>
				<h3 class="category"><?php echo $article->post_category; ?></h3>
				<h1 class="project_title" title="<?php if(isset($page_title)){echo $page_title;}else{echo " ";}?>"><?php if(isset($page_title)){echo $page_title;}else{echo " ";}?></h1>
				<section class="project_meta">
					<dl>
						<?php if(isset($article->post_category)): ?>
							<dt class="category">Category:</dt>
								<dd><?php echo $article->post_category; ?></dd>
						<?php endif; ?>
						<?php if(isset($article->post_terms)):?>
						<dt class="tags">Tags:</dt>
							<dd>
								<?php foreach(json_decode($article->post_terms) as $tag): ?>
									<span class="tag"><?php echo anchor('project/tags/'.$tag, $tag, array('title' => $tag)); ?></span>
								<?php endforeach; ?>
							</dd>
						<?php endif; ?>
					</dl>
				</section>
			</header>
			<section class="project_body">
				<?php
					echo $article->post_teaser;
				?>
				<?php
					echo $article->post_content;
				?>
			</section>
			<section class="project_footer">
				<!--Add author bio for google author SEO -->
			</section>
		</article>
		<aside class="sidebar">
			<?php $this->load->view('related_content_widget_view'); ?>
			<?php $this->load->view('categories_widget_view'); ?>
		</aside>
	</div>
</div>