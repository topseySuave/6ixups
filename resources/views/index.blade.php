@extends('layouts.app')

@section('content')
    <div class="sd__bar hide-on-small-only">
        <ul class="sb__cats">
            @for($i = 0; $i < 13; $i++)
                <li><a href="#{{$i}}"><span class="box" style="background-image: url('img/demo/alvin.png')"></span></a></li>
            @endfor
            <li class="trans__list"><span class="material-icons">menu</span></li>
        </ul>
    </div>
    <div class="contain">
        <div class="row main_container">
            <div class="col s12 l6 m12">
                @for($i = 0; $i < 5; $i++)
                    <div class="card" id="{{ $i }}">
                        <div class="hidden__pro_info">
                            <a href="#">
                                <img src="img/demo/alvin.png" alt="johns profile">
                                <div class="info__holdr">
                                    <span>John Doe</span> <span>-</span> <span>2 min ago</span>
                                </div>
                            </a>
                        </div>
                        <div class="card-image">
                            <a href="#"><img src="/img/demo/office.jpg" alt="ad for blah blah blah"></a>
                        </div>
                        <div class="card-content">
                            <a href="/6ix/IUndsHSZN4J">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="col s12 l6 m12">
                <div class="row">
                    <div class="col s12 l4 hide-on-med-and-down">
                        <div class="ad__holdr">
                            <div class="ad">
                                <img src="/img/demo/adlogo.png" alt="ad for blah blah blah">
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l7">
                        <div class="ad__holdr">
                            <div class="ad">
                                <img src="/img/demo/Adbanner2.png" alt="ad for blah blah blah">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Dashboard</div>--}}

                {{--<div class="panel-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}
                    {{--<div id="root"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection
