<div id="content_wrapp">
	<div id="content">
		<article class="edit_form">
			<?php
				if(isset($feedback) && $feedback):
			?>
			<div id="feedback" class="success">
				<span class="success">Item saved succesfully! <?php echo anchor($check, 'View new item.');?></span>
			</div>

			<?php elseif(isset($feedback) && !$feedback): ?>
			<div id="feedback" class="error">
				<span class="error">Error saving item</span>
			</div>
			
			<?php endif; ?>
			
			<?php echo form_open('admin/edit');?>
			<section class="main">
				<?php
					if(isset($post))
					{	
						$post_id = $post->post_id;
						$post_title = $post->post_title;
						$post_terms = $post->post_terms;
						$post_thumb = $post->post_thumb;
						$post_teaser = $post->post_teaser;
						$post_content = $post->post_content;
						$post_date = $post->post_date;
						$post_modified = $post->post_modified;
						$post_settings = $post->post_settings;
						$post_category = $post->post_category;
						$post_type = $post->post_type;
						$post_status = $post->post_status;

						$post_meta = $post->meta_content;
					}else{
						$post_title = set_value('title');
						$post_terms = set_value('terms');
						$post_thumb = set_value('thumb');
						$post_teaser = set_value('post_teaser');
						$post_content = set_value('post_content');
						$post_date = set_value('creation_date');
						$post_modified = set_value('update_date');
						$post_settings = set_value('settings');
						$post_category = set_value('category');
						$post_type = set_value('type');
						$post_status = set_value('status');
						
						$post_meta = set_value('meta');
					}


					
					echo form_label('Post title', 'title');
					echo form_error('title');
					echo form_input(array('name'=>"title",'value'=>$post_title,'id'=>'title', 'placeholder'=>"Post title"));

					echo form_label('Post terms', 'terms');
					echo form_error('terms');
					echo form_textarea(array('name'=>"terms",'value'=>$post_terms,'id'=>'terms' , 'placeholder'=>"Post terms",'rows'=>"1",'cols'=>"90"));

					echo form_label('Post meta', 'meta');
					echo form_error('meta');
					echo form_textarea(array('name'=>"meta",'value'=>$post_meta,'id'=>'meta' , 'placeholder'=>"Post meta",'rows'=>"4",'cols'=>"90"));
					
					echo form_label('Post thumb', 'thumb');
					echo form_error('thumb');
					echo form_textarea(array('name'=>"thumb",'value'=>$post_thumb,'id'=>'thumb' , 'placeholder'=>"Post thumb",'rows'=>"4",'cols'=>"90"));

					echo form_label('Post teaser', 'post_teaser'); 
					echo form_error('post_teaser');
					echo form_textarea(array('name'=>"post_teaser",'value'=>$post_teaser,'id'=>'post_teaser' , 'placeholder'=>"Post post_teaser",'rows'=>"4",'cols'=>"90"));

					echo form_label('Post content', 'post_content');
					echo form_error('post_content');
					echo form_textarea(array('name'=>"post_content",'value'=>$post_content,'id'=>'post_content' , 'placeholder'=>"Post content",'rows'=>"15",'cols'=>"90"));

					?>

			</section>
			<section class="sidebar">
				<?php
					echo form_label('Post settings', 'settings');
					echo form_error('settings');
					echo form_textarea(array('name'=>"settings",'value'=>$post_settings,'id'=>'settings' , 'placeholder'=>"Post settings",'rows'=>"4",'cols'=>"25"));
					?>

					<?php
						echo form_label('Post type', 'type');
					?>
					<div id="type">
						<?php
							if($post_type == 'article'){
								echo form_radio(array('name'=>'type','value'=>'article','id'=>'type-1','checked'=>'checked'));
								echo form_label('Article', 'type-1');

								echo form_radio(array('name'=>'type','value'=>'project','id'=>'type-2'));
								echo form_label('Project', 'type-2');
							}elseif($post_type == 'project'){
								echo form_radio(array('name'=>'type','value'=>'article','id'=>'type-1'));
								echo form_label('Article', 'type-1');

								echo form_radio(array('name'=>'type','value'=>'project','id'=>'type-2','checked'=>'checked'));
								echo form_label('Project', 'type-2');
							}else{
								echo form_radio(array('name'=>'type','value'=>'article','id'=>'type-1'));
								echo form_label('Article', 'type-1');

								echo form_radio(array('name'=>'type','value'=>'project','id'=>'type-2'));
								echo form_label('Project', 'type-2');
							}
						?>
					</div>

					<?php
						if(isset($post_category) && $post_type == 'article'):
						echo form_label('Post category', 'category');
					?>
					<div id="category">
						<?php

							$category = array('tutorial','quicktip','tool','question');
							$i = 1;
							foreach ($category as $cat) {
								if($post_category == $cat){
									echo form_radio(array('name'=>'category','value'=>$cat,'id'=>'category-'.$i,'checked'=>'checked'));
									echo form_label($cat, 'category-'.$i);
								}else{
									echo form_radio(array('name'=>'category','value'=>$cat,'id'=>'category-'.$i));
									echo form_label($cat, 'category-'.$i);
								}
								$i++;
							}
						?>
					</div>
					<?php else: ?>
						<div id="category">
						<?php

							$category = array('tutorial','quicktip','tool','question');
								$i = 1;
								foreach ($category as $cat) {
									echo form_radio(array('name'=>'category','value'=>$cat,'id'=>'category-'.$i));
									echo form_label($cat, 'category-'.$i);
									$i++;
								}
							?>
						</div>
					<?php endif; ?>
					<?php
						echo form_label('Post status', 'status');
					?>
					<div id="status">
						<?php
							$status = array('draft','unpublished','published','featured');
							$i = 1;
							foreach($status as $st)
							{
								if($post_status == $st){
									echo form_radio(array('name'=>'status','value'=>$st,'id'=>'status-'.$i,'checked'=>'checked'));
									echo form_label($st, 'status-'.$i);
								}else{
									echo form_radio(array('name'=>'status','value'=>$st,'id'=>'status-'.$i));
									echo form_label($st, 'status-'.$i);
								}
								$i++;
							}
						?>
					</div>

					<?php

					echo form_label('Post creation date', 'creation_date'); 
					echo form_error('creation_date');
					echo form_input(array('name'=>"creation_date",'value'=>$post_date,'id'=>'creation_date', 'placeholder'=>"Post creation date"));

					echo form_label('Post update date', 'update_date');  echo
					form_error('update_date'); echo form_input(array('name'=>"
					update_date",'value'=>$post_modified,'id'=>'update_date',
					'placeholder'=>"Post update date")); if(isset($post_id)){
					echo form_hidden('post_id',$post_id); }

					if(isset($post)){
						echo form_submit(array("name"=>"submit", "value"=>"Update"));
					}else{
						echo form_submit(array("name"=>"submit", "value"=>"Save"));
					}
				
				?>
			</section><!--sidebar-->
		</article><!--main-->
	</div><!--content-->
</div><!--content_wrapp-->