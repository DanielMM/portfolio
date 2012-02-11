<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
		<div id="footer_wrapp">
			<footer>
				<article>
					<section>
						<h4>Latest tweets</h4>
						<ul id="tweets">
							<li>
								<article>
									<h6><?php echo anchor('http://twitter.com/#!/danmois','@danmois','title="Fallow me onTwitter" target="_blank"'); ?><span>Sunday 12:34</span></h6>
									<p>Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi susp</p>
								</article>
							</li>
							<li>
								<article>
									<h6><?php echo anchor('http://twitter.com/#!/danmois','@danmois','title="Fallow me onTwitter" target="_blank"'); ?><span>5 hours ago</span></h6>
									<p>Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi susp</p>
								</article>
							</li> 
							<li>
								<article>
									<h6><?php echo anchor('http://twitter.com/#!/danmois','@danmois','title="Fallow me onTwitter" target="_blank"'); ?><span>12.10.11 16:12</span></h6>
									<p>Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi susp</p>
								</article>
							</li>
						</ul>
					</section>
					<section class="subscribe">
						<h4>Subscribe</h4>
						<?php
							echo form_open('subscribe');
							echo form_label('Enter your email address to subscribe', 'email_subscriber'); 
							echo form_error('email_subscriber');
							echo form_input(array('name'=>"email_subscriber",'value'=>set_value('email_subscriber'),'id'=>'email_subscriber' ,'placeholder'=>"Your email address"));
							echo form_hidden(array('source'=>$this->uri->uri_string()));
							echo form_submit('submit', 'Subscribe');
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
					<section>
						<h4>Things</h4>
						<ul id="favorites">
							<li>
								<?php echo anchor('http://net.tutsplus.com/','Nettuts+','title="Nettuts+" target="_blank"');?>
							</li>
							<li>
								<?php echo anchor('http://webdesign.tutsplus.com/','Webdesigntuts+','title="Webdesigntuts+" target="_blank"');?>
							</li>
							<li>
								<?php echo anchor('http://sixrevisions.com/','Six Revisions','title="Six Revisions" target="_blank"');?>
							</li>
							<li>
								<?php echo anchor('http://www.alistapart.com/','A List Apart','title="A List Apart" target="_blank"');?>
							</li>
							<li><?php echo anchor('http://37signals.com/svn','37 Signals','title="37 Signals" target="_blank"');?></li>
							<li><?php echo anchor('http://codeingniter.com','Codeigniter','title="Codeigniter" target="_blank"');?></li>
							<li><?php echo anchor('http://www.webresourcesdepot.com/','Web Resources Depot','title="Web Resources Depot" target="_blank"');?></li>
							<li><?php echo anchor('http://www.webdesignerdepot.com/','Web Designer Depot','title="Web Designer Depot" target="_blank"');?></li>
						</ul>
					</section>
					<section>
						<ul id="social_media">
							<li>
								<?php 
									$li = "<img src=".asset_url('img')."lin.png"." width=\"52\" height=\"52\" title=\"LinkedIn - Let's connect\" alt=\"LinkedIn - Let's connect\" />";
									echo anchor("http://dk.linkedin.com/in/danielmois", $li, array('title' => "LinkedIn - Let's connect",'target'=>"_blank"));
								?>
							</li>
							<li>
								<?php 
									$fb = "<img src=".asset_url('img')."face.png"." width=\"52\" height=\"52\" title=\"Facebook - Find me\" alt=\"Facebook - Find me\" />";
									echo anchor("http://www.facebook.com/moisdaniel", $fb, array('title' => "Facebook - Find me",'target'=>"_blank"));
								?>
							</li>
							<li>
								<?php 
									$tw = "<img src=".asset_url('img')."tweet.png"." width=\"52\" height=\"52\" title=\"Tweeter - Fallow me\" alt=\"Tweeter - Fallow me\" />";
									echo anchor("http://twitter.com/#!/danmois", $tw, array('title' => "Tweeter - Fallow me",'target'=>"_blank"));
								?>
							</li>
							<li>
								<?php 
									$go = "<img src=".asset_url('img')."gmail.png"." width=\"52\" height=\"52\" title=\"Google+ - Join my circles\" alt=\"Google+ - Join my circles\" />";
									echo anchor("http://plus.google.com/107915062498309785057/posts", $go, array('title' => "Google+ - Join my circles",'target'=>"_blank"));
								?>
							</li>
						</ul>
					</section>
				</article>
			</footer>
			<div id="copyleft">
				<p>Copyleft 2010 - <?php echo date('Y');?> Daniel Mois. No rights reserved. Powered by <?php echo anchor('http://www.codeigniter.com','Codeigniter','title="Codeigniter PHP framework"');?></p>
			</div>
		</div><!--footer_wrapp-->
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-4712500-3']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
	</body>
</html>