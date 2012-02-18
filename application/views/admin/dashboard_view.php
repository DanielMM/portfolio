<div id="content_wrapp">
	<div id="content">
		<article class="dashboard">
			<section id="tabs" class="main">
				<ul>
					<li><a href="#tabs-1">Drafts <?php if(isset($drafts_count)){echo '('.$drafts_count.')';}?></a></li>
					<li><a href="#tabs-2">Unpublished <?php if(isset($unpublished_count)){echo '('.$unpublished_count.')';}?></a></li>
					<li><a href="#tabs-3">Published <?php if(isset($published_count)){echo '('.$published_count.')';}?></a></li>
					<li><a href="#tabs-4">Featured <?php if(isset($featured_count)){echo '('.$featured_count.')';}?></a></li>
				</ul>
				<article id="tabs-1" class="draft list">
				<?php
					if(isset($drafts)):
						
						foreach($drafts as $post): 
						
						$title = str_replace("_"," ",$post->post_title);
						$date = explode("-",$post->post_date);
						$year = $date[0];
						$month = get_month($date[1],'short');
						$day =	substr($date[2],0,2);
						$url_title = url_title($post->post_title,"underscore");
				?>
					<section class="item">
						<h2>
							<?php
								if($post->post_category == 'project'){
									echo anchor("project/".$url_title, $title, array('title' => $title, "target"=>"_blank"));
								}else{
									echo anchor("article/".$url_title, $title, array('title' => $title, "target"=>"_blank"));
								}
							?>
						</h2>
						<p class="controles">
							<?php
								echo anchor("admin/edit/".$url_title,"Edit", array("class"=>"btn edit"));
							?>
						</p>
						<footer>
							<p class="post_info">
								<span class="date">
									
									<span class="day"><?php echo $day; ?></span>
									<span class="month"><?php echo $month; ?></span>
									<span class="year"><?php echo $year; ?></span>
								
								</span>
								<span class="category"><?php echo $post->post_category; ?></span>
							</p>
						</footer>
					</section>
					<?php
						endforeach; 
						else:
					?>
					<p>No posts</p>
					<?php
						endif;
					?>
				</article>
				<article id="tabs-2"  class="unpublished list">
					<?php
					if(isset($unpublished)):
						
						foreach($unpublished as $post): 
						
						$title = str_replace("_"," ",$post->post_title);
						$date = explode("-",$post->post_date);
						$year = $date[0];
						$month = get_month($date[1],'short');
						$day =	substr($date[2],0,2);
						$url_title = url_title($post->post_title,"underscore");
				?>
					<section class="item">
						<h2>
							<?php
								if($post->post_category == 'project'){
									echo anchor("project/".$url_title, $title, array('title' => $title, "target"=>"_blank"));
								}else{
									echo anchor("article/".$url_title, $title, array('title' => $title, "target"=>"_blank"));
								}
							?>
						</h2>
						<p class="controles">
							<?php
								echo anchor("admin/edit/".$url_title,"Edit", array("class"=>"btn edit"));
							?>
						</p>
						<footer>
							<p class="post_info">
								<span class="date">
									
									<span class="day"><?php echo $day; ?></span>
									<span class="month"><?php echo $month; ?></span>
									<span class="year"><?php echo $year; ?></span>
								
								</span>
								<span class="category"><?php echo $post->post_category; ?></span>
							</p>
						</footer>
					</section>
					<?php
						endforeach; 
						else:
					?>
					<p>No posts</p>
					<?php
						endif;
					?>
				</article>
				<article id="tabs-3"  class="published list">
					<?php
					if(isset($published)):
						
						foreach($published as $post): 
						
						$title = str_replace("_"," ",$post->post_title);
						$date = explode("-",$post->post_date);
						$year = $date[0];
						$month = get_month($date[1],'short');
						$day =	substr($date[2],0,2);
						$url_title = url_title($post->post_title,"underscore");
				?>
					<section class="item">
						<h2>
							<?php
								if($post->post_category == 'project'){
									echo anchor("project/".$url_title, $title, array('title' => $title, "target"=>"_blank"));
								}else{
									echo anchor("article/".$url_title, $title, array('title' => $title, "target"=>"_blank"));
								}
							?>
						</h2>
						<p class="controles">
							<?php
								echo anchor("admin/edit/".$url_title,"Edit", array("class"=>"btn edit"));
							?>
						</p>
						<footer>
							<p class="post_info">
								<span class="date">
									
									<span class="day"><?php echo $day; ?></span>
									<span class="month"><?php echo $month; ?></span>
									<span class="year"><?php echo $year; ?></span>
								
								</span>
								<span class="category"><?php echo $post->post_category; ?></span>
							</p>
						</footer>
					</section>
					<?php
						endforeach; 
						else:
					?>
					<p>No posts</p>
					<?php
						endif;
					?>
				</article>
				<article id="tabs-4"  class="featured list">
					<?php
					if(isset($featured)):
						
						foreach($featured as $post): 
						
						$title = str_replace("_"," ",$post->post_title);
						$date = explode("-",$post->post_date);
						$year = $date[0];
						$month = get_month($date[1],'short');
						$day =	substr($date[2],0,2);
						$url_title = url_title($post->post_title,"underscore");
				?>
					<section class="item">
						<h2>
							<?php
								if($post->post_category == 'project'){
									echo anchor("project/".$url_title, $title, array('title' => $title, "target"=>"_blank"));
								}else{
									echo anchor("article/".$url_title, $title, array('title' => $title, "target"=>"_blank"));
								}
							?>
						</h2>
						<p class="controles">
							<?php
								echo anchor("admin/edit/".$url_title,"Edit", array("class"=>"btn edit"));
							?>
						</p>
						<footer>
							<p class="post_info">
								<span class="date">
									
									<span class="day"><?php echo $day; ?></span>
									<span class="month"><?php echo $month; ?></span>
									<span class="year"><?php echo $year; ?></span>
								
								</span>
								<span class="category"><?php echo $post->post_category; ?></span>
							</p>
						</footer>
					</section>
					<?php
						endforeach; 
						else:
					?>
					<p>No posts</p>
					<?php
						endif;
					?>
				</article>
			</section>
			<section class="sidebar">
				
			</section><!--sidebar-->

		</article><!--main-->

	</div><!--content-->

</div><!--content_wrapp-->