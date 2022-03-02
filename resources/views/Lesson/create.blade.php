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
#major_id:focus{
border:4px #0c4beb ridge;
width:100%;
}
#major_id{
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

<form method ="post" action="\major" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
{{ csrf_field() }} 
    <div class="form-group"><label id="login_label" name="login_label" style="margin-bottom:20px;font: 30px icon;text-align:left"> Major </label></div>
     
<!-- // 'student_id', 'teacher_id', 'score', 'acceptance_quorum', 'amount', 'title'
// , 'major_id', 'lesson_id', 'date', 'duration', 'start_time' -->

     <div class="form-group">
     <label name="l_name" id="l_name" hidden>Name</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <i class="fas fa-list"></i>
     </div>
     <input class="form-control"  id="name" type="text" name="name" placeholder="Name"></input>
      <script>
           const name=document.getElementById('name')
           name.addEventListener('focus',function() { 
               document.getElementById('l_name').style.display="block";
            });
            setInterval(function () {
                const name=document.getElementById('name')
                 if(student_id == document.activeElement){}else{
                     document.getElementById("l_name").style.display="none";
                 } 
            }, 100);
      </script></div></div>
   
   <div class="form-group">
     <label name="l_major_id" id="l_major_id" hidden>Major ID</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <i class="fas fa-list"></i>
     </div>
     <input class="form-control"  id="major_id" type="text" name="major_id" placeholder="Major ID"></input>
      <script>
           const major_id=document.getElementById('major_id')
           major_id.addEventListener('focus',function() { 
               document.getElementById('l_major_id').style.display="block";
            });
            setInterval(function () {
                const major_id=document.getElementById('major_id')
                 if(major_id == document.activeElement){}else{
                     document.getElementById("l_major_id").style.display="none";
                 } 
            }, 100);
      </script></div></div>

    <div class="flex items-center justify-between">
    <button class="btn btn-info" style="color:white;background-color:#1049e6;margin-top:10px;width:50%;margin-left:25%;margin-right:50%" type="submit">Create</button>
    </div>
  </form>
  </div>
  </div></div></div>

</body>
 @endsection
<html>
