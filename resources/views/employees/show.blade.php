
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0"><i class="fas fa-user me-2"></i>Detail Pegawai</h5>
                <a href="{{ route('employees.index') }}" class="btn btn-secondary btn-sm">
                    <i class="fas fa-arrow-left me-1"></i>Kembali
                </a>
            </div>
            <div class="card-body">
                <div class="text-center mb-4">
                    <div class="avatar avatar-xl mb-3">
                        <span class="avatar-initial rounded-circle bg-primary">{{ substr($employee->name, 0, 1) }}</span>
                    </div>
                    <h4 class="mb-1">{{ $employee->name }}</h4>
                    <span class="badge bg-info">{{ $employee->position }}</span>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <tr>
                                <th width="30%">ID</th>
                                <td>{{ $employee->id }}</td>
                            </tr>
                            <tr>
                                <th>Nama Lengkap</th>
                                <td>{{ $employee->name }}</td>
                            </tr>
                            <tr>
                                <th>Posisi</th>
                                <td>{{ $employee->position }}</td>
                            </tr>
                            <tr>
                                <th>Gaji</th>
                                <td>Rp {{ number_format($employee->salary, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Bergabung</th>
                                <td>{{ $employee->created_at->format('d M Y, H:i') }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Update Terakhir</th>
                                <td>{{ $employee->updated_at->format('d M Y, H:i') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                <div class="row mt-3">
                    <div class="col-md-6">
                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning w-100">
                            <i class="fas fa-edit me-1"></i>Edit
                        </a>
                    </div>
                    <div class="col-md-6">
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-100" onclick="return confirm('Apakah Anda yakin ingin menghapus pegawai ini?')">
                                <i class="fas fa-trash me-1"></i>Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
