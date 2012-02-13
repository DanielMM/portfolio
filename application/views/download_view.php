<div id="content_wrapp">
	<div id="content">
		<article id="download">
			<section>
				<p>
					<?php 
						if(isset($download_feedback)){
							echo $download_feedback; 
						}
					?>
				</p>
				<?php
					if(isset($file_name) && isset($file_data)){
						force_download($file_name, $file_data); 
					}
				?>		
			</section>
		</article>
	</div><!--content-->
</div><!--content_wrapp-->