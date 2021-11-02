@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('STUDENT DATA') }}</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-succes" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table teble-responsive table-striped">
                        <tr><th>Name</th><th>:</th><td>{{ $student->name }}</td></tr>
                        <tr><th>NIM</th><th>:</th><td>{{ $student->nim }}</td></tr>
                        <tr><th>Class</th><th>:</th><td>{{ $student->kelas->class_name }}</td></tr>
                        <tr><th>Department</th><th>:</th><td>{{ $student->departement }}</td></tr>
                        <tr><th>Phone Number</th><th>:</th><td>{{ $student->phone_number }}</td></tr>
                        <tr><th>Created At</th><th>:</th><td>{{ $student->created_at }}</td></tr>
                        <tr><th>Updated At</th><th>:</th><td>{{ $student->updated_at }}</td></tr>
                    </table>
                    <a href="/students" class="btn btn-primary">Back</a>                  
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection