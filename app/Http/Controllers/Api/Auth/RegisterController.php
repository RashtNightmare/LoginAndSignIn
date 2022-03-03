<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\COntrollers\Api\Auth\IssueTokenTrait;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
// use Illuminate\Routing\Route;
use Laravel\Passport\Client;

class RegisterController extends Controller
{

    use IssueTokenTrait;
    private $client;

    public function __construct()
    {
        $this->client=Client::find(1);
    }

    public function register(Request $request){
      $this->validate($request,[
          'name' => 'required',
          'email'=> 'required|email|unique:user,email',
          'password' => 'required|mn:6'
      ]);
      $user=User::create([
       'name'=>$request['name'],
       'email'=>$request['email'],
       'password'=>bcrypt($request['password'])
      ]);
      return $this->issueToken($request,'password');

    //   $params=[
    //       'grant_type' => 'password',
    //       'client_id'=>  $this->client->id,
    //       'client_secret' => $this->client->secret,
    //       'username'=>$request['email'],
    //       'password' => $request['password'],
    //       'scope'=>'*'
    //   ];

    //   $request->request->add($params);
    //   $proxy = Request::create('oauth/token','POST');

    //   return Route::dispatch($proxy);
    }
}
