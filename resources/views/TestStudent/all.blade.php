<!DOCTYPE html>
<html lang="en">
@extends("Bootstrap")


@section("css")

 table tr td{
    border : #6b7288 dashed 1px;
    padding:20%
    min-width: fit-content
}

@endsection
<body>
    
Delete Option Doesn't work Yet

<div class="wrap-table100">
    <table class="table" style="width:100%;height:100%;" >
    {{ csrf_field() }} 
<!-- 'name','email','identity_card','national_code','mobile','username','password','avatar'
    ,'role_id','major_id' -->
    <thead>   
    <tr style="background-color: #aacc09">
        <td>id</td>
           <td>User ID</td>
           <td>Test ID</td>
           <td>Score</td>
           <td>Status</td>
           <td>Paid</td>
           <td>Canceled</td>
           <td>Delete</td>
       </tr>
       <thead>
       <tbody>    
       @for($i=0;$i < count($test_students);$i++)
       <!-- 'id', 'user_id', 'test_id', 'score', 'status', 'paid', 'canceled' -->
       <thead> <tr>
           <td><a href="\test_student\{{$test_students[$i]['id']}}\edit" _blank><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16"><path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/><path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/><path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/></svg></i>{{$test_students[$i]['id']}}</a></td>
           <td><a href="\test_student\{{$test_students[$i]['id']}}\edit" _blank>{{$test_students[$i]['user_id']}}</a></td>
           <td><a href="\test_student\{{$test_students[$i]['id']}}\edit" _blank>{{$test_students[$i]['test_id']}}</a></td>
           <td><a href="\test_student\{{$test_students[$i]['id']}}\edit" _blank>{{$test_students[$i]['score']}}</a></td>
           <td><a href="\test_student\{{$test_students[$i]['id']}}\edit" _blank>{{$test_students[$i]['status']}}</a></td>
           <td><a href="\test_student\{{$test_students[$i]['id']}}\edit" _blank>{{$test_students[$i]['paid']}}</a></td>
           <td><a href="\test_student\{{$test_students[$i]['id']}}\edit" _blank>{{$test_students[$i]['canceled']}}</a></td>
           <td><a href="\test_student\{{$test_students[$i]['id']}}" _blank>Delete</a></td>

        </tr>       <thead>

       @endfor
</tbody> 
   </table>
   </div>
</body>
<html>
