
@extends('employees.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="float-start">
                <h2>Employee Details</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $employee->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group">
                <strong>Position:</strong>
                {{ $employee->position }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group">
                <strong>Salary:</strong>
                ${{ number_format($employee->salary, 2) }}
            </div>
        </div>
    </div>
@endsection
