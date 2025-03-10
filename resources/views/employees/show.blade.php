
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
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="card mb-4 border-primary">
                            <div class="card-header bg-primary text-white">
                                <i class="bi bi-person-badge me-2"></i>Informasi Pegawai
                            </div>
                            <div class="card-body">
                                <table class="table table-borderless">
                                    <tr>
                                        <th width="200">ID Pegawai</th>
                                        <td>: {{ $employee->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td>: {{ $employee->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Posisi</th>
                                        <td>: {{ $employee->position }}</td>
                                    </tr>
                                    <tr>
                                        <th>Gaji</th>
                                        <td>: Rp {{ number_format($employee->salary, 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Bergabung</th>
                                        <td>: {{ $employee->created_at->format('d M Y') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Terakhir Diperbarui</th>
                                        <td>: {{ $employee->updated_at->format('d M Y H:i') }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center gap-2">
                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">
                                <i class="bi bi-pencil me-1"></i>Edit
                            </a>
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
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
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Detail Pegawai</h5>
                <a class="btn btn-sm btn-primary" href="{{ route('employees.index') }}">
                    <i class="bi bi-arrow-left me-1"></i>Kembali
                </a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nama</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $employee->name }}
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Posisi</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $employee->position }}
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Gaji</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        Rp {{ number_format($employee->salary, 0, ',', '.') }}
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">
                                        <i class="bi bi-pencil me-1"></i>Edit
                                    </a>
                                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
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
        </div>
    </div>
</div>
@endsection
