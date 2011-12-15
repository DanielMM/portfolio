<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<section id="categories" class="widget">
	<h3 class="section_heading">Categories</h3>
	<ul>
		<?php 
			if(isset($categories)):
			foreach($categories as $category): 
		?>
			<?php
				if(isset($project['meta']['category']) && $project['meta']['category'] == $category->cat_title)
				{
					$active = true;
				}else
				{
					$active = false;
				}
			?>
			<li<?php if(isset($active) && $active){ echo " class=active";} ?>>
				<?php echo anchor('project/category/'.$category->cat_name, $category->cat_title.'<!--<span class="count">x</span>-->',array('title' => $category->cat_title)); ?>
			</li>
		<?php endforeach; 
			endif;
		?>
	</ul>
</section>