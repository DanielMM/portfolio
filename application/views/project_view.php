<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div id="content_wrapp">
	<div id="content">
		<article class="project">
			<img class="thumb" src="<?php echo asset_url('img'); ?>img.png" alt="<?php if(isset($title)){	echo $title;	}?>" title="<?php if(isset($title)){	echo $title;	}?>" height="170" width="170" />
			<section class="project_header">
				<div class="date"><span class="day">16</span> <span class="month">0ct</span><span class="year">2011</span><span class="ribbon"></span></div>
				<section class="project_title">
					<h1 title="<?php if(isset($title)){echo $title;}?>">
						<?php
							//Title should not be retrived from the URL, but instead from the DB and set as the title
							if(isset($title)){
								echo str_replace("-"," ",$title);
							}
						?>
					</h1>
				</section>
				<section class="project_meta">
					<dl>
						<dt class="category">Link:</dt>
							<dd>http://www.example.com</dd>
						<dt class="client">Client:</dt>
							<dd>Example Ltd. Co</dd>
						<dt class="link">Category:</dt>
							<dd>CMS</dd>
						<dt class="link">Tags:</dt>
							<dd>
								
								<span class="tag"><?php echo anchor('project/tags/HTML5','HTML5','title="HTML5"'); ?></span>
								<span class="tag"><?php echo anchor('project/tags/PHP','PHP','title="HTML5"'); ?></span>
								<span class="tag"><?php echo anchor('project/tags/MySQL','MySQL','title="HTML5"'); ?></span>
								<span class="tag"><?php echo anchor('project/tags/jQuery','jQuery','title="HTML5"'); ?></span>
							</dd>
					</dl>
				</section>
			</section>
			<section class="project_body">
				<p>
					Lorem ipsum dolor sit amet, lugens quia quod non coepit. Adhibitis amor ea rege quem est amet coram me, quique non dum miror puella. 
				</p>
				<p>Famulus sui Care genitorem ipsam consistit ait Cumque materia amicis in. Habere matrem Domini in modo. Diana praesentatis ne videret famis libet regio hinc ad quia iuvenis ut libertatem petitiones tulit. Admiratur filiam vel ita ideo illa eius est in. Amen ad suis alteri ad suis alteri formam. Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.</p>
				<p>	
					Lorem ipsum dolor sit amet, lugens quia quod non coepit. Adhibitis amor ea rege quem est amet coram me, quique non dum miror puella. Famulus sui Care genitorem ipsam consistit ait Cumque materia amicis in. Habere matrem Domini in modo. Diana praesentatis ne videret famis libet regio hinc ad quia iuvenis ut libertatem petitiones tulit. Admiratur filiam vel ita ideo illa eius est in. Amen ad suis alteri ad suis alteri formam. Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.
					Me testatur in modo ad nomine Piscatore mihi servitute coniunx minus huius tuo est Apollonius. Manu duas particularis dedit beneficio uxor puella ut diem derelinquere patris Tyrius tu tu illum vero rex Dionysiadi rex! Arola iubet comprehenderent in deinde cupis hominem armatis exanimem scientiam pervenisset afferte Apollonius ut a civitas exulto haec. Remedium enim formam unitas reddere nominabat princeps ibi non ait mea Christianis aedificatur ergo est in. Scitote si non dum est se vero diam dominum vidit ad nomine, amet constanter determinatio debitis torporis quin virgo. Nescimus de ascendit neque capite diademate constituit mulier autem est cum autem est Apollonius non solutionem invenerunt.Lorem ipsum dolor sit amet, lugens quia quod non coepit. Adhibitis amor ea rege quem est amet coram me, quique non dum miror puella. Famulus sui Care genitorem ipsam consistit ait Cumque materia amicis in. Habere matrem Domini in modo. Diana praesentatis ne videret famis libet regio hinc ad quia iuvenis ut libertatem petitiones tulit. Admiratur filiam vel ita ideo illa eius est in. Amen ad suis alteri ad suis alteri formam. Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.
				</p>
				<p>
					Me testatur in modo ad nomine Piscatore mihi servitute coniunx minus huius tuo est Apollonius. Manu duas particularis dedit beneficio uxor puella ut diem derelinquere patris Tyrius tu tu illum vero rex Dionysiadi rex! Arola iubet comprehenderent in deinde cupis hominem armatis exanimem scientiam pervenisset afferte Apollonius ut a civitas exulto haec. Remedium enim formam unitas reddere nominabat princeps ibi non ait mea Christianis aedificatur ergo est in. Scitote si non dum est se vero diam dominum vidit ad nomine, amet constanter determinatio debitis torporis quin virgo. Nescimus de ascendit neque capite diademate constituit mulier autem est cum autem est Apollonius non solutionem invenerunt.
				</p>
			</section>
		</article>
		<aside class="sidebar">
			<section id="related" class="widget">
				<h3 class="section_heading">Related projects</h3>
				<ul>
					<li>
						<h3><?php echo anchor('project/example','Example of related project that is similar','title="Example of related project"'); ?></h3>
					</li>
					<li>
						<h3><?php echo anchor('project/example','Example of related project that is similar','title="Example of related project"'); ?></h3>
					</li>
					<li>
						<h3><?php echo anchor('project/example','Example of related project that is similar','title="Example of related project"'); ?></h3>
					</li>
					<li>
						<h3><?php echo anchor('project/example','Example of related project that is similar','title="Example of related project"'); ?></h3>
					</li>
				</ul>
			</section>
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