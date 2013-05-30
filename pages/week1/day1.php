				<?php include('../../includes/header.php'); ?>
				<?php include('../../includes/nav.php'); ?>
				<!-- SIDEBAR NAVIGATION -->

				<nav id="toc" class="span3 bs-docs-sidebar">
					<ul class="nav nav-list bs-docs-sidenav">
						<li class="nav-header">Table of Contents</li>
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#career-opportunities"><i class="icon-chevron-right"></i>Career Opportunities</a></li>
						<li><a href="#domain-names"><i class="icon-chevron-right"></i>Choosing Domain Names</a></li>
						<li><a href="#history-internet"><i class="icon-chevron-right"></i>History of the Internet</a></li>
						<li><a href="#how-internet-works"><i class="icon-chevron-right"></i>How the Internet works?</a></li>
						<li><a href="#internet-protocols"><i class="icon-chevron-right"></i>Internet Protocols</a></li>
						<li><a href="#industry-terminology"><i class="icon-chevron-right"></i>Web Industry Terminology</a></li>
						<li><a href="#web-dev-apps"><i class="icon-chevron-right"></i>Popular Web Development Apps</a></li>
						<li><a href="#x-browser-compatibility"><i class="icon-chevron-right"></i>Cross Browser Compatibility</a></li>
						<li><a href="#dir-structure"><i class="icon-chevron-right"></i>Directory Structure</a></li>
						<li><a href="#html-intro"><i class="icon-chevron-right"></i>Introduction to HTML</a></li>

						<li class="nav-header">Assignments</li>
						<li><a href="#your-resume">Your Resume</a></li>
						<li><a href="#daily-terms">Study Terms of the Day</a></li>
						<li><a href="#independent-review">Independent Review</a></li>
					</ul>

					<br>
					<p>
						<span class="label label-important">Note:</span>
						consider site design in photoshop class
					</p>
				</nav>



				<!-- MAIN CONTENT -->

				<div id="main-content" class="span9">
					<div class="hero-unit">
						<h1>Frontend Basics</h1>
						<p>Week 1 Day 1</p>
					</div>



					<div class="accordion" id="accordion2">

						<?php # CAREER-OPPORTUNITIES ?>
						<section id="career-opportunities" class="accordion-group">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#career-opportunities-c">
								<h2>Career Opportunities</h2>
							</a>

							<div id="career-opportunities-c" class="accordion-body collapse">
								<div class="accordion-inner">
									<p>Here are some example job postings that illustrate the kind of skill sets the industry is looking for:</p>
									<p><span class="label label-warning">Playing Catch Up?</span> Review the job postings below and observe the particularly the highlighted portions to get a feel for what skill sets and technologies the industry is looking for.</p>
									<br>

									<ul class="thumbnails">
										<li class="span3">
											<div class="thumbnail">
												<img src="../../img/modus.jpg" data-src="holder.js/300x200" alt="Modus Create">
												<h3>Modus Create</h3>
												<p>We are a highly motivated, interdisciplinary team that believe in lean development, design strategy, and user experience to develop stunning applications with emerging technology.</p>
												<a class="btn btn-primary" href="../../sites/modus-create.htm" target="_new">Job Posting</a>
											</div>
										</li>

										<li class="span3">
											<div class="thumbnail">
												<img src="../../img/menlo.jpg" data-src="holder.js/300x200" alt="Menlo Technologies">
												<h3>Menlo Tech</h3>
												<p>Menlo Technologies takes the time to truly understand the needs of its clients. Instead of a one-size-fits-all approach, our Blended Delivery Model offers a unique approach...</p>
												<a class="btn btn-primary" href="../../sites/menlo-tech.htm" target="_new">Job Posting</a>
											</div>
										</li>

										<li class="span3">
											<div class="thumbnail">
												<img src="../../img/rht.jpg" data-src="holder.js/300x200" alt="Robert Half Technology">
												<h3>Robert Half Tech</h3>
												<p>Robert Half Technology can provide customers with a breadth of technology staffing solutions to meet all your project, contract-to-hire and full-time staffing needs.</p>
												<a class="btn btn-primary" href="../../sites/rh-tech.htm" target="_new">Job Posting</a>
											</div>
										</li>
									</ul>

									<h3 class="fyi">HTML and Semantics</h3>
									<h3 class="fyi">CSS and Popular Preprocessors</h3>
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

									<a class="btn" href="http://try.github.io/levels/1/challenges/1">
										Learn Git in your browser for free with<img src="../../img/try-git.png" alt="" width="64">
									</a>
									<h3 class="fyi">Command Line Interfaces</h3>
									<h3 class="fyi">Agile Methodology</h3>
									<h3 class="fyi">Industry Social Sites</h3>
									<h3>Popular Web Development Apps</h3>
								</div><!-- accordion-inner -->
							</div>
						</section>



						<?php # DOMAIN-NAMES ?>
						<section id="domain-names" class="accordion-group">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#domain-names-c">
								<h2>Choosing Domain Names</h2>
							</a>

							<div id="domain-names-c" class="accordion-body collapse">
								<div class="accordion-inner">
									<a class="btn btn-info" href="../../dl/Anthem_Domains_Template.xls">
										<i class="icon-arrow-down icon-white"></i>Excel Domain Template
									</a>

									<h3>Tips: Keep the following attributes in mine when choosing your domain name:</h3>
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



						<?php # HISTORY-INTERNET ?>
						<section id="history-internet" class="accordion-group">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#history-internet-c">
								<h2>History of the Internet</h2>
							</a>

							<div id="history-internet-c" class="accordion-body collapse">
								<div class="accordion-inner">
									<a href="http://prezi.com/iiwgavz9b_er/dd170-visual-communications/">Link to Prezi Presentation</a>
									<a href="http://prezi.com/pqaxvatssnyj/css/">Link to Prezi Presentation</a>
								</div><!-- accordion-inner -->
							</div>
						</section>



						<?php # HOW-INTERNET-WORKS ?>
						<section id="how-internet-works" class="accordion-group">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#how-internet-works-c">
								<h2>How the Internet Works</h2>
							</a>

							<div id="how-internet-works-c" class="accordion-body collapse">
								<div class="accordion-inner">
									content here
								</div><!-- accordion-inner -->
							</div>
						</section>



						<?php # HOW-INTERNET-WORKS ?>
						<section id="x-browser-compatibility" class="accordion-group">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#how-internet-works-c">
								<h2>How the Internet Works</h2>
							</a>

							<div id="how-internet-works-c" class="accordion-body collapse">
								<div class="accordion-inner">
									<h2>Internet Protocols</h2>
									content here
								</div><!-- accordion-inner -->
							</div>
						</section>



						<?php # SECTION-NAME ?>
						<section id="" class="accordion-group">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
								<h2>Viewable Title</h2>
							</a>

							<div id="collapseThree" class="accordion-body collapse">
								<div class="accordion-inner">
									content here
								</div><!-- accordion-inner -->
							</div>
						</section>




					</div><!-- accordion -->



					<section id="x-browser-compatibility">
						<h2>Cross Browser Compatibility</h2>
						<h3>Internet Explorer</h3>
						<p><span class="label label-important">Warning!</span> Don't use Internet Explorer for development and training.</p>
					</section>



					<h3>Best Practices</h3>
					<img src="../../img/keyboarding.jpg" alt="">
					<ul>
						<li>The fingers and the keys are color coded to show which finger handles which key.</li>
						<li>The fingers always rest on the HOME keys, these are the keys shown at the tip of each finger. The thumbs are used for the space bar.</li>
						<li>Each finger, with the exception of the index finger, handles three alphabetical keys: its HOME key, the key above it and the key below it. For instance, the left ring finger handles its home key S, the key W (above the home key) and the key X (below the home key).	 Therefore the finger always moves in between three keys, the home	 key, one	key up from the home key and one key down.</li>
						<li>The index finger handles its home key, the key above it and the key below V. In addition, the index finger handles the keys bordering the wall" of the box. For instance, the left index handles its home key (F), the key above it (R), the key below it (V) and the keys	vbordering the ridges, T G and B.</li>
					</ul>



					<section id="html-intro">
						<h2>Introduction to HTML</h2>
						<a href="http://docs.webplatform.org/wiki/beginners">Great Resource</a>
						<h3>Case Sensitivity</h3>
						TAGS - 2 Kinds of tags
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
					</section>

					<h1>Assignments</h1>
					<section id="your-resume">
						<h2>Your Resume</h2>
					</section>



					<section id="dir-structure">
						<h2>Directory Structure</h2>
						<h3>File Names</h3>
					</section>



					<section id="daily-terms">
						<h2>Study Terms of the Day</h2>
					</section>



					<section id="independent-review">
						<h2>Independent Review</h2>
					</section>



					<section id="references-resorces">
						<h2>References &amp; Additional Resources</h2>
						<a href="http://www.w3.org/TR/html5/">W3C HTML5 Spec</a>
						<a href="http://gsnedders.html5.org/outliner/">Semantic Structure Outliner</a>
					</section>
				</div><!--main-content-->
				<?php include('../../includes/footer.php'); ?>
