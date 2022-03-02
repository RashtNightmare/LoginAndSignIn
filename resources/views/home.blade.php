@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
      <br>
      <h4>Actions</h4>
       <hr style="margin-bottom:10px">
        <li><a href="\video\all">Video</a></li>
        <li><a href="\photo\all">Photo</a></li>

        
        <li><a href="\buy_basket\all" _blank>Buy Baskets</a></li>
        <li><a href="\balance\all" _blank>Balance</a></li>
        <li><a href="\lesson\all" _blank>Lesson</a></li>
        <li><a href="\major\all" _blank>Major</a></li>
        <li><a href="\payment\all" _blank>Payment</a></li>
        <li><a href="\question\all" _blank>Question</a></li>
        <li><a href="\wallet\all" _blank>Wallet</a></li>
        <li><a href="\user_role\all" _blank>Role</a></li>
        <li><a href="\test_student\all" _blank>StudentTest</a></li>

    
    </hr>
                
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
