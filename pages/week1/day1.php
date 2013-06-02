				<?php include('../../includes/header.php'); ?>
				<?php include('../../includes/nav.php'); ?>

				<?php # MAIN CONTENT HEADING ?><!--{-->
				<div id="main-content" class="span12">
					<div class="hero-unit">
						<h1>Frontend Basics</h1>
						<p>Week 1 Day 1</p>
					</div>

					<div class="accordion" id="accordion">
<!--}-->
						<?php # CAREER OPPORTUNITIES ?><!--{-->
						<section id="career-opportunities" class="accordion-group"><!--{-->
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#career-opportunities-c">
								<h2>Career Opportunities</h2>
							</a>
<!--}-->
							<div id="career-opportunities-c" class="accordion-body collapse"><!--{-->
								<div class="accordion-inner">
									<p>Here are some example job postings that illustrate the kind of skill sets the industry is looking for:</p>
									<p>
										<a href="#"
											class="btn btn-small btn-warning instruction"
											data-toggle="popover"
											data-content="
											Review the job postings below and observe particularly the highlighted portions to get a feel for
											what skill sets and technology stacks the industry is looking for."
											>Instruction <i class="icon-share-alt icon-white"></i>
										</a>
									</p>
									<br>

									<ul class="thumbnails">
										<li class="span4">
											<div class="thumbnail">
												<img src="../../img/modus.jpg" data-src="holder.js/300x200" alt="Modus Create">
												<h3>Modus Create</h3>
												<!-- <p>We are a highly motivated, interdisciplinary team that believe in lean development, design strategy, and user experience to develop stunning applications with emerging technology.</p> -->
												<a class="btn btn-primary" href="../../sites/modus-create.htm" target="_new">Job Posting</a>
											</div>
										</li>

										<li class="span4">
											<div class="thumbnail">
												<img src="../../img/menlo.jpg" data-src="holder.js/300x200" alt="Menlo Technologies">
												<h3>Menlo Tech</h3>
												<!-- <p>Menlo Technologies takes the time to truly understand the needs of its clients. Instead of a one&#45;size&#45;fits&#45;all approach, our Blended Delivery Model offers a unique approach...</p> -->
												<a class="btn btn-primary" href="../../sites/menlo-tech.htm" target="_new">Job Posting</a>
											</div>
										</li>

										<li class="span4">
											<div class="thumbnail">
												<img src="../../img/rht.jpg" data-src="holder.js/300x200" alt="Robert Half Technology">
												<h3>Robert Half Tech</h3>
												<!-- <p>Robert Half Technology can provide customers with a breadth of technology staffing solutions to meet all your project, contract&#45;to&#45;hire and full&#45;time staffing needs.</p> -->
												<a class="btn btn-primary" href="../../sites/rh-tech.htm" target="_new">Job Posting</a>
											</div>
										</li>
									</ul>
									<!--}-->
									<h3>Semantic HTML</h3><!--{-->
									<p>
										Semantic HTML means you use
										<abbr title="Hyper Text Markup Language">HTML</abbr> to
										markup your content strictly for what it <em>means</em>. Not
										for how you want it to <em>look</em>. The latter would be
										a job for <abbr title="Cascading Style Sheets">CSS</abbr>
										only. This topic will be covered in-depth in this course.
									</p>




<!--}-->
									<h3 class="fyi">CSS Preprocessors</h3><!--{-->
									<p>
										CSS preprocessors take code written in a more feature rich preprocessed language (Such as:
										<a href="http://sass-lang.com/" target="_blank">Sass</a>,
										<a href="http://lesscss.org/" target="_blank">LESS</a>, or
										<a href="http://learnboost.github.com/stylus/" target="_blank">Stylus</a>) and then
										processes it into basic CSS. One way to think of them is, as some sort of booster add-on that turns
										basic CSS into advance CSS. This course will cover basic CSS. Afterwards, you are encourage to
										familiarize yourself in one of the preprocessor languages.
									</p>

									<p class="recommendation well well-small">
										<span class="label label-info"><i class="icon-thumbs-up icon-white"></i> Recommended:</span>
										<a href="http://sass-lang.com/" target="_blank">Sass</a> is emerging as one of the most popular
										preprocessors due largely in-part by the rapidly growing popularity of the
										<a href="http://compass-style.org/" target="_blank">Compass CSS Framework</a>.
									</p>

									<div style="text-align: center;"><img src="../../img/sass-compass.jpg" alt="sass+compass"></div>
									<!--}-->

									<h3 class="fyi">JavaScript &amp; Popular Frameworks</h3>

									<h3 class="fyi">Responsive Design</h3>

									<h3 class="fyi">Version Control System</h3>

									<h4>What is VCS?</h4>
									<p class="lead">
										Version Control System (VCS) also known as revision or source control is an aspect of source control management (SCM) is software that allows a team to manage changes of documents, programs, images and other information stored in computer files. Changes are usually identified by an incrementing number or letter code also known as revision number or revision.

										The simplest usage of versioning is - you can easily go back to the previous working version of your files, should you mess something up with the latest changes.

										Changes could range from fixing a typo in a text file up to a huge refactoring in a software project, spanning hundreds of files. Each change usually has the name of the person who introduced it, time of the change and an optional description message.
									</p>

									<h4>Here are a few of the many ways a VCS helps development teams:</h4>
									<dl>
										<dt>Collaboration:</dt>
										<dd>
											VCS tools prevent one user from accidentally overwriting the changes of another, allowing many developers to work on the same code without stepping one each other's toes.
										</dd>

										<dt>History:</dt>
										<dd>
											VCS tools track the complete development history of the software, including the exact changes which have occurred between releases and who made those changes.
										</dd>

										<dt>Release notes generation:</dt>
										<dd>
											Given the tracking of each change, the VCS can be used to generate notes for their software releases which accurately capture all of the changes included in the new release.
										</dd>

										<dt>Documentation and test management:</dt>
										<dd>
											VCS tools can be used to manage not just software source code, but also test suites and documentation for their software.
										</dd>

										<dt>Change notifications:</dt>
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
									<h3 class="fyi">Command Line Interfaces</h3>

									<h3 class="fyi">Agile Methodology</h3>

									<h3 class="fyi">Industry Social Sites</h3>
									<h3>Popular Web Development Apps</h3>
								</div><!-- accordion-inner -->
							</div>
						</section>


