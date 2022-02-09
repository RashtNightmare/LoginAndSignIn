<!DOCTYPE html>
<html lang="en">
@extends('Bootstrap')


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
<body style="background-color:#00ffe1;">
<div class="backdiv" style="margin-top:25%;margin-bottom:25%;margin-right:25%;margin-left:25%;">
<div class="card">
</div class="container" style="padding:10px 10px 10px 10px;">

<form  method ="GET" action="user_login/login">
{{ csrf_field() }} 

<div>
 <table>
    <colgroup>
       <col span="2" style="background-color:white">
       <col style="background-color:yellow">
    </colgroup>
  
    <tr><th>
    <div class="form-group"><label id="login_label" name="login_label" style="margin-bottom:50px;font: 30px icon;text-align:left"> Log-in </label></div>
    
    <div class="form-group">
     <label name="l_name" id="l_name" hidden>Name</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg>     </div>
     <input class="form-control"  id="name" type="text" name="name" placeholder="Name"></input>
      <script>
           const name=document.getElementById('name');
           name.addEventListener('focus',function() { 
               document.getElementById('l_name').style.display="block";
            });
            setInterval(function () {
                const name=document.getElementById('name');
                 if(name == document.activeElement){}else{
                     document.getElementById("l_name").style.display="none";
                 } 
            }, 100);
      </script></div></div>
    
    </div>

    <div class="form-group">
     <label name="l_password" id="l_password" hidden>Password</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <i class="fas fa-lock"></i>
     </div>
     <input class="form-control"  id="password" type="text" name="password" placeholder="Password"></input>
      <script>
           const password=document.getElementById('password');
           password.addEventListener('focus',function() { 
               document.getElementById('l_password').style.display="block";
            });
            setInterval(function () {
                const password=document.getElementById('password');
                 if(password == document.activeElement){return true;}else{
                    document.getElementById("l_password").style.display="none";  
                } 
            }, 100);
      </script></div></div>

     <div><label>Remember Me</label>
     <input type="checkbox" class="main" id="remember_checkbox" name="remember_checkbox"></input></div>

    <button type="submit" name="login_btn" id="login_btn" class="btn btn-info" style="color:white;background-color:#1049e6;margin-top:20px;width:100%">Log-In</button>

    <div class="form-group" style="margin-top: 20px;">
      <label>Log-in with </label> 
      <img src="{{url('/Images/facebook.png')}}" style="margin-left:10px;border-radius:10px 10px 10px 10px;" width="50" height="50" alt="Image"/>
      <img src="{{url('/Images/google.jpg')}}" style="margin-left:10px;border-radius:10px 10px 10px 10px;" width="50" height="50" alt="Image"/>
      <img src="{{url('/Images/twitter.png')}}" style="margin-left:10px;border-radius:10px 10px 10px 10px;" width="50" height="50" alt="Image"/>
   </div>
    
<!-- <input   id="password2" type="password2" name="password" placeholder="Password"> -->


</th>

<div class="form-group"><th><img src="{{url('/Images/login.png')}}" style="margin-left:10px;" width="400" height="400" alt="Image"/>
   </div>
   <div class="form-group"><u><a href="/sign-in" style="margin-left:50%;" _blank>Create Account</a></u></div>

</th></tr>

 </table></div></form>  

</div></div></div>
<script>window.alert("User Not Found");</script>
</body>
<html>