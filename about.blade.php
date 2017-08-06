@extends('layout.master')
@section('about')
    active
    @enSamtion

@section('title')
    About
@endsection
@section('content')

    {{--@include()--}}
    {{--@includewhen(true=="true",'welcome')--}}
    {{--@php--}}
    {{--$value="Hello";--}}
    {{--@endphp--}}
    {{--@include('welcome')--}}
    @each('welcome',['Ali','Mohamed','Sam'],'name')
    {{--@each('welcome',[['title'=>'Android','text'=>'dasdas']],'name')--}}
    {{--name[title]--}}

    <body>

    <div id="app">
    </div>
    <div class="container">
        <div class="row">
            <h2 class="text-center">This is about page</h2>
            <h4 class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi architecto
                atque deserunt
                eligendi eveniet itaque libero, modi, nisi obcaecati pariatur perferendis placeat quibusdam quidem
                repellat rerum veritatis! Consequuntur, dicta.</h4>
        </div>
    </div>

    <script src="https://unpkg.com/vue@2.4.2"></script>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                message: 'Hello!',
            }
        })
    </script>


    {{--@{{ message }}--}}
    {{--<br>--}}
    {{--@verbatim--}}
    {{--{{message}}--}}
    {{--@endverbatim--}}


    {{--@empty($var)--}}
    {{--var is empty--}}
    {{--@endempty--}}
    {{--<br>--}}

    {{--@isset($var)--}}
    {{--var is found--}}
    {{--@endisset--}}


    {{--<div id="app">--}}
    {{--@{{ message }}--}}
    {{--<br>--}}
    {{--@verbatim--}}
    {{--{{message}}--}}
    {{--@endverbatim--}}
    {{--</div>--}}

    {{--@php--}}
    {{--$x=10;--}}
    {{--$y=20;--}}
    {{--echo $z=$x+$y;--}}
    {{--@endphp--}}


    {{--{{date("Y-m-d")}}--}}

    {{--@foreach($names as $name)--}}
    {{--<li>{{$name}}</li>--}}
    {{--@endforeach--}}


    {{--@foreach($names as $name)--}}
    {{--{{$loop->depth}}--}}
    {{--<li>{{$name}}</li>--}}
    {{--@endforeach--}}



    {{--@foreach($names as $name)--}}
    {{--{{$loop->remaining}}--}}
    {{--<li>{{$name}}</li>--}}
    {{--@endforeach--}}


    {{--@foreach($names as $name)--}}
    {{--{{$loop->first}}--}}
    {{--{{$loop->last}}--}}
    {{--<li>{{$name}}</li>--}}
    {{--@endforeach--}}



    {{--@foreach($names as $name)--}}
    {{--{{$loop->last}}--}}
    {{--<li>{{$name}}</li>--}}
    {{--@endforeach--}}


    {{--@foreach($names as $name)--}}
    {{--{{$loop->iteration}}--}}
    {{--<li>{{$name}}</li>--}}
    {{--@endforeach--}}

    {{--@foreach($names as $name)--}}
    {{--{{$loop->index}}--}}
    {{--<li>{{$name}}</li>--}}
    {{--@endforeach--}}

    {{--@foreach($names as $name)--}}
    {{--{{$loop->count}}--}}
    {{--<li>{{$name}}</li>--}}
    {{--@endforeach--}}









    {{--@foreach($names as $x=>$name)--}}
    {{--<li>{{$x}}</li>--}}
    {{--@endforeach--}}




    {{--@while(true)--}}
    {{--Hello--}}
    {{--@endwhile--}}


    {{--@forelse($names as $name)--}}
    {{--<li>{{$name}}</li>--}}
    {{--@empty--}}
    {{--<li>empty</li>--}}
    {{--@endforelse--}}

    {{--@foreach($names as $name)--}}
    {{--<li>{{$name}}</li>--}}
    {{--@endforeach--}}



    {{--@for($i=0;$i<10;i++)--}}
    {{--<li> {{$i}}</li>--}}
    {{--@endfor--}}


    {{--@unless($var)--}}
    {{--<h1 style="color:blue">False</h1>--}}
    {{--@endunless--}}

    {{--@if($var==true)--}}
    {{--<h2>{{$var}}</h2>--}}
    {{--@else--}}
    {{--<h2>var is false</h2>--}}
    {{--@endif--}}
    </body>

@endsection
