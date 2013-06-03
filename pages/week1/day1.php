				<?php include('../../includes/header.php'); ?>
				<?php include('../../includes/nav.php'); ?>

				<?php # MAIN CONTENT HEADING ?><!--{{{-->
				<div id="main-content" class="span12">
					<div class="hero-unit">
						<h1>Frontend Basics</h1>
						<p>Week 1 Day 1</p>
					</div>

					<div class="accordion" id="accordion">
						<!--}}}-->
						<?php # CAREER OPPORTUNITIES ?><!--{{{-->
						<section id="career-opportunities" class="accordion-group">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#career-opportunities-c">
								<h2>Career Opportunities</h2>
							</a>

							<div id="career-opportunities-c" class="accordion-body collapse">
								<div class="accordion-inner">

									<?php # Job Postings ?><!--{{{-->
									<p
										class="btn btn-small btn-warning instruction"
										data-toggle="popover"
										data-content="
										Review the job postings below and observe the highlighted portions to get a feel for
										what skill sets and technology stacks the industry is looking for.
										"> <i class="icon-user icon-white"></i> <i class="icon-share-alt icon-white"></i>
									</p>

									<ul class="thumbnails">
										<li class="span4">
											<div class="thumbnail">
												<img src="../../img/modus.jpg" alt="Modus Create">
												<h3>Modus Create</h3>
												<!-- <p>We are a highly motivated, interdisciplinary team that believe in lean development, design strategy, and user experience to develop stunning applications with emerging technology.</p> -->
												<a class="btn btn-primary" href="../../sites/modus-create.htm" target="_new">Job Posting</a>
											</div>
										</li>

										<li class="span4">
											<div class="thumbnail">
												<img src="../../img/menlo.jpg" alt="Menlo Technologies">
												<h3>Menlo Tech</h3>
												<!-- <p>Menlo Technologies takes the time to truly understand the needs of its clients. Instead of a one&#45;size&#45;fits&#45;all approach, our Blended Delivery Model offers a unique approach...</p> -->
												<a class="btn btn-primary" href="../../sites/menlo-tech.htm" target="_new">Job Posting</a>
											</div>
										</li>

										<li class="span4">
											<div class="thumbnail">
												<img src="../../img/rht.jpg" alt="Robert Half Technology">
												<h3>Robert Half Tech</h3>
												<!-- <p>Robert Half Technology can provide customers with a breadth of technology staffing solutions to meet all your project, contract&#45;to&#45;hire and full&#45;time staffing needs.</p> -->
												<a class="btn btn-primary" href="../../sites/rh-tech.htm" target="_new">Job Posting</a>
											</div>
										</li>
									</ul>



									<!--}}}-->
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
												<li><a href="#js-frameworks" data-toggle="tab">JavaScript Frameworks</a></li>
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

										<section id="skill-set-overview" class="r tab-pane fade active in"><!--{{{-->
											<img class="pull-left"src="../../img/overview.jpg" alt="">
											<hgroup>
												<h3 class="featurette-heading">It more about your skills, <span class="muted">than your GPA.</h3>
												<h4 class="muted">Overview</h4>
											</hgroup>
											<p>
												As an aspiring UI/UX or front-end web designer/developer, you will be constantly trying to learn
												new skills and technologies and adding to what you already know. Front-end developer job
												postings, however, vary widely so the list of languages, frameworks, and technologies that could
												theoretically fall under the category of front-end developer skills is very large.
											</p>

											<p>
												Here is a stack of skills and technologies that would behoove you to learn or be familiar with,
												at least to some extent.
											</p>
										</section>



										<!--}}}-->
										<section id="semantic-html" class="r tab-pane fade"><!--{{{-->
											<img class="pull-right" src="../../img/semantic.jpg" alt="Semantic Cube">
											<hgroup>
												<h3 class="featurette-heading">Code what you mean... <span class="muted">and mean what you code.</h3>
												<h4 class="muted">Semantic HTML</h4>
											</hgroup>
											<p>
												Semantic HTML means you use
												<abbr title="Hyper Text Markup Language">HTML</abbr> to
												markup your content strictly for what it <em>means</em>. Not
												for how you want it to <em>look</em>. The latter would be
												a job for <abbr title="Cascading Style Sheets">CSS</abbr>
												only. <span class="muted">This topic will be covered in-depth in this course.</span>
											</p>
										</section>



										<!--}}}-->
										<section id="css-preprocessors" class="r tab-pane fade"><!--{{{-->
											<img class="pull-left" src="../../img/sass-compass.jpg" alt="sass+compass">
											<hgroup>
												<h3 class="featurette-heading">Go ahead and put your CSS on steroids... <span class="muted">its legal!</h3>
												<h4 class="muted">CSS Preprocessors</h4>
											</hgroup>
											<p>
												CSS preprocessors take code written in a more feature rich preprocessed language (Such as:
												<a href="http://sass-lang.com/" target="_blank">Sass</a>,
												<a href="http://lesscss.org/" target="_blank">LESS</a>, or
												<a href="http://learnboost.github.com/stylus/" target="_blank">Stylus</a>) and then
												processes it into basic CSS. <span class="muted">This course will cover basic CSS only.
												Afterwards, you are encourage to familiarize yourself in one of the preprocessor
												languages.</span>
											</p>

											<p class="recommendation">
												<span class="label label-info"><i class="icon-thumbs-up icon-white"></i> Recommended:</span>
												<a href="http://sass-lang.com/" target="_blank">Sass</a> is emerging as one of the most popular
												preprocessors due in-part by the rapidly growing popularity of the
												<a href="http://compass-style.org/" target="_blank">Compass CSS Framework</a>.
											</p>
										</section>



										<!--}}}-->
										<section id="js-frameworks" class="r tab-pane fade"><!--{{{-->
											<h3>JavaScript Frameworks</h3>
											<p>
											</p>
										</section>



										<!--}}}-->
										<section id="responsive-design" class="tab-pane fade"><!--{{{-->
											<h3>Responsive Design</h3>
											<p>
											</p>
										</section>



										<!--}}}-->
										<section id="vcs" class="tab-pane fade"><!--{{{-->
											<h3>Version Control System</h3>
											<h4>What is VCS?</h4>
											<p>
												Version Control System (VCS) also known as revision or source control is an aspect of source
												control management (SCM) is software that allows a team to manage changes of documents,
												programs, images and other information stored in computer files. Changes are usually identified
												by an incrementing number or letter code also known as revision number or revision.

												The simplest usage of versioning is - you can easily go back to the previous working version of
												your files, should you mess something up with the latest changes.

												Changes could range from fixing a typo in a text file up to a huge refactoring in a software
												project, spanning hundreds of files. Each change usually has the name of the person who
												introduced it, time of the change and an optional description message.
											</p>

											<h4>Here are a few of the many ways a VCS helps development teams:</h4>
											<dl class="dl-horizontal">
												<dt>Collaboration:</dt>
												<dd>
													VCS tools prevent one user from accidentally overwriting the changes of another, allowing many developers to work on the same code without stepping one each other's toes.
												</dd>

												<dt>History:</dt>
												<dd>
													VCS tools track the complete development history of the software, including the exact changes which have occurred between releases and who made those changes.
												</dd>

												<dt>Release Notes:</dt>
												<dd>
													Given the tracking of each change, the VCS can be used to generate notes for their software releases which accurately capture all of the changes included in the new release.
												</dd>

												<dt>Documentation:</dt>
												<dd>
													VCS tools can be used to manage not just software source code, but also test suites and documentation for their software.
												</dd>

												<dt>Change Notifications:</dt>
												<dd>
													To keep interested members of the team informed when changes occur to the source code.
												</dd>
											</dl>

											<p>Some of the popular version control systems use in industry are:</p>
											<ul>
												<li><a href="http://git-scm.com/">Git</a></li>
												<li><a href="http://mercurial.selenic.com/">Mercurial</a></li>
												<li><a href="http://subversion.apache.org/">SVN</a></li>
												<li><a href="http://www.nongnu.org/cvs/">CVS</a></li>
											</ul>
											<p class="well well-large">Git is a free and open source distributed VCS that is rapidly emerging as the industry defacto standard in part by the growing popularity of <a href="https://github.com/">GitHub</a>.</p>

											Learn Git in your browser for free with
											<a class="" href="http://try.github.io/levels/1/challenges/1">
												<img src="../../img/try-git.png" alt="" width="64">
											</a>
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
						<?php # DOMAIN NAMES ?><!--{{{-->
						<section id="domain-names" class="accordion-group">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#domain-names-c">
								<h2>Choosing Domain Names</h2>
							</a>

							<div id="domain-names-c" class="accordion-body collapse">
								<div class="accordion-inner">

									<p class="r">
										Keep the following attributes in mind when choosing your domain name:
									</p>

									<ol class="r indent">
										<li>Short - Make it as long as it needs to be, but no longer.</li>
										<li>Simple - Try to avoid hyphens and numbers.</li>
										<li>Easy - Avoid "cool" alternative spellings(eg. grafix), unless its a brand.</li>
										<li>Professional - Avoid anything inappropiate.</li>
									</ol>

									<p class="r">
										Consider the fact that many professionals simply use their name for the domain
										of their online profiles/portfolios.
									</p>

								</div><!-- accordion-inner -->
							</div>
						</section>


						<!--}}}-->
						<?php # HISTORY OF THE INTERNET ?><!--{{{-->
						<section id="history-internet" class="accordion-group">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#history-internet-c">
								<h2>History of the Internet</h2>
							</a>

							<div id="history-internet-c" class="accordion-body collapse">
								<div class="accordion-inner">
									<a href="http://prezi.com/iiwgavz9b_er/dd170-visual-communications/">Link to Prezi Presentation</a>
									<a href="http://prezi.com/pqaxvatssnyj/css/">Link to Prezi Presentation</a>
								</div><!-- accordion-inner -->
							</div>
						</section>


						<!--}}}-->
						<?php # HOW THE INTERNET WORKS ?><!--{{{-->
						<section id="how-internet-works" class="accordion-group">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#how-internet-works-c">
								<h2>How the Internet Works</h2>
							</a>

							<div id="how-internet-works-c" class="accordion-body collapse">
								<div class="accordion-inner">
									content here
								</div><!-- accordion-inner -->
							</div>
						</section>


						<!--}}}-->
						<?php # CROSS BROWSER COMPATIBILITY ?><!--{{{-->
						<section id="x-browser-compatibility" class="accordion-group">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#x-browser-compatibility-c">
								<h2>Cross Broswer Compatibility</h2>
							</a>

							<div id="x-browser-compatibility-c" class="accordion-body collapse">
								<div class="accordion-inner">
									<h3>Internet Explorer</h3>
									<p><span class="label label-important">Warning!</span> Don't use Internet Explorer for development and training.</p>
								</div><!-- accordion-inner -->
							</div>
						</section>


						<!--}}}-->
						<?php # FILE AND DIRECTORY CONVENTIONS ?><!--{{{-->
						<section id="file-dir-conventions" class="accordion-group">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#file-dir-conventions-c">
								<h2>File and Directory Conventions</h2>
							</a>

							<div id="file-dir-conventions" class="accordion-body collapse">
								<div class="accordion-inner">
									<h3>Directory Structure</h3>
									<h3>File and Folder Names</h3>
									<h4>Naming Files and Directories</h4>
									<p>Case sensitivity</p>
								</div><!-- accordion-inner -->
							</div>
						</section>


						<!--}}}-->
						<?php # INTRODUCTION TO HTML ?><!--{{{-->
						<section id="html-intro" class="accordion-group">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#html-intro-c">
								<h2>Introduction to HTML</h2>
							</a>

							<div id="html-intro-c" class="accordion-body collapse">
								<div class="accordion-inner">
									<a href="http://docs.webplatform.org/wiki/beginners">Great Resource</a>

									<h3>Best Practices</h3>
									<h4>Data Entry</h4>
									<img src="../../img/keyboarding.jpg" alt="">
									<ul>
										<li>The fingers and the keys are color coded to show which finger handles which key.</li>
										<li>The fingers always rest on the HOME keys, these are the keys shown at the tip of each finger. The thumbs are used for the space bar.</li>
										<li>Each finger, with the exception of the index finger, handles three alphabetical keys: its HOME key, the key above it and the key below it. For instance, the left ring finger handles its home key S, the key W (above the home key) and the key X (below the home key).	 Therefore the finger always moves in between three keys, the home	 key, one	key up from the home key and one key down.</li>
										<li>The index finger handles its home key, the key above it and the key below V. In addition, the index finger handles the keys bordering the wall" of the box. For instance, the left index handles its home key (F), the key above it (R), the key below it (V) and the keys	vbordering the ridges, T G and B.</li>
									</ul>

									<h4>Attributes</h4>
									<p>HTML tags can contain one or more attributes. Attributes are added to a tag to provide the browser with more information about how the tag should appear or behave. Attributes consist of a name and a value separated by an equals (=) sign, with the value surrounded by double quotes. Here's an example, style="color:black;".</p>



