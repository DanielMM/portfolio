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
					if(isset($post->comm_count)){
						if($post->comm_count > 0){
							if($post->comm_count == 1){
								$comm_count = $post->comm_count." comment";
							}else{
								$comm_count = $post->comm_count." comments";
							}
						}else{
							$comm_count ="no comments";
						}
					}
			?>
						<article class="<?php echo $post->post_category; ?>">
							<h1>
								<?php
									if($post->post_category == 'project'){
										echo anchor("project/".$url_title, $title, array('title' => $title));
									}else{
										echo anchor("article/".$url_title, $title, array('title' => $title));
									}
								?>
							</h1>
							<p class="post_info">
								<?php if($post->post_category != 'project'): ?>
								<span class="category"><?php echo $post->post_category; ?></span>
								<?php endif; ?>
								<span class="date <?php if($post->post_category == 'project'){echo "nobrd";} ?>">
									<span class="month"><?php echo $months[$month]; ?></span>
									<span class="day"><?php echo $day; ?></span>
									<span class="year"><?php echo $year; ?></span>
								</span>
								<?php if($post->post_category != 'project'): ?>
									<span class="comm_count"><?php echo $comm_count; ?></span>
								<?php endif; ?>
							</p>
							<h2>
								<?php
									if($post->post_category == 'project'){
										echo anchor("project/".$url_title, $thumb, array('title' => $title));
									}else{
										echo anchor("article/".$url_title, $thumb, array('title' => $title,'class'=>"thumb"));
									}
								?>
							</h2>
							<?php
								if($post->post_category != 'project'):
							?>
								<div class="summary">
										<?php echo $teaser; ?>
								</div>
								
							<?php endif; ?>
							<footer>
								<?php
									if($post->post_category == 'project'){
										echo anchor("project/".$url_title, "Continue &raquo;",array('title' => "Continue reading ".strtolower($title), 'class'=>"read_more"));
									}else{
										echo anchor("article/".$url_title, "Continue &raquo;",array('title' => "Continue reading ".strtolower($title), 'class'=>"read_more"));
									}
									?>
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