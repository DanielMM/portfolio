<div id="content_wrapp">
	<div id="content">
		<article id="personal_info">
			<h1 class="section_heading">Send me a message</h1>
			<p>Feel free to contact me if you think I could add value to your future project or maybe you want to get feedback on your latest work or even if you just want to say hello! </p>
			<section id="contact_form">
				<?php
					echo form_open('contact/sendmessage');
					echo form_label('What is your Name', 'name');
					echo form_error('name'); 
					echo form_input(array('name'=>"name",'value'=>set_value('name'), 'placeholder'=>"Your name"));
					echo form_label('What is your Email', 'email'); 
					echo form_error('email');
					echo form_input(array('name'=>"email",'value'=>set_value('email'), 'placeholder'=>"Your email address"));
					echo form_label('What do you want to tell me', 'message'); 
					echo form_error('message');
					echo form_textarea(array('name'=>"message",'value'=>set_value('message'), 'placeholder'=>"Your message to me",'rows'=>"15",'cols'=>"52"));
					echo form_submit('submit', 'Send');
					echo form_close();
				?>
					
					<?php
						if(isset($feedback) && $feedback):
					?>
					<div id="feedback" class="success">
						<span class="success"><?php echo $success;?></span>
					</div>
					<?php elseif(isset($feedback) && !$feedback): ?>
					<div id="feedback" class="error">
						<span class="error"><?php echo $error;?></span>
					</div>
					<?php endif; ?>
			</section>
		</article>
		<aside class="sidebar">
			<article id="personal_info" class="widget" >
				<section class="personal_portrait">
					<h4 class="section_heading">always smiling</h4>
					<img src="<?php echo asset_url('img');  ?>daniel_mois.jpg" title="Daniel Mois - Web developer" alt="Daniel Mois - Web developer" width="220" height="298" />
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