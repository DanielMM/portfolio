<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
		<div id="wrapper">
			<div id="main">
				<div id="projects">
					<h1 class="section_header" >Category - <?php if(isset($title)){echo $title;}?></h1>
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
				</div>
			</div>
			<div id="sidebar">
				<div id="categories" class="widget" >
					<h3>Categories</h3>
					<ul>
						<li><a href="<?php echo site_url(); ?>project/category/cms">CMS</a><span class="count">456</span></li>
						<li><a href="">Lorem ipsum dolor</a><span class="count">321</span></li>
						<li><a href="">Lorem ipsum dolor</a><span class="count">22</span></li>
						<li><a href="">Lorem ipsum dolor</a><span class="count">00</span></li>
						<li><a href="">Lorem ipsum dolor</a><span class="count">0</span></li>
					</ul>
				</div>
			</div>
		</div>