<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div id="content_wrapp">
	<div id="content">
		<article id="list">
			<h1 class="section_heading"><?php echo $page_title; ?></h1>
			<ul>
				<?php 
					if(isset($projects)):
					foreach($projects as $project): 
				?>
					<?php
						$title = str_replace("_"," ",$project->post_title);
						$date = explode("-",$project->post_date);
						$year = $date[0];
						$month = $date[1];
						$day =	substr($date[2],0,2);
						$url_title = url_title($project->post_title,"underscore");
						
						$thumb = $project->post_thumb;
						$thumb = "<img class=\"thumb\" src=".asset_url('img').$thumb." width=\"170\" height=\"170\" alt=\"{$title}\" title=\"{$title}\" />";
						$teaser = $project->post_teaser;
					?>
					<li>
						<section>
							<?php
								echo anchor("project/".$url_title, $thumb, array('title' => $title,'class'=>"thumb"));
							?>
							<div class="summary">
								<div class="date">
									<span class="day"><?php echo $day; ?></span>
									<span class="month"><?php echo $months[$month]; ?></span>
									<span class="year"><?php echo $year; ?></span>
								</div>
								<h3 class="category"><?php echo $project->post_category; ?></h3>
								<h2>
									<?php
										echo anchor("project/".$url_title, $title, array('title' => $title));
									?>
								</h2>
									<?php
										echo $teaser;
									?>
								<?php echo anchor("project/".$url_title, "Continue &raquo;",array('title' => "Continue reading ".strtolower($title), 'class'=>"read_more"));?>
							</div>
						</section>
					</li>
				<?php endforeach; 
					else:
				?>
			</ul>
			<div>No data.</div>
			<?php endif;?>
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
			<?php 
				if(isset($categories)){
					$this->load->view('categories_widget_view'); 
				}
			?>
		</aside>
	</div>
</div>