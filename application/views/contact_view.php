<div id="content_wrapp">
	<div id="content">
		<article id="personal_info">
			<h1 class="section_heading">Send me a message</h1>
			<p>
				Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.
			</p>
		</article>
		<aside class="sidebar">
			<article id="personal_info" class="widget" >
				<section class="personal_portrait">
					<h4 class="section_heading">smiling always</h4>
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
			</article>
		</aside>
	</div>
</div>