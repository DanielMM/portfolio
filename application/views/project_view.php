		<div id="wrapper">
			<section id="main">
				<div id="project">
					<img class="thumb" src="<?php echo asset_url('img'); ?>img.png" alt="<?php if(isset($title)){	echo $title;	}?>" title="<?php if(isset($title)){	echo $title;	}?>" height="170" width="170" />
					<h1 title="<?php if(isset($title)){echo $title;}?>">
						<?php
							//Title should not be retrived from the URL, but instead from the DB and set as the title
							if(isset($title)){
								echo str_replace("-"," ",$title);
							}
						?>
					</h1>
					<ul class="project_details">
						<li class="category">Category</li>
						<li class="client">Client</li>
						<li class="link">Link</li>
					</ul>
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
				</div>
			</section>
			<aside id="sidebar">
				<div id="related" class="widget">
					<h3>Related</h3>
					<ul>
						<li>2</li>
						<li>3</li>
						<li>5</li>
						<li>4</li>
					</ul>
				</div>
				<div id="categories" class="widget">
					<h3>Categories</h3>
					<ul>
						<li><a href="<?php echo site_url(); ?>project/category/cms">CMS</a><span class="count">3</span></li>
						<li><a href="#">Lorem ipsum dolor</a><span class="count">2</span></li>
						<li><a href="#">Lorem ipsum dolor</a><span class="count">1</span></li>
						<li><a href="#">Lorem ipsum dolor</a><span class="count">0</span></li>
					</ul>
				</div>
			</aside>
		</div>