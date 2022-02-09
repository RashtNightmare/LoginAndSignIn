<!DOCTYPE html>
<html lang="en">
@extends('Bootstrap')
@section("css")
#avatar{
border:none;
border-bottom:1px solid;
width:100%;
}
#national_code:focus{
border:4px #0c4beb ridge;
width:100%;
}
#national_code{
border:none;
border-bottom:1px solid;
width:100%;
}
#mobile:focus{
border:4px #0c4beb ridge;
width:100%;
}
#mobile{
border:none;
border-bottom:1px solid;
width:100%;
}
#major_id:focus{
border:4px #0c4beb ridge;
width:100%;
}
#major_id{
border:none;
border-bottom:1px solid;
width:100%;
}
#role_id:focus{
border:4px #0c4beb ridge;
width:100%;
}
#role_id{
border:none;
border-bottom:1px solid;
width:100%;
}
#avatar:focus{
border:4px #0c4beb ridge;
width:100%;
}
#avatar{
border:none;
border-bottom:1px solid;
width:100%;
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
#identity_card:focus{
border:4px #0c4beb ridge;
width:100%;
}
#identity_card{
border:none;
border-bottom:1px solid;
width:100%;
}
#email:focus{
border:4px #0c4beb ridge;
width:100%;
}
#email{
border:none;
border-bottom:1px solid;
width:100%;
}
#username:focus{
border:4px #0c4beb ridge;
width:100%;
}
#username{
border:none;
border-bottom:1px solid;
width:100%;
}
#name:focus{
border:4px #0c4beb ridge;
width:100%;
}
#name{
border:none;
border-bottom:1px solid;
width:100%;
}
#identity_card:focus{
border:4px #0c4beb ridge;
width:100%;
}
#identity_card{
border:none;
border-bottom:1px solid;
width:100%;
}

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

<body>
<div class="backdiv" style="margin-top:25%;margin-bottom:25%;margin-right:25%;margin-left:25%;">
<div class="card">
</div class="container" style="padding:10px 10px 10px 10px;">

<div class="w-full max-w-xs">
<form method ="POST" action="\user_login\{{$user_logins['id']}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
{{ csrf_field() }}
{{ method_field('PATCH') }}
<table>
    <colgroup>
       <col span="2" style="background-color:white">
       <col style="background-color:yellow">
    </colgroup>
  
    <tr><th>
    <div class="form-group"><label id="login_label" name="login_label" style="margin-bottom:20px;font: 30px icon;text-align:left"> Edit </label></div>
    
    <div class="form-group"><label id="login_label" name="login_label" style="margin-bottom:20px;font: 30px icon;text-align:left"> User {{$user_logins['id']}}</label></div>
 <div class="form-group">
     <label name="l_name" id="l_name" hidden>Name</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg>     </div>
     <input  value="{{$user_logins['name']}}" class="form-control"  id="name" type="text" name="name" placeholder="Name"></input>
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

<div class="form-group">
     <label name="l_email" id="l_email" hidden>E-mail</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
</svg>     </div>
     <input  value="{{$user_logins['email']}}" class="form-control"  id="email" type="text" name="email" placeholder="E-mail"></input>
      <script>
           const email=document.getElementById('email');
           email.addEventListener('focus',function() { 
               document.getElementById('l_email').style.display="block";
            });
            setInterval(function () {
                const email=document.getElementById('email');
                 if(email == document.activeElement){}else{
                     document.getElementById("l_email").style.display="none";
                 } 
            }, 100);
      </script></div></div>

<div class="form-group">
     <label name="l_identity_card" id="l_identity_card" hidden>Identity Card</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-fill" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0V4zm0 3v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7H0zm3 2h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1z"/>
</svg>     </div>
     <input  value="{{$user_logins['identity_card']}}" class="form-control"  id="identity_card" type="text" name="identity_card" placeholder="Identity Card"></input>
     <script>
           const identity_card=document.getElementById('identity_card');
           identity_card.addEventListener('focus',function() { 
               document.getElementById('l_identity_card').style.display="block";
            });
            setInterval(function () {
                const identity_card=document.getElementById('identity_card');
                 if(identity_card == document.activeElement){return true;}else{
                    document.getElementById("l_identity_card").style.display="none";  
                } 
            }, 100);
      </script></div></div>

<div class="form-group">
     <label name="l_national_code" id="l_national_code" hidden>National Code</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
</svg>     </div>
     <input  value="{{$user_logins['national_code']}}" class="form-control"  id="national_code" type="text" name="national_code" placeholder="National Code"></input>
      <script>
           const national_code=document.getElementById('national_code');
           national_code.addEventListener('focus',function() { 
               document.getElementById('l_national_code').style.display="block";
            });
            setInterval(function () {
                const national_code=document.getElementById('national_code');
                 if(national_code == document.activeElement){return true;}else{
                    document.getElementById("l_national_code").style.display="none";  
                } 
            }, 100);
      </script></div></div>

    
<div class="form-group">
     <label name="l_mobile" id="l_mobile" hidden>Mobile</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>     </div>
     <input  value="{{$user_logins['mobile']}}" class="form-control"  id="mobile" type="text" name="mobile" placeholder="Mobile"></input>
      <script>
           const mobile=document.getElementById('mobile');
           mobile.addEventListener('focus',function() { 
               document.getElementById('l_mobile').style.display="block";
            });
            setInterval(function () {
                const mobile=document.getElementById('mobile');
                 if(mobile == document.activeElement){return true;}else{
                    document.getElementById("l_mobile").style.display="none";  
                } 
            }, 100);
      </script></div></div>

