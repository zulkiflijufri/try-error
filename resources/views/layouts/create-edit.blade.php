@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Buat Tugas Baru
    </div>
    <div class="card-body">
        <form action="/create-task" method="post">
            @csrf
            <div class="form-group">
                <label for="task">Tugas</label>
                <input type="text" name="task" id="task" class="form-control">
            </div>
            <div class="form-group">
                <label for="desc">Deskripsi</label>
                <input type="text" name="desc" id="desc" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-sm btn-default">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
