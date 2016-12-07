<script>
	init.push(function () {
		$('#jq-datatables-example').dataTable();
		$('#jq-datatables-example_wrapper .table-caption').text('All Posts');
		$('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
	});
</script>

<div class="panel">
	<div class="panel-heading">
		<span class="panel-title">All Posts</span>

	</div>
	<div class="panel-body">
		<div class="table-success">
			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
				<thead>
					<tr>
						<th>Post No.</th>
						<th>Post Title</th>
						<th>Post By</th>
						<th>Date Time</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					
					<?php
						
						foreach ($getListPosts-> result() as $u)
						{
							echo "<tr>"
									."<td>$u->post_id</td>"
									."<td>$u->post_title</td>"
									."<td>$u->post_author</td>"
									."<td>$u->post_date</td>"
									."<td>
										<a href='".base_url()."dashboard/Post/updatePosts/$u->post_id'>
											<button class='btn btn-rounded btn-sm btn-labeled btn-warning'><span class='btn-label icon fa fa-camera-retro'></span>Edit</button>
										</a>
										<a href='".base_url()."dashboard/Post/deletePosts/$u->post_id'>
											<button id='ui-bootbox-confirm' class='btn btn-lg btn-rounded btn-sm btn-labeled btn-danger'><span class='btn-label icon fa fa-camera-retro'></span>Delete</button>
										</a>
									</td>"
								."</tr>";

						}
					?>
					

				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- /11. $JQUERY_DATA_TABLES -->
