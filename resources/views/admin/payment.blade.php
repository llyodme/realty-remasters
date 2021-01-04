@yield('sidenavbar')
@extends('layout.layout')
@section('content') 
		<div class="container-fluid">
			<div class="col-lg-12 top-mg">
					<div class="container-box">
						<div class="container-box-header">
							<h2><img class="mr-2 mb-1" src="../img/dashboard.png" alt="">My Payments</h2>
						</div>
						<div class="inside-content">
							<div class="table-title">
								<div class="row">
									<div class="col-sm-6"><h2>Abandon pani sya planohon pa unsa e butang  <b>Dire or basin e earese nalang</b></h2></div>
									<div class="col-sm-3"> <a href="#"><button type="button" class="mt-auto btn btn-primary mr-5"> <img src="../img/payment.png" alt="add-payment-img" class="mb-.1 mr-2">Add Payment</button></a> </div>
	
									<div class="col-sm-3">
										<div class="search-box">
											<i class="material-icons">&#xE8B6;</i>
											<input type="text" class="form-control" placeholder="Search &hellip;">
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
										<th>Email</i></th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Thomas Hardy</td>
										<td>89 Chiaroscuro Rd.</td>
										<td>Portland</td>
										<td>97219</td>
										<td>USA</td>
										<td>USA</td>
										<td>
											<a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
											<a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
											<a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
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
                        </div>
                    </div>
            </div>            
        </div>
@endsection