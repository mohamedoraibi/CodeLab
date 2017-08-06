@extends('layout.master')

@section('home')
    active
@endsection

@section('title')
    Home
@endsection

@section('warning')
    <script>
        alert('Hello Ninjas')
    </script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="text-center">This is Home page</h2>
            <img src="http://codelab.camp/{{}}" alt="...">
        </div>
    </div>
@endsection
