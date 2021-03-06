@extends('layouts.backend')

@section('content')
<div class="profile">
  
  {{ Form::open(array('url' => 'dashboard/profile')) }}

    <h5>
      Profile
      <button type="submit" class="btn btn-primary btn-embossed btn-wide"
        style="margin-left: 30px;">Save Changes</button>
    </h5>

    <hr/>

    <div class="row">
      <div class="col-md-8">
        <h6>Personal Details</h6>
        <div class="row">
          <div class="col-md-3">
            <p class="text-muted"><em>These are details to help us get in touch with you better and will allow us to send updates.</em></p>
          </div>
          <div class="col-md-7">
            <div class="form-group">
              {{ Form::label('fullname', 'Full Name:') }}
              {{ Form::text('fullname', $user->fullname, array('class' => 'form-control', 'placeholder' => 'Green Alerter' )); }}
            </div>
            <div class="form-group">
              {{ Form::label('email', 'E-mail Address:') }}
              {{ Form::text('email', $user->email, array('class' => 'form-control', 'placeholder' => 'green@alert.org' )); }}
            </div>
          </div>
        </div>
        
        <hr/>

        <h6>Change Password</h6>
        <div class="row">
          <div class="col-md-3">
            <p class="text-muted"><em>To change your password, simply input the password here and hit save.</em></p>
          </div>
          <div class="col-md-7">
            <div class="form-group">
              {{ Form::label('password1', 'New password:') }}
              {{ Form::password('password1', array('class' => 'form-control', 'placeholder' => 'New password' )); }}
            </div>
            <div class="form-group">
              {{ Form::label('password2', 'Retype new password:') }}
              {{ Form::password('password2', array('class' => 'form-control', 'placeholder' => 'New password once more' )); }}
            </div>
          </div>
        </div>


      </div>
      <div class="col-md-4">
        <div class="well">
        </div>
      </div>
    </div> <!-- /.row -->

  {{ Form::close() }}

</div> <!-- /.profile -->
@stop
