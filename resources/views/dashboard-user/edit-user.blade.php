@include('layouts.app-user-new')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item">My Dashboard</li>
        <li class="breadcrumb-item active">Edit Profile</li>
      </ol>
      <form method="post" action="/user/{{ $user->id }}"  enctype="multipart/form-data">
            {{csrf_field()}}
            {{ method_field('PUT')}}
            <div class="card">
                <div class="card-header">Edit Profile</div>
         
            <div class="card-body">
            	<div class="form-group">
				        <label for="exampleInputName1">Name</label>
				        <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{$user->name}}">
                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
				      </div>
	            <div class="form-group">
				        <label for="exampleInputEmail1">Email address</label>
				        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="{{$user->email}}">
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
				        <small id="emailHelp" class="form-text text-muted">Well never share your email with anyone else.</small>
				      </div>
              <div class="form-group">
                <label for="exampleInputBirth1">Birth Date</label>
                <input type="date" class="form-control" id="exampleInputBirth1" name="birth" value="{{$user->birth}}">
                @if ($errors->has('birth'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('birth') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group">
                  <div class="form-row">
                      <label for="gender">{{ __('Gender') }}</label>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="gender" id="gender" value="Male" checked>
                                        Male
                        </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
                                        Female
                        </label>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                <label for="exampleInputAddress1">Address</label>
                <input type="text" class="form-control" id="exampleInputAddress1" name="address" value="{{$user->address}}">
                @if ($errors->has('address'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-group">
                <label for="exampleProfpic1">Profile Picture</label>
                <input type='file' name='profilepic' id='file' class='form-control' >
              </div>

	            <button type="submit"  class="btn btn-primary">
	                Submit
	            </button>  
	        </div>
	       </div>
        </form>
    </div>

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Penida Hill 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
@include('layouts.modal-logout-user')