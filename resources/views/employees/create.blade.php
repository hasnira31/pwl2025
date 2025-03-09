
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0"><i class="fas fa-user-plus me-2"></i>Tambah Pegawai Baru</h5>
                <a href="{{ route('employees.index') }}" class="btn btn-secondary btn-sm">
                    <i class="fas fa-arrow-left me-1"></i>Kembali
                </a>
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Oops!</strong> Ada beberapa masalah dengan input Anda.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('employees.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama pegawai" value="{{ old('name') }}" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="position" class="form-label">Posisi</label>
                        <input type="text" name="position" id="position" class="form-control" placeholder="Masukkan posisi pegawai" value="{{ old('position') }}" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="salary" class="form-label">Gaji</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" name="salary" id="salary" class="form-control" placeholder="Masukkan gaji pegawai" value="{{ old('salary') }}" required>
                        </div>
                    </div>
                    
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save me-1"></i>Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
