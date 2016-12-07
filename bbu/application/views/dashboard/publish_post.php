<?php
	$hid = isset($row->post_id)?$row->post_id:0;
	$post_title = isset($row->post_title)?$row->post_title:'';
	$post_description = isset($row->post_description)?$row->post_description:'';

/*	$publish = base_url();
	$update = base_url();*/
?>

<form method="post" action="<?= base_url() ?>dashboard/Post/addNewPost">

	<div id="content-wrapper">
		<div class="page-header">
		<div class="row">
			<div class="col-md-2">
				<h1>Post title</h1>
			</div>
			<div class="col-md-9">
				<input type="hidden" name="hid" value="" >
				<input type="text" name="txttitle" class="form-control" value="<?= $post_title ?>" placeholder="title">
			</div>
			<div class="col-md-1">
				<input type="submit" class="btn btn-success" value="Publish" name="btnPublish" >
			</div>

		</div>



		</div> <!-- / .page-header -->

	<!-- 5. $SUMMERNOTE_WYSIWYG_EDITOR =================================================================

		<!-- Javascript -->
		<script>
			init.push(function () {
				if (! $('html').hasClass('ie8')) {
					$('#summernote-example').summernote({
						height: 500,
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
				<span class="panel-title"><i class="fa fa-link"></i></a></span>
				<div class="panel-heading-controls">
					<span class="panel-heading-text" style="font-size:11px;font-weight:600;">BOXED&nbsp;&nbsp;</span>
					<input type="checkbox" data-class="switcher-sm" id="summernote-boxed">
				</div> <!-- / .panel-heading-controls -->
			</div>
			<div class="panel-body">
				<textarea class="form-control" name="txtdescription" id="summernote-example"><?= $post_description ?></textarea>
			</div>
		</div>
	<!-- /5. $SUMMERNOTE_WYSIWYG_EDITOR -->


	<!-- 6. $BOOTSTRAP_MARKDOWN ========================================================================

		Bootstrap Markdown
	-->
		<!-- Javascript -->
		<script>
			init.push(function () {
				if (! $('html').hasClass('ie8')) {
					$("#bs-markdown-example").markdown({ iconlibrary: 'fa' });
				}

				$('#markdown-boxed').switcher({
					on_state_content: '<span class="fa fa-check" style="font-size:11px;"></span>',
					off_state_content: '<span class="fa fa-times" style="font-size:11px;"></span>'
				});
				$('#markdown-boxed').on($('html').hasClass('ie8') ? "propertychange" : "change", function () {
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
	</div> <!-- / #content-wrapper -->
</form>