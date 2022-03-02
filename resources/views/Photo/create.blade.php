<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')

@section("css")
#file_name:focus{
border:4px #0c4beb ridge;
width:100%;
}
#file_name{
border:none;
border-bottom:1px solid;
width:100%;
}
#body:focus{
border:4px #0c4beb ridge;
width:100%;
}
#body{
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
@endsection

@section('content')
<body style="background-color:#00ffe1;">
<div class="backdiv" style="margin-top:25%;margin-bottom:25%;margin-right:25%;margin-left:25%;">
<div class="card">
</div class="container" style="padding:10px 10px 10px 10px;">

<form method ="POST" action="\photo" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
{{ csrf_field() }}

<div class="form-group"><label id="login_label" name="login_label" style="margin-bottom:20px;font: 30px icon;text-align:left"> Photo </label></div>
 <div class="form-group">
     <label name="l_file_name" id="l_file_name" hidden>File Name</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg>     </div>
     <input class="form-control"  id="file_name" type="text" name="file_name" placeholder="File Name"></input>
      <script>
           const file_name=document.getElementById('file_name');
           file_name.addEventListener('focus',function() { 
               document.getElementById('l_file_name').style.display="block";
            });
            setInterval(function () {
                const file_name=document.getElementById('file_name');
                 if(file_name == document.activeElement){}else{
                     document.getElementById("l_file_name").style.display="none";
                 } 
            }, 100);
      </script></div></div>

<div class="form-group">
     <label name="l_title" id="l_title" hidden>Body</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg>     </div>
     <input class="form-control" id="body" type="text" name="body" placeholder="body"></input>
      <script>
           const body=document.getElementById('body');
           body.addEventListener('focus',function() { 
               document.getElementById('l_body').style.display="block";
            });
            setInterval(function () {
                const body=document.getElementById('body');
                 if(body == document.activeElement){}else{
                     document.getElementById("l_body").style.display="none";
                 } 
            }, 100);
      </script></div></div>
    <div class="flex items-center justify-between">
    <button class="btn btn-info" style="color:white;background-color:#1049e6;margin-top:10px;width:50%;margin-left:25%;margin-right:50%" type="submit">Create</button>
    </div>

  </form>
  </div></div></div>

</body>
 @endsection
<html>