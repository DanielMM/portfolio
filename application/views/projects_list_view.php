<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div id="content_wrapp">
	<div id="content">
		<article id="projects">
			<h1 class="section_heading"><?php echo $page_title; ?></h1>
			<ul>
				<?php 
					if(isset($projects)):
					foreach($projects as $project): 
				?>
					<?php
						$title = str_replace("_"," ",$project->post_title);
						$date = explode("-",$project->post_date);
						$months =array('01'=>'ian','02'=>'feb','03'=>'mar','04'=>'apr','05'=>'may','06'=>'iun','07'=>'iul','08'=>'aug','09'=>'sep','10'=>'oct','11'=>'nov','12'=>'dec');
						$thumb = $project->post_thumb;
						$thumb = "<img class=\"thumb\" src=".asset_url('img').$thumb." width=\"170\" height=\"170\" alt=\"{$project->post_title}\" title=\"{$project->post_title}\" />";
						$url_title = url_title($project->post_title,"underscore");
						$teaser = $project->post_teaser;
					?>
					<li>
						<section>
							<div class="date">
								<span class="day"><?php echo $date[2]; ?></span>
								<span class="month"><?php echo $months[$date[1]]; ?></span>
								<span class="year"><?php echo $date[0]; ?></span>
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
									<?php
										echo $teaser;
									?>
								<p>
									<span class="read_more">
										<?php echo anchor("project/".$url_title, "Continue &raquo;",array('title' => "Continue reading ".strtolower($title)));?>
									</span>
								</p>
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
			<?php $this->load->view('categories_widget_view'); ?>
		</aside>
	</div>
</div>