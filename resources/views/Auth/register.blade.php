@extends("welcome")

@section("registrar")
<div class="container">
  <div class="row">
    <div class="col-xs-0 col-lg-2"></div>
    <div class="col-xs-12 col-lg-8">
      <div class="panel panel-primary">
                <form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div class="col-md-6">
       
        Name
        <input type="text" name="name" value="{{ old('name') }}">
     
    </div>

    <div>
        
        Email
        <input type="email" name="email" value="{{ old('email') }}">
       
    </div>

    <div>
       
        Password
        <input type="password" name="password">
      
    </div>

    <div class="col-md-6">
       
        Confirm Password
        <input type="password" name="password_confirmation">
        
    </div>

    <div>
       
        <button type="submit">Register</button>
    
    </div>
</form>
</div>
    </div>
    <div class="col-xs-0 col-lg-2"></div>
  </div>
</div>
@stop
