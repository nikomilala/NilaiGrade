@extends('base')

@section('content')
    <div class="container pt-3">
        <form action="/grade" method="POST">
            @csrf
            <div class="form-group ">
                <label for="users-option">Pilih Mahasiswa</label>
                <select class="form-control" id="users-option" name="user_id">
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group ">
                <label for="nilai-quiz">Nilai Quiz</label>
                <input type="number" class="form-control" placeholder="Masukkan nilai quiz" name="nilai-quiz">
            </div>
            <div class="form-group ">
                <label for="nilai-tugas">Nilai Tugas</label>
                <input type="number" class="form-control" placeholder="Masukkan nilai tugas" name="nilai-tugas">
            </div>
            <div class="form-group ">
                <label for="nilai-absensi">Nilai Absensi</label>
                <input type="number" class="form-control" placeholder="Masukkan nilai absensi" name="nilai-absensi">
            </div>
            <div class="form-group ">
                <label for="nilai-praktek">Nilai Praktek</label>
                <input type="number" class="form-control" placeholder="Masukkan nilai praktek" name="nilai-praktek">
            </div>
            <div class="form-group ">
                <label for="nilai-uas">Nilai UAS</label>
                <input type="number" class="form-control" placeholder="Masukkan nilai UAS" name="nilai-uas">
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>





        </form>
    </div>





@endsection
