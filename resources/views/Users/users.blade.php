@extends('layouts.mainLayout')

@section('title')
    {{ 'Dashboard' }}
@endsection



@section('content')
    <div class='container'>
        <ul class="nav nav-tabs mt-5">
            <li class="nav-item">
                <a href='{{ route('dashboard') }}' class="nav-link " >Dashboard</a>
            </li>
            <li class="nav-item">
                <a href='{{ route('users') }}'  class="nav-link active" aria-current="page" >Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href='{{ route('tasks') }}'>Tasks</a>
            </li> 
        </ul>
    
        <div class='border-dark bg-light'>
            
            <div class='p-3'>
                <div class="d-flex justify-content-between ">
                    <h1 class='mb-3'>Users list</h1>

                    <a href='/user/users/create' class='align-self-center'>
                        <button  class='btn btn-dark btn-sm px-3 ' style="height: 30px"> Create a user</button>
                    </a>

                </div> 

                <table class='table table-striped' style="width: 100%">
                    <thead>
                        <tr >
                            <th>ID</th>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Created date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usersList as $user)
                            
                            <tr>
                                <td>{{ $user->id }} </td>
                                <td>{{ $user->firstname }} </td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->format('d/m/Y') }}</td>
                                
                            </tr>
                                

                        @endforeach
                    </tbody>
                </table>    
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        
        console.log('okok')
    </script>
@endsection