<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div id="content_wrapp">
	<div id="content">
		<article id="projects">
			<h1 class="section_heading"><?php echo $page_title; ?></h1>
			<ul>
				<?php foreach($item as $project): ?>
					<?php
						$title = $project['title'];
						$thumb = $project['thumb'];
						$url_title = $project['url_title'];
						$teaser = $project['teaser'];
					?>
					<li>
						<section>
							<div class="date">
								<span class="day"><?php echo $project['date']['day']; ?></span>
								<span class="month"><?php echo $project['date']['month']; ?></span>
								<span class="year"><?php echo $project['date']['year']; ?></span>
								<span class="ribbon"></span>
							</div>
							<?php
								echo anchor("project/".$url_title, $thumb, array('title' => $title,'class'=>"thumb"));
							?>
							<div class="summary">
								<h2>
									<?php
										echo anchor("project/".$url_title, $title, array('title' => $title));
									?>
								</h2>
								<p>
									<?php
										echo $teaser;
									?>
									<span class="read_more">
										<?php echo anchor("project/".$url_title, "Continue &raquo;",array('title' => "Continue reading ".strtolower($title)));?>
									</span>
								</p>
							</div>
						</section>
					</li>
				<?php endforeach; ?>
			</ul>
			<div class="pagination">
				<ul>
					<li class="prev" ><a href="">&laquo;</a></li>
					<li><a href="">1</a></li>
					<li><a href="">2</a></li>
					<li><a href="">3</a></li>
					<li class="active"><a href="">4</a></li>
					<li><a href="">5</a></li>
					<li><a href="">6</a></li>
					<li><a href="">7</a></li>
					<li class="next" ><a href="">&raquo;</a></li>
				</ul>
			</div>
		</article>
		<aside class="sidebar">
			<section id="categories" class="widget">
			<h3 class="section_heading">Categories</h3>
			<ul>
				<li><?php echo anchor('project/category/cms','CMS<span class="count">3</span>','title="CMS category"'); ?></li>
				<li><a href="#">Lorem ipsum dolor<span class="count">2</span></a></li>
				<li><a href="#">Lorem ipsum dolor<span class="count">1</span></a></li>
				<li><a href="#">Lorem ipsum dolor<span class="count">0</span></a></li>
			</ul>
			</section>
		</aside>
	</div>
</div>