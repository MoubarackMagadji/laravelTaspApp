@extends('layouts.mainLayout')

@section('title')
    Edit the task {{ $task->id }}
@endsection

@section('content')

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }} 
        </div>
    @endif

    <a href=" {{route('tasks')}} "><button class='btn btn-secondary btn-sm float-left'>Back</button></a>

    
    <form action="{{ route('taskEditPost') }}" method='post' class='w-50 mx-auto mt-5 p-3'>
        <h2 class="h3 text-center">Create a task</h2>
        @method('POST')
        @csrf
        
        <input type="hidden" name="task_id" value="{{ $task->id }}">
        <div class="mb-3">
            <label for="" class="form-label">Title</label>
            <input type="text" name='title' class="form-control"  value="{{ old('title') ? old('title') : $task->title }}">
            @error('email')
                <span class='text-danger'>{{ $message }} </span> 
            @enderror
        </div>

        <div class="mb-3">
            <label for="" class="form-label">content</label>
            <textarea name='content' class="form-control" >{{ old('content') ? old('content') : $task->content}}</textarea>
            @error('content')
                <span class='text-danger'>{{ $message }} </span> 
            @enderror
        </div>
        

        <input type="submit" class='btn btn-sm btn-dark px-4 mt-3' value="Update">
    </form>
    
@endsection