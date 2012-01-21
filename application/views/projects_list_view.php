<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div id="content_wrapp">
	<div id="content">
		<section class="main list">
			<h1 class="col_title">Projects</h1>
				<?php 
					if(isset($projects)):
					foreach($projects as $project): 
				?>
					<?php
						$title = str_replace("_"," ",$project->post_title);
						$date = explode("-",$project->post_date);
						$url_title = url_title($project->post_title,"underscore");
						
						$thumb = $project->post_thumb;
						$thumb = "<img class=\"thumb\" src=".asset_url('img').$thumb." width=\"710\" height=\"280\" alt=\"{$title}\" title=\"{$title}\" />";
						$teaser = $project->post_teaser;
					?>
						<article class="<?php echo $project->post_category; ?>">
							<h1>
								<?php
									echo anchor("project/".$url_title, $title, array('title' => $title,'class'=>"thumb"));
								?>
							</h1>
							<p class="post_info">
								<span class="category"><?php echo $project->cat_name; ?></span>
								<span class="date nobrd">
									<span class="month"><?php echo $months[$date[1]]; ?></span>
									<span class="day"><?php echo substr($date[2], 0,2); ?></span>
									<span class="year"><?php echo $date[0]; ?></span>
								</span>
							</p>
							<h2>
								<?php
									echo anchor("project/".$url_title, $thumb, array('title' => $title));
								?>
							</h2>
							<div class="summary">
								<?php
									echo $teaser;
								?>
							</div>
							<footer>
								<?php echo anchor("project/".$url_title, "Continue &raquo;",array('title' => "Continue reading ".strtolower($title), 'class'=>"read_more"));?>
							</footer>
						</article>
				<?php endforeach; 
					else:
				?>
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
			</div><!--pagination-->
		</section><!--main-->
		<aside class="sidebar">
			<?php 
				if(isset($categories)){
					$this->load->view('categories_widget_view'); 
				}
			?>
		</aside><!--sidebar-->
	</div><!--content-->
</div><!--content_wrapp-->