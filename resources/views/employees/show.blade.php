@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Detail Pegawai</h5>
                <a class="btn btn-sm btn-secondary" href="{{ route('employees.index') }}">
                    <i class="bi bi-arrow-left me-1"></i>Kembali
                </a>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <label class="col-sm-2 fw-bold">Nama:</label>
                    <div class="col-sm-10">
                        {{ $employee->name }}
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 fw-bold">Posisi:</label>
                    <div class="col-sm-10">
                        {{ $employee->position }}
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 fw-bold">Gaji:</label>
                    <div class="col-sm-10">
                        {{ $employee->formatted_salary }}
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 fw-bold">Terdaftar Pada:</label>
                    <div class="col-sm-10">
                        {{ $employee->created_at->format('d-m-Y H:i:s') }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10 offset-sm-2">
                        <a class="btn btn-primary me-2" href="{{ route('employees.edit', $employee->id) }}">
                            <i class="bi bi-pencil-square me-1"></i>Edit
                        </a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                <i class="bi bi-trash me-1"></i>Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>Detail Pegawai</span>
                <a href="{{ route('employees.index') }}" class="btn btn-sm btn-secondary">Kembali</a>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">ID</div>
                    <div class="col-md-8">{{ $employee->id }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">Nama</div>
                    <div class="col-md-8">{{ $employee->name }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">Email</div>
                    <div class="col-md-8">{{ $employee->email }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">Jabatan</div>
                    <div class="col-md-8">{{ $employee->position }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">Departemen</div>
                    <div class="col-md-8">{{ $employee->department }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">Dibuat pada</div>
                    <div class="col-md-8">{{ $employee->created_at->format('d M Y H:i') }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">Diperbarui pada</div>
                    <div class="col-md-8">{{ $employee->updated_at->format('d M Y H:i') }}</div>
                </div>
                
                <div class="d-flex justify-content-end mt-4">
                    <a href="{{ route('employees.edit', $employee) }}" class="btn btn-warning text-white me-2">Edit</a>
                    <form action="{{ route('employees.destroy', $employee) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pegawai ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
