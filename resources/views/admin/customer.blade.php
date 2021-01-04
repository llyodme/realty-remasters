@yield('sidenavbar')
@extends('layout.layout')
@section('content') 
		<div class="container-fluid">
			<div class="col-lg-12 top-mg">
					<div class="container-box">
						<div class="container-box-header">
							<h2><img class="mr-2 mb-1" src="../img/dashboard.png" alt="">My Customer</h2>
						</div>
						<div class="inside-content">
							<div class="table-title">
								<div class="row">
									<div class="col-sm-7"><h2>Customer <b>Details</b></h2></div>
									<div class="col-sm-2"> <a href="/admin/create"><button type="button" class="mt-auto btn btn-primary"> <img src="../img/add-customer.png" alt="add-user-img"></button></a> </div>
	
									<div class="col-sm-3">
										<div class="search-box">
											<i class="material-icons">&#xE8B6;</i>
											<input type="text" class="form-control" placeholder="Search&hellip;">
										</div>
									</div>
								</div>
							</div>
							<table class="table table-striped table-hover table-bordered">
								<thead>
									<tr>
										<th>#</th>
										<th>First Name</th>
										<th>Middle Name</th>
										<th>Last Name</th>
										<th>Birth Date</i></th>
										<th>City</th>
										<th>Gender</i></th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1011</td>
										<td>Thomas</td>
										<td>Dope</td>
										<td>Harly</td>
										<td>01/01/1997</td>
										<td>Iligan City</td>
										<td>Male</td>
										<td>
											<a href="#" class="view" title="View" data-toggle="modal" data-target="#ViewModal"><i class="material-icons">&#xE417;</i></a>
											<a href="#" class="edit" title="Edit" data-toggle="modal" data-target="#EditModal"><i class="material-icons">&#xE254;</i></a>
											<a href="#" class="delete" title="Delete" data-toggle="modal" data-target="#DeleteModal"><i class="material-icons">&#xE872;</i></a>
										</td>
									</tr>

								</tbody>
							</table>
								<div class="clearfix">
									<div class="hint-text">Showing <b>1</b> out of <b>25</b> entries</div>
									<ul class="pagination">
										<li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
										<li class="page-item"><a href="#" class="page-link">1</a></li>
										<li class="page-item"><a href="#" class="page-link">2</a></li>
										<li class="page-item active"><a href="#" class="page-link">3</a></li>
										<li class="page-item"><a href="#" class="page-link">4</a></li>
										<li class="page-item"><a href="#" class="page-link">5</a></li>
										<li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
									</ul>
								</div>
									<div class="viewmodal">
										<!-- Modal for View -->
											<div class="modal fade" id="ViewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">View Customer</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
													</div>
													<div class="modal-body">
														<form>
															<div class="form-row">
																<div class="col-md-4">
																	<label>Role ID</label>
																	<input type="text" class="form-control" placeholder="role id">
																</div>
															</div>
															<div class="form-row mt-2">
																<div class="col">
																	<label>First name</label>
																<input type="text" class="form-control" placeholder="First name">
																</div>
																<div class="col">
																	<label>Middle name</label>
																<input type="text" class="form-control" placeholder="Middle name">
																</div>
																<div class="col">
																	<label>Last name</label>
																<input type="text" class="form-control" placeholder="Last name">
																</div>
															</div>
															</form>
															<div class="form-row mt-3">
															<div class="form-group col-md-6">
																<label for="inputEmail4">Email</label>
																<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
															</div>
															<div class="form-group col-md-6">
																<label for="inputPassword4">Password</label>
																<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
															</div>
															</div>				
															<div class="form-row">
							
																<div class="form-group col-md-6">
																	<label class="mt-2" for="inlineFormCustomSelect">Gender</label>
																	<select class="custom-select" id="inlineFormCustomSelect">
																		<option selected>Male</option>
																		<option value="1">female</option>
																	</select>
																</div>
																<div class="form-group col-md-6">
																	<label for="example-datetime-local-input" class=" col-form-label">Date and time</label>
																	<div class="">
																		<input class="form-control" type="date" value="2011-08-19" id="example-date-input">
																	</div>
																</div>
																	
															</div>
															
															<div class="form-row">
																<div class="form-group col-md-6">
																	<label for="inputBarangay">Barangay</label>
																	<input type="text" class="form-control" id="inputBarangay" placeholder="Bry. Address">
																</div>
															<div class="form-group col-md-3">
																<label for="inputCity">City</label>
																<input type="text" class="form-control" id="inputCity">
															</div>
															<div class="form-group col-md-3">
																<label for="inputCity">Province</label>
																<input type="text" class="form-control" id="inputCity">
															</div>
															</div>
														</form>
													</div>
											
												</div>
											</div>
											<!-- End Modal for View -->
									</div>
								
									<div class="editmodal">
										<!-- Modal for Edit -->
										<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Edit Customer</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
												</div>
												<div class="modal-body">
													<form>
														<div class="form-row">
															<div class="col-md-4">
																<label>Role ID</label>
																<input type="text" class="form-control" placeholder="role id">
															</div>
														</div>
														<div class="form-row mt-2">
															<div class="col">
																<label>First name</label>
															<input type="text" class="form-control" placeholder="First name">
															</div>
															<div class="col">
																<label>Middle name</label>
															<input type="text" class="form-control" placeholder="Middle name">
															</div>
															<div class="col">
																<label>Last name</label>
															<input type="text" class="form-control" placeholder="Last name">
															</div>
														</div>
														</form>
														<div class="form-row mt-3">
														<div class="form-group col-md-6">
															<label for="inputEmail4">Email</label>
															<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
														</div>
														<div class="form-group col-md-6">
															<label for="inputPassword4">Password</label>
															<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
														</div>
														</div>				
														<div class="form-row">

															<div class="form-group col-md-6">
																<label class="mt-2" for="inlineFormCustomSelect">Gender</label>
																<select class="custom-select" id="inlineFormCustomSelect">
																	<option selected>Male</option>
																	<option value="1">female</option>
																</select>
															</div>
															<div class="form-group col-md-6">
																<label for="example-datetime-local-input" class=" col-form-label">Date and time</label>
																<div class="">
																	<input class="form-control" type="date" value="2011-08-19" id="example-date-input">
																</div>
															</div>
																
														</div>
														
														<div class="form-row">
															<div class="form-group col-md-6">
																<label for="inputBarangay">Barangay</label>
																<input type="text" class="form-control" id="inputBarangay" placeholder="Bry. Address">
															</div>
														<div class="form-group col-md-3">
															<label for="inputCity">City</label>
															<input type="text" class="form-control" id="inputCity">
														</div>
														<div class="form-group col-md-3">
															<label for="inputCity">Province</label>
															<input type="text" class="form-control" id="inputCity">
														</div>
														</div>
													</form>
												</div>
												<div class="modal-footer mt-5">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div>
										</div>
										<!-- End Modal for View -->
									</div>
									<div class="deletecustomer">
										<!-- Modal -->
											<div class="modal fade mt-5" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Delete</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
													</div>
													<div class="modal-body">
														Are you sure you want to delete?
															
													</div>
													<div class="modal-footer mt-5">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
													<button type="button" class="btn btn-primary">Yes</button>
													</div>
												</div>
												</div>
											</div>
									</div>
                    </div>
            </div>            
        </div>
@endsection


