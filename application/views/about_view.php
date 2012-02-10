<div id="content_wrapp">
	<div id="content">
		<section class="main about">
			<h1 class="col_title">About myself</h1>
			<section id="personal_info">
				<p>I am <?php echo $age; ?> and I love to design and develop. </p>
				<p>Websites have been in the focus of my profession for more than 7 years now and in the past 3, I have been concentrating on developing web applications. Started with front end and static web pages, but quickly found a pleasure in developing the dynamic back end of more complex projects
	using PHP and MySQL. Complexity ranging from basic blogging systems to custom CMS platforms designed and built from the ground up.
				</p>
			</section>
			<section id="skills">
				<h2>Web development skills</h2>
				<dl>
					<dt>HTML5</dt>
					<dd><span class="score">9/10</span><ul class="rating"><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li></li></ul></dd>
					<dt>CSS</dt>
					<dd><span class="score">9/10</span><ul class="rating"><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li></li></ul></dd>
					<dt>jQuery</dt>
					<dd><span class="score">7/10</span><ul class="rating"><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li></li><li></li><li></li></ul></dd>
					<dt>PHP</dt>
					<dd><span class="score">9/10</span><ul class="rating"><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li></li></ul></dd>
					<dt>SQL</dt>
					<dd><span class="score">7/10</span><ul class="rating"><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li class="fill"></li><li></li><li></li><li></li></ul></dd>
				</dl>
			</section>
			<section id="toolkit">
				<h2>Web development tools</h2>
				<dl>
					<dt><img src="<?php echo asset_url('img');  ?>ubuntu.png" title="Ubuntu" alt="Ubuntu" width="48" height="48" /></dt><dd>Ubuntu</dd>
					<dt><img src="<?php echo asset_url('img');  ?>sublimetext2.png" title="Sublime Text 2" alt="Sublime Text 2" width="48" height="48" /></dt><dd>Sublime Text 2</dd>
					<dt><img src="<?php echo asset_url('img');  ?>git.png" title="GIT" alt="GIT" width="48" height="48" /></dt><dd>Git</dd>
					<dt><img src="<?php echo asset_url('img');  ?>chromium.png" title="Chromium" alt="Chromium" width="48" height="48" /></dt><dd>Chromium</dd>
					<dt><img src="<?php echo asset_url('img');  ?>pma.png" title="phpMyAdmin" alt="phpMyAdmin" width="48" height="48" /></dt><dd>phpMyAdmin</dd>
				</dl>
			</section>
			<section id="keypoints">
				<h2>Keypoints about the my work experience</h2>
				<ul>
					<li>Looking for more complex and challenging projects to put in practice the gained experience</li>
					<li>Focused on details and continuous improvements of user experience</li>
					<li>Avid feedback provider and team member with a passion for discussion and debates</li>
					<li>A deep understanding of the gap between the developers, management and stakeholders</li>
					<li>Big fan on agile development</li>
				</ul>
			</section>
			<section>
				<h2>When away from the keyboard</h2>
				<p>Web development is what I love to do, but when I need to take a break from it, I like to do others things like photography, reading, DIY projects or hiking in the forest, just to name a few. On the opposite side of my love for technology, lays the love for cooking, which can only be explained by my wish to always create new things.
				
				</p>
			</section>
		</section><!--main-->
		<aside class="sidebar">
			<article class="widget" >
				<section class="personal_portrait">
					<h3 class="col_title">always smiling</h3>
					<img src="<?php echo asset_url('img');  ?>daniel_mois.jpg" title="Daniel Mois - Web developer" alt="Daniel Mois - Web developer" width="230" height="312" />
				</section>
				
				<section class="cv">
					<h3 class="col_title">Download CV</h3>
						<?php
							$cv_pdf = "<img src=".asset_url('img')."pdf_file.png"." width=\"32\" height=\"32\" alt=\"PDF icon\" title=\"Daniel Mois CV\" />";
							$cv_pdf .= "<span class=\"bt_text\">Download CV</span>";
							$cv_pdf .= "<span class=\"arrow\">;</span>";
							echo anchor("download/file/daniel_mois_cv.pdf",$cv_pdf,array('title'=>"Download my cv as a PDF file",'class'=>"download"));
						?>
				</section>
			</article>
		</aside><!--sidebar-->
	</div><!--content-->
</div><!--content_wrapp-->