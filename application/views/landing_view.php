	<div id="content_wrapp">
	<div id="content">
		<div class="list">
			<h1 class="page_title">Latest articles</h1>
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
						$thumb = "<img class=\"thumb\" src=".asset_url('post_img').$thumb." width=\"270\" height=\"190\" alt=\"{$title}\" title=\"{$title}\" />";
					}

					$teaser = $post->post_teaser;

			?>
				<article class="post <?php echo $post->post_category; if(!$thumb){echo " nothumb";}?>">
					<p class="meta">
						<span class="category"><?php //echo $tutorial->post_category; ?></span>
						<span class="date">
							<span class="day"><?php echo $day; ?></span>
							<span class="month"><?php echo $months[$month]; ?></span>
							<span class="year"><?php //echo $year; ?></span>
						</span>
					</p>
					<h2>
						<?php
							echo anchor("article/".$url_title, $title, array('title' => $title));
						?>
					</h2>
					<div class="summary">
						<?php
							echo $teaser;
						?>
					</div>
					<?php
						if($thumb){
							echo anchor("article/".$url_title, $thumb, array('title' => $title));
						}
					?>
				</article>
			<?php
				endforeach; 
				endif;
			?>
			<?php echo anchor('articles','All articles', array('title'=>'All articles','class'=>'all_articles btn')); ?>
		</div><!--COL 1-->
	</div><!--content-->
</div><!--content_wrapp-->