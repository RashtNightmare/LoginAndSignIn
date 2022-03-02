<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')

@section("css")
#student_id:focus{
border:4px #0c4beb ridge;
width:100%;
}
#student_id{
border:none;
border-bottom:1px solid;
width:100%;
}
#teacher_id:focus{
border:4px #0c4beb ridge;
width:100%;
}
#teacher_id{
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
#acceptance_quorum:focus{
border:4px #0c4beb ridge;
width:100%;
}
#acceptance_quorum{
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
#title:focus{
border:4px #0c4beb ridge;
width:100%;
}
#title{
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
#lesson_id:focus{
border:4px #0c4beb ridge;
width:100%;
}
#lesson_id{
border:none;
border-bottom:1px solid;
width:100%;
}
#date:focus{
border:4px #0c4beb ridge;
width:100%;
}
#date{
border:none;
border-bottom:1px solid;
width:100%;
}
#duration:focus{
border:4px #0c4beb ridge;
width:100%;
}
#duration{
border:none;
border-bottom:1px solid;
width:100%;
}
#start_time:focus{
border:4px #0c4beb ridge;
width:100%;
}
#start_time{
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

<form method ="post" action="\test" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
{{ csrf_field() }} 
    <div class="form-group"><label id="login_label" name="login_label" style="margin-bottom:20px;font: 30px icon;text-align:left"> Test </label></div>
     
<!-- // 'student_id', 'teacher_id', 'score', 'acceptance_quorum', 'amount', 'title'
// , 'major_id', 'lesson_id', 'date', 'duration', 'start_time' -->

     <div class="form-group">
     <label name="l_student_id" id="l_student_id" hidden>Student ID</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <i class="fas fa-list"></i>
     </div>
     <input class="form-control"  id="student_id" type="text" name="student_id" placeholder="Student ID"></input>
      <script>
           const student_id=document.getElementById('student_id')
           student_id.addEventListener('focus',function() { 
               document.getElementById('l_student_id').style.display="block";
            });
            setInterval(function () {
                const student_id=document.getElementById('student_id')
                 if(student_id == document.activeElement){}else{
                     document.getElementById("l_student_id").style.display="none";
                 } 
            }, 100);
      </script></div></div>
   
   
   <div class="form-group">
     <label name="l_teacher_id" id="l_teacher_id" hidden>Teacher ID</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <i class="fas fa-list"></i>
     </div>
     <input class="form-control"  id="teacher_id" type="text" name="teacher_id" placeholder="Teacher ID"></input>
      <script>
           const teacher_id=document.getElementById('teacher_id')
           teacher_id.addEventListener('focus',function() { 
               document.getElementById('l_teacher_id').style.display="block";
            });
            setInterval(function () {
                const teacher_id=document.getElementById('teacher_id')
                 if(teacher_id == document.activeElement){}else{
                     document.getElementById("l_teacher_id").style.display="none";
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
     <label name="l_acceptance_quorum" id="l_acceptance_quorum" hidden>Acceptance Quorum</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-data" viewBox="0 0 16 16">
  <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
  <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
  <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
</svg>
        </div>
     <input class="form-control"  id="acceptance_quorum" type="text" name="acceptance_quorum" placeholder="Acceptance Quorum"></input>
      <script>
           const acceptance_quorum=document.getElementById('acceptance_quorum')
           acceptance_quorum.addEventListener('focus',function() { 
               document.getElementById('l_acceptance_quorum').style.display="block";
            });
            setInterval(function () {
                const acceptance_quorum=document.getElementById('acceptance_quorum')
                 if(acceptance_quorum == document.activeElement){}else{
                     document.getElementById("l_acceptance_quorum").style.display="none";
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
</svg>
    </div>
     <input class="form-control"  id="amount" type="text" name="amount" placeholder="amount"></input>
      <script>
           const amount=document.getElementById('amount')
           amount.addEventListener('focus',function() { 
            amount.getElementById('l_amount').style.display="block";
            });
            setInterval(function () {
                const amount=document.getElementById('amount')
                 if(amount == document.activeElement){}else{
                     document.getElementById("l_amount").style.display="none";
                 } 
            }, 100);
      </script></div></div>    
   

   <div class="form-group">
     <label name="l_title" id="l_title" hidden>Title</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-heading" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z"/>
</svg>
    </div>
     <input class="form-control"  id="title" type="text" name="title" placeholder="Title"></input>
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

<div class="form-group">
     <label name="l_major_id" id="l_major_id" hidden>major_id</label> 
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

<div class="form-group">
     <label name="l_lesson_id" id="l_lesson_id" hidden>lesson_id</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <i class="fas fa-list"></i>

    </div>
     <input class="form-control"  id="lesson_id" type="text" name="lesson_id" placeholder="Lesson Id"></input>
      <script>
           const lesson_id=document.getElementById('lesson_id')
           lesson_id.addEventListener('focus',function() { 
               document.getElementById('l_lesson_id').style.display="block";
            });
            setInterval(function () {
                const lesson_id=document.getElementById('lesson_id')
                 if(lesson_id == document.activeElement){}else{
                     document.getElementById("l_lesson_id").style.display="none";
                 } 
            }, 100);
      </script></div></div>    

<div class="form-group">
     <label name="l_date" id="l_date" hidden>Date</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
</svg>
    </div>
     <input class="form-control"  id="date" type="text" name="date" placeholder="Date"></input>
      <script>
           const date=document.getElementById('date')
           date.addEventListener('focus',function() { 
               document.getElementById('l_date').style.display="block";
            });
            setInterval(function () {
                const date=document.getElementById('date')
                 if(date == document.activeElement){}else{
                     document.getElementById("l_date").style.display="none";
                 } 
            }, 100);
      </script></div></div>    

<div class="form-group">
     <label name="l_duration" id="l_duration" hidden>Duration</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stopwatch-fill" viewBox="0 0 16 16">
  <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07A7.001 7.001 0 0 0 8 16a7 7 0 0 0 5.29-11.584.531.531 0 0 0 .013-.012l.354-.354.353.354a.5.5 0 1 0 .707-.707l-1.414-1.415a.5.5 0 1 0-.707.707l.354.354-.354.354a.717.717 0 0 0-.012.012A6.973 6.973 0 0 0 9 2.071V1h.5a.5.5 0 0 0 0-1h-3zm2 5.6V9a.5.5 0 0 1-.5.5H4.5a.5.5 0 0 1 0-1h3V5.6a.5.5 0 1 1 1 0z"/>
</svg>
    </div>
     <input class="form-control"  id="duration" type="text" name="duration" placeholder="Duration"></input>
      <script>
           const duration=document.getElementById('duration')
           duration.addEventListener('focus',function() { 
               document.getElementById('l_duration').style.display="block";
            });
            setInterval(function () {
                const duration=document.getElementById('duration')
                 if(duration == document.activeElement){}else{
                     document.getElementById("l_duration").style.display="none";
                 } 
            }, 100);
      </script></div></div>    

<div class="form-group">
     <label name="l_start_time" id="l_start_time" hidden>Start Time</label> 
     <div class="input-group">
     <div class="input-group-addon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-flag-fill" viewBox="0 0 16 16">
  <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
</svg>
    </div>
     <input class="form-control"  id="start_time" type="text" name="start_time" placeholder="Start Time"></input>
      <script>
           const start_time=document.getElementById('start_time')
           start_time.addEventListener('focus',function() { 
               document.getElementById('l_start_time').style.display="block";
            });
            setInterval(function () {
                const start_time=document.getElementById('start_time')
                 if(start_time == document.activeElement){}else{
                     document.getElementById("l_start_time").style.display="none";
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
