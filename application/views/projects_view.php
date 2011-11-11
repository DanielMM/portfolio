<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
	<div id="content_wrapp">
		<div id="content">
			<section id="intro">
				<h1 class="section_heading">Hey there and welcome to my portfolio!</h1>
				<p>
					Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis. Sollicitudin viverra, vel varius eget sit mollis. Commodo enim aliquam suspendisse tortor cum diam, commodo facilisis, rutrum et duis nisl porttitor, vel eleifend odio ultricies ut, orci in adipiscing felis velit nibh. Consectetuer porttitor feugiat vestibulum sit feugiat, voluptates dui eros libero. Etiam vestibulum at lectus.
					Donec vivamus. Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec, tempor cursus vitae sit aliquet neque purus.
				</p>
			</section>
				<section id="projects">
					<h1 class="section_heading">Projects</h1>
					<ul>
						<li class="first">
							<a href="<?php echo site_url('project/second'); ?>" title="">
								<img class="thumb" src="<?php echo asset_url('img'); ?>img.png" alt="" title="" height="170" width="170" />
							</a>
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
						</li>
						<li>
							<a href="" title="">
								<img class="thumb" src="<?php echo asset_url('img'); ?>img.png" alt="" title="" height="170" width="170" />
							</a>
							<h2>
							<?php
								echo anchor("", "Lorem ipsum dolor sit amet, lugens quia", 'title=""');
							?>
							</h2>
							<p>
								Lorem ipsum dolor sit amet, lugens quia quod non coepit. Adhibitis amor ea rege quem est amet coram me, quique non dum miror puella. Famulus sui Care genitorem ipsam consistit ait Cumque materia amicis in. Habere matrem Domini in modo. Diana praesentatis ne videret famis libet regio hinc ad quia iuvenis ut libertatem petitiones tulit. Admiratur filiam vel ita ideo illa eius est in. Amen ad suis alteri ad suis alteri formam. Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.
								<span class="read_more"><a href="" title="">Continue &raquo;</a></span>
							</p>
						</li>
						<li>
							<a href="" title="">
								<img class="thumb" src="<?php echo asset_url('img'); ?>img.png" alt="" title="" height="170" width="170" />
							</a>
							<h2>
							<?php
									echo anchor("", "Lorem ipsum dolor sit amet, lugens quia", 'title=""');
							?>
							</h2>
							<p>
								Lorem ipsum dolor sit amet, lugens quia quod non coepit. Adhibitis amor ea rege quem est amet coram me, quique non dum miror puella. Famulus sui Care genitorem ipsam consistit ait Cumque materia amicis in. 
								<span class="read_more"><a href="" title="">Continue &raquo;</a></span>
							</p>
						</li>
						<li class="last">
							<a href="" title="">
								<img class="thumb" src="<?php echo asset_url('img'); ?>img.png" alt="" title="" height="170" width="170" />
							</a>
							<h2>
							<?php
									echo anchor("", "Lorem ipsum dolor sit amet, lugens quia", 'title=""');
							?>
							</h2>
							<p>
								Lorem ipsum dolor sit amet, lugens quia quod non coepit. Adhibitis amor ea rege quem est amet coram me, quique non dum miror puella. Famulus sui Care genitorem ipsam consistit ait Cumque materia amicis in. Habere matrem Domini in modo. Diana praesentatis ne videret famis libet regio hinc ad quia iuvenis ut libertatem petitiones tulit. 
								<span class="read_more"><a href="" title="">Continue &raquo;</a></span>
							</p>
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
				</section>
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