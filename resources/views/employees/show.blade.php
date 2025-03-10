
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-10 col-xl-8 mx-auto">
        <div class="d-flex align-items-center mb-4">
            <a href="{{ route('employees.index') }}" class="btn btn-outline-secondary me-2">
                <i class="bi bi-arrow-left"></i>
            </a>
            <h2 class="mb-0">Detail Pegawai</h2>
        </div>
        
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span><i class="bi bi-person me-2"></i>Informasi Pegawai</span>
                <div>
                    <a class="btn btn-sm btn-warning text-white me-1" href="{{ route('employees.edit', $employee->id) }}">
                        <i class="bi bi-pencil-square me-1"></i>Edit
                    </a>
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            <i class="bi bi-trash me-1"></i>Hapus
                        </button>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <label class="col-sm-3 fw-bold">ID Pegawai:</label>
                    <div class="col-sm-9">
                        {{ $employee->id }}
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 fw-bold">Nama Lengkap:</label>
                    <div class="col-sm-9">
                        {{ $employee->name }}
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 fw-bold">Posisi/Jabatan:</label>
                    <div class="col-sm-9">
                        {{ $employee->position }}
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 fw-bold">Gaji:</label>
                    <div class="col-sm-9">
                        {{ $employee->formatted_salary }}
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 fw-bold">Terdaftar Pada:</label>
                    <div class="col-sm-9">
                        {{ $employee->created_at->format('d-m-Y H:i:s') }}
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 fw-bold">Diperbarui Pada:</label>
                    <div class="col-sm-9">
                        {{ $employee->updated_at->format('d-m-Y H:i:s') }}
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="{{ route('employees.index') }}" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left me-1"></i>Kembali ke Daftar
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
