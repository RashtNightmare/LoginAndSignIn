<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Exception;
use Illuminate\Http\Request;
use Mockery\Generator\StringManipulation\Pass\Pass;

class PaymentController extends Controller
{
   
       /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
 //`reference_id`, `credit_card_number`, `amount`, 
    //`status`, `test_id`, `user_id`, `created_at`, `updated_at`
    $payments= Payment::query()->select([
            'reference_id', 'credit_card_number', 'amount', 'status', 'test_id', 'user_id'
        ])->get();
        if (!$payments){
            return response()->json([
                'data' => '',
                'msg' =>"NOT FOUND"
            ],404);
        }else{
            // return response()->json([
            //     'data' => $users,
            //     'msg' =>"SUCCESSFULLY"
            // ],200);
           try {
               return view('Payment.all', compact('payments'));
           }
            catch(Exception $exception){
 
            }
        }
        return view('Payment.all',compact('payments'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Payment.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 //             'reference_id', 'credit_card_number', 'amount', 'status', 'test_id', 'user_id'

 
        try {
            $payments=Payment::create([
                'reference_id'=>$request->reference_id,
                'credit_card_number'=>$request->credit_card_number,
                'amount'=>$request->amount, 
                'status'=>$request->status, 
                'test_id'=>$request->test_id, 
                'user_id'=>$request->user_id, 
            ]);
            return $payments;
        } catch (Exception $exception) {
            return response()->json([
                'data' => $exception,
                'msg' => 'failed'], 500);
        }    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($reference_id)
    {
    // //'user_id', 'test_id', 'score', 'status', 'paid', 'canceled'
 
 
    //    $users= User::query()->select([
    //     'id', 'name', 'email', 'identity_card', 'national_code', 'mobile', 
    //     'username', 'password', 'avatar', 'role_id', 'major_id'
    // ])->get();
    // if (!$users){
    //     return response()->json([
    //         'data' => '',
    //         'msg' =>"NOT FOUND"
    //     ],404);
    // }else{
    //     // return response()->json([
    //     //     'data' => $users,
    //     //     'msg' =>"SUCCESSFULLY"
    //     // ],200);
    //    try {
    //        return view('User.all', compact('users'));
    //    }
    //     catch(Exception $exception){
 
    //     }
    // }
    // return view('User.all',compact('users'));
 }
 
    /**
     * Show the form for editing the specified resource.
     *+
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($reference_id)
    {
        $payments= Payment::query()->where('reference_id',$reference_id)->first();
        if (!$payments) {
         return response()->json([
                'msg' => "NOT FOUND",
            ],404);}
         else{
             return view("Payment.edit", compact('payments'));
         }       }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $reference_id)
    {
        $payments= Payment::query()->where('reference_id', $reference_id)->first();
        if (!$payments) {
            return response()->json([
                'msg' => "NOT FOUND",
            ], 200);
        }
      //  $tmp=['name'=>$request->name];
      //  $role->update($tmp);
      //  $role->save();
      //  return view("Role.all",compact('role'));
      //            'test_id','user_id','type','action','description','balance'
 
    //  //             'reference_id', 'credit_card_number', 'amount', 'status', 'test_id', 'user_id'

 
 
    $payments->reference_id=$request->reference_id;
    $payments->credit_card_number=$request->credit_card_number;
    $payments->amount=$request->amount;
    $payments->status=$request->status;
    $payments->test_id=$request->test_id;
    $payments->user_id=$request->user_id;
            // $users->password=$request->password;
            $payments->save();
          return $this->index();    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($reference_id)
    {
        Payment::query()->where('reference_id', $reference_id)->delete();
        return $this->index();
        }
 }
 
