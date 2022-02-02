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

<div >
    <table class="table" >
    {{ csrf_field() }} 
<!-- 'name','email','identity_card','national_code','mobile','username','password','avatar'
    ,'role_id','major_id' -->
    <thead>   
    <tr style="background-color: #aacc09">
        <td>id</td>
           <td>name</td>
           <td>email</td>
           <td>password</td>
       </tr>
       <thead>
       <tbody>    
       @for($i=0;$i < count($users);$i++)
       <tr bordered>
           <td>{{$users[$i]['id']}}</td>
           <td><a href="\user-login\{{$users[$i]['id']}}\edit" _blank>{{$users[$i]['name']}}</a></td>
           <td><a href="\user-login\{{$users[$i]['id']}}\edit" _blank>{{$users[$i]['email']}}</a></td>
           <td><a href="\user-login\{{$users[$i]['id']}}\edit" _blank>{{$users[$i]['password']}}</a></td>
           <td><a href="\user-login\{{$users[$i]['id']}}" _blank>Delete</a></td>

        </tr>
       @endfor
</tbody> 
   </table>
   </div>
</body>
<html>
