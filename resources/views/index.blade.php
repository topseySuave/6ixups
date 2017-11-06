@extends('layouts.app')

@section('content')
    <div class="sd__bar hide-on-small-only">
        <ul class="sb__cats">
            <li><a href="#"><span class="box"></span></a></li>
            <li><a href="#"><span class="box"></span></a></li>
            <li><a href="#"><span class="box"></span></a></li>
            <li><a href="#"><span class="box"></span></a></li>
            <li><a href="#"><span class="box"></span></a></li>
            <li><a href="#"><span class="box"></span></a></li>
            <li><a href="#"><span class="box"></span></a></li>
            <li><a href="#"><span class="box"></span></a></li>
            <li><a href="#"><span class="box"></span></a></li>
            <li><a href="#"><span class="box"></span></a></li>
            <li><a href="#"><span class="box"></span></a></li>
            <li><a href="#"><span class="box"></span></a></li>
            <li><a href="#"><span class="box"></span></a></li>

            <li class="trans__list"><span class="material-icons">menu</span></li>
        </ul>
    </div>
    <div class="container">
        <div class="row main_container">
            <div class="col s12 l6 m12">
                hello world
            </div>
            <div class="col s12 l6 m12">
                <row>
                    <div class="col s12 l7">
                        Hello
                    </div>
                    <div class="col s12 l4">
                        { window.name}
                    </div>
                </row>
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
