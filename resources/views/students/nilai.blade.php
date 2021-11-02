@extends('layouts.app')


@section('content')
<div class="container">        
    <div class="row justify-content-center">    
        <h1>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h1>
        <br><br>
        <br><br>
        <h1 centered>KARTU HASIL STUDI (KHS)</h2>

        <div class="col-md-8">
            <div>
                <br><br>
            </div>
            <b>Nama: </b> {{ $students->name }} <br>
            <b>NIM: </b> {{ $students->nim }} <br>
            <b>Kelas: </b>  {{ $students->kelas->class_name }}  <br>    
            <div class="card">
                <div class="card-header">{{ __('STUDENT DATA') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>
                                <th>Mata Kuliah</th>
                                <th>SKS</th>
                                <th>Semester</th>
                                <th>Nilai</th>                                                                        
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $courses['class_name'] }}</td>
                                <td>{{ $courses['sks'] }}</td>
                                <td>{{ $courses['semester'] }}</td>
                                <td>{{ $courses['nilai'] }}</td>                                
                            </tr>                                
                        </tbody>
                    </table>
                    <a href="/students" class="btn btn-primary">Back</a>
                    <br><br>
                </div>                    
            </div>               
        </div>            
    </div>       
</div>
@endsection 