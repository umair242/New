<html><h1>User Registration</h1></html>

<br>
<h2>{{!empty($registered_message) ? $registered_message : ''}}</h2>
{!! Form::open(['url' => '/registration', 'files' => true]) !!}
    <div class="form-group">
       <br>
        {{ Form::text('name', '', ['placeholder' => 'Your Name']) }}
    </div>
    <div class="form-group"><br>
       
        {{ Form::text('user_name', '', ['placeholder' => 'User Name' , 'class' => 'user_name']) }}
    </div>
    <div class="form-group"><br>
       
        {{ Form::email('email', '', ['placeholder' => 'Your Email' , 'class' => 'email']) }}
    </div>
    <div class="form-group"><br>
        {{ Form::text('name', '', ['placeholder' => 'Password']) }}<br>
        
    </div>
    <div class="form-group"><br>
       {{ Form::text('name', '', ['placeholder' => 'Retype Password']) }}<br>
    </div>
    <div class="form-group"><br>
       
        {{ Form::label('Male:', null) }}
        {{ Form::radio('gender', 'male', true)}}
        {{ Form::label('Fe-Male:', null) }}
        {{ Form::radio('gender', 'fe-male')}}
    </div>
    <div class="form-group"><br>
        {{ Form::label('dob', 'Date of Birth:') }}<br>
        {{ Form::date('dob', \Carbon\Carbon::now()) }}
    </div>
<br>
     
    <div class="form-group"><br>
        {{ Form::label('Profile Image:', null) }}<br>
        {{ Form::file('image') }}
    </div>
<br>
    {{ Form::submit('Register' , ['class' => 'btn btn-success']) }}

    {!! Form::close() !!}
    
   