@extends('layouts.app')

@section('content')
<div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          W2S University
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a href="#" class="nav-link">
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a href="{{route('admin.index')}}" class="nav-link" href="#0">
              <p>Bloggers List</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a href="role.php" class="nav-link" href="#0">
              <p>Roles</p>
            </a>
          </li>
          </div> 


@endsection