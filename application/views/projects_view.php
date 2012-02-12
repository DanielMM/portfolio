<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div id="content_wrapp">
	<div id="content">
		<section class="tile">
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
					$month = get_month($date[1], 'short');
					$day =	substr($date[2],0,2);
					$url_title = url_title($post->post_title,"underscore");
					$meta_info = json_decode($post->meta_content, true);
					$thumb = $post->post_thumb;

					if($post->post_type == 'project'){
						$thumb = "<img class=\"thumb\" src=".asset_url('post_img').$thumb." width=\"270\" height=\"190\" alt=\"{$title}\" title=\"{$title}\" />";
					}
					
					$teaser = $post->post_teaser;
					
			?>
						<article class="<?php echo $post->post_category; ?>">
							<h1>
								<?php
									echo anchor("project/".$url_title, $title, array('title' => $title));
								?>
							</h1>
							<h2>
								<?php
									echo anchor("project/".$url_title, $thumb, array('title' => $title));
								?>
							</h2>
							<p class="post_info">
								<span class="client"><?php echo $meta_info['client']; ?></span>
								<span class="date <?php if($post->post_category == 'project'){echo "nobrd";} ?>">
									<span class="month"><?php echo $month; ?></span>
									<span class="year"><?php echo $year; ?></span>
								</span>
							</p>
							<footer>
								<?php
									echo anchor("project/".$url_title, "Read more",array('title' => "Continue reading ".strtolower($title), 'class'=>"read_more btn"));
									echo anchor(prep_url($meta_info['link']),'View online', array('title' => $meta_info['client'], 'class'=>"view_online btn", "target"=>"_blank"));
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
	</div>
</div>