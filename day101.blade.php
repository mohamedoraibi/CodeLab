@extends('layout.master')

@section('home')
    active
@endsection

@section('title')
    Day 1
@endsection

@section('content')

    <div id="root">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h1>Code The Right Way</h1>
                </div>
                <div class="col-md-8 col-md-offset-2 text-center">
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, amet assumenda, at
                        aut
                        distinctio ducimus eaque error est excepturi facere in molestias officia optio possimus quae
                        quos saepe
                        sunt veniam.</p>
                </div>
                <br>
            </div>
            <div class="col-sm-10 col-md-10 col-md-offset-1">
                @each('day101pic',['android.png','swift.png','laravel.png'],'linkPic')
            </div>
        </div>
        <div class="row section3 " style="background-color: deeppink">
            <div class="col-md-7 col-md-offset-2">
                <div class="caption">
                    <h3>About us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad consequuntur dolor eius ex
                        incidunt
                        laborum magni mollitia nam numquam, perspiciatis quisquam! Corporis delectus deleniti ea labore
                        laborum
                        nostrum voluptate?</p>
                    <a href="#" class="btn btn-default" role="button">Lets Begin</a></p>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
