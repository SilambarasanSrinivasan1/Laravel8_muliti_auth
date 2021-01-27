@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update Database</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('admins.update',) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="username">Name</label>
                <input type="text" class="form-control" name="name" value={{ $database->name }} />
            </div>
        
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value={{ $database->email }} />
            </div>
            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input type="text" class="form-control" name="mobile" value={{ $database->mobile }} />
            </div>
            <div class="form-group">
                <label for="country">Gender</label>
                <input type="text" class="form-control" name="gender" value={{ $database->gender }} />
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <input type="text" class="form-control" name="role" value={{ $database->role }} />
            </div>
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <br>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection