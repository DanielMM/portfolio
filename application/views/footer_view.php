<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
		<div id="footer_wrapp">
			<footer>
				<article>
					<h4>Latest tweets</h4>
					<ul id="tweets">
						<li>
							<h6><?php echo anchor('http://twitter.com/#!/danmois','@danmois','title="Fallow me onTwitter" target="_blank"'); ?><span>Sunday 12:34</span></h6>
							<p>Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi susp</p>
						</li>
						<li>
							<h6><?php echo anchor('http://twitter.com/#!/danmois','@danmois','title="Fallow me onTwitter" target="_blank"'); ?><span>5 hours ago</span></h6>
							<p>Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi susp</p>
						</li> 
						<li>
							<h6><?php echo anchor('http://twitter.com/#!/danmois','@danmois','title="Fallow me onTwitter" target="_blank"'); ?><span>12.10.11 16:12</span></h6>
							<p>Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi susp</p>
						</li>
					</ul>
				</article>
				<article class="space">
					<h4>Something</h4>
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
						<li><?php echo anchor('http://www.webresourcesdepot.com/','Web Resources Depot','title="Web Resources Depot" target="_blank"');?></li>
						<li><?php echo anchor('http://www.webdesignerdepot.com/','Web Designer Depot','title="Web Designer Depot" target="_blank"');?></li>
						<li><?php echo anchor('http://webdesignledger.com/','Web Design Ledger','title="Web Design Ledger" target="_blank"');?></li>
						<li><?php echo anchor('http://37signals.com/svn','37 Signals','title="37 Signals" target="_blank"');?></li>
						<li><?php echo anchor('http://php.net/','PHP.net','title="PHP.net" target="_blank"');?></li>
						<li><?php echo anchor('http://codeingniter.com','Codeigniter','title="Codeigniter" target="_blank"');?></li>
					</ul>
				</article>
				<article class="space">
					<h4>Lorem ipsum dolor sit amet</h4>
					<p>Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis. Sollicitudin viverra, vel varius eget sit mollis. 
						Commodo enim aliquam suspendisse tortor cum diam, commodo facilisis, rutrum et duis nisl porttitor, vel eleifend odio ultricies ut, orci in adipiscing felis velit nibh. Consectetuer porttitor feugiat vestibulum sit feugiat, voluptates dui eros libero. Etiam vestibulum at lectus.					
						Donec vivamus. Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec, tempor cursus vitae sit aliquet neque purus. Ultrices lacus proin conubia dictum tempus, tempor pede vitae faucibus, sem auctor, molestie diam dictum aliquam. Dolor leo, ridiculus est ut cubilia nec, fermentum arcu praesent, pede etiam. Tempor vestibulum turpis id ligula mi mattis. Eget arcu vitae mauris amet odio.
						Diam nibh diam, quam elit, libero nostra ut. Pellentesque vehicula.</p>
				</article>
				<ul id="social_media">
					<li>
						<a href="#" title="LinkedIn - Let's connect">
							<img src="<?php echo asset_url('img'); ?>lin.png" alt="LinkedIn - Let's connect" title="LinkedIn - Let's connect" height="52" width="52" />
						</a>
					</li>
					<li>
						<a href="#" title="Facebook - Find me">
							<img src="<?php echo asset_url('img'); ?>face.png" alt="Facebook - Find me" title="Facebook - Find me" height="52" width="52" />
						</a>
					</li>
					<li>
						<a href="#" title="Tweeter - Fallow me">
							<img src="<?php echo asset_url('img'); ?>tweet.png" alt="Tweeter - Fallow me" title="Tweeter - Fallow me" height="52" width="52" />
						</a>
					</li>
					<li>
						<a href="#" title="Google+ - Join my circles">
							<img src="<?php echo asset_url('img'); ?>gmail.png" alt="Google+ - Join my circle" title="Google+ - Join my circles" height="52" width="52" />
						</a>
					</li>
				</ul>
			</footer>
			<div id="copyleft">
				Copyleft <span>&copy;</span>2011 Daniel Mois. No rights reserved. Powered by <?php echo anchor('http://www.codeigniter.com','Codeigniter','title="Codeigniter PHP framework"');?>.
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