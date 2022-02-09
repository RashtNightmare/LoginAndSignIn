<!DOCTYPE html>
<html lang="en">
@extends('Bootstrap')

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
#type:focus{
border:4px #0c4beb ridge;
width:100%;
}
#type{
border:none;
border-bottom:1px solid;
width:100%;
}
#action:focus{
border:4px #0c4beb ridge;
width:100%;
}
#action{
border:none;
border-bottom:1px solid;
width:100%;
}
#type:focus{
border:4px #0c4beb ridge;
width:100%;
}
#type{
border:none;
border-bottom:1px solid;
width:100%;
}
#balance:focus{
border:4px #0c4beb ridge;
width:100%;
}
#balance{
border:none;
border-bottom:1px solid;
width:100%;
}
#description:focus{
border:4px #0c4beb ridge;
width:100%;
}
#description{
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

<form method ="post" action="\wallet" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
{{ csrf_field() }} 
    <div class="form-group"><label id="login_label" name="login_label" style="margin-bottom:20px;font: 30px icon;text-align:left"> Wallet </label></div>
     
           <!-- //        'test_id','user_id','type','action','description','balance' -->

     <div class="form-group">
     <label name="l_test" id="l_test" hidden>Test ID</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <i class="fas fa-list"></i>
     </div>
     <input class="form-control"  id="test_id" type="text" name="test_id" placeholder="Test ID"></input>
      <script>
           const test_id=document.getElementById('test_id')
            test_id.addEventListener('focus',function() { 
               document.getElementById('l_test').style.display="block";
            });
            setInterval(function () {
                const test_id=document.getElementById('test_id')
                 if(test_id == document.activeElement){}else{
                     document.getElementById("l_test").style.display="none";
                 } 
            }, 100);
      </script></div></div>
   
   
   <div class="form-group">
     <label name="l_user" id="l_user" hidden>User ID</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <i class="fas fa-list"></i>
     </div>
     <input class="form-control"  id="user_id" type="text" name="user_id" placeholder="User ID"></input>
      <script>
           const user_id=document.getElementById('user_id')
           user_id.addEventListener('focus',function() { 
               document.getElementById('l_user').style.display="block";
            });
            setInterval(function () {
                const user_id=document.getElementById('user_id')
                 if(user_id == document.activeElement){}else{
                     document.getElementById("l_user").style.display="none";
                 } 
            }, 100);
      </script></div></div>
   
   <div class="form-group">
     <label name="l_type" id="l_type" hidden>Type</label> 
     <div class="input-group">
     <div class="input-group-addon">
   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16">
  <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z"/>
</svg>   </div>
     <input class="form-control"  id="type" type="text" name="type" placeholder="Type"></input>
      <script>
           const type=document.getElementById('type')
           type.addEventListener('focus',function() { 
               document.getElementById('l_type').style.display="block";
            });
            setInterval(function () {
                const type=document.getElementById('type')
                 if(type == document.activeElement){}else{
                     document.getElementById("l_type").style.display="none";
                 } 
            }, 100);
      </script></div></div> 

<div class="form-group">
     <label name="l_action" id="l_action" hidden>Action</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lightning-fill" viewBox="0 0 16 16">
  <path d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5z"/>
</svg>
    </div>
     <input class="form-control"  id="action" type="text" name="action" placeholder="Action"></input>
      <script>
           const action=document.getElementById('action')
           action.addEventListener('focus',function() { 
               document.getElementById('l_action').style.display="block";
            });
            setInterval(function () {
                const action=document.getElementById('action')
                 if(action == document.activeElement){}else{
                     document.getElementById("l_action").style.display="none";
                 } 
            }, 100);
      </script></div></div>    

<div class="form-group">
     <label name="l_description" id="l_description" hidden>Description</label> 
     <div class="input-group">
     <div class="input-group-addon">

     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-text-fill" viewBox="0 0 16 16">
  <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
</svg>
    </div>
     <input class="form-control"  id="description" type="text" name="description" placeholder="Description"></input>
      <script>
           const description=document.getElementById('description')
           description.addEventListener('focus',function() { 
               document.getElementById('l_description').style.display="block";
            });
            setInterval(function () {
                const description=document.getElementById('description')
                 if(description == document.activeElement){}else{
                     document.getElementById("l_description").style.display="none";
                 } 
            }, 100);
      </script></div></div>    
   

   <div class="form-group">
     <label name="l_balance" id="l_balance" hidden>Balance</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
</svg>
    </div>
     <input class="form-control"  id="balance" type="text" name="balance" placeholder="Balance"></input>
      <script>
           const balance=document.getElementById('balance')
           balance.addEventListener('focus',function() { 
               document.getElementById('l_balance').style.display="block";
            });
            setInterval(function () {
                const balance=document.getElementById('balance')
                 if(balance == document.activeElement){}else{
                     document.getElementById("l_balance").style.display="none";
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
