@yield('sidenavbar')
@extends('layout.layout')
@section('content') 
		<div class="container-fluid">
			<div class="col-lg-12 top-mg">
					<div class="container-box">
						<div class="container-box-header">
							<h2><img class="mr-2 mb-1" src="../img/dashboard.png" alt="dashboard image logo">Create Customer</h2>
						</div>
						<div class="inside-content">
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
								
								<button type="submit" class="btn btn-primary mt-auto">Add customer</button>
							  </form>
                        </div>
                    </div>
            </div>            
        </div>
@endsection