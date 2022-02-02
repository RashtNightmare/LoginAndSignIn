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

#re_password:focus{
border:3px #0c4beb ridge;
width:100%;
}
#re_password{
border:none;
width:100%;
border-bottom:1px solid;
}

#email:focus{
border:3px #0c4beb ridge;
width:100%;
}
#email{
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

<body>
<div class="backdiv" style="margin-top:25%;margin-bottom:25%;margin-right:25%;margin-left:25%;">
<div class="card">
</div class="container" style="padding:10px 10px 10px 10px;">

<div class="w-full max-w-xs">
<form method ="POST" action="\user-sign\{{$users['id']}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
{{ csrf_field() }}
{{ method_field('PATCH') }}
<table>
    <colgroup>
       <col span="2" style="background-color:white">
       <col style="background-color:yellow">
    </colgroup>
  
    <tr><th>
    <div class="form-group"><label id="login_label" name="login_label" style="margin-bottom:20px;font: 30px icon;text-align:left"> Upgrade </label></div>
    
    <div class="form-group">
     <label name="l_username" id="l_username" hidden>User Name</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <i class="fas fa-user"></i>
     </div>
     <input onkeyup="user_name()" value="{{$users['name']}}" class="form-control"  id="name" type="text" name="name" placeholder="User Name"></input>
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
   <input onkeyup="email()" value="{{$users['email']}}" class="form-control" id="email" type="email" name="email" placeholder="E-mail"></input>
      <script>
        function email(){
         l_email=document.getElementById("l_email");
         if (document.getElementById("email").value == ""){
            l_email.style.display='none';
         }
         else{
            l_email.style.display='block';
         }
        }
      </script></div></div>

    <div class="form-group"><span name="l_password" id="l_password" class="text-align:left;" hidden>Password</span>
    <div class="input-group">
     <div class="input-group-addon">
     <i class="fas fa-lock" style="display: inline;"></i>
     </div>
   <input onkeyup="password()" value="{{$users['password']}}" class="form-control" id="password" type="password" name="password" placeholder="Password"></input>
      <script>
        function password(){
         l_password=document.getElementById("l_password");
         if (document.getElementById("password").value == ""){
            l_password.style.display='none';
         }
         else{
            l_password.style.display='block';
         }
        }
      </script></div></div>

<div class="form-group"><span name="l_re-password" id="l_re-password" class="text-align:left;" hidden>RePassword</span>
    <div class="input-group">
     <div class="input-group-addon">
     <i class="fas fa-lock" style="display: inline;"></i>
     </div>
   <input onkeyup="re_password()" value="{{$users['password']}}" class="form-control" id="re_password" type="password" name="re_password" placeholder="RePassword"></input>
      <script>
        function re_password(){
            l_re_password=document.getElementById("l_re-password");
         if (document.getElementById("re_password").value == ""){
            l_re_password.style.display='none';
         }
         else{
            l_re_password.style.display='block';
         }
        }
      </script></div></div>

     <div class="form-group"><label>I agree and accept all the <u><a href="#" _blank>Terms of service</a></u> </label>
     <input type="checkbox" class="main" id="remember_checkbox" name="remember_checkbox"></input></div>

     <button name="login_btn" onclick="ClickLogin()" id="login_btn" class="btn btn-info" style="color:white;background-color:#1049e6;margin-top:5px;width:100%" type="submit">Register</button>
     <script>
      function ClickLogin(){
          if (document. getElementById('login_btn'). clicked == true) {
              alert("button was clicked");
          }
      }
     </script>

<!-- <input   id="password2" type="password2" name="password" placeholder="Password"> -->


</th>

<div class="form-group"><th><img src="{{url('/Images/upgrade.png')}}" style="margin-left:10px;" width="400" height="300" alt="Image"/>
   </div>
   <div class="form-group"><u><a href="/user-login/create" style="margin-left:50%;" _blank>I am already a member</a></u></div>

</th></tr>

 </table>

  </form></div>
  </body></div></div></div>
<html>
