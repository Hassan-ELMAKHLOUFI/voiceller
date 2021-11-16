@extends('layouts.app')

@section('css')
	<!-- Data Table CSS -->
	<link href="{{URL::asset('plugins/datatable/datatables.min.css')}}" rel="stylesheet" />
@endsection

@section('page-header')
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">Support Request</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="mdi mdi-account-alert mr-2 fs-12"></i>User</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}"> Support Request</a></li>
			</ol>
		</div>
		<div class="page-rightheader">
			<a href="{{ route('user.support.create') }}" class="btn btn-primary mt-1">New Support Request</a>
		</div>
	</div>
	<!-- END PAGE HEADER -->
@endsection

@section('content')						
	<!-- SUPPORT REQUEST DATA TABLE -->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-xm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-header">
					<h3 class="card-title">My Support Request List</h3>
				</div>
				<div class="card-body pt-2">
					<!-- BOX CONTENT -->
					<div class="box-content">
						<!-- SET DATATABLE -->
						<table id='supportRequestsTable' class='table' width='100%'>
							<thead>
								<tr>
									<th width="10%">Created Date</th>
									<th width="10%">Priority</th>
									<th width="10%">Category</th>	
									<th width="15%">Subject</th>										
									<th width="10%">Status</th>
									<th width="10%">Last Updated Date</th>									
									<th width="5%">Actions</th>
								</tr>
							</thead>
						</table> <!-- END SET DATATABLE -->
					</div> <!-- END BOX CONTENT -->
				</div>
			</div>
		</div>
	</div>
	<!-- END SUPPORT REQUEST DATA TABLE -->

	<!-- MODAL -->
	<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel"><i class="mdi mdi-alert-circle-outline color-red"></i> Confirm Deletion</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="deleteModalBody">
					<div>
						<!-- DELETE CONFIRMATION -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END MODAL -->
@endsection

@section('js')
	<!-- Data Tables JS -->
	<script src="{{URL::asset('plugins/datatable/datatables.min.js')}}"></script>
	<script type="text/javascript">
		$(function () {

			"use strict";
			
			// INITILIZE DATATABLE
			var table = $('#supportRequestsTable').DataTable({
				"lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],
				responsive: true,
				colReorder: true,
				"order": [[ 0, "desc" ]],
				language: {
					"emptyTable": "<div><img id='no-results-img' src='{{ URL::asset('img/files/no-support.png') }}'><br>You have not created any support tickets yet</div>",
					search: "<i class='fa fa-search search-icon'></i>",
					lengthMenu: '_MENU_ ',
					paginate : {
						first    : '<i class="fa fa-angle-double-left"></i>',
						last     : '<i class="fa fa-angle-double-right"></i>',
						previous : '<i class="fa fa-angle-left"></i>',
						next     : '<i class="fa fa-angle-right"></i>'
					}
				},
				pagingType : 'full_numbers',
				processing: true,
				serverSide: true,
				ajax: "{{ route('user.support') }}",
				columns: [{
						data: 'created-on',
						name: 'created-on',
						orderable: true,
						searchable: true
					},
					{
						data: 'custom-priority',
						name: 'custom-priority',
						orderable: true,
						searchable: true
					},
					{
						data: 'category',
						name: 'category',
						orderable: true,
						searchable: true
					},
					{
						data: 'subject',
						name: 'subject',						
						orderable: false,
						searchable: true
					},
					{
						data: 'custom-status',
						name: 'custom-status',
						orderable: true,
						searchable: true
					},
					{
						data: 'resolved_on',
						name: 'resolved_on',
						orderable: true,
						searchable: true
					},					
					{
						data: 'actions',
						name: 'actions',
						orderable: false,
						searchable: false
					},
				]
			});

			
			// DELETE CONFIRMATION MODAL
			$(document).on('click', '#deleteTicketButton', function(event) {
				event.preventDefault();
				let href = $(this).attr('data-attr');
				$.ajax({
					url: href
					, beforeSend: function() {
						$('#loader').show();
					},
					// return the result
					success: function(result) {
						$('#deleteModal').modal("show");
						$('#deleteModalBody').html(result).show();
					}
					, error: function(jqXHR, testStatus, error) {
						console.log(error);
						alert("Page " + href + " cannot open. Error:" + error);
						$('#loader').hide();
					}
					, timeout: 8000
				})
			});

		});
	</script>
@endsection