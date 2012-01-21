<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div id="content_wrapp">
	<div id="content">
		<section class="main list">
			<!--<h1 class="section_heading"><?php echo $page_title; ?></h1>-->
			<h1 class="col_title">Blog</h1>
			<?php 
				foreach($articles as $article): 
			
				$title = str_replace("_"," ",$article->post_title);
				$date = explode("-",$article->post_date);
				$year = $date[0];
				$month = $date[1];
				$day =	substr($date[2],0,2);
				$url_title = url_title($article->post_title,"underscore");
				
				$thumb = $article->post_thumb;
				$thumb = "<img class=\"thumb\" src=".asset_url('img').$thumb." width=\"170\" height=\"170\" alt=\"{$title}\" title=\"{$title}\" />";
				$teaser = $article->post_teaser;
			?>
				<article class="<?php echo $article->post_category; ?>">
					<h1>
						<?php
							echo anchor("blog/".$url_title, $title, array('title' => $title));
						?>
					</h1>
					<p class="post_info">
						<span class="category"><?php echo $article->post_category; ?></span>
						<span class="date">
							<span class="month"><?php echo $months[$month]; ?></span>
							<span class="day"><?php echo $day; ?></span>
							<span class="year"><?php echo $year; ?></span>
						</span>
						<span class="comm_count">3<?php //echo $comm_count; ?> comments</span>
					</p>
					<?php
						echo anchor("blog/".$url_title, $thumb, array('title' => $title,'class'=>"thumb"));
					?>
					<div class="summary">
						<?php
							echo $teaser;
						?>
					</div>
					<footer>
						<?php echo anchor("blog/".$url_title, "Continue &raquo;",array('title' => "Continue reading ".strtolower($title), 'class'=>"read_more"));?>
					</footer>
				</article>
			<?php endforeach; ?>

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