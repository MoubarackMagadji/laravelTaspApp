@extends('layouts.mainLayout')

@section('title')
    {{ 'Dashboard' }}
@endsection

@section('content')
    <div class='container'>
        <ul class="nav nav-tabs mt-5">
            <li class="nav-item">
                <a href='#' class="nav-link active" aria-current="page" >Dashboard</a>
            </li>
            <li class="nav-item">
                <a href='{{ route('users') }}'  class="nav-link" >Users</a>
            </li>
            <li class="nav-item">
                <a href='{{ route('tasks') }}' class="nav-link" >Tasks</a>
            </li>
            
        </ul>
    
        <div class='border-dark bg-light py-4 px-3'>
            
            <div>
                <h1>Welcome</h1>

                <div class=''>
                    <form  action="{{ route('avatar') }}" method='post' enctype="multipart/form-data">
                        @csrf
                        <div class='row'>
                            <div class='col-9'>
                                <input type="file" class='form-control col-9'  name='avatar' required>
                            </div>
                            <div class='col-3'>
                                <input type="submit" class='btn btn-dark' value="Change avatar" >
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection