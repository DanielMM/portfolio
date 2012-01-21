	<div id="content_wrapp">
	<div id="content">
		<article id="featured">
			<div class="slider">
				<!-- <img src="img/new-ribbon.png" width="112" height="112" alt="New Ribbon" id="ribbon"> -->
				<div class="slides">
					<div class="slides_container">
						<?php 
							if(isset($projects)):
								foreach($projects as $project):
									$title = str_replace("_"," ",$project->post_title);
									//$date = explode("-",$project->post_date);
									$url_title = url_title($project->post_title,"underscore");
									
									$thumb = $project->post_thumb;
									$thumb = "<img class=\"thumb\" src=".asset_url('img').$thumb." width=\"550\" height=\"280\" alt=\"{$title}\" title=\"{$title}\" />";
									$link = "<span class=\"bt_text\">More details</span>";
									$link .= "<span class=\"arrow\">)</span>";
						?>			
									<section>
										<div class="caption">
											<h1>
												<?php echo anchor("project/".$url_title, $title, array('title' => $title));?>
											</h1>
											<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore.</h2>
											<?php echo anchor("project/".$url_title,$link,array('title' => $title,'class'=>"download")); ?>
										</div>
										<?php echo anchor("project/".$url_title, $thumb, array('title' => $title));?>
									</section>
						<?php
								endforeach;
							endif;
						?>
						<!-- <section>
							<div class="caption">
								<h1><a href="http://portfolio/project/Portfolio_in_CodeIgniter" title="Portfolio in CodeIgniter">Portfolio in CodeIgniter in 14 days one week</a></h1>
								<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</h2>
								<?php
									//$link = "<span class=\"bt_text\">More details</span>";
									//$link .= "<span class=\"arrow\">)</span>";
									//echo anchor("download/file/daniel_mois_cv.pdf",$link,array('title'=>"Download my cv as a PDF file",'class'=>"download"));
								?>
							</div>
							<a href="http://portfolio/project/Portfolio_in_CodeIgniter" title="Portfolio in CodeIgniter"><img class="thumb" src=http://portfolio/assets/images/project_3.jpg width="550" height="280" alt="Portfolio in CodeIgniter" title="Portfolio in CodeIgniter" /></a>
						</section> -->
					</div>
					<a href="#" class="prev">(</a>
					<a href="#" class="next">)</a>
				</div>
			</div>
			<section class="punchline">
				<hgroup>
					<!--<h1>I make websites run as smooth as they look!</h1>
					<h2>I make it happen with my hands under the hood!</h2>-->
					
				</hgroup>
			</section>
		</article>
		<article class="col list">
			<h1 class="col_title">Tutorials</h1>
			<?php 
				if(isset($tutorials)):
					foreach($tutorials as $tutorial): 
				
					$title = str_replace("_"," ",$tutorial->post_title);
					$date = explode("-",$tutorial->post_date);
					$year = $date[0];
					$month = $date[1];
					$day =	substr($date[2],0,2);
					$url_title = url_title($tutorial->post_title,"underscore");
					
					$thumb = $tutorial->post_thumb;
					$thumb = "<img class=\"thumb\" src=".asset_url('img').$thumb." width=\"272\" height=\"170\" alt=\"{$title}\" title=\"{$title}\" />";
					$teaser = $tutorial->post_teaser;

			?>
				<section class=<?php echo $tutorial->post_category; ?>>
					<h2>
						<?php
							echo anchor("blog/".$url_title, $title, array('title' => $title));
						?>
					</h2>
					<p class="meta">
						<span class="category"><?php echo $tutorial->post_category; ?></span>
						<span class="date">
							<span class="day"><?php echo $day; ?></span>
							<span class="month"><?php echo $months[$month]; ?></span>
							<span class="year"><?php echo $year; ?></span>
						</span>
					</p>
					<?php
						echo anchor("blog/".$url_title, $thumb, array('title' => $title));
					?>
					<div class="summary">
						<?php
							echo $teaser;
						?>
					</div>
					<footer>
						<a href="#" class="author">by Daniel Mois</a>
						<?php echo anchor("blog/".$url_title, "Continue &raquo;",array('title' => "Continue reading ".strtolower($title), 'class'=>"read_more"));?>
					</footer>
				</section>
			<?php
				endforeach; 
				endif;
			?>
		</article><!--COL 1-->

		<article class="col list">
			<h1 class="col_title">Quicktips</h1>
			<?php 
				if(isset($quicktips)):
					foreach($quicktips as $quicktip): 
				
					$title = str_replace("_"," ",$quicktip->post_title);
					$date = explode("-",$quicktip->post_date);
					$year = $date[0];
					$month = $date[1];
					$day =	substr($date[2],0,2);
					$url_title = url_title($quicktip->post_title,"underscore");
					
					$thumb = $quicktip->post_thumb;
					$thumb = "<img class=\"thumb\" src=".asset_url('img').$thumb." width=\"272\" height=\"170\" alt=\"{$title}\" title=\"{$title}\" />";
					$teaser = $quicktip->post_teaser;

			?>
				<section class=<?php echo $quicktip->post_category; ?>>
					<h2>
						<?php
							echo anchor("blog/".$url_title, $title, array('title' => $title));
						?>
					</h2>
					<p class="meta">
						<span class="category"><?php echo $quicktip->post_category; ?></span>
						<span class="date">
							<span class="day"><?php echo $day; ?></span>
							<span class="month"><?php echo $months[$month]; ?></span>
							<span class="year"><?php echo $year; ?></span>
						</span>
					</p>
					<?php
						echo anchor("blog/".$url_title, $thumb, array('title' => $title));
					?>
					<div class="summary">
						<?php
							echo $teaser;
						?>
					</div>
					<footer>
						<a href="#" class="author">by Daniel Mois</a>
						<?php echo anchor("blog/".$url_title, "Continue &raquo;",array('title' => "Continue reading ".strtolower($title), 'class'=>"read_more"));?>
					</footer>
				</section>
			<?php
				endforeach; 
				endif;
			?>
		</article><!--COL 2-->

		<article class="col list">
			<h1 class="col_title">Questions</h1>
				<?php 
					if(isset($questions)):
						foreach($questions as $question): 
					
						$title = str_replace("_"," ",$question->post_title);
						$date = explode("-",$question->post_date);
						$year = $date[0];
						$month = $date[1];
						$day =	substr($date[2],0,2);
						$url_title = url_title($question->post_title,"underscore");
						
						$thumb = $question->post_thumb;
						$thumb = "<img class=\"thumb\" src=".asset_url('img').$thumb." width=\"272\" height=\"170\" alt=\"{$title}\" title=\"{$title}\" />";
						$teaser = $question->post_teaser;

				?>
					<section class=<?php echo $question->post_category; ?>>
						<h2>
							<?php
								echo anchor("blog/".$url_title, $title, array('title' => $title));
							?>
						</h2>
						<p class="meta">
							<span class="category"><?php echo $question->post_category; ?></span>
							<span class="date">
								<span class="day"><?php echo $day; ?></span>
								<span class="month"><?php echo $months[$month]; ?></span>
								<span class="year"><?php echo $year; ?></span>
							</span>
						</p>
						<?php
							echo anchor("blog/".$url_title, $thumb, array('title' => $title));
						?>
						<div class="summary">
							<?php
								echo $teaser;
							?>
						</div>
						<footer>
							<a href="#" class="author">by Daniel Mois</a>
							<?php echo anchor("blog/".$url_title, "Continue &raquo;",array('title' => "Continue reading ".strtolower($title), 'class'=>"read_more"));?>
						</footer>
					</section>
				<?php
					endforeach; 
					endif;
				?>
		</article><!--COL 3-->

		<script>
			$(function(){
				$('.slides').slides({
					preload: true,
					preloadImage: '../assets/images/loading.gif',
					play: 6000,
					pause: 2500,
					hoverPause: true,
					generateNextPrev: false
				});
			});
		</script>
	</div><!--content-->
</div><!--content_wrapp-->