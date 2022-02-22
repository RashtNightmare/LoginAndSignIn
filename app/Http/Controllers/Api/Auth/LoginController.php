<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Facade\FlareClient\Http\Response;
use Laravel\Passport\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Passport\AuthCode;
use Laravel\Passport\HasApiTokens;


class LoginController extends Controller
{
    use HasApiTokens;
    use IssueTokenTrait;

private $client;

public function __construct()
{
  $this->client=Client::find(1);    
}
public function login(Request $request){


    $this->validate($request,[
        'username' => 'required',
        'password' => 'required'
    ]);

    /*
         $params =[
        'grant_type'=> 'password',
        'client_id' => $this->client->id,
        'client_secret' => $this->client->secret,
        'username' => $request('username'),
        'password'=> $request('password'),
        'scope' => '*'
    ];

    $request->request->add($params);

    // $proxy = Request::create('oauth/token','POST1');
    $proxy = Request::create('oauth\token','POST');

    return Request::dispatch($proxy);
     *
     * @param Request $request
     * @return void
     */
    return $this->issueToken($request,'password');

}   
public function refresh(Request $request){
    
    $this->validate($request,[
        'refresh_token' => 'required',
    ]);

    // $params =[
    //     'grant_type'=> 'password',
    //     'client_id' => $this->client->id,
    //     'client_secret' => $this->client->secret,
    //     'username' => $request('username'),
    //     'password'=> $request('password'),
    // ];

    // $request->request->add($params);

    // // $proxy = Request::create('oauth/token','POST1');
    // $proxy = Request::create('oauth\token','POST');

    // return Request::dispatch($proxy);
    return $this->issueToken($request,'refresh_token');

}    
public function logout(Request $request){
    $accessToken=Auth::user()->token;
    // $accessToken=Auth::user()->token();

    DB::table('oauth_refresh_tokens')->where('access_token_id',$accessToken->id)
    ->update(['revoked'=> true]);
    
    $accessToken->revoke();

    return response()->json([],204);
}    
}
