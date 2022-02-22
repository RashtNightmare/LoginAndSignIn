<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin\User;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Laravel\Passport\Client;

class RegisterController extends Controller
{
    use IssueTokenTrait;
    public $client;

    public function __construct()
    {
        $this->client=Client::find(1);
    }

    public function register(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = ModelsUser::create([
            'name' => $request('name'),
            'email' => $request('email'),
            'password' =>bcrypt('password'),

        ]);


        // $params =[
        //     'grant_type'=> 'password',
        //     'client_id' => $this->client->id,
        //     'client_secret' => $this->client->secret,
        //     'username' => $request('email'),
        //     'password'=> $request('password'),
        //     'scope' => '*'
        // ];

        // $request->request->add($params);

        // // $proxy = Request::create('oauth/token','POST1');
        // $proxy = Request::create('oauth/token','POST');

        // return Request::dispatch($proxy);
        return $this->issueToken($request,'password');

    }
}
