@extends('layouts.mainLayout')

@section('title')
    {{ $task->title }}
@endsection

@section('content')

    <nav aria-label="breadcrumb" class='ms-3 mt-2'>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href=" {{ route('tasks') }}">All tasks</a></li>
            <li class="breadcrumb-item active" aria-current="page">Task</li>
        </ol>
    </nav>
    
    <div class='w-75 mx-auto mt-5'>
        <h3 class="h3 mb-3">{{ $task->title }} </h3>
        
        <div class='bg-light p-5'>

            {{ $task->content }}

        </div>
        <div class='mt-3'>
            
            <a href=" {{ route('taskEdit', ['task'=>$task->id]) }}"><button class='btn btn-sm btn-primary px-4'>Edit</button></a>

        </div>

    </div>

@endsection