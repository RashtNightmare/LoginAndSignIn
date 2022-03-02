@extends('layouts.app')


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
</div class="container">

<form method="POST" action="{{ route('register') }}">
{{ csrf_field() }} 

<div>
 <table>
    <colgroup>
       <col span="2" style="background-color:white;width:35%;">
       <col style="background-color:white;width:65%;">
    </colgroup>
  
    <tr><th style="width:100%">
    <div class="form-group"><label id="login_label" name="login_label" style="margin-bottom:20px;font: 30px icon;text-align:left"> Sign-In </label></div>
    
    <div class="form-group">
     <label name="l_username" id="l_username" hidden>Name</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <i class="fas fa-user"  style="width:15%;" ></i>
     </div>
     <input onkeyup="user_name()" style="border:none;border-bottom:1px solid;width:85%;" class="form-control @error('name') is-invalid @enderror"  id="name" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name"></input>
     
     
@error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror

     <script>
        function user_name(){
         l_username=document.getElementById("l_username");
         if (document.getElementById('name').value == ""){
            l_username.style.display='none';
         }
         else{
            l_username.style.display='block';
         }
        }
      </script></div></div>
    
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

<div class="form-group"><span name="l_re-password" id="l_re-password" class="text-align:left;" hidden>RePassword</span>
    <div class="input-group">
     <div class="input-group-addon">
     <i class="fas fa-lock" style="display: inline;"></i>
     </div>
   <input onkeyup="re_password()" id="password-confirm" class="form-control" type="password" required autocomplete="new-password" name="password_confirmation" placeholder="Password Confirmation"></input>
   <script>
           const password_confirm=document.getElementById('password-confirm')
           password_confirm.addEventListener('focus',function() { 
               document.getElementById('l_text').style.display="block";
            });
            setInterval(function () {
                const password_confirm=document.getElementById('password-confirm')
                 if(password_confirm == document.activeElement){}else{
                     document.getElementById("l_re-password").style.display="none";
                 } 
            }, 100);
      </script></div></div>

     <div class="form-group"><label>I agree and accept all the <u><a href="#" _blank>Terms of service</a></u> </label>
     <input type="checkbox" class="main" id="remember_checkbox" name="remember_checkbox"></input></div>

     <button name="login_btn" id="login_btn" class="btn btn-info" style="color:white;background-color:#1049e6;margin-top:5px;width:100%" type="submit">Register</button>


<!-- <input   id="password2" type="password2" name="password" placeholder="Password"> -->


<th>
<div class="form-group"><th><img src="{{url('/Images/sigin.png')}}" style="width:10cm;height:10cm;margin-left:5px;" alt="Image"/>
   </div>
   <div class="form-group"><u><a href="/login" style="margin-left:50%;" _blank>I am already a member</a></u></div>

</th></tr>

 </table>

</div></form> 
  

</div></div></div>

@endsection
