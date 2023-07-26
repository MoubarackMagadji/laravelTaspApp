@extends('layouts.mainLayout')

@section('title')
    Create a task
@endsection

@section('content')

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }} 
        </div>
    @endif

    <a href=" {{route('tasks')}} "><button class='btn btn-secondary btn-sm float-left'>Back</button></a>

    
    <form action="{{route('createTaskPost')}}" method='post' class='w-50 mx-auto mt-5 p-3'>
        <h2 class="h3 text-center">Create a task</h2>
        @method('POST')
        @csrf
        
        <div class="mb-3">
            <label for="" class="form-label">Title</label>
            <input type="text" name='title' class="form-control"  value="{{ old('title')}}">
            @error('email')
                <span class='text-danger'>{{ $message }} </span> 
            @enderror
        </div>

        <div class="mb-3">
            <label for="" class="form-label">content</label>
            <textarea name='content' class="form-control" >{{ old('title')}}</textarea>
            @error('content')
                <span class='text-danger'>{{ $message }} </span> 
            @enderror
        </div>
        

        <input type="submit" class='btn btn-dark px-5 mt-4' value="Create">
    </form>
    
@endsection