<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')

@section("css")
#name:focus{
border:4px #0c4beb ridge;
width:100%;
}
#name{
border:none;
border-bottom:1px solid;
width:100%;
}
@endsection

@section('content')
<body style="background-color:#00ffe1;">
<div class="backdiv" style="margin-top:25%;margin-bottom:25%;margin-right:25%;margin-left:25%;">
<div class="card">
</div class="container" style="padding:10px 10px 10px 10px;">

<form method ="POST" action="\user_role\{{$roles['id']}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
{{ csrf_field() }}
{{ method_field('PATCH') }}
    <div class="form-group"><label id="login_label" name="login_label" style="margin-bottom:20px;font: 30px icon;text-align:left"> Role {{$roles['id']}}</label></div>
 
       <!-- 'user_id', 'test_id', 'score', 'status', 'paid', 'canceled' -->

       <div class="form-group">
     <label name="l_name" id="l_name" hidden>Name</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <i class="fas fa-list"></i>
     </div>
     <input class="form-control"  value="{{$roles['name']}}" id="name" type="text" name="name" placeholder="Name"></input>
      <script>
           const name=document.getElementById('name')
           name.addEventListener('focus',function() { 
               document.getElementById('l_name').style.display="block";
            });
            setInterval(function () {
                const name=document.getElementById('name')
                 if(name == document.activeElement){}else{
                     document.getElementById("l_name").style.display="none";
                 } 
            }, 100);
      </script></div></div>
   
    <div class="flex items-center justify-between">
    <button class="btn btn-info" style="color:white;background-color:#1049e6;margin-top:10px;width:50%;margin-left:25%;margin-right:50%" type="submit">Edit</button>
    </div>
  </form>
  </div>
  </div></div></div>

</body>
 @endsection
<html>
