@extends('layouts.mainLayout')

@section('title')
    {{ 'Dashboard' }}
@endsection

@section('content')
    <div class='container'>
        <x-main-tab page="dashboard"/>
    
        <div class='border-dark bg-light py-4 px-3'>
            
            <div class=''>
                <h1>Welcome</h1>

                <div>
                    {{ Auth::user()->tasks->count() }}
                    --
                    {{ $tasks->count() }}
                </div>

                <div class='mt-3'>
                    <p class="d-inline-flex gap-1">
                        <a class="btn btn-primary btn-sm" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Change Avatar
                        </a>
                        
                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
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
        </div>
    </div>
@endsection