<div class="form-group">
     <label name="l_user_name" id="l_user_name" hidden>User Name</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>     </div>
     <input  value="{{$user_logins['username']}}" class="form-control"  id="username" type="text" name="username" placeholder="User Name"></input>
      <script>
           const username=document.getElementById('username');
           username.addEventListener('focus',function() { 
               document.getElementById('l_user_name').style.display="block";
            });
            setInterval(function () {
                const username=document.getElementById('username');
                 if(username == document.activeElement){return true;}else{
                    document.getElementById("l_user_name").style.display="none";  
                } 
            }, 100);
      </script></div></div>

<div class="form-group">
     <label name="l_password" id="l_password" hidden>Password</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <i class="fas fa-lock"></i>
     </div>
     <input  value="{{$user_logins['password']}}" class="form-control"  id="password" type="text" name="password" placeholder="Password"></input>
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

<div class="form-group">
     <label name="l_avatar" id="l_avatar" hidden>Avatar</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-video" viewBox="0 0 16 16">
  <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
  <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2Zm10.798 11c-.453-1.27-1.76-3-4.798-3-3.037 0-4.345 1.73-4.798 3H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-1.202Z"/>
</svg>     </div>
     <input  value="{{$user_logins['avatar']}}" class="form-control"  id="avatar" type="text" name="avatar" placeholder="Avatar"></input>
      <script>
           const avatar=document.getElementById('avatar');
           avatar.addEventListener('focus',function() { 
               document.getElementById('l_avatar').style.display="block";
            });
            setInterval(function () {
                const avatar=document.getElementById('avatar');
                 if(avatar == document.activeElement){return true;}else{
                    document.getElementById("l_avatar").style.display="none";  
                } 
            }, 100);
      </script></div></div>

<div class="form-group">
     <label name="l_role_id" id="l_role_id" hidden>Role ID</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-ol" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
  <path d="M1.713 11.865v-.474H2c.217 0 .363-.137.363-.317 0-.185-.158-.31-.361-.31-.223 0-.367.152-.373.31h-.59c.016-.467.373-.787.986-.787.588-.002.954.291.957.703a.595.595 0 0 1-.492.594v.033a.615.615 0 0 1 .569.631c.003.533-.502.8-1.051.8-.656 0-1-.37-1.008-.794h.582c.008.178.186.306.422.309.254 0 .424-.145.422-.35-.002-.195-.155-.348-.414-.348h-.3zm-.004-4.699h-.604v-.035c0-.408.295-.844.958-.844.583 0 .96.326.96.756 0 .389-.257.617-.476.848l-.537.572v.03h1.054V9H1.143v-.395l.957-.99c.138-.142.293-.304.293-.508 0-.18-.147-.32-.342-.32a.33.33 0 0 0-.342.338v.041zM2.564 5h-.635V2.924h-.031l-.598.42v-.567l.629-.443h.635V5z"/>
</svg>     </div>
     <input  value="{{$user_logins['role']['id']}}" class="form-control"  id="role_id" type="text" name="role_id" placeholder="Role ID"></input>
      <script>
           const role_id=document.getElementById('role_id');
           role_id.addEventListener('focus',function() { 
               document.getElementById('l_role_id').style.display="block";
            });
            setInterval(function () {
                const role_id=document.getElementById('role_id');
                 if(role_id == document.activeElement){return true;}else{
                    document.getElementById("l_role_id").style.display="none";  
                } 
            }, 100);
      </script></div></div>
    
    <div class="form-group">
     <label name="l_major_id" id="l_major_id" hidden>Major ID</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-ol" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
  <path d="M1.713 11.865v-.474H2c.217 0 .363-.137.363-.317 0-.185-.158-.31-.361-.31-.223 0-.367.152-.373.31h-.59c.016-.467.373-.787.986-.787.588-.002.954.291.957.703a.595.595 0 0 1-.492.594v.033a.615.615 0 0 1 .569.631c.003.533-.502.8-1.051.8-.656 0-1-.37-1.008-.794h.582c.008.178.186.306.422.309.254 0 .424-.145.422-.35-.002-.195-.155-.348-.414-.348h-.3zm-.004-4.699h-.604v-.035c0-.408.295-.844.958-.844.583 0 .96.326.96.756 0 .389-.257.617-.476.848l-.537.572v.03h1.054V9H1.143v-.395l.957-.99c.138-.142.293-.304.293-.508 0-.18-.147-.32-.342-.32a.33.33 0 0 0-.342.338v.041zM2.564 5h-.635V2.924h-.031l-.598.42v-.567l.629-.443h.635V5z"/>
</svg>     </div>
     <input  value="{{$user_logins['major_id']}}" class="form-control"  id="major_id" type="text" name="major_id" placeholder="Major ID"></input>
      <script>
           const major_id=document.getElementById('major_id');
           major_id.addEventListener('focus',function() { 
               document.getElementById('l_major_id').style.display="block";
            });
            setInterval(function () {
                const major_id=document.getElementById('major_id');
                 if(major_id == document.activeElement){return true;}else{
                    document.getElementById("l_major_id").style.display="none";  
                } 
            }, 100);
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

<div class="form-group"><th><img src="{{url('/Images/upgrade.png')}}" style="margin-left:10px;" width="400" height="500" alt="Image"/>
   </div>
   <!-- <div class="form-group"><u><a href="/user_login/create" style="margin-left:50%;" _blank>I am already a member</a></u></div> -->

</th></tr>

 </table>

  </form></div>
  </body></div></div></div>
<html>
