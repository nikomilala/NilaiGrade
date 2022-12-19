@extends('base')

@section('content')
<div class="container pt-3">
    <h2 class="text-center">Daftar Nilai Mahasiswa</h2>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">NIK</th>
            <th scope="col">Name</th>

            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($nilai as $n)
        <tr>
            <th scope="row">{{$n->user->nik}}</th>
            <td>{{$n->user->name}}</td>

            <td><a href="detail/{{ $n->id }}">Lihat Nilai</a> </td>
        </tr>
        @endforeach

        </tbody>

    </table>


</div>
@endsection
