@extends('layouts.app')

@section('content')

<h1>Home</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ratione corporis temporibus nobis esse veniam perspiciatis, quas, molestias doloribus dolore laborum aspernatur laboriosam, vel amet? Necessitatibus molestias quis ab in.</p>

@endsection

@section('sidebar')
@parent
<p>this is appended to the sidebar</p>
@endsection