@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="padding:4px;width: fit-content;height:fit-content;">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="app"> <registration-form-component></registration-form-component>  </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
