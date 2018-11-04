@extends('dashboard.master')
@section('edit')

<form action="{{ route('students.update', ['id' => $student->id]) }}" method="POST" class="col-md-6">
        {{csrf_field()}}

    {{ method_field('PUT') }}
    <h3 class="text-center">Update Student Record</h3>
    <div class="form-group">
        <label for="" class="control-label">Name</label>
        <input type="text" name="st_name" value="{{ $student->st_name }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="" class="control-label">Student Address</label>
        <input type="text" name="st_address" value="{{ $student->st_address }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="" class="control-label">Roll NO.</label>
        <input type="text" name="st_roll" value="{{ $student->st_roll }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="" class="control-label">Student Date</label>
        <input type="text" name="st_date" value="{{ $student->st_date }}" class="form-control">
    </div>
    <div class="form-group">
        <input type="hidden" name="id" value="{{ $student->id }}" >
        <button class='form-control btn btn-primary' type='submit'> Update →</button>
    </div>
</form>
@endsection