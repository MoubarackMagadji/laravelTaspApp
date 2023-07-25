@extends('layouts.mainLayout')

@section('title')
    {{ 'Register' }}
@endsection

@section('content')
    

    <form action="/register" method='post' class='w-50 mx-auto mt-5 p-3'>
        <h2 class="h3 text-center">Register</h2>
        @method('POST')
        @csrf
        <div class='row mt-5 mb-3'>
            <div class=" col-6">
                <label for="" class="form-label">First Name</label>
                <input type="text" name='firstname' class="form-control" id="" value="{{ old('firstname')}}">
                @error('firstname')

                    <span class='text-danger'>{{ $message }} </span>
                    
                @enderror
            </div>
            <div class="col-6">
                <label for="" class="form-label">Last Name</label>
                <input type="text" name='lastname' class="form-control" id="" value="{{ old('lastname')}}">
                @error('lastname')

                    <span class='text-danger'>{{ $message }} </span>
                    
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email address</label>
            <input type="email" name='email' class="form-control" id="" value="{{ old('email')}}">
            @error('email')

                <span class='text-danger'>{{ $message }} </span>
                
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" name='password' class="form-control" id="">
            @error('password')

                <span class='text-danger'>{{ $message }} </span>
                
            @enderror
        </div>

        <input type="submit" class='btn btn-dark px-5 mt-4' value="Register">
    </form>
@endsection