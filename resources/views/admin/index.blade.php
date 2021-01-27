@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Users</h1>    
  <table class="table table-striped">  
    <thead>
        <tr>
          <td>S.No</td>
          <td>Image</td>
          <td>Name</td>
          <td>Email</td>
          <td>Mobile</td>
          <td>Gender</td>
          <td>Role</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <div>
    <a style="margin: 19px;" href="{{ route('register')}}" class="btn btn-primary">Create Bloggers</a>
    </div> 
    <tbody>
        @foreach($users as $admin)
        <tr>
            <td>{{$admin->id}}</td>
            <td><img src="{{ Storage::url($admin->image) }}" height="50" alt="" /></td>
            <td>{{$admin->name}} </td>
            <td>{{$admin->email}}</td>
            <td>{{$admin->mobile}}</td>
            <td>{{$admin->gender}}</td>
            <td>{{$admin->role}}</td>
            <td>
            <a href="#" class="btn btn-primary">Show</a>
            </td>
            <td>
                <a href="#" class="btn btn-primary">Edit</a>
            </td>
            <td>
            <form action="#" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
    @endsection
    <div class="col-sm-12">

    @if(session()->get('success'))
        <div class="alert alert-success">
        {{ session()->get('success') }}  
        </div>
    @endif
    </div>
    <div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
    