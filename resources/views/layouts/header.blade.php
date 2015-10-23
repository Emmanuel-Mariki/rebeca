<header>
    <div class="container-fluid" id="header">
        <div class="row">
            <div class="col-lg-4">
                <a href="{{route('home')}}" title="Home"> <img src="{{asset('public/img/logo-2.png')}}" alt="kasichana-logo" width="100%" height="auto" class="img-responsive" /></a>
            </div>
            <div class="col-lg-8" id="top-menu">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-horizontal">
                           <form>
                                <div class="input-field">
                                  <input id="search" type="search" required>
                                  <label for="search"><i class="material-icons">search</i></label>
                                  <i class="material-icons">close</i>
                                </div>
                        </form>
                    </div>
                    <div class="col-lg-12">
                        <nav class="navbar navbar-default" id="top-nav">
                            <div class="container-fluid">
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
                                            <li><a href="{{route('about')}}">ABOUT US</a></li>
                                            <li><a href="{{route('partners')}}">PARTNERS</a></li>
                                            <li role="presentation" class="dropdown">
                                              <a class="dropdown-toggle" data-toggle="dropdown" href="{{route('action')}}" role="button" aria-haspopup="true" aria-expanded="false">WHAT WE DO <span class="caret"></span>
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