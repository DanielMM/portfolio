<div id="wrapper">
	<div id="main">
		<div id="download">
			<p><?php echo $feedback; ?></p>
			<?php
			if(isset($file_name) && isset($file_data)){
				force_download($file_name, $file_data); 
			}
			?>
		</div>
	</div>
	<div id="sidebar">
		
</div>