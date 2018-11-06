@extends('dashboard.master')
@section('create')

          <form action="{{ url('StudentController') }}" method="POST" class="col-md-6">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
          <div class='form-row'>
              <div class='form-group required'>
                <div class='error form-group hide'>
                <div class='alert-danger alert'>
                  Please correct the errors and try again.
              
              </div>
            </div>
                <label class='control-label'>Student Full Name</label>
                <input class='form-control' size='4' type='text' name="st_name">
              </div>
                    
            </div>
            <div class='form-row'>
              <div class='form-group card required'>
                  <label class='control-label'>Student Address</label>
                <input autocomplete='off' class='form-control card-number' size='20' type='text' name="st_address">
              </div>
            </div>
             <div class='form-row'>
              <div class='form-group card required'>
                <label class='control-label'>Roll Number</label>
                <input autocomplete='off' class='form-control' size='20' type='text' name="st_roll">
              </div>
            </div>
            <div class='form-row'>
              <div class='form-group expiration required'>
                <label class='control-label'>Date of birth</label>
                <input name="st_date" type="date" class='form-control card-expiry-year' placeholder='YYYY-MM-DD' >
              </div>
            </div>
    
           
            <div class='form-row'>
              <div class='form-group'>
                         <label class='control-label'></label>
                                  {{csrf_field()}}
               <button class='form-control btn btn-primary' type='submit'> Save →</button>
          
              </form>    

@endsection
