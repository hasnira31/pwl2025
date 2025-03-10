
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-10 col-xl-8 mx-auto">
        <div class="d-flex align-items-center mb-4">
            <a href="{{ route('employees.index') }}" class="btn btn-outline-secondary me-2">
                <i class="bi bi-arrow-left"></i>
            </a>
            <h2 class="mb-0">Edit Data Pegawai</h2>
        </div>
        
        <div class="card">
            <div class="card-header">
                <i class="bi bi-pencil me-2"></i>Form Edit Pegawai
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger mb-4">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                
                <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label">Nama Pegawai</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $employee->name) }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="position" class="col-sm-3 col-form-label">Posisi/Jabatan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="position" name="position" value="{{ old('position', $employee->position) }}" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="salary" class="col-sm-3 col-form-label">Gaji (Rp)</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="salary" name="salary" value="{{ old('salary', $employee->salary) }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9 offset-sm-3">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save me-1"></i>Simpan Perubahan
                            </button>
                            <a href="{{ route('employees.index') }}" class="btn btn-outline-secondary ms-2">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
