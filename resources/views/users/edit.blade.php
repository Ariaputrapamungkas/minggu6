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

                    <form action="/users/{{$user->id}}" method="post">
                        {{csrf_field()}}
                        @method('PUT')
                        <input type="hidden" name="id" value="{{$user->id}}"></br>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control"required="required" name="username" value="{{$user->username}}"></br>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control"required="required" name="name" value="{{$user->name}}"></br>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control"required="required" name="email" value="{{$user->email}}"></br>
                        </div>                            
                            <button type="submit" name="edit" class="btn btn-primary float-right">Save Changes</button>
                    </form>
                </div>                    
            </div>               
        </div>            
    </div>       
</div>
@endsection