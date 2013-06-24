				<?php include('../../includes/header.php'); ?>
				<?php include('../../includes/nav.php'); ?>

				<?php # MAIN CONTENT HEADING ?><!--{{{-->
				<div id="main-content" class="span12">
					<div class="hero-unit">
						<h1>Frontend Basics</h1>
						<p>Week 1 Day 3</p>
					</div>

					<div class="accordion" id="accordion">
						<!--}}}-->
						<?php # CAREER FOCUS ?><!--{{{-->
						<section id="career-focus" class="accordion-group">
							<a class="btn btn-block accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#career-focus-c">
								<h2>Career Focus</h2>
							</a>

							<div id="career-focus-c" class="accordion-body collapse">
								<div class="accordion-inner">

									<?php # Skill Set Menu ?><!--{{{-->
									<p
										class="btn btn-small btn-warning instruction"
										data-toggle="popover"
										data-content="
										Familiarize yourself with a sample of the kind of skills employers and technical recruiters are
										looking for in the drop down menu below.
										"> <i class="icon-user icon-white"></i> <i class="icon-share-alt icon-white"></i>
									</p>

									<ul id="skill-set-tabs" class="nav nav-tabs">
										<li class="dropdown active">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Typical Frontend Skill Set <b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li class="active"><a href="#skill-set-overview" data-toggle="tab">Overview</a></li>
												<li><a href="#semantic-html" data-toggle="tab">Semantic HTML</a></li>
												<li><a href="#css-preprocessors" data-toggle="tab">CSS Preprocessors</a></li>
												<li><a href="#js-libraries" data-toggle="tab">JavaScript Libraries</a></li>
												<li><a href="#responsive-design" data-toggle="tab">Responsive Design</a></li>
												<li><a href="#vcs" data-toggle="tab">Version Control Systems</a></li>
												<li><a href="#cli" data-toggle="tab">Command Line Interface</a></li>
												<li><a href="#agile-methodology" data-toggle="tab">Agile Methodology</a></li>
												<li><a href="#dev-social-networks" data-toggle="tab">Developer Social Networks</a></li>
												<li><a href="#pop-web-dev-apps" data-toggle="tab">Popular Web Dev Apps</a></li>
											</ul>
										</li>
									</ul>


									<!--}}}-->
									<?php # Skill Set Content ?><!--{{{-->
									<div id="skill-set" class="tab-content">

										<section id="skill-set-overview" class="lead tab-pane fade active in"><!--{{{-->
											<img class="pull-left featurette-image" src="../../img/overview.jpg" alt="">
											<hgroup>
												<h4 class="muted">Overview</h4>
												<h3 class="featurette-heading">Its more about your skills, <span class="muted">than your GPA.</span></h3>
											</hgroup>
											<p class="pull-right featurette-content">
												As an aspiring UI/UX or front-end web designer/developer, you will be constantly trying to learn
												new skills and technologies and adding to what you already know. Front-end developer job
												postings, however, vary widely so the list of languages, frameworks, and technologies that could
												theoretically fall under the category of front-end developer skills is very large.
											</p>

											<p class="pull-right featurette-content">
												Here is a stack of skills and technologies that would behoove you to learn or be familiar with,
												at least to some extent.
											</p>
										</section>



										<!--}}}-->
										<section id="semantic-html" class="lead tab-pane fade"><!--{{{-->
											<img class="pull-right featurette-image" src="../../img/semantic.jpg" alt="Semantic Cube">
											<hgroup>
												<h4 class="muted">Semantic HTML</h4>
												<h3 class="featurette-heading">Code what you mean... <span class="muted">and mean what you code.</span></h3>
											</hgroup>
											<p>
												Semantic HTML means you use
												<abbr title="Hyper Text Markup Language">HTML</abbr> to
												markup your content strictly for what it <em>means</em>. Not
												for how you want it to <em>look</em>. The latter would be
												a job for <abbr title="Cascading Style Sheets">CSS</abbr>
												only. This topic will be covered in-depth in this course.
											</p>
										</section>



										<!--}}}-->
										<section id="css-preprocessors" class="lead tab-pane fade"><!--{{{-->
											<img class="pull-left featurette-image" src="../../img/sass-compass.jpg" alt="sass+compass">
											<hgroup>
												<h4 class="muted">CSS Preprocessors</h4>
												<h3 class="featurette-heading">Go ahead and put your CSS on steroids... <span class="muted">its legal!</span></h3>
											</hgroup>
											<p class="pull-right featurette-content">
												CSS preprocessors take code written in a more feature rich preprocessed language (Such as:
												<a href="http://sass-lang.com/" target="_blank">Sass</a>,
												<a href="http://lesscss.org/" target="_blank">LESS</a>, or
												<a href="http://learnboost.github.com/stylus/" target="_blank">Stylus</a>) and then
												processes it into basic CSS. This course will cover basic CSS only.
												Afterwards, you are encourage to familiarize yourself in one of the preprocessor
												languages.
											</p>

											<p class="pull-right featurette-content muted">
												<span class="label label-info"><i class="icon-thumbs-up icon-white"></i> Recommended:</span>
												<a href="http://sass-lang.com/" target="_blank">Sass</a> is emerging as one of the most popular
												preprocessors due in-part by the growing popularity of the
												<a href="http://compass-style.org/" target="_blank">Compass CSS Framework</a>.
											</p>
										</section>



										<!--}}}-->
										<section id="js-libraries" class="lead tab-pane fade"><!--{{{-->
											<img class="pull-right featurette-image" src="../../img/js-lib.jpg" alt="Javascript Libraries">
											<hgroup>
												<h4 class="muted">JavaScript Libraries</h4>
												<h3 class="featurette-heading">Write less... <span class="muted">do more.</span></h3>
											</hgroup>

											<p class="featurette-content">
												A JavaScript library is essentially a well maintained collection of pre-written functions of
												common tasks. Some of the most popular JS frameworks are
												<a href="http://jquery.com/" target="_blank">jQuery</a>, <a href="http://mootools.net" target="_blank">MooTools</a>, and
												<a href="http://prototypejs.org/" target="_blank">Prototype</a>.
											</p>

											<p class="featurette-content muted">
												<span class="label label-info"><i class="icon-thumbs-up icon-white"></i> Recommended:</span>
												<a href="http://jquery.com/" target="_blank">jQuery</a> has one of the largest active communities
												and reported to be used by over 65% of the top 10,000 most visited sites.
											</p>
										</section>



										<!--}}}-->
										<section id="responsive-design" class="lead tab-pane fade"><!--{{{-->
											<img class="pull-left featurette-image" src="../../img/responsive.jpg" alt="Responsive Design">
											<hgroup>
												<h4 class="muted">Responsive Design</h4>
												<h3 class="featurette-heading">One site<span class="muted"> for every screen.</span></h3>
											</hgroup>

											<p class="pull-right featurette-content">
												Responsive designs are front-end designs that respond and adapt to different devices. More specifically
												designs that consist of multiple fixed width layouts is considered to be "Adaptive Designs".
												While designs that consist of multiple fluid grid layouts are considered to be "Responsive Designs".
											</p>

											<p class="pull-right featurette-content">
												Currently the mixed approach is the popular solution, fixed width for large and medium screens and fluid
												for small ones.
											</p>
										</section>



										<!--}}}-->
										<section id="vcs" class="lead tab-pane fade"><!--{{{-->
											<img class="pull-right featurette-image" src="../../img/responsive.jpg" alt="Responsive Design">
											<hgroup>
												<h4 class="muted">Version Control System</h4>
												<h3 class="featurette-heading">Go back in time<span class="muted"> to save your behind.</span></h3>
											</hgroup>

											<p class="featurette-content">
												Version Control Systems (VCS) such as <a href="http://git-scm.com/">Git</a>,
												<a href="http://mercurial.selenic.com/">Mercurial</a>, or
												<a href="http://subversion.apache.org/">SVN</a> are tools that allow you to manage the changes
												of your files. The primary utility of versioning is to allow you to go back to the previous
												working version of your files, should you mess something up with a recent change. Think,
												persistent history panel (ctrl-z or undo) for your web project files.
											</p>

											<p class="featurette-content">
												Another major use of versioning is to allow you to collaborate with a company or community
												project by allowing you to merge in your changes, without overwriting those of your colleagues.
												Milestones are usually tagged with an incrementing release/version number.
											</p>

											<!-- <p class="pull&#45;left featurette&#45;content"> -->
											<!-- Some of the popular version control systems use in industry are:</p> -->
											<!-- <ul> -->
											<!-- <li><a href="http://git&#45;scm.com/">Git</a></li> -->
											<!-- <li><a href="http://mercurial.selenic.com/">Mercurial</a></li> -->
											<!-- <li><a href="http://subversion.apache.org/">SVN</a></li> -->
											<!-- </ul> -->
											<!-- <p class="well well&#45;large">Git is a free and open source distributed VCS that is rapidly emerging as the industry defacto standard in part by the growing popularity of <a href="https://github.com/">GitHub</a>.</p> -->

											<!-- Learn Git in your browser for free with -->
											<!-- <a class="" href="http://try.github.io/levels/1/challenges/1"> -->
											<!-- 	<img src="../../img/try&#45;git.png" alt="" width="64"> -->
											<!-- </a> -->
										</section>



										<!--}}}-->
										<section id="cli" class="tab-pane fade"><!--{{{-->
											<h3>Command Line Interfaces</h3>
											<p>
											</p>
										</section>



										<!--}}}-->
										<section id="agile-methodology" class="tab-pane fade"><!--{{{-->
											<h3>Agile Methodology</h3>
											<p>
											</p>
										</section>



										<!--}}}-->
										<section id="dev-social-networks" class="tab-pane fade"><!--{{{-->
											<h3>Developer Social Networks</h3>
											<p>
											</p>
										</section>



										<!--}}}-->
										<section id="pop-web-dev-apps" class="tab-pane fade"><!--{{{-->
											<h3>Popular Web Dev Apps</h3>
											<p>
											</p>
										</section>



									<!--}}}-->

									</div><!--skill-set}}}-->

								</div><!--accordion-inner-->
							</div><!--career-opportunities-c-->
						</section><!--career-opportunities-->



						<!--}}}-->
						<?php # ASSIGNMENTS ?><!--{{{-->
						<section id="assignments" class="accordion-group">
							<a class="btn btn-block accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#assignments-c">
								<h2>Assignments</h2>
							</a>

							<div id="assignments-c" class="accordion-body collapse">
								<div class="accordion-inner">
									<h3>Daily Terms</h3>

									<h3>Independent Review</h3>
									<?php include('../../includes/review.php'); ?>
								</div><!-- accordion-inner -->
							</div>
						</section>


<!--}}}-->
						<?php # SUBJECT SECTION (TEMPLATE) ?><!--{{{-->
						<!-- <section id="" class="accordion&#45;group"> -->
						<!-- 	<a class="accordion&#45;toggle" data&#45;toggle="collapse" data&#45;parent="#accordion" href="#idHere"> -->
						<!-- 		<h2>Subject Title (Template)</h2> -->
						<!-- 	</a> -->

						<!-- 	<div id="idHere" class="accordion&#45;body collapse"> -->
						<!-- 		<div class="accordion&#45;inner"> -->
						<!-- 			content here -->
						<!-- 		</div><!&#45;&#45; accordion&#45;inner &#45;&#45;> -->
						<!-- 	</div> -->
						<!-- </section> -->


<!--}}}-->
				<?php # MAIN CONTENT FOOTER ?><!--{{{-->
					</div><!-- accordion -->

				</div><!--main-content--><!--}}}-->

				<?php include('../../includes/footer.php'); ?>

				<!--
				vim: fdm=marker:ft=html:tw=120:
				-->
