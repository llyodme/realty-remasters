@yield('sidenavbar')
@extends('layout.layout')
@section('content') 
		<div class="container-fluid">
			<div class="col-lg-12 top-mg">
					<div class="container-box">
						<div class="container-box-header">
							<h2><img class="mr-2 mb-1" src="../img/add-post.png" alt="dashboard image logo">Create Post</h2>
						</div>
						<div class="inside-content">
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
                               
								<button type="submit" class="btn btn-primary mt-4">Add Post</button>
							</form>
                        </div>
                    </div>
            </div>            
        </div>
@endsection