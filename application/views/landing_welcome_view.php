<div id="content_wrapp">
	<div id="content">
		<article>
			<p>Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.</p>
		</article>
		<div id="slider">
			<div id="slides">
				<div class="slides_container">
					<div class="slide">
						<a href="" title=""><img src="<?php echo asset_url('img'); ?>slides/slide-1.jpg" alt="Slide 1"></a>
						<div class="caption" style="bottom:0">
							<p>Happy Bokeh Thursday!<span>more &raquo;</span></p>
							
						</div>
					</div>
					<div class="slide">
						<a href="#" title=""><img src="<?php echo asset_url('img'); ?>slides/slide-2.jpg" alt="Slide 2"></a>
						<div class="caption">
							<p>Taxi</p>
						</div>
					</div>
					<div class="slide">
						<a href="#" title=""><img src="<?php echo asset_url('img'); ?>slides/slide-3.jpg" alt="Slide 3"></a>
						<div class="caption">
							<p>Happy Bokeh raining Day</p>
						</div>
					</div>
					<div class="slide">
						<a href="#" title=""><img src="<?php echo asset_url('img'); ?>slides/slide-4.jpg" alt="Slide 4"></a>
						<div class="caption">
							<p>We Eat Light</p>
						</div>
					</div>
				</div>
			</div><!--slides-->
		</div><!--slider-->
		<span class="spacer"></span>
		<aside>
			<ul>
				<li>
					<h4>Web</h4>
					<?php
						$img = "<img src=\"". asset_url('img')."car.jpg\"  width=\"240\" height=\"100\" />";
					?>
					<?php echo anchor('project/category/websites',$img,'title="Websites"'); ?>
					<h6>View the projects that I've done on the web and a detailed insight on how they came to life.</h6>
				</li>
				<li class="space">
					<h4>Concepts</h4>
					<?php
						$img = "<img src=\"". asset_url('img')."light.jpg\"  width=\"240\" height=\"100\" />";
					?>
					<?php echo anchor('project/category/concepts',$img,'title="Concepts"'); ?>
					<h6>A collection of  concepts and ideas that I've been working on in my spare time in different stages of development and evolution.</h6>
				</li>
				<li class="space">
					<h4>Articles</h4>
					<?php
						$img = "<img src=\"". asset_url('img')."church.jpg\"  width=\"240\" height=\"100\" />";
					?>
					<?php echo anchor('blog',$img,'title="Articles"'); ?>
					<h6>Articles that I have written on web related topics in regards to theory and practice and how to successfuly mix the two.</h6>
				</li>
			</ul>
		</aside>
	</div><!--content-->
</div><!--content_wrapp-->