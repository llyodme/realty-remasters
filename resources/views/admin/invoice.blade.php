@yield('sidenavbar')
@extends('layout.layout')
@section('content') 
		<div class="container-fluid">
			<div class="col-lg-12 top-mg">
					<div class="container-box">
						<div class="container-box-header">
							<h2><img class="mr-2 mb-1" src="../img/invoice.png" alt="">My Invoices</h2>
						</div>
						<div class="inside-content">
							<div class="table-title">
								<div class="row">
									<div class="col-sm-7"><h2>Invoices <b>Details</b></h2></div>
									<div class="col-sm-2"> <a href="/admin/create-invoice"><button type="button" class="mt-auto btn btn-primary"> <img src="../img/payment.png" alt="add-payment-img" class="mb-.1 mr-2">Add Invoice</button></a> </div>
	
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
										<th>Product #</th>
										<th>Amount</th>
										<th>Date of Payment</i></th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Thomas Hardy</td>
										<td>1002</td>
										<td>₱400,00</td>
										<td>12/12/2021</td>
										<td>
											<a href="#" class="view" title="View" data-toggle="modal" data-target="#ViewModal"><i class="material-icons">&#xE417;</i></a>
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
								<div class="modal fade" id="ViewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">View Invoice</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										</div>
										<div class="modal-body">
											<form>
												<div class="form-row">
													<div class="col-md-4">
														<label>Role ID</label>
														<input type="text" class="form-control" placeholder="Role ID">
													</div>
												</div>
												<div class="form-row mt-2">
													<div class="col">
														<label>First name</label>
													<input type="text" class="form-control" placeholder="First name">
													</div>
													<div class="col">
														<label>Amount</label>
													<input type="text" class="form-control" placeholder="Amount">
													</div>
													<div class="col">
														<label>Product ID</label>
													<input type="text" class="form-control" placeholder="Product ID">
													</div>
												</div>
												</form>		
												<div class="form-row">
													<div class="form-group col-md-6">
														<label for="example-datetime-local-input" class=" col-form-label">Date and time</label>
														<div class="">
															<input class="form-control" type="date" value="2011-08-19" id="example-date-input">
														</div>
													</div>	
												</div>
											</form>
										</div>
								
									</div>
								</div>
								<!-- End Modal for View -->

                        </div>
                        </div>
                    </div>
            </div>            
        </div>
@endsection 