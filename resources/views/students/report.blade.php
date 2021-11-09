<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    </head>
    <body>
        <style type="text/css">
            table tr td,
            table tr th
            {
                font-size: 9pt;
            }
        </style>
        <h4 align="center">STUDENT REPORT</h4>
        <b>Name</b> : {{ $student->name }} <br>
        <b>NIM</b> : {{ $student->nim }} <br>
        <b>Class</b> : {{ $student->kelas->class_name }} <br><br>
        <table class="table table-responsive table-striped">
            <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Semester</th>
                    <th>SKS</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student->courses as $sc)
                <tr>
                    <td>{{ $sc->course_name }}</td>
                    <td>{{ $sc->semester }}</td>
                    <td>{{ $sc->sks }}</td>
                    <td>{{$sc->pivot->nilai}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>