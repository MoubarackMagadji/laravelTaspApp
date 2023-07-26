@extends('layouts.mainLayout')

@section('title')
    {{ 'Dashboard' }}
@endsection



@section('content')
    <div class='container'>
        <ul class="nav nav-tabs mt-5">
            <li class="nav-item">
                <a href='{{ route('dashboard') }}' class="nav-link "  >Dashboard</a>
            </li>
            <li class="nav-item">
                <a href='{{ route('users') }}'  class="nav-link ">Users</a>
            </li>
            <li class="nav-item">
                <a href='#' class="nav-link active"  aria-current="page">Tasks</a>
            </li> 
        </ul>
    
        <div class='border-dark bg-light'>
            
        </div>
    </div>
@endsection


@section('script')
    <script>
        
        console.log('okok')
    </script>
@endsection