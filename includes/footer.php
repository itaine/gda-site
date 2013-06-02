
		</div><!--page-inner-->
	</div><!--page-->

	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="../../bootstrap/js/bootstrap.min.js"></script>
	<script src="http://alexgorbatchev.com/pub/sh/current/scripts/shCore.js"></script>
	<script src="http://alexgorbatchev.com/pub/sh/current/scripts/shAutoloader.js"></script>
	<script src="http://alexgorbatchev.com/pub/sh/current/scripts/shBrushXml.js"></script>
	<script src="http://alexgorbatchev.com/pub/sh/current/scripts/shBrushJScript.js"></script>
	<script src="http://alexgorbatchev.com/pub/sh/current/scripts/shBrushCss.js"></script>

	<script>
		$('.carousel').carousel({
			interval: 2000
		})

		$('#myCollapsible').collapse({
			toggle: false
		})

		$(".instruction").popover({
			placement:'right',
			trigger: 'hover'
		});

		SyntaxHighlighter.all();
	</script>

	</body>
</html>
