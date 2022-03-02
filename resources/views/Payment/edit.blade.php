<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')

@section("css")
#credit_card_number:focus{
border:4px #0c4beb ridge;
width:100%;
}
#credit_card_number{
border:none;
border-bottom:1px solid;
width:100%;
}
#amount:focus{
border:4px #0c4beb ridge;
width:100%;
}
#amount{
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
#test_id:focus{
border:4px #0c4beb ridge;
width:100%;
}
           <!-- //  //             'reference_id', 'credit_card_number', 'amount', 'status', 'test_id', 'user_id' -->
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
#reference_id:focus{
border:4px #0c4beb ridge;
width:100%;
}
#reference_id{
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

<form method ="POST" action="\payment\{{$payments['reference_id']}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
{{ csrf_field() }}
{{ method_field('PATCH') }}
    <div class="form-group"><label id="login_label" name="login_label" style="margin-bottom:20px;font: 30px icon;text-align:left"> Payment {{$payments['reference_id']}}</label></div>
 
   
                  <!-- //  //             'reference_id', 'credit_card_number', 'amount', 'status', 'test_id', 'user_id' -->

           
                  <div class="form-group">
     <label name="l_reference_id" id="l_reference_id" hidden>Reference ID</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-2-back-fill" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z"/>
</svg>   </div>
     <input class="form-control" value="{{$payments['reference_id']}}"  id="reference_id" type="text" name="reference_id" placeholder="Reference ID"></input>

<script>
           const reference_id=document.getElementById('reference_id')
           reference_id.addEventListener('focus',function() { 
               document.getElementById('l_reference_id').style.display="block";
            });
            setInterval(function () {
                const reference_id=document.getElementById('reference_id')
                 if(reference_id == document.activeElement){}else{
                     document.getElementById("l_reference_id").style.display="none";
                 } 
            }, 100);
      </script></div></div>
   

                  <div class="form-group">
     <label name="l_credit_card_number" id="l_credit_card_number" hidden>Credit Card Number</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-2-back-fill" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z"/>
</svg>   </div>
     <input class="form-control" value="{{$payments['credit_card_number']}}"  id="credit_card_number" type="text" name="credit_card_number" placeholder="Credit Card Number"></input>
      <script>
           const credit_card_number=document.getElementById('credit_card_number')
           credit_card_number.addEventListener('focus',function() { 
               document.getElementById('l_credit_card_number').style.display="block";
            });
            setInterval(function () {
                const credit_card_number=document.getElementById('credit_card_number')
                 if(credit_card_number == document.activeElement){}else{
                     document.getElementById("l_credit_card_number").style.display="none";
                 } 
            }, 100);
      </script></div></div>
   
   
   <div class="form-group">
     <label name="l_amount" id="l_amount" hidden>Amount</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
  <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
  <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z"/>
</svg>   </div>
     <input class="form-control" value="{{$payments['amount']}}"   id="amount" type="text" name="amount" placeholder="Amount"></input>
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
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-magic" viewBox="0 0 16 16">
  <path d="M9.5 2.672a.5.5 0 1 0 1 0V.843a.5.5 0 0 0-1 0v1.829Zm4.5.035A.5.5 0 0 0 13.293 2L12 3.293a.5.5 0 1 0 .707.707L14 2.707ZM7.293 4A.5.5 0 1 0 8 3.293L6.707 2A.5.5 0 0 0 6 2.707L7.293 4Zm-.621 2.5a.5.5 0 1 0 0-1H4.843a.5.5 0 1 0 0 1h1.829Zm8.485 0a.5.5 0 1 0 0-1h-1.829a.5.5 0 0 0 0 1h1.829ZM13.293 10A.5.5 0 1 0 14 9.293L12.707 8a.5.5 0 1 0-.707.707L13.293 10ZM9.5 11.157a.5.5 0 0 0 1 0V9.328a.5.5 0 0 0-1 0v1.829Zm1.854-5.097a.5.5 0 0 0 0-.706l-.708-.708a.5.5 0 0 0-.707 0L8.646 5.94a.5.5 0 0 0 0 .707l.708.708a.5.5 0 0 0 .707 0l1.293-1.293Zm-3 3a.5.5 0 0 0 0-.706l-.708-.708a.5.5 0 0 0-.707 0L.646 13.94a.5.5 0 0 0 0 .707l.708.708a.5.5 0 0 0 .707 0L8.354 9.06Z"/>
</svg>
        </div>
     <input class="form-control"  value="{{$payments['status']}}"  id="status" type="text" name="status" placeholder="Status"></input>
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
     <label name="test_id" id="l_test_id" hidden>Test ID</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
</svg>        </div>
     <input class="form-control" value="{{$payments['test_id']}}" id="test_id" type="text" name="test_id" placeholder="Test Id"></input>
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
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
</svg>
    </div>
     <input class="form-control"  value="{{$payments['user_id']}}"  id="user_id" type="text" name="user_id" placeholder="User ID"></input>
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
