@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add Database</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form enctype="multipart/form-data" method="post" action="{{ route('users.store') }}">
          @csrf
          <div class="form-group">    
              <label for="username">User Name:</label>
              <input type="text" class="form-control" name="username"/>
          </div>
          <div class="form-group">    
              <label for="firstname">First Name:</label>
              <input type="text" class="form-control" name="firstname"/>
          </div>

          <div class="form-group">
              <label for="lastname">Last Name:</label>
              <input type="text" class="form-control" name="lastname"/>
          </div>

          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="email">Password:</label>
              <input type="text" class="form-control" name="password"/>
          </div>
          <div class="form-group">
              <label for="mobile">Mobile:</label>
              <input type="text" class="form-control" name="mobile"/>
          </div>
          <div class="form-group">
              <label for="gender">Gender</label>
              <input type="text" class="form-control" name="gender"/>
          </div>
          <div class="form-group">
              <label for="role">Role</label>
              <input type="text" class="form-control" name="role"/>
          </div>   
          <div class="form-group">
    
                <div class="col-md-6">
                    <input type="file" name="image" class="form-control">
                </div>
                </div>
          <br>               
          <button type="submit" class="btn btn-primary-outline">Submit</button>
      </form>
  </div>
</div>
</div>
@endsection