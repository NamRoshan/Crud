@extends('dashboard.master')
@section('create')
          <form accept-charset="UTF-8" action="/" class="require-validation col-md-4" data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" method="post"  action="{{route('student/store')}}">
          <div style="margin:0;padding:0;display:inline">
          <input name="utf8" type="hidden" value="✓" />
          <input name="_method" type="hidden" value="PUT" />
          <input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" />
         </div>
            <br>
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
                      
               <button class='form-control btn btn-primary' type='submit'> Save →</button>
          
              </form>    
@endsection