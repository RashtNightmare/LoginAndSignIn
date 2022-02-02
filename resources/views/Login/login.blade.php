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

<form  method ="POST" action="/user-login/all">
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
     <label name="l_username" id="l_username" hidden>User Name</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <i class="fas fa-user"></i>
     </div>
     <input onkeyup="user_name()" class="form-control"  id="name" type="text" name="name" placeholder="User Name"></input>
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
    
    </div>

    <div class="form-group" style="margin-top:10px;">
     <label name="l_password" id="l_password" hidden>Password</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <i class="fas fa-lock"></i>
     </div>
     <input onkeyup="password()" class="form-control"  id="password" type="password" name="password" placeholder="Password"></input>
      <script>
        function password(){
         l_password=document.getElementById("l_password");
         if (document.getElementById('password').value == ""){
            l_password.style.display='none';
         }
         else{
            l_password.style.display='block';
         }
        }
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
   <div class="form-group"><u><a href="/user-sign/create" style="margin-left:50%;" _blank>Create Account</a></u></div>

</th></tr>

 </table></div></form>  

</div></div></div>

</body>
<html>