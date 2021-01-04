@yield('sidenavbar')
@extends('layout.layout')
@section('content') 
		<div class="container-fluid">
			<div class="col-lg-12 top-mg">
					<div class="container-box">
						<div class="container-box-header">
							<h2><img class="mr-2 mb-1" src="../img/add-post.png" alt="dashboard image logo">Create Invoice</h2>
						</div>
						<div class="inside-content">
                            <form>
								<div class="form-row">
                                    <div class="col-md-4">
										<label>ID</label>
										<input type="text" class="form-control" placeholder="id">
                                    </div>
									<div class="col-md-4">
										<label>User ID</label>
										<input type="text" class="form-control" placeholder="user id">
                                    </div>
                                    <div class="col-md-4">
										<label>Product ID</label>
										<input type="text" class="form-control" placeholder="product id">
									</div>
								</div>
								<div class="form-row mt-2">
									<div class="col">
										
									</div>
								  </div>
								</form>				
								<div class="form-row">

									<div class="form-group col-md-6 mt-auto">
										<label>Amount</label>
									  <input type="text" class="form-control" placeholder="Amount">
									</div>
									<div class="form-group col-md-6">
										<label for="example-datetime-local-input" class=" col-form-label">Date and time</label>
										<div class="">
											<input class="form-control" type="date" value="2011-08-19" id="example-date-input">
										</div>
									</div>
										
								  </div>
								<button type="submit" class="btn btn-primary mt-4">Add Invoice</button>
							</form>
                        </div>
                    </div>
            </div>            
        </div>
@endsection