<!--}-->
						<?php # DOMAIN NAMES ?><!--{-->
						<section id="domain-names" class="accordion-group">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#domain-names-c">
								<h2>Choosing Domain Names</h2>
							</a>

							<div id="domain-names-c" class="accordion-body collapse">
								<div class="accordion-inner">

									<p class="tip well well-small">
										<span class="label label-success"><i class="icon-thumbs-up icon-white"></i> Tip:</span>
										Keep the following attributes in mind when choosing your domain name:
									</p>

									<ol>
										<li>Short - Make it as long as it needs to be, but no longer.</li>
										<li>Simple - Try to avoid hyphens and numbers.</li>
										<li>Easy - Avoid "cool" alternative spellings(eg. grafix), unless its a brand.</li>
										<li>Professional - Avoid anything inappropiate.</li>
									</ol>

									<p>
										Consider the fact that many professionals simply use their name for the domain
										of their online profiles/portfolios.
									</p>

								</div><!-- accordion-inner -->
							</div>
						</section>


<!--}-->
						<?php # HISTORY OF THE INTERNET ?><!--{-->
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


<!--}-->
						<?php # HOW THE INTERNET WORKS ?><!--{-->
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


<!--}-->
						<?php # CROSS BROWSER COMPATIBILITY ?><!--{-->
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


<!--}-->
						<?php # FILE AND DIRECTORY CONVENTIONS ?><!--{-->
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


<!--}-->
						<?php # INTRODUCTION TO HTML ?><!--{-->
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



<!--}-->
						<?php # ASSIGNMENTS ?><!--{-->
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


<!--}-->
						<?php # SUBJECT SECTION (TEMPLATE) ?><!--{-->
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


<!--}-->
				<?php # MAIN CONTENT FOOTER ?><!--{-->
					</div><!-- accordion -->

				</div><!--main-content--><!--}-->
				<?php include('../../includes/footer.php'); ?>
				<!--
					vim: fdm=marker:fmr={,}:ft=html:tw=120:
				-->
