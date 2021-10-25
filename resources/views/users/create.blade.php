@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('USER DATA') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="/users" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" required="required" name="username"></br>
                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" required="required" name="name"></br>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" required="required" name="email"></br>
                            </div>
                            
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" required="required" name="password"></br>
                            </div>

                            <button type="submit" name="add" class="btn btn-primary float-right">Add Data</button>
                        </form>
                    </div>                    
                </div>               
            </div>            
        </div>       
    </div>
@endsection