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
					

					$title = str_replace("_"," ",$post->post_title);
					$date = explode("-",$post->post_date);
					$year = $date[0];
					$month = $date[1];
					$day =	substr($date[2],0,2);
					$url_title = url_title($post->post_title,"underscore");
					
					
					if($post->post_thumb === NULL){
						$thumb = false;
					}else{
						$thumb = $post->post_thumb;
						$thumb = "<img class=\"thumb\" src=".asset_url('img').$thumb." width=\"270\" height=\"190\" alt=\"{$title}\" title=\"{$title}\" />";
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
						<article>
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
								
								<span class="category"><?php echo $post->post_category; ?></span>
								
								<span class="date <?php if($post->post_category == 'project'){echo "nobrd";} ?>">
									
									<span class="day"><?php echo $day; ?></span>
									<span class="month"><?php echo $months[$month]; ?></span>
									<span class="year"><?php echo $year; ?></span>
								
								</span>
								
								<?php if($post->post_category != 'project'): ?>
									<span class="comm_count"><?php echo $comm_count; ?></span>
								<?php endif; ?>

								<?php 
									if($post->post_category == 'project' && isset($post->meta_content)): 
									$meta_info = json_decode($post->meta_content, true);
								?>
									<span class="client">
										<?php echo anchor(prep_url($meta_info['link']),$meta_info['client']); ?>
									</span>

								<?php endif; ?>
							</p>
							<?php if($thumb): ?>
								<h2>
									<?php echo anchor("article/".$url_title, $thumb, array('title' => $title));?>
								</h2>
							<?php endif;?>

								<div class="summary <?php if(!$thumb){echo "nothumb";} ?>">
										<?php echo $teaser; ?>
								</div>

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