@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Detail Pegawai</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="fw-bold">Nama:</label>
                        <p class="form-control">{{ $employee->name }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="fw-bold">Email:</label>
                        <p class="form-control">{{ $employee->email }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="fw-bold">Alamat:</label>
                        <p class="form-control" style="min-height: 100px;">{{ $employee->address }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Kembali</a>
                        <div>
                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ms-2">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection