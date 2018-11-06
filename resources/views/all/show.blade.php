@extends('dashboard.master')
@section('view')
 <div class="col-md-12">
          <form action="{{ url('del') }}" method="post">
       

            <table class="table table-bordered table-striped">
              @if (session()->has('success'))
            }
   <div class="alert alert-dismissable alert-success">
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
       </button>
       <strong>
           {{ session()->get('success') }}
       </strong>
   </div>
@endif
              <thead>
                  <tr>
                    <th>#</th>
                    <th>Student Name</th>
                    <th>Student Address</th>
                    <th>Student Rollno:</th>
                    <th>Student Date</th>
                    <th>Created Date</th>
                    <th>
                        {{csrf_field()}} 
                      <input type="submit" name="" value="Select Delete" class="btn-danger"></th>
                  </tr>
              </thead>
              <tbody>
                @if($students->count() > 0)
                  @foreach($students as $student)
                  <tr>
                    <td><input type="checkbox" name="delid[]" value="{{$student->id}}"></td>
                    <td>{{$student->id}}</td>
                    <td>{{$student->st_name}}</td>
                    <td>{{$student->st_address}}</td>
                    <td>{{$student->st_roll}}</td>
                    <td>{{$student->st_date}}</td>
                    <td>
                      <a href="{{route('all.edit', $student->id)}}" class="btn btn-primary">Edit</a>

                <!--       <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                        {{csrf_field()}}
                   
                        {{ method_field('DELETE') }}

                        <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                      </form> -->
                    </td>
                  </tr>
                  @endforeach
                  @endif
              </tbody>
            </table>
           </form> 
          </div>


@endsection
