<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div id="content_wrapp">
	<div id="content">
		<section class="main list">
			<h1 class="col_title">
				<?php if(isset($posts)){echo $page_title;}?>
			</h1>
			<?php 
				
				if(isset($posts)):
					
					foreach($posts as $post): 
					//var_dump($post);
					$title = str_replace("_"," ",$post->post_title);
					$date = explode("-",$post->post_date);
					$year = $date[0];
					$month = $date[1];
					$day =	substr($date[2],0,2);
					$url_title = url_title($post->post_title,"underscore");
					
					$thumb = $post->post_thumb;

					if($post->post_type == 'project'){
						$thumb = "<img class=\"thumb\" src=".asset_url('img').$thumb." width=\"710\" height=\"280\" alt=\"{$title}\" title=\"{$title}\" />";
					}else{
						$thumb = "<img class=\"thumb\" src=".asset_url('img').$thumb." width=\"170\" height=\"170\" alt=\"{$title}\" title=\"{$title}\" />";
					}
					
					$teaser = $post->post_teaser;
			?>
						<article class="<?php echo $post->post_category; ?>">
							<h1>
								<?php
									echo anchor("blog/".$url_title, $title, array('title' => $title));
								?>
							</h1>
							<p class="post_info">
								<span class="category"><?php echo $post->post_category; ?></span>
								<span class="date">
									<span class="month"><?php echo $months[$month]; ?></span>
									<span class="day"><?php echo $day; ?></span>
									<span class="year"><?php echo $year; ?></span>
								</span>
								<span class="comm_count">3<?php //echo $comm_count; ?> comments</span>
							</p>
							<h2>
								<?php
									echo anchor("blog/".$url_title, $thumb, array('title' => $title,'class'=>"thumb"));
								?>
							<h2>
							<div class="summary">
								<?php
									echo $teaser;
								?>
							</div>
							<footer>
								<?php echo anchor("blog/".$url_title, "Continue &raquo;",array('title' => "Continue reading ".strtolower($title), 'class'=>"read_more"));?>
							</footer>
						</article>
			<?php
				endforeach; 
				endif;
			?>
			<div class="pagination">
				<?php
					if(isset($pagination)){
						echo $pagination;
					}
				?>
				<!-- <ul>
					<li class="prev" ><a href="">&laquo;</a></li>
					<li><a href="">1</a></li>
					<li><a href="">2</a></li>
					<li><a href="">3</a></li>
					<li class="active"><a href="">4</a></li>
					<li><a href="">5</a></li>
					<li><a href="">6</a></li>
					<li><a href="">7</a></li>
					<li class="next" ><a href="">&raquo;</a></li>
				</ul> -->
			</div><!--pagination-->
		</section><!--main-->
		<aside class="sidebar">
			<?php 
				if(isset($categories)){
					$this->load->view('categories_widget_view'); 
				}
			?>
		</aside><!--sidebar-->
	</div>
</div>