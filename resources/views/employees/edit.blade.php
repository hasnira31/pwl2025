
@extends('employees.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="float-start">
                <h2>Edit Employee</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('employees.update',$employee->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $employee->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Position:</strong>
                    <input type="text" name="position" value="{{ $employee->position }}" class="form-control" placeholder="Position">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Salary:</strong>
                    <input type="number" name="salary" value="{{ $employee->salary }}" class="form-control" step="0.01" placeholder="Salary">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
