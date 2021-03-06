<?php get_header(); ?>

<!-- PROFILE FEATURE -->
<section class="profile-feature">
	<div class="awe-parallax bg-profile-feature"></div>
	<div class="awe-overlay overlay-color-3"></div>
	<div class="container">
		<div class="info-author">
			<div class="image">
<!--				<img src="--><?//=get_stylesheet_directory_uri()?><!--/images/team-13.jpg" alt="">-->
			</div>	
			<div class="name-author">
				<h2 class="big"><?=wp_get_current_user()->display_name?></h2>
			</div>	 
<!--			<div class="address-author">-->
<!--				<i class="fa fa-map-marker"></i>-->
<!--				<h3>Hanoi, Vietnam</h3>-->
<!--			</div>-->
		</div>
<!--		<div class="info-follow">-->
<!--			<div class="trophies">-->
<!--				<span>12</span>-->
<!--				<p>Trophies</p>-->
<!--			</div>-->
<!--			<div class="trophies">-->
<!--				<span>12</span>-->
<!--				<p>Follower</p>-->
<!--			</div>-->
<!--			<div class="trophies">-->
<!--				<span>20</span>-->
<!--				<p>Following</p>-->
<!--			</div>-->
<!--			<div class="trophies">-->
<!--				<span>$ 149,902</span>-->
<!--				<p>Balance</p>-->
<!--			</div>-->
<!--		</div>-->
	</div>
</section>
<!-- END / PROFILE FEATURE -->


<!-- CONTEN BAR -->
<section class="content-bar">
	<div class="container">
		<ul>
			<li class="current">
				<a href="account-learning.html">
					<i class="icon md-book-1"></i>
					学习的课程
				</a>
			</li>
<!--			<li>-->
<!--				<a href="account-teaching.html">-->
<!--					<i class="icon md-people"></i>-->
<!--					Teaching-->
<!--				</a>-->
<!--			</li>-->
<!--			<li>-->
<!--				<a href="account-assignment.html">-->
<!--					<i class="icon md-shopping"></i>-->
<!--					Assignment-->
<!--				</a>-->
<!--			</li>-->
<!--			<li>-->
<!--				<a href="account-profile-guest-view.html">-->
<!--					<i class="icon md-user-minus"></i>-->
<!--					Profile-->
<!--				</a>-->
<!--			</li>-->
<!--			<li>-->
<!--				<a href="account-inbox.html">-->
<!--					<i class="icon md-email"></i>-->
<!--					Inbox-->
<!--				</a>-->
<!--			</li>-->
		</ul>
	</div>
</section>
   <!-- END / CONTENT BAR -->




<!-- COURSE CONCERN -->
<section id="course-concern" class="course-concern">
	<div class="container">
		<div class="row">
			<?php foreach(get_user_meta(get_current_user_id(), 'ordered_course_id') as $course_id){ $course = get_post($course_id); $sections = explode("\n", get_post_meta(get_the_ID(), 'sections', true)); ?>
			<div class="col-xs-6 col-sm-4 col-md-3">
				<div class="mc-learning-item mc-item mc-item-2">
					<div class="image-heading">
						<?=get_the_post_thumbnail($course_id)?>
					</div>
					<div class="meta-categories"><a href="#"><?=get_the_category($course->ID)[0]->name?></a></div>
					<div class="content-item">
<!--						<div class="image-author">-->
<!--							<img src="--><?//=get_stylesheet_directory_uri()?><!--/images/avatar-1.jpg" alt="">-->
<!--						</div>-->
						<h4><a href="<?=get_the_permalink($course_id)?>"><?=$course->post_excerpt?></a></h4>
						<div class="name-author">
							<a href="#"><?=get_userdata($course->post_author)->display_name?></a>
						</div>
					</div>
					<div class="ft-item">
						<div class="percent-learn-bar">
							<div class="percent-learn-run"></div>
						</div>
						<div class="percent-learn"><?=round(count(current_user_learned_sections($course_id)) / count($sections) * 100)?>%<i class="fa fa-trophy"></i></div>
						<a href="<?=get_the_permalink($course_id)?>" class="learnnow">立即学习<i class="fa fa-play-circle-o"></i></a>
					</div>
				</div>
				<!-- END / MC ITEM -->
			</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- END / COURSE CONCERN -->

<?php get_footer(); ?>
