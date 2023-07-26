@extends('layouts.mainLayout')

@section('title')
    {{ 'Tasks' }}
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
                    <button  class='btn btn-dark btn-sm px-3 ' style="height: 30px"> Create a task</button>
                </a>

            </div>


            <table class='table table-striped' style="width: 100%">
                <thead>
                    <tr >
                        <th>Task id </th>
                        <th>Title</th>
                        <th>User fullname</th>
                        <th>Created at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        
                        <tr>
                            <td>{{ $task->id }} </td>
                            <td>{{ $task->title }} </td>
                            <td>{{ $task->user->fullname() }}</td>
                            <td>{{ $task->created_at->format('d/m/Y') }}</td>
                            
                        </tr>
                            

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


@section('script')
    <script>
        
        console.log('okok')
    </script>
@endsection