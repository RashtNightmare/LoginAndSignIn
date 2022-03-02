<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')

@section("css")
#test_id:focus{
border:4px #0c4beb ridge;
width:100%;
}
#test_id{
border:none;
border-bottom:1px solid;
width:100%;
}
#user_id:focus{
border:4px #0c4beb ridge;
width:100%;
}
#user_id{
border:none;
border-bottom:1px solid;
width:100%;
}
#score:focus{
border:4px #0c4beb ridge;
width:100%;
}
#score{
border:none;
border-bottom:1px solid;
width:100%;
}
#status:focus{
border:4px #0c4beb ridge;
width:100%;
}
#status{
border:none;
border-bottom:1px solid;
width:100%;
}
#paid:focus{
border:4px #0c4beb ridge;
width:100%;
}
#paid{
border:none;
border-bottom:1px solid;
width:100%;
}
#canceled:focus{
border:4px #0c4beb ridge;
width:100%;
}
#canceled{
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

<form method ="post" action="\test_student" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
{{ csrf_field() }} 
    <div class="form-group"><label id="login_label" name="login_label" style="margin-bottom:20px;font: 30px icon;text-align:left"> Test Student </label></div>
     
       <!-- 'user_id', 'test_id', 'score', 'status', 'paid', 'canceled' -->

     <div class="form-group">
     <label name="l_user_id" id="l_user_id" hidden>User ID</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <i class="fas fa-list"></i>
     </div>
     <input class="form-control"  id="user_id" type="text" name="user_id" placeholder="User ID"></input>
      <script>
           const user_id=document.getElementById('user_id')
           user_id.addEventListener('focus',function() { 
               document.getElementById('l_user_id').style.display="block";
            });
            setInterval(function () {
                const user_id=document.getElementById('user_id')
                 if(user_id == document.activeElement){}else{
                     document.getElementById("l_user_id").style.display="none";
                 } 
            }, 100);
      </script></div></div>
   
   
   <div class="form-group">
     <label name="l_test_id" id="l_test_id" hidden>Test ID</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <i class="fas fa-list"></i>
     </div>
     <input class="form-control"  id="test_id" type="text" name="test_id" placeholder="Test ID"></input>
      <script>
           const test_id=document.getElementById('test_id')
           test_id.addEventListener('focus',function() { 
               document.getElementById('l_test_id').style.display="block";
            });
            setInterval(function () {
                const test_id=document.getElementById('test_id')
                 if(test_id == document.activeElement){}else{
                     document.getElementById("l_test_id").style.display="none";
                 } 
            }, 100);
      </script></div></div>
   
   <div class="form-group">
     <label name="l_score" id="l_score" hidden>Score</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>     </div>
     <input class="form-control"  id="score" type="text" name="score" placeholder="Score"></input>
      <script>
           const score=document.getElementById('score')
           score.addEventListener('focus',function() { 
               document.getElementById('l_score').style.display="block";
            });
            setInterval(function () {
                const score=document.getElementById('score')
                 if(score == document.activeElement){}else{
                     document.getElementById("l_score").style.display="none";
                 } 
            }, 100);
      </script></div></div> 

<div class="form-group">
     <label name="l_status" id="l_status" hidden>Status</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-data" viewBox="0 0 16 16">
  <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
  <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
  <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
</svg>
    </div>
     <input class="form-control"  id="status" type="text" name="status" placeholder="Status"></input>
      <script>
           const status=document.getElementById('status')
           status.addEventListener('focus',function() { 
               document.getElementById('l_status').style.display="block";
            });
            setInterval(function () {
                const status=document.getElementById('status')
                 if(status == document.activeElement){}else{
                     document.getElementById("l_status").style.display="none";
                 } 
            }, 100);
      </script></div></div>    

<div class="form-group">
     <label name="l_paid" id="l_paid" hidden>Paid</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
  <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
  <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
  <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
</svg>
    </div>
     <input class="form-control"  id="paid" type="text" name="paid" placeholder="Paid"></input>
      <script>
           const paid=document.getElementById('paid')
           paid.addEventListener('focus',function() { 
               document.getElementById('l_paid').style.display="block";
            });
            setInterval(function () {
                const paid=document.getElementById('paid')
                 if(paid == document.activeElement){}else{
                     document.getElementById("l_paid").style.display="none";
                 } 
            }, 100);
      </script></div></div>    
   

   <div class="form-group">
     <label name="l_canceled" id="l_canceled" hidden>Canceled</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
  <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
  <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
</svg>
    </div>
     <input class="form-control"  id="canceled" type="text" name="canceled" placeholder="Canceled"></input>
      <script>
           const canceled=document.getElementById('canceled')
           canceled.addEventListener('focus',function() { 
               document.getElementById('l_canceled').style.display="block";
            });
            setInterval(function () {
                const canceled=document.getElementById('canceled')
                 if(canceled == document.activeElement){}else{
                     document.getElementById("l_canceled").style.display="none";
                 } 
            }, 100);
      </script></div></div>    


    <div class="flex items-center justify-between">
    <button class="btn btn-info" style="color:white;background-color:#1049e6;margin-top:10px;width:50%;margin-left:25%;margin-right:50%" type="submit">Create</button>
    </div>
  </form>
  </div>
  </div></div></div>

</body>@endsection
<html>
