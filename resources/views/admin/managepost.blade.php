@yield('sidenavbar')
@extends('layout.layout')
@section('content') 
		<div class="container-fluid">
			<div class="col-lg-12 top-mg">
					<div class="container-box">
						<div class="container-box-header">
							<h2><img class="mr-2 mb-1" src="../img/dashboard.png" alt="">Manage Post</h2>
						</div>
						<div class="inside-content">
							<div class="table-title">
								<div class="row">
									<div class="col-sm-7"><h2>Manage <b>Post</b></h2></div>
									<div class="col-sm-2"> <a href="/admin/create-post"><button type="button" class="mt-auto btn btn-primary"> <img src="../img/add-post.png" alt="add-user-img" class="mb-.1 mr-2"> Add Post</button></a> </div>
	
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
										<th>Title</th>
										<th>Price</th>
										<th>Description</th>
										<th>Date</i></th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
											<td>1001</td>
											<td>House and Lot</td>
											<td>₱400,000,00</td>
											<td>And more recently with desktop publishing software 
												like Aldus PageMaker including versions of Lorem Ipsum.</td>
											<td>12/12/2021</td>
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
								
								<!-- Modal for View -->
								<div class="viewmodal">
										<div class="modal fade" id="ViewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">View Post</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
												</div>
												<div class="modal-body">
													<form>
														
														<div class="form-row mt-2">
															<div class="col">
																<label>Title</label>
															<input type="text" class="form-control" placeholder="Title">
															</div>
															<div class="col">
																<label>Price</label>
															<input type="text" class="form-control" placeholder="Price">
															</div>
															<div class="col">
																<label>Description</label>
															<input type="text" class="form-control" placeholder="Description">
															</div>
														</div>
														</form>
																		
														<div class="form-row">
							
															<div class="form-group col-md-6">
																<label for="example-datetime-local-input" class=" col-form-label">Date</label>
																<div class="">
																	<input class="form-control" type="date" value="2011-08-19" id="example-date-input">
																</div>
															</div>
														</div>
														
													</form>
												</div>
										
											</div>
										</div>
								</div>
								<!-- End Modal for View -->

								<!-- Edit for View -->
								<div class="editmodal">
										<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Edit Post</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
												</div>
												<div class="modal-body">
													<form>
														
														<div class="form-row mt-2">
															<div class="col">
																<label>Title</label>
															<input type="text" class="form-control" placeholder="Title">
															</div>
															<div class="col">
																<label>Price</label>
															<input type="text" class="form-control" placeholder="Price">
															</div>
															<div class="col">
																<label>Description</label>
															<input type="text" class="form-control" placeholder="Description">
															</div>
														</div>
														</form>
																		
														<div class="form-row">
							
															<div class="form-group col-md-6">
																<label for="example-datetime-local-input" class=" col-form-label">Date</label>
																<div class="">
																	<input class="form-control" type="date" value="2011-08-19" id="example-date-input">
																</div>
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
										
								</div>
								<!-- End Modal for Edit -->

								<!-- Modal for Delete Post -->
								<div class="deletepost">
									
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
								<!-- Modal for Delete Post -->
                        </div>
                    </div>
            </div>            
        </div>
@endsection