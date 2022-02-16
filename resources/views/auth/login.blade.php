@extends('Layouts.app')


@section("css")

a:link {
  color: grey;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: pink;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}

#name:focus{
border:3px #0c4beb ridge;
width:100%;
}
#name{
border:none;
width:100%;
border-bottom:1px solid;
}

#password:focus{
border:4px #0c4beb ridge;
width:100%;
}
#password{
border:none;
border-bottom:1px solid;
width:100%;
}


.backdiv{
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);
    background-color: white;
    padding:4px;
    width: fit-content;
    height:fit-content;
}
.row1 {
float:left;
}
.row2 {
float:right;
}
@endsection

@section('content')
<div class="backdiv" style="margin-right:25%;margin-left:25%;border: 2px solid white;border-radius:5px;background-color: white;">
<div class="card">
</div class="container" style="padding:10px 10px 10px 10px;">

<form method="POST" action="{{ route('login') }}">
{{ csrf_field() }} 

<div>
 <table>
 <colgroup>
       <col span="2" style="background-color:white;width:35%;">
       <col style="background-color:white;width:65%;">
    </colgroup>
  
    <tr><th style="width:100%">
    <div class="form-group"><label id="login_label" name="login_label" style="margin-bottom:50px;font: 30px icon;text-align:left"> Log-in </label></div>
    
    <div class="form-group"><span name="l_email" id="l_email" class="text-align:left;" hidden>E-mail</span>
    <div class="input-group">
     <div class="input-group-addon">
     <i class="fas fa-envelope" style="display: inline;"></i>
     </div>
   <input onkeyup="email()" class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}"  required autocomplete="email" placeholder="E-mail"></input>
@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror

<script>
           const email=document.getElementById('email')
           email.addEventListener('focus',function() { 
               document.getElementById('l_email').style.display="block";
            });
            setInterval(function () {
                const email=document.getElementById('email')
                 if(email == document.activeElement){}else{
                     document.getElementById("l_email").style.display="none";
                 } 
            }, 100);
      </script></div></div>

    <div class="form-group"><span name="l_password" id="l_password" class="text-align:left;" hidden>Password</span>
    <div class="input-group">
     <div class="input-group-addon">
     <i class="fas fa-lock" style="display: inline;"></i>
     </div>
   <input onkeyup="password()" class="form-control  @error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="Password" required autocomplete="new-password"></input>

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
   <script>
           const password=document.getElementById('password')
           password.addEventListener('focus',function() { 
               document.getElementById('l_password').style.display="block";
            });
            setInterval(function () {
                const password=document.getElementById('password-confirm')
                 if(password == document.activeElement){}else{
                     document.getElementById("l_password").style.display="none";
                 } 
            }, 100);
      </script></div></div>

<div class="form-check">
<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

<label class="form-check-label" for="remember">
{{ __('Remember Me') }}
</label>
</div>

    <button type="submit" name="login_btn" id="login_btn" class="btn btn-info" style="color:white;background-color:#1049e6;margin-top:20px;width:100%">Log-In</button>

    <div class="form-group" style="margin-top: 20px;">
      <label>Log-in with </label> 
      <img src="{{url('/Images/facebook.png')}}" style="margin-left:10px;border-radius:10px 10px 10px 10px;" width="50" height="50" alt="Image"/>
      <img src="{{url('/Images/google.jpg')}}" style="margin-left:10px;border-radius:10px 10px 10px 10px;" width="50" height="50" alt="Image"/>
      <img src="{{url('/Images/twitter.png')}}" style="margin-left:10px;border-radius:10px 10px 10px 10px;" width="50" height="50" alt="Image"/>
   </div>
    
<!-- <input   id="password2" type="password2" name="password" placeholder="Password"> -->


</th>

<div class="form-group"><th><img src="{{url('/Images/login.png')}}" style="width:10cm;height:10cm;margin-left:5px" width="400" height="400" alt="Image"/>
   </div>
   <div class="form-group"><u><a href="/register" style="margin-left:50%;" _blank>Create Account</a></u></div>

</th></tr>

 </table></div></form>  

</div></div></div>
@endsection