<!-- http://www.w3schools.com/html/html_intro.asp -->
<!-- http://www.plus2net.com/html_tutorial/html_tagtypes.php -->
<!-- http://docs.webplatform.org/wiki/beginners -->
									<h3>TAGS</h3>
									2 Kinds of tags
									there are:
									1. pair tags - always have an opening tag and a corresponding closing tag.

									<tag> - opeing tag.

									</tag> - closing tag.


									2. self closing tags

									<tag attribute="value">

									<p>Close a tag right after you open it.</p>
									<p>Consider in your spare time practicing typing. It will increase your value and it is a tale tell sign of your experience or rather the lack of.</p>

									<pre class="brush: xml">
										&lt;section&gt;			&lt;section&gt;
													then...		&lt;p&gt;Inner Content&lt;/p&gt;
										&lt;/section&gt;			&lt;/section&gt;
									</pre>

									<pre class="brush: xml">
											&lt;!doctype html&gt;
											&lt;html&gt;
													&lt;head&gt;
															&lt;title&gt;First Page&lt;/title&gt;
													&lt;/head&gt;
													&lt;body&gt;
															&lt;p&gt;All publically visible content goes inside of the body tags.&lt;/p&gt;
													&lt;/body&gt;
											&lt;/html&gt;
									</pre>
								</div><!-- accordion-inner -->
							</div>
						</section>



						<!--}}}-->
						<?php # ASSIGNMENTS ?><!--{{{-->
						<section id="assignments" class="accordion-group">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#assignments-c">
								<h2>Assignments</h2>
							</a>

							<div id="assignments-c" class="accordion-body collapse">
								<div class="accordion-inner">

									<h3>Your Resume</h3>
									<p>
										Bring in your resume tomorrow. If you don't have one prepared
										then draft a rough one <em>before</em> next class. Utilize a word processor such as the free docs app in
										<a class="btn" href="http://drive.google.com">
											<img src="../../img/drive-32.png" alt="Google Drive"> Google Drive
										</a>. This way its in the <em>cloud</em> and always accessible where ever you have access to an online PC.
										Ensure you include all the applicable sections below:
									</p>

									<p class="tip well well-small">
										<span class="label label-success"><i class="icon-thumbs-up icon-white"></i> Tip:</span>
										Focus on content, not formating... for now.
									</p>

									<ul>
										<li>Education</li>
										<li>Relevant Work Experience:</li>
										<li>Applications</li>
										<li>Coding Languages</li>
										<li>Summary:</li>
									</ul>

									<h3>Daily Terms</h3>

									<h3>Independent Review Terms</h3>
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
