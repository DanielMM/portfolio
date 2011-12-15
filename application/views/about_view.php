<div id="content_wrapp">
	<div id="content">
		<article>
			<section id="personal_info">
				<h1 class="section_heading">Daniel - about myself and my past</h1>
				<p>I am <?php echo $age; ?> and I love to design and develop. </p>
				<p>Websites have been in the focus of my profession for more than 7 years now and in the past 3, I have been concentrating on developing web applications. Started with front end and static web pages, but quickly found a pleasure in developing the dynamic back end of more complex projects
	using PHP and MySQL. Complexity ranging from basic blogging systems to custom CMS platforms designed and built from the ground up.
				</p>
			</section>
			<section id="keypoints">
				<h2>Keypoints about the my work experience</h2>
				<ul>
					<li>Looking for more complex and challenging projects to put in practice the gained experience</li>
					<li>Focused on details and continuous improvements of user experience</li>
					<li>Avid feedback provider and team member with a passion for discussion and debates</li>
					<li>A deep understanding of the gap between the developers, management and stakeholders</li>
					<li>Learn how to deal with scaling up</li>
					<li>Big fan on agile development</li>
				</ul>
			</section>
			<section>
				<h3>When away from the keyboard</h3>
				<p>Web development is what I love to do, but when I need to take a break from it, I like to do others things like photography, reading, DIY projects or hiking in the forest, just to name a few. On the opposite side of my love for technology, lays the love for cooking, which can only be explained by my wish to always create new things.
				
				</p>
			</section>
		</article>
		<aside class="sidebar">
			<article id="personal_info" class="widget" >
				<section class="personal_portrait">
					<h4 class="section_heading">always smiling</h4>
					<img src="<?php echo asset_url('img');  ?>daniel_mois.jpg" title="Daniel Mois - Web developer" alt="Daniel Mois - Web developer" width="220" height="298" />
				</section>
				
				<section class="cv">
					<h4 class="section_heading">Download CV</h4>
						<?php
							$cv_pdf = "<img src=".asset_url('img')."pdf_file.png"." width=\"32\" height=\"32\" alt=\"PDF icon\" title=\"Daniel Mois CV\" />";
							$cv_pdf .= "<span class=\"bt_text\">Download CV</span>";
							$cv_pdf .= "<span class=\"arrow\">;</span>";
							echo anchor("download/file/daniel_mois_cv.pdf",$cv_pdf,array('title'=>"Download my cv as a PDF file",'class'=>"download"));
						?>
				</section>
				<section id="skills">
					
				</section>
			</article>
		</aside>
	</div>
</div>