
<!DOCTYPE html>
<html lang="en">
@extends("layouts.app")


@section("css")

 table tr td{
    border : #6b7288 dashed 1px;
    padding:20%
    min-width: fit-content
}

@endsection

@section('content')
<body>
    
Delete Option Doesn't work Yet

<div class="wrap-table100">
<table class="table" style="width:100%;height:100%;background-color:white;" >
    {{ csrf_field() }} 
<!--     //  //             'reference_id', 'credit_card_number', 'amount', 'status', 'test_id', 'user_id' -->


    <thead>   
    <tr style="background-color: #aacc09">
        <td>Reference Id</td>
           <td>Credit_card Number</td>
           <td>Amount</td>
           <td>Status</td>
           <td>Test ID</td>
           <td>User Id</td>
           <td>Delete</td>
       </tr>
       <thead>
       <tbody>    
       @for($i=0;$i < count($payments);$i++)
           <!-- //  //             'reference_id', 'credit_card_number', 'amount', 'status', 'test_id', 'user_id' -->

       <thead> <tr>
           <td><a href="\payment\{{$payments[$i]['reference_id']}}\edit" _blank><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16"><path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/><path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/><path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/></svg></i>{{$payments[$i]['reference_id']}}</a></td>
           <td><a href="\payment\{{$payments[$i]['reference_id']}}\edit" _blank>{{$payments[$i]['credit_card_number']}}</a></td>
           <td><a href="\payment\{{$payments[$i]['reference_id']}}\edit" _blank>{{$payments[$i]['amount']}}</a></td>
           <td><a href="\payment\{{$payments[$i]['reference_id']}}\edit" _blank>{{$payments[$i]['status']}}</a></td>
           <td><a href="\payment\{{$payments[$i]['reference_id']}}\edit" _blank>{{$payments[$i]['test_id']}}</a></td>
           <td><a href="\payment\{{$payments[$i]['reference_id']}}\edit" _blank>{{$payments[$i]['user_id']}}</a></td>

           <td><a href="\payment\{{$payments[$i]['reference_id']}}\delete" _blank>Delete</a></td>

        </tr>       <thead>

       @endfor<div class="background-color:white;"><h4><a href="\payment\create" _blank>Create</a></h4></div>

</tbody> 
   </table>
   </div>
</body> @endsection

<html>
