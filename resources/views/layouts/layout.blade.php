<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="$1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('public/css/app.css')}}">
        <link href='https://fonts.googleapis.com/css?family=Josefin+Slab:700italic' rel='stylesheet' type='text/css'>
      
        <link rel="author" href="humans.txt">
    </head>
    <body>
        <header>
            <div class="container-fluid" id="header">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{asset('public/img/logo-2.png')}}" alt="kasichana-logo" width="100%" height="auto" class="img-responsive" />
                    </div>
                    <div class="col-lg-8" id="top-menu">
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="form-horizontal">
                                    <input type="text" class="form-control search-form" placeholder="Search for what you want. . . .">
                                </form>
                            </div>
                            <div class="col-lg-12">
                                <nav class="navbar navbar-default" id="top-nav">
                                    <!--<div class="container-fluid">-->
                                        <div class="navbar-header">
                                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                          </button>
                                        </div>
                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                            <ul class="nav navbar-nav">
                                                <ul class="nav nav-tabs nav-justified">
                                                    <li><a href="">ABOUT US</a></li>
                                                    <li><a href="">PARTNERS</a></li>
                                                    <li role="presentation" class="dropdown">
                                                      <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                                        WHAT WE DO <span class="caret"></span>
                                                      </a>
                                                      <ul class="dropdown-menu">
                                                          <li><a href="#">SHUJAA WANGU TV SHOW</a></li>
                                                          <li><a href="#">VEGETABLE GARDEN PROJECTS</a></li>
                                                          <li><a href="#">BICYCLE FOR EDUCATION PROJECT</a></li>
                                                      </ul>
                                                    </li>
                                                    <li><a href="">VOLUNTEER WITH US</a></li>
                                                </ul>
                                            </ul>
                                        </div>
                                    <!--</div>-->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12" style="padding: 0;"><!--http://placehold.it/1400x400-->
                    <section id="news-demo">
                        <article>
                          <div class="text-content">
                            <h2>Boats by the bay</h2>
                            <p>This summer there were, surprise surprise, boats on the bay! Often the sun will shine and when it's partially cloudy we get the 'God' or 'Holy Light' effect. It's pretty cool huh? I wonder what it's pointing to... treasure? Bitcoins?</p>
                            <a href="#!" class="button-link read-more">read more</a>
                          </div>
                          <div class="image-content"><img src="{{asset('public/img/slides/IMG_4.png')}}" alt="demo1_1"></div>
                        </article>
                        <article>
                          <div class="text-content">
                            <h2>The winter is coming</h2>
                            <p>And isn't it pretty? It's strange, people who live through heavy winters seem to want to get out of it as soon as possible, yet those who live in more temperate climates see snow and a 'real' winter as an amazing thing that must be experienced.</p>
                            <a href="#!" class="button-link read-more">read more</a>
                          </div>
                          <div class="image-content"><img src="{{asset('public/img/slides/IMG_3.png')}}" alt="demo1_1"></div>
                        </article>
                        <article>
                          <div class="text-content">
                            <h2>In front of Versailles</h2>
                            <p>The Palace of Versailles is pretty amazing, not just inside, but also the outside garden, where you'll find gardens like these sporting amazing ranges of flora.</p>
                            <a href="#!" class="button-link read-more">read more</a>
                          </div>
                          <div class="image-content"><img src="{{asset('public/img/slides/IMG_2.png')}}" alt="demo1_1"></div>
                        </article>-->
                  </section>
                </div>
            </div>
        </div>
        @yield('header')
        @yield('navigations')
        @yield('content')
        <script src="{{asset('public/js/app.js')}}"></script>
          <!-- DC Parallax Slider Settings -->
       
        </script> 
    </body>
</html>