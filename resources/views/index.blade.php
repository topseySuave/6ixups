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
                    <div class="card card__post_holdr" id="{{ $i }}">
                        <div class="card-content">
                            <a href="/6ix/IUndsHSZN4J">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                        </div>
                        <div class="card-image">
                            <div class="hidden__pro_info">
                                <a href="#">
                                    <img src="img/demo/alvin.png" alt="johns profile">
                                    <div class="info__holdr">
                                        <span>John Doe</span> <span>-</span> <span>2 min ago</span>
                                    </div>
                                </a>
                            </div>
                            <a href="/6ix/IUndsHSZN4J"><img src="/img/demo/office.jpg" alt="ad for blah blah blah"></a>
                        </div>
                        <div class="card-action">
                            <div class="row no-margin">
                                <div class="col s2">
                                    <div class="feed__back_info"><span id="feed__back_count">9999999</span></div>
                                    <a href="#" class="btn btn-flat btn__feed_back waves-effect">
                                        <i class="material-icons">i</i>
                                    </a>
                                </div>
                                <div class="col s2">
                                    <div class="feed__back_info"><span id="feed__back_count">9999999</span></div>
                                    <a href="#" class="btn btn-flat btn__feed_back waves-effect">
                                        <i class="material-icons">!</i>
                                    </a>
                                </div>

                                <div class="col s3 offset-s2">
                                    <a href="#" class="btn blue darken-4 waves-effect">Facebook</a>
                                </div>
                                <div class="col s3">
                                    <a href="#" class="btn light-blue lighten-3 waves-effect">Twitter</a>
                                </div>
                            </div>
                            <span class="hori__divider"></span>
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
@endsection
