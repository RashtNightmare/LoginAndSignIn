<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Exception;
use Illuminate\Http\Request;

class WalletController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //        'test_id','user_id','type','action','description','balance'

        $wallets= Wallet::query()->select([
            'id','test_id','user_id','type','action','description','balance'
        ])->get();
        if (!$wallets){
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
               return view('Wallet.all', compact('wallets'));
           }
            catch(Exception $exception){

            }
        }
        return view('Wallet.all',compact('wallets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Wallet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $wallets=Wallet::create([
                'test_id'=>$request->test_id,
                'user_id'=>$request->user_id,
                'type'=>$request->type,
                'action'=>$request->action,
                'description'=>$request->description,
                'balance'=>$request->balance
            ]);
            return $wallets;
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
    public function show($id)
    {
        
        // $users= User::query()->select([
        //     'name','email','identity_card','national_code','mobile','username','password','avatar'
        //     ,'role_id','major_id'
        // ])->with('role')->get();
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
        //        return view('User.all', compact('users'));
 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wallets= Wallet::query()->where('id',$id)->first();
        if (!$wallets) {
         return response()->json([
                'msg' => "NOT FOUND",
            ],404);}
         else{
             return view("Wallet.edit", compact('wallets'));
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
        $wallets= Wallet::query()->where('id', $id)->first();
        if (!$wallets) {
            return response()->json([
                'msg' => "NOT FOUND",
            ], 200);
        }
      //  $tmp=['name'=>$request->name];
      //  $role->update($tmp);
      //  $role->save();
      //  return view("Role.all",compact('role'));
      //            'test_id','user_id','type','action','description','balance'

    $wallets->test_id=$request->test_id;
    $wallets->user_id=$request->user_id;
    $wallets->type=$request->type;
    $wallets->action=$request->action;
    $wallets->description=$request->description;
    $wallets->balance=$request->balance;

            // $users->password=$request->password;
            $wallets->save();
          return $this->index();    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Wallet::query()->where('id', $id)->delete();
        return $this->index();
        }
}
