				<?php include('../../includes/header.php'); ?>
				<?php include('../../includes/nav.php'); ?>
				<!-- SIDEBAR NAVIGATION -->

				<nav id="toc" class="span3 bs-docs-sidebar">
					<ul class="nav nav-list bs-docs-sidenav">
						<li class="nav-header">Table of Contents</li>
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#"><i class="icon-chevron-right"></i>Code Formatting</a></li>
						<li><a href="#"><i class="icon-chevron-right"></i>Heading Tag</a></li>
						<li><a href="#"><i class="icon-chevron-right"></i>Paragraph Tag</a></li>
						<li><a href="#"><i class="icon-chevron-right"></i>Anchor Tag</a></li>
						<li><a href="#"><i class="icon-chevron-right"></i>Rule Tag</a></li>
						<li><a href="#"><i class="icon-chevron-right"></i>Meta Tag</a></li>

						<li class="nav-header">Assignments</li>
						<li><a href="#">assignment 1</a></li>
						<li><a href="#">assignment 2</a></li>
					</ul>

					<br>
					<p><span class="label label-important">Note:</span> enter note.</p>
				</nav>

				<!-- MAIN CONTENT -->

				<div id="main-content" class="span9">
					<div class="hero-unit">
						<h1>HTML Essentials</h1>
						<p>Week 1 Day 2</p>
					</div>



					<section id="section-tag">
						<h2>The &lt;section&gt; Tag</h2>
						<p>
							The section element represents a generic section of a document or application. A section, in this context, is a thematic grouping of content, typically with a heading.
						</p>
						<p>
							Examples of sections would be chapters, the various tabbed pages in a tabbed dialog box, or the numbered sections of a thesis. A Web site's home page could be split into sections for an introduction, news items, and contact information.
						</p>
						<p>
							Note: Authors are encouraged to use the article element instead of the section element when it would make sense to syndicate the contents of the element.
						</p>
						<p>
							The section element is not a generic container element. When an element is needed for styling purposes or as a convenience for scripting, authors are encouraged to use the div element instead. A general rule is that the section element is appropriate only if the element's contents would be listed explicitly in the document's outline.
						</p>
					</section>



					<section id="article-tag">
						<h2>The &lt;article&gt; Tag</h2>
						<p>
							The article element represents a complete, or self-contained, composition in a document, page, application, or site and that is, in principle, independently distributable or reusable, e.g. in syndication. This could be a forum post, a magazine or newspaper article, a blog entry, a user-submitted comment, an interactive widget or gadget, or any other independent item of content.
						</p>
					</section>
				</div><!--main-content-->
				<?php include('../../includes/footer.php'); ?>
