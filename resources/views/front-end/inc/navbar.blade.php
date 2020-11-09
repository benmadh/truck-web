<div class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <p class="f-14"><strong>AUTO CEYLON
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 hidden-xs text-right">
                <p class="f-14"><i class="fa fa-map-marker"> </i><strong> Indirizzo : 
                </strong> <strong>Via Staffali 11/D 37062,Dossobuono, Villafranca di, Verona. </strong> </p>
            </div>
        </div>
    </div>
</div>
<!-- Menu -->
<div class="menu-bg">
    <div class="container">
        <div class="row">
            <!-- Logo -->
            <div class="col-md-3 col-lg-3">
                <a href="{{ route('index') }}" class="logo"><img src="{{ asset('front-end/images/logo/site-logo.png') }}" alt="AUTO CEYLON S.R.L"></a>
            </div>
            <div class="col-md-9 col-lg-9" id="mob-menu">
                <div class="hotline">
                    <span class="m-r-lg-10">Hai bisogno di supporto? Chiamaci : </span>
                    <i class="fa fa-phone"></i>045 96 12 013
                </div>
                <div class="clearfix"></div>
                <!-- Menu -->
                <div class="main-menu">
                    <div class="container1">
                        <nav class="navbar navbar-default menu">
                            <div class="container1-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li>
                                            <a href="{{ route('index') }}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('aboutus') }}">Azienda</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Veicoli</a>
                                            <ul class="dropdown-menu">
                                                <li> <a href="{{ route('listing') }}">Tutti i veicoli</a> </li>
                                                <li> <a href="{{ route('categoria.get','camion') }}">Camion</a> </li>
                                                <li> <a href="{{ route('categoria.get', 'furgoni') }}">Furgoni</a> </li>
                                                <li> <a href="{{ route('categoria.get', 'auto') }}">Auto</a> </li>
                                            </ul>
                                        </li>
                                        <!-- <li>
                                            <a href="#">Servizi</a>
                                        </li> -->
                                        <li><a href="{{ route('contactus') }}">Contatti</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <!-- Search -->
                        <div class="search-box">
                            <!-- <i class="fa fa-search"></i>
                            <form>
                                <input type="text" name="search-txt" placeholder="Search..."
                                    class="search-txt form-item">
                                <button type="submit" name="submit" class="search-btn btn-1"><i
                                        class="fa fa-search"></i></button>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
