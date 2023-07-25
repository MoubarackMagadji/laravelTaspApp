@extends('layouts.mainLayout')

@section('title')
    {{ 'Login' }}
@endsection

@section('content')
    @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }} 
        </div>
    @endif

    <form action="/login" method='post' class='w-50 mx-auto mt-5 p-3'>
        <h2 class="h3 text-center">Login</h2>
        @method('POST')
        @csrf
        
        <div class="mb-3">
            <label for="" class="form-label">Email address</label>
            <input type="email" name='email' class="form-control" id="" value="{{ old('email')}}">
            @error('email')
                <span class='text-danger'>{{ $message }} </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" name='password' class="form-control"">
            @error('password')
                <span class='text-danger'>{{ $message }} </span>
            @enderror
        </div>

        <input type="submit" class='btn btn-dark px-5 mt-4' value="Login">
    </form>
@endsection