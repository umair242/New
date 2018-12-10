<html lang="en">
<div class="col-md-8 col-sm-8">
 <br>
    <h2><i>User Registration</i></h2> <br>
  
    <h3 class="{{!empty($message_class) ? $message_class : ''}}">{{!empty($message) ? $message : ''}}</h3>
    @if(!empty($errors))
    <ul>
        @foreach($errors as $key => $error)
        <li class="btn btn-danger">{{$error}}</li>
        @endforeach
    </ul> 
    @endif

    {!! Form::open(['url' => '/registration', 'files' => true]) !!}
    <div class="form-group">
        {{ Form::label('name:', null) }} <br>
        
        {{ Form::text('name', '', ['placeholder' => '']) }}
    </div> <br>
    <div class="form-group">
        {{ Form::label('user name:', null) }}<br>
        {{ Form::text('user_name', '', ['placeholder' => '' , 'class' => 'user_name']) }}
    </div> <br>
    <div class="form-group">
        {{ Form::label('email:', null) }}<br>
        {{ Form::email('email', '') }}
    </div> <br>
    <div class="form-group">
        {{ Form::label('password:', null) }}<br>
        {{ Form::password('password') }}
    </div> <br>
    <div class="form-group">
        {{ Form::label('retype_password:', null) }}<br>
        {{ Form::password('retype_password' ) }}
    </div> <br>
    <div class="form-group">
        {{ Form::label('Gender:', null) }}<br>
        {{ Form::label('Male:', null) }}
        {{ Form::radio('gender', 'male', true)}}
        {{ Form::label('Fe-Male:', null) }}
        {{ Form::radio('gender', 'fe-male')}}
    </div> <br>
    <div class="form-group">
        {{ Form::label('dob', 'Date of Birth:') }}<br>
        {{ Form::date('dob', \Carbon\Carbon::now()) }}
    </div> <br>
    <div class="form-group">
        {{ Form::label('Select Country :', null) }}
        {{  Form::select('country', ['Pakistan' , 'India']) }}
    </div> <br>
    <div class="form-group">
        {{ Form::label('Profile Image:', null) }} <br>
        {{ Form::file('image') }}
    </div> <br>
    {{ Form::submit('Register' , ['class' => 'btn btn-success']) }}

    {!! Form::close() !!}

</div>
</html>
