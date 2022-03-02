<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')

@section("css")
#amount:focus{
border:4px #0c4beb ridge;
width:100%;
}
#amount{
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

<form method ="POST" action="\balance\{{$balances['id']}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
{{ csrf_field() }}
{{ method_field('PATCH') }}
      <div class="form-group"><label id="login_label" name="login_label" style="margin-bottom:20px;font: 30px icon;text-align:left"> Balance {{$balances['id']}}</label></div>

  <div class="form-group">
     <label name="l_amount" id="l_amount" hidden>Amount</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
  <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
  <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z"/>
</svg>     </div>
     <input class="form-control"  value="{{$balances['amount']}}" id="amount" type="text" name="amount" placeholder="Amount"></input>
      <script>
           const amount=document.getElementById('amount')
           amount.addEventListener('focus',function() { 
               document.getElementById('l_amount').style.display="block";
            });
            setInterval(function () {
                const amount=document.getElementById('amount')
                 if(amount == document.activeElement){}else{
                     document.getElementById("l_amount").style.display="none";
                 } 
            }, 100);
      </script></div></div>
   
   <div class="form-group">
     <label name="l_user_id" id="l_user_id" hidden>User ID</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <i class="fas fa-list"></i>
     </div>
     <input class="form-control"   value="{{$balances['user_id']}}" id="user_id" type="text" name="user_id" placeholder="User ID"></input>
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
    <div class="flex items-center justify-between">
    <button class="btn btn-info" style="color:white;background-color:#1049e6;margin-top:10px;width:50%;margin-left:25%;margin-right:50%" type="submit">Edit</button>
    </div>
  </form>
  </div>
  </div></div></div>

</body>
@endsection
<html>
