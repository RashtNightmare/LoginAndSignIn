<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')

@section("css")
#title:focus{
  border:4px #0c4beb ridge;
  width:100%;
  }
  #title{
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

<form method ="POST" action="\post\{{$posts[0]['id']}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
{{ csrf_field() }}
{{ method_field('PATCH') }}
    <div class="form-group"><label id="login_label" name="login_label" style="margin-bottom:20px;font: 30px icon;text-align:left"> Post {{$posts[0]['id']}}</label></div>
 
       <!-- 'user_id', 'test_id', 'score', 'status', 'paid', 'canceled' -->
      
       <div class="form-group">
        <label name="l_body" id="l_body" hidden>Body</label> 
        <div class="input-group">
        <div class="input-group-addon">
        <i class="fas fa-list"></i>
        </div>
        <input class="form-control"  value="{{$posts[0]['body']}}"  id="body" type="text" name="body" placeholder="Body"></input>
         <script>
              const body=document.getElementById('body')
              body.addEventListener('focus',function() { 
                  document.getElementById('l_body').style.display="block";
               });
               setInterval(function () {
                   const body=document.getElementById('body')
                    if(body == document.activeElement){}else{
                        document.getElementById("l_body").style.display="none";
                    } 
               }, 100);
         </script></div></div>

<div class="form-group">
  <label name="l_title" id="l_title" hidden>Name</label> 
  <div class="input-group">
  <div class="input-group-addon">
  <i class="fas fa-list"></i>
  </div>
  <input class="form-control" value="{{$posts[0]['title']}}"  id="title" type="text" name="title" placeholder="Title"></input>
   <script>
        const title=document.getElementById('title')
        title.addEventListener('focus',function() { 
            document.getElementById('l_title').style.display="block";
         });
         setInterval(function () {
             const title=document.getElementById('title')
              if(title == document.activeElement){}else{
                  document.getElementById("l_title").style.display="none";
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
