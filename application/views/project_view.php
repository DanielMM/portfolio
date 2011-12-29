<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div id="content_wrapp">
	<div id="content">
		<article class="project">
			<!-- <h1 class="section_heading"><?php echo $project['meta']['category'].">".$page_title; ?></h1> -->
			<header class="project_header">
				<?php
					$thumb = $project['thumb'];
					$thumb = "<img class=\"thumb\" src=".asset_url('img').$thumb." width=\"170\" height=\"170\" alt=\"{$page_title}\" title=\"{$page_title}\" />";
					echo $thumb;
				?>
				<div class="date">
					<span class="day"><?php echo $project['date']['day']; ?></span>
					<span class="month"><?php echo $project['date']['month']; ?></span>
					<span class="year"><?php echo $project['date']['year']; ?></span>
				</div>
				<h3 class="category"><?php echo $project['meta']['category']; ?></h3>
				<h1 class="project_title" title="<?php if(isset($page_title)){echo $page_title;}else{echo " ";}?>"><?php if(isset($page_title)){echo $page_title;}else{echo " ";}?></h1>
				<section class="project_meta">
					<dl>
						<?php if(isset($project['meta']['link'])): ?>
							<dt class="link">Link:</dt>
								<dd><?php echo anchor($project['meta']['link'],$project['meta']['link'],array('title' => $page_title, 'target'=>"_blanck")); ?>
								</dd>
						<?php endif; ?>
						<?php if(isset($project['meta']['client'])): ?>
							<dt class="client">Client:</dt>
								<dd><?php echo $project['meta']['client']; ?></dd>
						<?php endif; ?>
						<?php if(isset($project['meta']['category'])): ?>
							<dt class="category">Category:</dt>
								<dd><?php echo $project['meta']['category']; ?></dd>
						<?php endif; ?>
						<?php if(isset($project['meta']['tags'])):?>
						<dt class="tags">Tags:</dt>
							<dd>
								<?php foreach($project['meta']['tags'] as $tag): ?>
									<span class="tag"><?php echo anchor('project/tags/'.$tag, $tag, array('title' => $tag)); ?></span>
								<?php endforeach; ?>
							</dd>
						<?php endif; ?>
					</dl>
				</section>
			</header>
			<section class="project_body">
				<?php
					echo $project['data']['teaser'];
				?>
				<?php
					echo $project['data']['body'];
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