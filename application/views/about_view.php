		<div id="wrapper">
			<div id="main">
				<div id="personal">
					<h1 class="section_header">A few words about the person behind these words!</h1>
					<p>I am <?php echo $age; ?> and I love to design and develop. </p>
					<p>Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.</p>
				</div>
			</div>
			<div id="sidebar">
				<div id="personal_info" class="widget" >
					<h4>I know how to smile</h4>
					<img src="<?php echo asset_url('img');  ?>daniel_mois.jpg" title="Daniel Mois - Web developer" alt="Daniel Mois - Web developer" width="220" height="298" />
					<h4>Download CV</h4>
					<p><?php echo anchor("download/file/daniel_mois_cv.pdf","Download my CV in PDF format.",'title="Download cv"');?></p>
					<h4>Download vCard</h4>
					<p>Download my contact details as a vCard.</p>
					<p>Find out more about vCard!</p>
				</div>
			</div>
		</div>