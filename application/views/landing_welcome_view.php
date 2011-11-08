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
							<p>Happy Bokeh Thursday!</p>
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
						$img = "<img src=\"http://localhost/portfolio/assets/images/img.png\" width=\"300\" height=\"110\" />";
					?>
					<?php echo anchor('project/category/websites',$img ,'title="websites"'); ?>
					<p>Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.</p>
				</li>
				<li class="space">
					<h4>Concepts</h4>
					<?php echo anchor('project/category/concepts','concepts','title="concepts"'); ?>
					<p>Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.</p>
				</li>
				<li class="space">
					<h4>Articles</h4>
					<?php echo anchor('blog/articles','articles','title="Articles"'); ?>
					<p>Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.</p>
				</li>
			</ul>
		</aside>
	</div><!--content-->
</div><!--content_wrapp-->