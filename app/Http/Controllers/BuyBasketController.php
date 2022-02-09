<?php

namespace App\Http\Controllers;

use App\Models\BuyBasket;
use Exception;
use Illuminate\Http\Request;

class BuyBasketController extends Controller
{
  
       /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
 //`id`, `amount`, `status`, `test_id`, `user_id`, `created_at`, `updated_at`
    $buy_baskets= BuyBasket::query()->select([
            'id', 'amount', 'status', 'test_id', 'user_id'
        ])->get();
        if (!$buy_baskets){
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
               return view('BuyBasket.all', compact('buy_baskets'));
           }
            catch(Exception $exception){
 
            }
        }
        return view('BuyBasket.all',compact('buy_baskets'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BuyBasket.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 // 'amount', 'status', 'test_id', 'user_id'


 
        try {
            $buy_baskets=BuyBasket::create([
                'amount'=>$request->amount,
                'status'=>$request->status,
                'user_id'=>$request->user_id, 
                'test_id'=>$request->test_id, 
            ]);
            return $buy_baskets;
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
    public function edit($id)
    {
        $buy_baskets= BuyBasket::query()->where('id',$id)->first();
        if (!$buy_baskets) {
         return response()->json([
                'msg' => "NOT FOUND",
            ],404);}
         else{
             return view("BuyBasket.edit", compact('buy_baskets'));
         }       }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $buy_baskets= BuyBasket::query()->where('id', $id)->first();
        if (!$buy_baskets) {
            return response()->json([
                'msg' => "NOT FOUND",
            ], 200);
        }
      //  $tmp=['name'=>$request->name];
      //  $role->update($tmp);
      //  $role->save();
      //  return view("Role.all",compact('role'));
      //            'test_id','user_id','type','action','description','balance'
 
 // 'amount', 'status', 'test_id', 'user_id'

 
 
    $buy_baskets->amount=$request->amount;
    $buy_baskets->status=$request->status;
    $buy_baskets->test_id=$request->test_id;
    $buy_baskets->user_id=$request->user_id;
            // $users->password=$request->password;
            $buy_baskets->save();
          return $this->index();    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BuyBasket::query()->where('id', $id)->delete();
        return $this->index();
        }
 }
 
