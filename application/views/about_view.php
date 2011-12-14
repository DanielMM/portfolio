<div id="content_wrapp">
	<div id="content">
		<article id="personal_info">
			<h1 class="section_heading">A few words about the person behind these words!</h1>
			<p>I am <?php echo $age; ?> and I love to design and develop. </p>
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
				<section class="hcard">
					<h4 class="section_heading">Download <span class="lowcase">vCard</span></h4>
					<div id="hcard-Daniel-Mois" class="vcard">
						<?php echo anchor("http://www.danielmois.com","Daniel Mois",array('class'=>"url fn",'title'=>"Daniel Mois")) ;?>
						<?php echo safe_mailto('daniel@danielmois.com','daniel@danielmois.com',array('class'=>"email",'title'=>"Email to Daniel Mois")) ;?>
						<div class="adr">
							<span class="locality">Aarhus</span>
							<span class="postal-code">8260</span>,
							<span class="country-name">Denmark</span>
						</div>
						<div class="tel">(+45) 60 61 79 57</div>
						<?php
							echo anchor('http://www.wikipedia.org/wiki/VCard',"Find more about vCard !",array('class'=>"find_more"));
						?>
					</div>
					<div class="vcard_download">
						<?php
							$vcard = "<img src=".asset_url('img')."vcard_download.png"." width=\"48\" height=\"48\" alt=\"vCard icon\" title=\"Daniel Mois vCard\" />";
							$vcard .= "<span class=\"bt_text\">Download vCard</span>";
							$vcard .= "<span class=\"arrow\">;</span>";
							echo anchor("download/file/daniel_mois.vcf",$vcard,array('title'=>"Download my vCard as a VCF file",'class'=>"download"));
						?>
					</div>
				</section>
			</article>
		</aside>
	</div>
</div>