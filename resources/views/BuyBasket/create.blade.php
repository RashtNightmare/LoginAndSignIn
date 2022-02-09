<!DOCTYPE html>
<html lang="en">
@extends('Bootstrap')

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
    <!-- 'id', 'amount', 'status', 'test_id', 'user_id' -->
#user_id:focus{
border:4px #0c4beb ridge;
width:100%;
}
#user_id{
border:none;
border-bottom:1px solid;
width:100%;
}
#test_id:focus{
border:4px #0c4beb ridge;
width:100%;
}
#test_id{
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

<form method ="post" action="\buy_basket" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
{{ csrf_field() }} 
    <div class="form-group"><label id="login_label" name="login_label" style="margin-bottom:20px;font: 30px icon;text-align:left"> Buy Basket </label></div>
     
    <!-- 'id', 'amount', 'status', 'test_id', 'user_id' -->


     <div class="form-group">
     <label name="l_amount" id="l_amount" hidden>Amount</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
  <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
  <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z"/>
</svg>     </div>
     <input class="form-control"  id="amount" type="text" name="amount" placeholder="Amount"></input>
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
     <label name="l_status" id="l_status" hidden>Status</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16">
  <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z"/>
</svg>     </div>
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
    <div class="flex items-center justify-between">
    <button class="btn btn-info" style="color:white;background-color:#1049e6;margin-top:10px;width:50%;margin-left:25%;margin-right:50%" type="submit">Create</button>
    </div>
  </form>
  </div>
  </div></div></div>

</body>
<html>
