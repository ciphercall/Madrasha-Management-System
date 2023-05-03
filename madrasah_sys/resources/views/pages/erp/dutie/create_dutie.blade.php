

<!-- Add Employee Modal -->
<div id="add_duty" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Employee</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			{{-- add employee--}}
			<div class="modal-body">
				<form action="{{route('dutys.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label class="col-form-label">Duty / নাম : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="txtName" name="txtName" placeholder="Enter Full Duty Name" required>
							</div>
						</div>
						
					</div>
				
					<div class="submit-section">
						<input class="btn btn-primary submit-btn" type="submit"  name="btnCreate" value="Submit">

					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Add Employee Modal -->

