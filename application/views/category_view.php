<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
		<div id="content_wrapp">
			<div id="content">
				<article id="projects">
					<h1>Category - <?php if(isset($title)){echo $title;}?></h1>
					<ul>
						<li class="first">
							<section>
								<div class="date"><span class="day">16</span> <span class="month">0ct</span><span class="year">2011</span><span class="ribbon"></span></div>
								<a href="<?php echo site_url('project/second'); ?>" title="" class="thumb">
									<img class="thumb" src="<?php echo asset_url('img'); ?>img.png" alt="" title="" height="170" width="170" />
								</a>
								<div class="summary">
									<h2>
										<?php
											$title = "Second project so on";
											$title = url_title($title);
											echo anchor("project/$title", "Second project so on", 'title="Second project so on"');
										?>
									</h2>
									<p>
										Lorem ipsum dolor sit amet, lugens quia quod non coepit. Adhibitis amor ea rege quem est amet coram me, quique non dum miror puella. Famulus sui Care genitorem ipsam consistit ait Cumque materia amicis in. Habere matrem Domini in modo. Diana praesentatis ne videret famis libet regio hinc ad quia iuvenis ut libertatem petitiones tulit. Admiratur filiam vel ita ideo illa eius est in. Amen ad suis alteri ad suis alteri formam. 
										<span class="read_more"><?php echo anchor("project/$title", "Continue &raquo;",'title="$title"');?></span>
									</p>
								</div>
							</section>
						</li>
						<li class="first">
							<section>
								<div class="date"><span class="day">16</span> <span class="month">0ct</span><span class="year">2011</span><span class="ribbon"></span></div>
								<a href="<?php echo site_url('project/second'); ?>" title="" class="thumb">
									<img class="thumb" src="<?php echo asset_url('img'); ?>img.png" alt="" title="" height="170" width="170" />
								</a>
								<div class="summary">
									<h2>
										<?php
											$title = "Second project so on";
											$title = url_title($title);
											echo anchor("project/$title", "Second project so on", 'title="Second project so on"');
										?>
									</h2>
									<p>
										Lorem ipsum dolor sit amet, lugens quia quod non coepit. Adhibitis amor ea rege quem est amet coram me, quique non dum miror puella. Famulus sui Care genitorem ipsam consistit ait Cumque materia amicis in. Habere matrem Domini in modo. Diana praesentatis ne videret famis libet regio hinc ad quia iuvenis ut libertatem petitiones tulit. Admiratur filiam vel ita ideo illa eius est in. Amen ad suis alteri ad suis alteri formam. 
										<span class="read_more"><?php echo anchor("project/$title", "Continue &raquo;",'title="$title"');?></span>
									</p>
								</div>
							</section>
						</li>
					</ul>
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
					</div>
				</article>
				<aside class="sidebar">
					<section id="categories" class="widget">
					<h3 class="section_heading">Categories</h3>
					<ul>
						<li><?php echo anchor('project/category/cms','CMS<span class="count">3</span>','title="CMS category"'); ?></li>
						<li><a href="#">Lorem ipsum dolor<span class="count">2</span></a></li>
						<li><a href="#">Lorem ipsum dolor<span class="count">1</span></a></li>
						<li><a href="#">Lorem ipsum dolor<span class="count">0</span></a></li>
					</ul>
					</section>
				</aside>
			</div>
		</div>