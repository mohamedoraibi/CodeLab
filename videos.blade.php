@extends('layout.master')

@section('videos')
    active
@endsection

@section('title')
    Videos
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="text-center">This is videos page</h2>
            Video Id =
            @isset($id)
                {{$id}}
            @endisset

            <br>
            Video Number =
            @isset($id)
                {{$number}}
            @endisset
        </div>
    </div>
@endsection
