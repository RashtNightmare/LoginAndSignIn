<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\COntrollers\Api\Auth\IssueTokenTrait;
use Illuminate\Foundation\Exceptions\Handler;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Route;
use Laravel\Passport\Client as PassportClient;

class LoginController extends Controller
{

    use IssueTokenTrait;
    private $client;

    public function __construct()
    {
        $this->client=PassportClient::find(1);
    }

    public function Login(Request $request)
    {
        $this->validate($request, [
          'username' => 'required',
          'password' => 'required',

      ]);
       
     return $this->issueToken($request,'password');
      
    //     $params=[
    //     'grant_type' => 'password',
    //     'client_id'=>  $this->client->id,
    //     'client_secret' => $this->client->secret,
    //     'username'=>$request['username'],
    //     'password' => $request['password'],
    //     'scope'=>'*'
    // ];

    //     $request->request->add($params);
    //     $proxy = Request::create('oauth/token', 'POST');

    //     return Route::dispatch($proxy);
    }


    public function refresh(Request $request)
    {
        $this->validate($request, [
      'refresh_tokens' => 'required',
     ]);

    return $this->issueToken($request,'refresh_token');
    //     $params=[
    //     'grant_type' => 'refresh_token',
    //     'client_id'=>  $this->client->id,
    //     'client_secret' => $this->client->secret,
    //     'username'=>$request['username'],
    //     'password' => $request['password'],
    // ];

    //     $request->request->add($params);
    //     $proxy = Request::create('oauth/token', 'POST');

    //     return Route::dispatch($proxy);
    }
    public function logout(Request $request)
    {
        $accessToken=Auth::user()->token;
        DB::table('oauth_refresh_tokens')->
        where('access_token_id',$accessToken->id)->update(['revoke'=>true]);
        $accessToken->revoke();
        
        return response()->json([

        ],204);
    }
}