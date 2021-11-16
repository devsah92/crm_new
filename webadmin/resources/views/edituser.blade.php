
@extends('template.main')
@section('main-container')
<div class="main " id="main" >

	<head>
		
		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	</head>

 	<div class="card">
	 <div class="card-body">
	  <h5 class="card-title">Update User Details</h5>

	  @foreach ($data as $item)
		  
	  
	  <!-- Multi Columns Form -->
	  <form class="row g-3" method="POST" action="{{url('/')}}/update/{{$item->userid}}">
		@csrf
		<div class="col-md-6">
		  <label for="inputName5" class="form-label">New Name</label>
		  <input name="name"  type="text" class="form-control" id="inputName5" value="{{ $item->name}}"    >
		  <span class="text-danger">
			@error('name')
		   {{$message}} 
				
			@enderror
		  </span>
		</div>

		<div class="col-md-6">
			<label for="inputName6" class="form-label">New Role</label>
			  <select name="role" id="" class="form-control">
				  @foreach ($rdata as $item1)
					  <option value="{{$item1->role}}" selected>{{$item1->role}}</option>
				  @endforeach
			  </select>
		</div>


		<div class="col-md-6">
		  <label for="inputEmail5" class="form-label">New Email</label>
		  <input type="email" name="email" class="form-control" id="inputEmail5" value="{{ $item->email}}">
		  <span class="text-danger">
			@error('email')
		   {{$message}} 
				
			@enderror
		  </span>
		</div>
		<div class="col-md-6">
		  <label for="inputmobile" class="form-label">New Contact</label>
		  <input type="number" name="mobile" class="form-control" id="contact"  value="{{ $item->mobile}}">
		  <span class="text-danger">
			@error('mobile')
		   {{$message}} 
				
			@enderror
		  </span>
		</div>
		<div class="col-6">
		  <label for="inputAddress5" class="form-label">New UserId</label>
		  <input type="text" name="userid" class="form-control" id="inputAddres5s" placeholder="1234 Main St" value="{{ $item->userid}}">
		</div>
		<div class="col-md-6">
		  <label for="inputPassword5" class="form-label">New Password</label>
		  <input type="password" name="password" class="form-control" id="inputPassword5" value="{{ $item->password}}" >
		</div>
		
		<div class="col-4">
		  <label for="inputAddress2" class="form-label">Status</label>
		  <input type="text" name="status" class="form-control" id="inputAddress2" placeholder="" value="{{ $item->status}}">
		</div>
		
		<div class="col-md-4">
		  <label for="inputState" class="form-label">State</label>
		  <input type="text" name="state" class="form-control" id="inputAddress2" placeholder="" value="{{ $item->state}}">
		</div>
        <div class="col-md-4">
		  <label for="inputCity" class="form-label">City</label>
		  <input type="text" name="city" class="form-control" id="inputCity" value="{{ $item->city}}">
		</div>
	   
	   
		<div class="text-center">
			
				<button type="submit" class="btn btn-primary">Submit</button>
		
		 
		  <button type="reset" class="btn btn-secondary">Reset</button>
		</div>
	  </form><!-- End Multi Columns Form -->
	  @endforeach
	 </div>
  	</div>

</div>
@endsection