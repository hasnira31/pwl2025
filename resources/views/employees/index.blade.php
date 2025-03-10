
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0"><i class="bi bi-list-ul me-2"></i>Daftar Pegawai</h2>
            <a href="{{ route('employees.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle me-1"></i>Tambah Pegawai
            </a>
        </div>
        
        <div class="card">
            <div class="card-body p-0">
                @if(count($employees) > 0)
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th width="60" class="text-center">No</th>
                                <th>Nama</th>
                                <th>Posisi</th>
                                <th>Gaji</th>
                                <th width="220" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                            <tr>
                                <td class="text-center">{{ $loop->iteration + $employees->firstItem() - 1 }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->position }}</td>
                                <td>{{ $employee->formatted_salary }}</td>
                                <td class="text-center">
                                    <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-sm btn-info text-white">
                                        <i class="bi bi-eye me-1"></i>Detail
                                    </a>
                                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-sm btn-warning text-white">
                                        <i class="bi bi-pencil-square me-1"></i>Edit
                                    </a>
                                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            <i class="bi bi-trash me-1"></i>Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="p-3">
                    {{ $employees->links() }}
                </div>
                @else
                <div class="p-4 text-center">
                    <i class="bi bi-exclamation-circle fs-1 text-muted"></i>
                    <p class="mt-2 mb-0">Belum ada data pegawai yang tersedia</p>
                    <a href="{{ route('employees.create') }}" class="btn btn-primary mt-3">
                        <i class="bi bi-plus-circle me-1"></i>Tambah Pegawai Pertama
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
