@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('DETAIL USER DATA') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table teble-responsive table-striped">
                            <tr><th>Id</th><th>:</th><td>{{ $user->id }}</td></tr>
                            <tr><th>Username</th><th>:</th><td>{{ $user->username }}</td></tr>
                            <tr><th>Name</th><th>:</th><td>{{ $user->name }}</td></tr>
                            <tr><th>Email</th><th>:</th><td>{{ $user->email }}</td></tr>
                            <tr><th>EmailVerifiedAt</th><th>:</th><td>{{ $user->email_verified_at }}</td></tr>
                            <tr><th>Password</th><th>:</th><td>{{ $user->password }}</td></tr>
                            <tr><th>Created At</th><th>:</th><td>{{ $user->created_at }}</td></tr>
                            <tr><th>Updated At</th><th>:</th><td>{{ $user->updated_at }}</td></tr>
                        </table> 
                        <a href="/users" class="btn btn-primary">Back</a>                  
                        <br><br>
                    </div>                    
                </div>               
            </div>            
        </div>       
    </div>
@endsection