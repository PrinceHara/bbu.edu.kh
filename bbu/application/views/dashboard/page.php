<!-- 5. $SUMMERNOTE_WYSIWYG_EDITOR =================================================================

		Summernote WYSIWYG-editor
-->
		<!-- include codemirror (codemirror.css, codemirror.js, xml.js, formatting.js)-->
		<link rel="stylesheet" type="text/css" href="../cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.min.css" />
		<link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/blackboard.min.css">
		<link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.min.css">
		<script type="text/javascript" src="../cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.js"></script>
		<script src="../cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.min.js"></script>
		<script src="../cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.min.js"></script>

		<!-- Javascript -->
		<script>
			init.push(function () {
				if (! $('html').hasClass('ie8')) {
					$('#summernote-example').summernote({
						height: 200,
						tabsize: 2,
						codemirror: {
							theme: 'monokai'
						}
					});
				}
				$('#summernote-boxed').switcher({
					on_state_content: '<span class="fa fa-check" style="font-size:11px;"></span>',
					off_state_content: '<span class="fa fa-times" style="font-size:11px;"></span>'
				});
				$('#summernote-boxed').on($('html').hasClass('ie8') ? "propertychange" : "change", function () {
					var $panel = $(this).parents('.panel');
					if ($(this).is(':checked')) {
						$panel.find('.panel-body').addClass('no-padding');
						$panel.find('.panel-body > *').addClass('no-border');
					} else {
						$panel.find('.panel-body').removeClass('no-padding');
						$panel.find('.panel-body > *').removeClass('no-border');
					}
				});
			});
		</script>
		<!-- / Javascript -->

		<div class="panel">
			<div class="panel-heading">
				<span class="panel-title"><a href="http://hackerwins.github.io/summernote/" target="_blank">Summernote WYSIWYG-editor <i class="fa fa-link"></i></a></span>
				<div class="panel-heading-controls">
					<span class="panel-heading-text" style="font-size:11px;font-weight:600;">BOXED&nbsp;&nbsp;</span>
					<input type="checkbox" data-class="switcher-sm" id="summernote-boxed">
				</div> <!-- / .panel-heading-controls -->
			</div>
			<div class="panel-body">
				<textarea class="form-control" id="summernote-example" rows="10"><p>Seasons <b>coming up</b></p></textarea>
			</div>
		</div>
<!-- /5. $SUMMERNOTE_WYSIWYG_EDITOR -->
