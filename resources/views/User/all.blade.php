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
       <tr style="background-color: #aacc09">
        <td>ID</td>
           <td>Name</td>
           <td>Email</td>
           <td>identity Card</td>
           <td>National Code</td>
           <td>User Name</td>
           <td>Password</td>
           <td>Avatar</td>
           <td>Role ID</td>
           <td>Major ID</td>
           <td>Delete</td>
        </tr>
       <thead>
       <tbody>    
       @for($i=0;$i < count($users);$i++)
       <tr bordered>
           <td><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16"><path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/><path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/><path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/></svg></i>{{$users[$i]['id']}}</td>
           <td><a href="\user\{{$users[$i]['id']}}\edit" _blank>{{$users[$i]['name']}}</a></td>
           <td><a href="\user\{{$users[$i]['id']}}\edit" _blank>{{$users[$i]['email']}}</a></td>
           <td><a href="\user\{{$users[$i]['id']}}\edit" _blank>{{$users[$i]['identity_card']}}</a></td>
           <td><a href="\user\{{$users[$i]['id']}}\edit" _blank>{{$users[$i]['national_code']}}</a></td>
           <td><a href="\user\{{$users[$i]['id']}}\edit" _blank>{{$users[$i]['username']}}</a></td>
           <td><a href="\user\{{$users[$i]['id']}}\edit" _blank>{{$users[$i]['password']}}</a></td>
           <td><a href="\user\{{$users[$i]['id']}}\edit" _blank>{{$users[$i]['avatar']}}</a></td>
           <td><a href="\user\{{$users[$i]['id']}}\edit" _blank>{{$users[$i]['role_id']}}</a></td>
           <td><a href="\user\{{$users[$i]['id']}}\edit" _blank>{{$users[$i]['major_id']}}</a></td>

           <td><a href="\user\{{$users[$i]['id']}}" _blank>Delete</a></td>

           </tr>       <thead>

@endfor
</tbody> 
</table>
</div>
</body>
<html>