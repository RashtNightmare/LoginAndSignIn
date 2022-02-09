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
#text:focus{
border:4px #0c4beb ridge;
width:100%;
}
#text{
border:none;
border-bottom:1px solid;
width:100%;
}
#option1:focus{
border:4px #0c4beb ridge;
width:100%;
}
#option1{
border:none;
border-bottom:1px solid;
width:100%;
}
#option2:focus{
border:4px #0c4beb ridge;
width:100%;
}
       <!-- // // 'id', 'text', 'option1', 'option2', 'option3', 'option4', 'true_answer'
//  , 'test_id' -->
#option2{
border:none;
border-bottom:1px solid;
width:100%;
}
#option3:focus{
border:4px #0c4beb ridge;
width:100%;
}
#option3{
border:none;
border-bottom:1px solid;
width:100%;
}
#option4:focus{
border:4px #0c4beb ridge;
width:100%;
}
#option4{
border:none;
border-bottom:1px solid;
width:100%;
}
#true_answer:focus{
border:4px #0c4beb ridge;
width:100%;
}
#true_answer{
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

<form method ="post" action="\question" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
{{ csrf_field() }} 
    <div class="form-group"><label id="login_label" name="login_label" style="margin-bottom:20px;font: 30px icon;text-align:left"> Test </label></div>
     
       <!-- // // 'id', 'text', 'option1', 'option2', 'option3', 'option4', 'true_answer'
//  , 'test_id' -->
     <div class="form-group">
     <label name="l_text" id="l_text" hidden>Text</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
</svg>     </div>
     <input class="form-control"  id="text" type="text" name="text" placeholder="Text"></input>
      <script>
           const text=document.getElementById('text')
           text.addEventListener('focus',function() { 
               document.getElementById('l_text').style.display="block";
            });
            setInterval(function () {
                const text=document.getElementById('text')
                 if(text == document.activeElement){}else{
                     document.getElementById("l_text").style.display="none";
                 } 
            }, 100);
      </script></div></div>
   
   
   <div class="form-group">
     <label name="l_option1" id="l_option1" hidden>Option 1</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
</svg>     </div>
     <input class="form-control"  id="option1" type="text" name="option1" placeholder="Option 1"></input>
      <script>
           const option1=document.getElementById('option1')
           option1.addEventListener('focus',function() { 
               document.getElementById('l_option1').style.display="block";
            });
            setInterval(function () {
                const option1=document.getElementById('option1')
                 if(option1 == document.activeElement){}else{
                     document.getElementById("l_option1").style.display="none";
                 } 
            }, 100);
      </script></div></div>
   
   <div class="form-group">
     <label name="l_option2" id="l_option2" hidden>Option 2</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
</svg>    </div>
     <input class="form-control"  id="option2" type="text" name="option2" placeholder="Option 2"></input>
      <script>
           const option2=document.getElementById('option2')
           option2.addEventListener('focus',function() { 
               document.getElementById('l_option2').style.display="block";
            });
            setInterval(function () {
                const option2=document.getElementById('option2')
                 if(option2 == document.activeElement){}else{
                     document.getElementById("l_option2").style.display="none";
                 } 
            }, 100);
      </script></div></div> 

         <div class="form-group">
     <label name="l_option3" id="l_option3" hidden>Option 3</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
</svg>
        </div>
     <input class="form-control"  id="option3" type="text" name="option3" placeholder="Option 3"></input>
      <script>
           const option3=document.getElementById('option3')
           option3.addEventListener('focus',function() { 
               document.getElementById('l_option3').style.display="block";
            });
            setInterval(function () {
                const option3=document.getElementById('option3')
                 if(option3 == document.activeElement){}else{
                     document.getElementById("l_option3").style.display="none";
                 } 
            }, 100);
      </script></div></div>     

<div class="form-group">
     <label name="l_option4" id="l_option4" hidden>Option 4</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
</svg> 
        </div>
     <input class="form-control"  id="option4" type="text" name="option4" placeholder="Option 4"></input>
      <script>
           const option4=document.getElementById('option4')
           option4.addEventListener('focus',function() { 
               document.getElementById('l_option4').style.display="block";
            });
            setInterval(function () {
                const option4=document.getElementById('option4')
                 if(option4 == document.activeElement){}else{
                     document.getElementById("l_option4").style.display="none";
                 } 
            }, 100);
      </script></div></div>    
   

   <div class="form-group">
     <label name="l_true_answer" id="l_true_answer" hidden>True Answer</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg>
    </div>
     <input class="form-control"  id="true_answer" type="text" name="true_answer" placeholder="True Answer"></input>
      <script>
           const true_answer=document.getElementById('true_answer')
           true_answer.addEventListener('focus',function() { 
               document.getElementById('l_true_answer').style.display="block";
            });
            setInterval(function () {
                const true_answer=document.getElementById('true_answer')
                 if(true_answer == document.activeElement){}else{
                     document.getElementById("l_true_answer").style.display="none";
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

    <div class="flex items-center justify-between">
    <button class="btn btn-info" style="color:white;background-color:#1049e6;margin-top:10px;width:50%;margin-left:25%;margin-right:50%" type="submit">Create</button>
    </div>
  </form>
  </div>
  </div></div></div>

</body>
<html>
