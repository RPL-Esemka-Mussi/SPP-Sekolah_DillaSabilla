@extends('main.bootstrap')
@section('content')
    <div class="text-center py-5 bg-dark text-white">
        <h3>Kelola User</h3>
    </div>
    <div class="container mt-4">
        <div class="d-flex justify-content-between">
            <div>
            <h4>Edit user</h4>
            </div>
            <div>
            <a href="{{ url('user') }}"><button class="btn btn-warning">Kembali</button></a>
        </div>
    </div>
        <hr>
        <form action="{{ url('/user/update') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $users->id }}">
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $users->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $users->email }}"required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
                <small>kosongkan jika tidak ingin mengganti password.</small>
            </div>
            <div class="form-group">
                <label for="level">Level</label>
                <select name="level" id="" class="form-select">
                    <option value="">Pilih Level User</option>
                    <option {{ $users->level == 'admin' ? 'selected' : '' }} value="admin">Admin</option>
                    <option {{ $users->level == 'petugas' ? 'selected' : '' }}value="petugas">Petugas</option>
                    <option {{ $users->level == 'siswa' ? 'selected' : '' }}value="siswa">Siswa</option>
                </select>
            </div>
            <div class="mt-3 text-end">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="simpan" class="btn btn-success">Simpan</button>
            </div>
        </form>

@endsection
