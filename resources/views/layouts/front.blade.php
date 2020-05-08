<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Unplant.me</title>
  <!--  <link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.min.css"> -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/MobileNav.css')}}">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.4/css/selectize.min.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>





    <div id="app">
        @include('layouts.partials.navbar')

        @yield('banner')
    </div>




    <div class="info-left">
        <!-- START INFO-LEFT -->
        <div class="logos">
            <!--Put a little something here-->
        </div>
        <div class="centered"> <br />
            <h6>Ask, Talk, Browse</h6>
            <h3>What's up? </h3>


            <!--Incorporate recent searches here somehow?-->

            <h1> <span class="typed"></span></h1> <br />
            <form method="get" action="/thread/search">

                <div class="form-group">
                    <input type="text" name="query" class="form-control-search" placeholder="Search"><br>
                    @section('category')

                </div>

            </form>
            <div class="allthreads">
            <a href="{{route('thread.index')}}" class="list-group-item">
                <span class="badge">Recent</span>
                View Most Recent Threads
            </a>
            </div>

        </div>
    </div>
    <!-- END INFO-LEFT -->
    <!--<div class="info-right">
        START INFO-RIGHT
        <div class="scroll">
            <p>Scroll down.</p>
            <div class="mouse">
                <div class="scroller"> </div>
            </div>
        </div>
    </div>-->
    <!-- END INFO-RIGHT -->

    <div class="container">


        @include('layouts.partials.error')

        @include('layouts.partials.success')



    </div>

    <div class="container4" id="container4">


        <div class="col-md-9">
            <div class="content-wrap ">
                @yield('content')
            </div>
        </div>
    </div>

    <div class="container3" id="container3">

        <!-- START CONTAINER3 -->
        <div id="block-main" class="block-main">
            <section class="block about">
                <div class="block-box">
                    <h2 class="block-icon"><i class="fa fa-edit fa-2x"></i><br />Create Thread</h2>
                </div>
                <div class="block-content">
                    <h2>Create Thread</h2>
                    <p>Have fun!</p>


                    <div class="row">
                        <div class=" well">
                            <form class="form-vertical" action="{{route('thread.store')}}" method="post" role="form"
                                  id="create-thread-form">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="" placeholder="Input..."
                                           value="{{old('subject')}}">
                                </div>


                                <div class="form-group">
                                    <label for="thread">Thread</label>
                                    <textarea class="form-control" name="thread" id="" placeholder="Input..."
                                    > {{old('thread')}}</textarea>
                                </div>

                                {{--  <div class="form-group">
                                   {!! app('captcha')->display() !!}
                                </div>  --}}

                                <button type="submit" class="btn btn-primary">Submit</button>
                                @include('layouts.partials.error')

                                @include('layouts.partials.success')
                            </form>
                        </div>
                    </div>
                </div>
                <span class="block-icon-close"><i class="fa fa-close"></i></span>
            </section>
            <section class="block works">
                <div class="block-box">
                    <h2 class="block-icon"><i class="fa fa-eye fa-2x"></i><br />Browse Threads</h2>
                </div>
                <div class="block-content">
                    <h2>Stuff 2</h2>
                    <p>Stufffffffff</p>


                </div>
                <span class="block-icon-close"><i class="fa fa-close"></i></span>
            </section>
            <section class="block blog">
                <div class="block-box">
                    <h2 class="block-icon"><i class="fa fa-flask fa-2x"></i><br />Miscellaneous</h2>
                </div>
                <div class="block-content">
                    <h2>Miscellaneous Material for Your Entertainment!</h2>
                    <p>Nothing here yet!</p>

                </div>
                <span class="block-icon-close"><i class="fa fa-close"></i></span>
            </section>
            <section class="block contact">
                <div class="block-box">
                    <h2 class="block-icon"><i class="fa fa-question-circle fa-2x"></i><br />FAQ</h2>
                </div>
                <div class="block-content">
                    <h2>Frequently Asked Questions</h2>
                    <p>Nothing here yet!</p>
                    <span class="block-icon-close"><i class="fa fa-close"></i></span>
            </section>
        </div>
        <!-- END CONTAINER3 -->
        <div id="aboutThis">
            <!-- START aboutThis -->
            <h6>About</h6>
            <h3>Unplant.me is currently in beta mode. It is designed to be a user-friendly forum for everyone to use, to discuss ideas and questions, and will also be used to help developers, artists, and musicians collaborate on ideas. More to come soon!</h3>

        </div>
        <!-- END aboutThis -->
        <div id="contact">
            <!-- START CONTACT -->
            <h6>CONTACT</h6>
            <div id="text">
                <h3><i class="fa fa-map-marker" aria-hidden="true"></i> Amanda</h3>
                <h4><i class="fa fa-envelope" aria-hidden="true"></i> amanda_vanhout@daytonastate.edu</h4>
            </div>
            <div id="button">
                <form method="post" action="mailto:amanda_vanhout@daytonastate.edu"> <input type="submit"
                                                                                            value="Contact me"> <br /> </form>


            </div>

        </div>
        <!-- END CONTACT -->
        <footer>
            <h5>Designed By Me ^ 2020</h5>>
        </footer>

        </body>


        <script>


    $(document).ready(function () {
        $("a").on('click', function (event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function () {
                    window.location.hash = hash;
                });
            }
        });
        var scroll_pos = 0;
        $(document).scroll(function () {
            scroll_pos = $(this).scrollTop();
            if (scroll_pos > 220) {
                $(".nav").css('background', 'rgba(255,255,255, 0.7)');
            } else {
                $(".nav").css('background', 'linear-gradient(#ffffff)');
            }
        });
    });

    function responsiveNav() {
        var x = document.getElementById("responsive-nav");
        if (x.className === "nav") {
            x.className += " responsive";
        } else {
            x.className = "nav";
        }
    }
    $(function () {
        $(".typed").typed({
            strings: ["How hard is full stack development?", "Is Tupac still alive?",
                "What keeps you up at night?",
                "Ask really random stuff",
                "Do it, I dare you", "...", " （✿ ͡◕ ᴗ◕)つ━━✫・*。 "
            ],
            typeSpeed: 30,
            loop: true,
            backDelay: 2000,
        });
    });

    (function () {

        'use strict';

        var blockMain = document.getElementById('block-main');
        var blocks = blockMain.getElementsByClassName('block');

        Array.prototype.forEach.call(blocks, function (block) {
            block.dataset.open = false;
            block.addEventListener('click', function (e) {
                var closeButton = block.getElementsByClassName('block-icon-close')[0];

                if (block.dataset.open === 'false') {
                    block.dataset.open = 'true';
                    block.classList.add('block-expanded-item');
                    blockMain.classList.add('block-expanded');
                }

                closeButton.addEventListener('click', function (e) {
                    e.stopPropagation();
                    block.dataset.open = 'false';
                    block.classList.remove('block-expanded-item');
                    blockMain.classList.remove('block-expanded');
                });
            });
        });
    })();

        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>




{{--<script src="https://code.jquery.com/jquery-3.1.1.min.js"--}}
        {{--integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="--}}
        {{--crossorigin="anonymous"></script>--}}
{{--<!-- Latest compiled and minified JS -->--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
<!--<>script src="{{asset('js/main.js')}}"></script>-->
    <!--    <script src="{{asset('js/app.js')}}"></script>

@yield('js') -->
    </div>
</html>

controller migration vue