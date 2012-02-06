<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<section id="categories" class="widget">
	<h3>Categories</h3>
	<ul>
		<?php 
			if(isset($categories)):
			foreach($categories as $category): 
		?>
			<?php
				if(isset($project['meta']['category']) && $project['meta']['category'] == $category->cat_title || isset($article['post_category']) && $article['post_category'] == $category->cat_name)
				{
					$active = true;
				}else
				{
					$active = false;
				}
			?>
			<li<?php if(isset($active) && $active){ echo " class=active";} ?>>
				<?php 
					if($category->cat_name != 'project'){
						echo anchor('category/'.$category->cat_name, $category->cat_title,array('title' => $category->cat_title));
					}?>
			</li>
		<?php endforeach; 
			endif;
		?>
	</ul>
</section>