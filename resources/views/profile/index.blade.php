@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form>
                    	<div class="form-group">
					    	<label for="exampleInputEmail1">Name</label>
					    	<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
					 	</div>
					 	<div class="form-group">
					    	<label for="exampleInputEmail1">Surname</label>
					    	<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter surname">
					 	</div>
					 	<div class="form-group">
					    	<label for="exampleInputEmail1">Email address</label>
					    	<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					 	</div>
					 	<div class="form-group">
					    	<label for="exampleInputPassword1">Password</label>
					   		<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					 	</div>
					  	<button type="submit" class="btn btn-primary">Submit</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection