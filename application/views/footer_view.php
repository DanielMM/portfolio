<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
		<div id="footer_wrapp">
			<footer>
				<article>
					<section id="tweets">
						<!-- <h4>Latest tweets</h4> -->
						<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
						<script>
						new TWTR.Widget({
						  version: 2,
						  type: 'profile',
						  rpp: 4,
						  interval: 30000,
						  width: 450,
						  height: 210,
						  theme: {
						    shell: {
						      background: 'transparent',
						      color: 'rgb(190,190,190)'
						    },
						    tweets: {
						      background: 'transparent',
						      color: 'rgb(190,190,190)',
						      links: 'rgb(64,153,255)'
						    }
						  },
						  features: {
						    scrollbar: false,
						    loop: false,
						    live: false,
						    behavior: 'all'
						  }
						}).render().setUser('danmois').start();
						</script>
					</section>
					<section class="subscribe">
						<h4>Subscribe</h4>
						<?php
							echo form_open('subscribe');
							echo form_label('Enter your email address to subscribe and get updates', 'email_subscriber'); 
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
					<section id="favorites">
						<h4>Things</h4>
						<ul>
							<li>
								<?php echo anchor('http://http://www.informationarchitects.jp//','Information Arhitecs','title="Information Arhitects" target="_blank"');?>
							</li>
							<li>
								<?php echo anchor('http://net.tutsplus.com/','Nettuts Plus','title="Nettuts+" target="_blank"');?>
							</li>
							<li>
								<?php echo anchor('http://www.webresourcesdepot.com/','Web Resources','title="Web Resources Depot" target="_blank"');?>
							</li>
							<li>
								<?php echo anchor('http://37signals.com/svn','37 Signals','title="37 Signals" target="_blank"');?>
							</li>
							<li>
								<?php echo anchor('http://webdesign.tutsplus.com/','Webdesigntuts +','title="Webdesigntuts Plus" target="_blank"');?>
							</li>
							<li>
								<?php echo anchor('http://www.alistapart.com/','A List Apart','title="A List Apart" target="_blank"');?>
							</li>
							<li>
								<?php echo anchor('http://sixrevisions.com/','Six Revisions','title="Six Revisions" target="_blank"');?>
							</li>
							<li>
								<?php echo anchor('http://codeingniter.com','Codeigniter','title="Codeigniter" target="_blank"');?>
							</li>
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