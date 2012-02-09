<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div id="content_wrapp">
	<div id="content">
		<article class="article_page main">
			<header class="">
				<h1 title="<?php if(isset($page_title)){echo $page_title;}else{echo " ";}?>"><?php if(isset($page_title)){echo $page_title;}else{echo " ";}?></h1>
				<?php
					if($article['post_thumb'] === NULL){
						$thumb = false;
					}else{
						$thumb = $article['post_thumb'];
					$thumb = "<img class=\"thumb\" src=".asset_url('img').$thumb." width=\"270\" height=\"190\" alt=\"{$page_title}\" title=\"{$page_title}\" />";
					}
				?>
				<p class="post_info">
					<!-- <span class="category"><?php echo $article['post_category']; ?></span> -->
					<span class="date <?php if($article['post_category'] == "project"){echo "nobrd";} ?>">
						<span class="day"><?php echo $article['date']['day']; ?></span>
						<span class="month"><?php echo $article['date']['month']; ?></span>
						<span class="year"><?php echo $article['date']['year']; ?></span>
					</span>
				<?php if($article['post_category'] != "project"): ?>
					<span class="comm_count"><?php echo $article['comm_count']; ?></span>
				<?php endif; ?>
				</p>
				<section class="post_meta <?php if(!$thumb){echo "nothumb";}?>">
					<dl>
						<?php if(isset($article['post_category'])): ?>
							<dt class="category">Category:</dt>
								<dd><?php echo $article['post_category']; ?></dd>
						<?php endif; ?>
						<?php if(isset($article['post_reading'])): ?>
							<dt class="reading">Reading time:</dt>
								<dd><?php echo $article['post_reading']; ?> min</dd>
						<?php endif; ?>
						<?php if(isset($article['post_difficulty'])): ?>
							<dt class="reading">Difficulty:</dt>
								<dd><?php echo $article['post_difficulty']; ?></dd>
						<?php endif; ?>
						<?php if(isset($article['post_terms'])):?>
						<dt class="tags">Tags:</dt>
							<dd>
								<?php foreach($article['post_terms'] as $tag){
									echo anchor('tag/'.$tag, $tag, array('title' => $tag, 'class'=>'tag'));
								}?>
							</dd>
						<?php endif; ?>
					</dl>
				</section>
				<?php echo $thumb;?>
				<div class="summary">
					<?php
						echo $article['post_teaser'];
					?>
				</div>
			</header>
			<section class="post_body">
				<?php
					echo $article['post_content'];
				?>
				<pre class="prettyprint linenums:2" onclick="prettyPrint()">
					<span class="nocode">This is code to be formated.</span>
					//testing prettyprint on js code
					$data['article']['date']['day'] = substr($date[2], 0,2);
					$data['article']['date']['month'] = $months[$date[1]];
					$data['article']['date']['year'] = $date[0];
				</pre>
			</section><!--post_body-->
			<section class="post_footer">
				<!--Add author bio for google author SEO -->
				<footer>
					<section class="share">
						<a href="" class="btn appreciate"><span>O</span>Appreciate</a>
						<div class="sharing">
							<a href="" class="btn">Share<span>></span></a>
							<ul class="social">
								<li><a href="" class="s_icon">g</a></li>
								<li><a href="" class="s_icon">t</a></li>
								<li><a href="" class="s_icon">f</a></li>
							</ul>
						</div>
					</section>
					<section class="author_info">
						<h5>Author</h5>
						<a href="https://plus.google.com/107915062498309785057?rel=author">Daniel Mois</a>
						<p>Web Developer</p>
						<img src="<?php echo asset_url('img');?>daniel_mois_author.jpg" class="author" width="48" height="48" alt="Daniel Mois - Web Developer" title="Daniel Mois - Web Developer" />
						<a href="<?php echo site_url('about');?>">Read more about Daniel</a>
					</section>
				</footer>
			</section><!--post_footer-->

			<?php if($article['post_settings']['comments']): ?>
			<section class="comm_wrapp">
				<h2 class="col_title">
					<?php echo $article['comm_count']; ?>
					<?php
						if($article['post_settings']['add_comments']):?>
							<a class="add_comm_toggle" href="#addComment">Add Comment<span>{</span></a>
						<?php endif; ?>
				</h2>
				<section class="comments">
					<?php
						//var_dump($article['post_comments']);

						if($article['post_comments']):
						foreach ($article['post_comments'] as $comment):
					?>
					<article class="comment">
						<p class="comm_meta">
							<span class="comm_thumb">
								U<!--<img src="<?php echo asset_url('img');?>user.jpg" height="32" widht="32" />-->
							</span>
							<?php
								echo anchor($comment['comm_author_url'],$comment['comm_author_name'],array("class"=>"comm_author","target"=>"_blank"))
							?>
							<span class="comm_date"><?php echo $comment['comm_date']; ?></span>
						</p>
						<section class="comm_body">
							<?php echo $comment['comm_content']; ?>
						</section>
						<footer class="comm_footer">
							<?php
								
								$reply_to = site_url().$article['link'].'/addComment/'.$comment['comm_id'];
								
								/*Threaded comments not implemented yet, wait for it*/
								//echo anchor($reply_to,"<span>h</span>Respond",array("class"=>"reply_btn"));
							?>
						</footer>
					</article>
					<?php 
						endforeach;
						elseif($article['post_settings']['add_comments']):
					?>
						<p>Be the first to add a comment to this article.</p>
					<?php endif;?>
					<!--
					<article class="comment reply author">
						<p class="comm_meta">
							<span class="comm_thumb">
								<img src="<?php echo asset_url('img');?>daniel_mois_author.jpg" height="32" widht="32" />
							</span>
							<a href="" class="comm_author">author</a>
							<span class="comm_date">june 30 2012</span>
						</p>
						<section class="comm_body">Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</section>
						<footer class="comm_footer"><a href="" class="reply_btn"><span>h</span>Respond</a></footer>
					</article>
					<article class="comment">
						<p class="comm_meta">
							<span class="comm_thumb">
								<img src="<?php echo asset_url('img');?>user2.jpg" height="32" widht="32" />
							</span>
							<a href="" class="comm_author">estravaganza@gmail.com</a>
							<span class="comm_date">june 30 2012</span>
						</p>
						<section class="comm_body"><p>Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla <a href="">pariatur</a>. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</section>
						<footer class="comm_footer"><a href="" class="reply_btn"><span>h</span>Respond</a></footer>
					</article>
					<article class="comment reply author">
						<p class="comm_meta">
							<span class="comm_thumb">
								<img src="<?php echo asset_url('img');?>daniel_mois_author.jpg" height="32" widht="32" />
							</span>
							<a href="<?php echo site_url();?>" class="comm_author">author</a>
							<span class="comm_date">june 30 2012</span>
						</p>
						<section class="comm_body"><p>Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<blockquote>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Excepteur sint occaecat <a href="">cupidatat</a> non	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</blockquote>Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</section>
						<footer class="comm_footer"><a href="" class="reply_btn"><span>h</span>Respond</a></footer>
					</article>
					<article class="comment reply2">
						<p class="comm_meta">
							<span class="comm_thumb">
								<img src="<?php echo asset_url('img');?>user.jpg" height="32" widht="32" />
							</span>
							<a href="<?php echo site_url();?>" class="comm_author">estravaganza@gmail.com</a>
							<span class="comm_date">june 30 2012</span>
						</p>
						<section class="comm_body">Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</section>
						<footer class="comm_footer"><a href="" class="reply_btn"><span>h</span>Respond</a></footer>
					</article>-->
				</section>
			</section>
			<?php endif; ?>
			<?php if($article['post_settings']['add_comments']): ?>
				<article class="comm_form" id="addComment">
					<h3>Add your own comments!</h3>
					<?php
						
						echo form_open($article['post_type'].'/'.$article['link'].'#addComment');
						
						echo form_label('Name*', 'name');
						echo form_label('Email*', 'email'); 
						echo form_label('URL', 'url'); 
						echo form_input(array('name'=>"name",'value'=>set_value('name'), 'placeholder'=>"Name"));
						
						echo form_input(array('name'=>"email",'value'=>set_value('email'), 'placeholder'=>"Email address"));
						
						echo form_input(array('name'=>"url",'value'=>set_value('url'), 'placeholder'=>"URL"));
						
						echo form_error('name'); 
						echo form_error('email');
						echo form_error('url');
						
						echo form_label('Your comments', 'comment'); 
						echo form_error('comment');
						echo form_textarea(array('name'=>"comment",'value'=>set_value('comment'), 'placeholder'=>"Your comments",'rows'=>"12",'cols'=>"52"));

						echo form_hidden(array('article_id'=>$article['post_id']));

						echo form_submit('submit', 'Add comment');
						
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
				</article>
			<?php endif; ?>
		</article>
		<aside class="sidebar">
			<?php //$this->load->view('related_content_widget_view'); ?>
			<?php $this->load->view('categories_widget_view'); ?>
		</aside>
	</div>
</div>