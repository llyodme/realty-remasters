@yield('sidenavbar')
@extends('layout.layout')
@section('content') 
		<div class="container-fluid">
			<div class="col-lg-12 top-mg">
					<div class="container-box">
						<div class="container-box-header">
							<h2><img class="mr-2 mb-1" src="../img/dashboard.png" alt="">My Account</h2>
						</div>
						<div class="inside-content">
							<form>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputEmail4">Name</label>
                                    <input type="email" class="form-control" placeholder=Name>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputPassword4">Lastname</label>
                                    <input type="password" class="form-control" placeholder="Lastname">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputAddress">Email</label>
                                  <input type="text" class="form-control w-60" id="inputAddress" placeholder="@gmail.com">
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                              </form>
                              <form>
                                <div class="form-group mt-1">
                                  <label class="mt-5" for="formGroupExampleInput2"><h2>Change Password</h2></label> <br>
                                  <label for="formGroupExampleInput">Password</label>
                                  <input type="text" class="form-control w-50" id="formGroupExampleInput" placeholder="Current Password">
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput2">New Password</label>
                                  <input type="text" class="form-control w-50" placeholder="Password">
                                  <input type="text" class="form-control w-50 mt-3" placeholder="Confirm Password">
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                              </form>
                        </div>
                    </div>
            </div>            
        </div>
@endsection