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
            <div class="d-flex justify-content-between ">
                <h1 class='mb-3'>Tasks list</h1>

                <a href='{{route('createTask')}}' class='align-self-center'>
                    <button  class='btn btn-dark btn-sm px-3 ' style="height: 30px"> Create a tasks</button>
                </a>

            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        
        console.log('okok')
    </script>
@endsection