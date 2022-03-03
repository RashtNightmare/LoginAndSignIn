<?php
namespace App\Http\COntrollers\Api\Auth;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

trait IssueTokenTrait{

    public function issueToken(Request $request,$grandType,$scope="*"){
        $params=[
            'grant_type' => $grandType,
            'client_id'=>  $this->client->id,
            'client_secret' => $this->client->secret,
            'username'=>$request['username'] ?: $request['email'],
            'scope'=>$scope
        ];
    
            $request->request->add($params);
            $proxy = Request::create('oauth/token', 'POST');
    
            return Route::dispatch($proxy);
    }

}


?>