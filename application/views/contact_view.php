<div id="content_wrapp">
	<div id="content">
		<section class="main">
			<h1 class="col_title">Contact - Send me a message</h1>
			<p>Feel free to contact me if you think I could add value to your future project or maybe you want to get feedback on your latest work or even if you just want to say hello! </p>
			<section id="contact_form">
				<?php
					echo form_open('contact/sendmessage');
					echo form_label('What is your Name', 'name');
					echo form_error('name'); 
					echo form_input(array('name'=>"name",'value'=>set_value('name'),'id'=>'name', 'placeholder'=>"Your name"));
					echo form_label('What is your Email', 'email'); 
					echo form_error('email');
					echo form_input(array('name'=>"email",'value'=>set_value('email'),'id'=>'email', 'placeholder'=>"Your email address"));
					echo form_label('What do you want to tell me', 'message'); 
					echo form_error('message');
					echo form_textarea(array('name'=>"message",'value'=>set_value('message'),'id'=>'message' , 'placeholder'=>"Your message to me",'rows'=>"12",'cols'=>"52"));
					echo form_submit(array("name"=>"submit", "value"=>"Send", "class"=>"btn"));
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
		</section><!--main-->
		<aside class="sidebar">
			<article id="personal_info" class="widget" >
				<section class="personal_portrait">
					<h3 class="col_title">always smiling</h3>
					<img src="<?php echo asset_url('img');  ?>daniel_mois.jpg" title="Daniel Mois - Web developer" alt="Daniel Mois - Web developer" width="230" height="312" />
				</section>
				<section class="vcard">
					<h3 class="col_title">Download <span class="lowcase">vCard</span></h3>
					<div class="vcard_download">
						<?php
							$vcard = "<img src=".asset_url('img')."vcard_download.png"." width=\"48\" height=\"48\" alt=\"vCard icon\" title=\"Daniel Mois vCard\" />";
							$vcard .= "<span class=\"bt_text\">Download vCard</span>";
							$vcard .= "<span class=\"arrow\">;</span>";
							echo anchor("download/file/daniel_mois.vcf",$vcard,array('title'=>"Download my vCard as a VCF file",'class'=>"download"));
						?>
					</div>
					<div id="hcard-Daniel-Mois" class="vcard">
						<?php //echo anchor("http://www.danielmois.com","Daniel Mois",array('class'=>"url fn",'title'=>"Daniel Mois")) ;?>
						<div class="fn organization">Daniel Mois</div>
						<div class="role">Web Developer</div>
						<?php echo safe_mailto('daniel@danielmois.com','daniel@danielmois.com',array('class'=>"email",'title'=>"Email to Daniel Mois")) ;?>
						<div class="adr">
							<span class="location">Aarhus</span>
							<span class="postal-code">8260</span>,
							<span class="country-name">Denmark</span>
						</div>
						<div class="tel">(+45) 60 61 79 57</div>
						<?php
							echo anchor('http://www.wikipedia.org/wiki/VCard',"Find out more about vCard !",array('class'=>"find_more"));
						?>
					</div>
				</section>
			</article>
		</aside><!--sidebar-->
	</div><!--content-->
</div><!--content_wrapp-->