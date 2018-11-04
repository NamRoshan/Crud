@extends('dashboard.master')
@section('view')
 <div class="col-md-12">
            <table class="table table-bordered table-striped">
              <thead>
                  <tr>
                    <th>Student Name</th>
                    <th>Student Address</th>
                    <th>Student Rollno:</th>
                    <th>Student Date</th>
                  </tr>
              </thead>
              <tbody>
                @if($students->count() > 0)
                  @foreach($students as $student)
                  <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->st_name}}</td>
                    <td>{{$student->st_address}}</td>
                    <td>{{$student->st_roll}}</td>
                    <td>{{$student->st_date}}</td>
                    <td>
                      <a href="{{route('all.edit', $student->id)}}" class="btn btn-primary">Edit</a>

                      <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                        {{csrf_field()}}
                   
                        {{ method_field('DELETE') }}

                        <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                      </form>
                    </td>
                  </tr>
                  @endforeach
                  @endif
              </tbody>
            </table>
          </div>
 
@endsection
