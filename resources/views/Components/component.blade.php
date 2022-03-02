@extends('layouts.app')
@section("css")
.backdiv{
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);
    background-color: white;
    padding:4px;
    width: fit-content;
    height:fit-content;
}
@endsection

@section('content')

@if(Auth::guard('web')->check())
     
     <svg viewBox="0 0 240 80" xmlns="http://www.w3.org/2000/svg">
  <style>
    .small { font: italic 13px sans-serif; }
    .heavy { font: bold 30px sans-serif; }

    /* Note that the color of the text is set with the    *
     * fill property, the color property is for HTML only */
    .Rrrrr { font: italic 40px serif; fill: red; }
  </style>

  <text x="20" y="35" class="small">Authentication</text>
  <text x="55" y="55" class="small">in</text>
  <text x="65" y="55" class="Rrrrr">Laravel!</text>
</svg>

<h1 style="color:red;margin-left:35%;margin-right:35%"> You Are Logged In As <strong style="color:aliceblue">User </strong></h1></div>
     @else
     <svg viewBox="0 0 240 80" xmlns="http://www.w3.org/2000/svg">
  <style>
    .small { font: italic 13px sans-serif; }
    .heavy { font: bold 30px sans-serif; }

    /* Note that the color of the text is set with the    *
     * fill property, the color property is for HTML only */
    .Rrrrr { font: italic 40px serif; fill: red; }
  </style>

  <text x="20" y="35" class="small">Authentication</text>
  <text x="55" y="55" class="small">in</text>
  <text x="65" y="55" class="Rrrrr">Laravel!</text>
</svg>

<h1 style="color:red;margin-left:35%;margin-right:35%"> You Are Logged Out As <strong style="color:aliceblue">User </strong></h1></div>
@endif

@endsection
