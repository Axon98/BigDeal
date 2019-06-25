@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
			    	<label for="exampleInputPassword1">Message</label>
			   		<textarea class="form-control" id="exampleInputPassword1" rows="10"></textarea>
			 	</div>
			  	<button type="submit" class="btn btn-primary">Submit</button>
			</form>
        </div>
    </div>
</div>

@endsection