@extends('layouts.mainLayout')

@section('title')
    {{ 'Dashboard' }}
@endsection

@section('content')
    <div class='container'>
        <ul class="nav nav-tabs mt-5">
            <li class="nav-item">
                <a href='#' class="nav-link active" aria-current="page" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
                <a href='{{ route('users') }}'  class="nav-link" href="#">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tasks</a>
            </li>
            
        </ul>
    
        <div class='border-dark bg-light'>
            
            <div>
                <h1>Welcome</h1>


            </div>
        </div>
    </div>
@endsection