@extends('front-end.layouts.app')

@section('title') {{'Home | Auto Ceylon'}} @endsection

@section('content')
<!-- Banner -->
<div class="banner-item banner-2x banner-bg-8 color-inher m-xs-auto m-box-auto p-t-xs-50 p-b-xs-60">
    <div class="slide-caption">
        <h2 class="f-weight-300 p-b-lg-0"><strong></strong></h2>
        <p></p>
        <div class="counterup m-t-lg-50">
            <div class="row">
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="counterup-item">

                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="counterup-item">

                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="counterup-item">

                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="counterup-item">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search option -->
<div class="search-2">
    <ul class="nav nav-tabs ht-tabs p-l-lg-30 p-l-xs-15 m-t-xs-30" role="tablist">
        <li role="presentation" class="pull-left active"><a href="#newcar" aria-controls="newcar" role="tab"
                data-toggle="tab">Camion</a></li>
        <li role="presentation" class="pull-left"><a href="#usedcar" aria-controls="newcar" role="tab"
                data-toggle="tab">Furgoni</a></li>
        <li role="presentation" class="pull-left"><a href="#newcar" aria-controls="newcar" role="tab"
                data-toggle="tab">Auto</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Tab panes item -->
        <div role="tabpanel" class="tab-pane active" id="newcar">
            <div class="search-option p-lg-30 p-b-lg-15 p-b-sm-30 p-xs-15">
                <div class="row">
                    <div class="col-sm-12 col-md-7 col-lg-7">
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 m-b-lg-15 p-r-lg-0 p-r-xs-15">
                                <div class="select-wrapper">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle form-item" type="button" id="dropdownMenu1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Marca
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li>Ford</li>
                                            <li>Benz</li>
                                            <li>Man</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 m-b-lg-15 p-r-lg-0 p-r-xs-15">
                                <div class="select-wrapper">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle form-item" type="button" id="dropdownMenu2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Modello
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <li>Versa</li>
                                            <li>Cruze</li>
                                            <li>Malibu</li>
                                            <li>Civic</li>
                                            <li>Genesis</li>
                                            <li>Pilot</li>
                                            <li>Optima</li>
                                            <li>CX-5</li>
                                            <li>3 Serie</li>
                                            <li>Atima</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 m-b-lg-15 p-r-lg-0 p-r-sm-15 p-r-xs-15">
                                <div class="select-wrapper">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle form-item" type="button" id="dropdownMenu3"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Anno
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                            <li>Year</li>
                                            <li>2016</li>
                                            <li>2015</li>
                                            <li>2014</li>
                                            <li>2012</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-2 col-lg-2 pull-right pull-left-xs">
                        <button type="button"
                            class="ht-btn ht-btn-default m-t-lg-0  m-t-sm-5 m-t-xs-20 pull-right pull-left-xs"><i
                                class="fa fa-search"></i> Ricerca</button>
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="usedcar">
            <div class="search-option p-lg-30 p-b-lg-15 p-b-sm-30 p-xs-15">
                <div class="row">
                    <div class="col-sm-12 col-md-7 col-lg-7">
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 m-b-lg-15 p-r-lg-0 p-r-xs-15">
                                <div class="select-wrapper">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle form-item" type="button" id="dropdownMenu4"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Marca
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
                                            <li>Ford</li>
                                            <li>Benz</li>
                                            <li>Man</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 m-b-lg-15 p-r-lg-0 p-r-xs-15">
                                <div class="select-wrapper">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle form-item" type="button" id="dropdownMenu5"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Model
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu5">
                                            <li>Model</li>
                                            <li>Versa</li>
                                            <li>Cruze</li>
                                            <li>Malibu</li>
                                            <li>Civic</li>
                                            <li>Genesis</li>
                                            <li>Pilot</li>
                                            <li>Optima</li>
                                            <li>CX-5</li>
                                            <li>3 Serie</li>
                                            <li>Atima</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 m-b-lg-15 p-r-lg-0 p-r-sm-15 p-r-xs-15">
                                <div class="select-wrapper">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle form-item" type="button" id="dropdownMenu6"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Anno
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu6">
                                            <li>Year</li>
                                            <li>2016</li>
                                            <li>2015</li>
                                            <li>2014</li>
                                            <li>2012</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2 col-lg-2 pull-right pull-left-xs">
                        <button type="button"
                            class="ht-btn ht-btn-default m-t-lg-0  m-t-sm-5 m-t-xs-20 pull-right pull-left-xs"><i
                                class="fa fa-search"></i> Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Recent cars -->
<div class="product product-grid product-grid-2 car m-b-lg-20">
    <div class="heading">
        <h3>NUOVI Furgoni</h3>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-4">
            <!-- Product item -->
            <div class="product-item hover-img">
                <a href="#" class="product-img">
                    <img src="https://www.belcamion.com/includes/phpThumb/phpThumb.php?src=http://www.belcamion.com/uploads/cartella%20senza%20nome%2011/IMG_7033.JPG&w=320&h=190&zc=1"
                        alt="image">
                </a>
                <div class="product-caption">
                    <h4 class="product-name">
                        <a href="#">Over 130 quintals</a><span class="f-18"> 140E22P CUBE</span>
                    </h4>
                </div>
                <ul class="absolute-caption">
                    <li><i class="fa fa-clock-o"></i>IVECO</li>
                    <li><i class="fa fa-car"></i>Internal ref : 5320</li>
                    <li><i class="fa fa-road"></i>First imm : 11/09/2012</li>

                </ul>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
            <!-- Product item -->
            <div class="product-item hover-img">
                <a href="#" class="product-img">
                    <img src="https://www.belcamion.com/includes/phpThumb/phpThumb.php?src=http://www.belcamion.com/uploads/LOTTO GREG 2OTT2019/IMG_9076.jpg&w=320&h=190&zc=1"
                        alt="image">
                </a>
                <div class="product-caption">
                    <h4 class="product-name">
                        <a href="#">Oncoming vehicles</a><span class="f-18"> 75E18P CUBE</span>
                    </h4>
                </div>
                <ul class="absolute-caption">
                    <li><i class="fa fa-clock-o"></i>IVECO</li>
                    <li><i class="fa fa-car"></i>Internal ref:COMING</li>
                    <li><i class="fa fa-road"></i>First imm :24/04/2012</li>

                </ul>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
            <!-- Product item -->
            <div class="product-item hover-img">
                <a href="#" class="product-img">
                    <img src="https://www.belcamion.com/includes/phpThumb/phpThumb.php?src=http://www.belcamion.com/uploads/cartella senza nome 11/IMG_6619.jpg&w=320&h=190&zc=1"
                        alt="image">
                </a>
                <div class="product-caption">
                    <h4 class="product-name">
                        <a href="#">Da 35 a 130 Q.li</a><span class="f-18"> 120E18P CUBE</span>
                    </h4>
                </div>
                <ul class="absolute-caption">
                    <li><i class="fa fa-clock-o"></i>IVECO</li>
                    <li><i class="fa fa-car"></i>Rif. interno: 5120</li>
                    <li><i class="fa fa-road"></i>Prima imm.: 24/06/2010</li>

                </ul>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
            <!-- Product item -->
            <div class="product-item hover-img">
                <a href="#" class="product-img">
                    <img src="https://www.belcamion.com/includes/phpThumb/phpThumb.php?src=http://www.belcamion.com/uploads/28 GIU 2020/IMG_5375.jpg&w=320&h=190&zc=1"
                        alt="image">
                </a>
                <div class="product-caption">
                    <h4 class="product-name">
                        <a href="#">Oltre 130 Q.li</a><span class="f-18"> 140E18 CUBE</span>
                    </h4>
                </div>
                <ul class="absolute-caption">
                    <li><i class="fa fa-clock-o"></i>IVECO</li>
                    <li><i class="fa fa-car"></i>Prima imm.: 26/08/2010</li>
                    <li><i class="fa fa-road"></i>Rif. interno: 56820
                    </li>

                </ul>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
            <!-- Product item -->
            <div class="product-item hover-img">
                <a href="#" class="product-img">
                    <img src="https://www.belcamion.com/includes/phpThumb/phpThumb.php?src=http://www.belcamion.com/uploads/camion corse 2020/160 E6 1.jpg&w=320&h=190&zc=1"
                        alt="image">
                </a>
                <div class="product-caption">
                    <h4 class="product-name">
                        <a href="#">Da 35 a 130 Q.li</a><span class="f-18"> 120E18P CUBE</span>
                    </h4>
                </div>
                <ul class="absolute-caption">
                    <li><i class="fa fa-clock-o"></i>IVECO</li>
                    <li><i class="fa fa-car"></i>Prima imm.: 24/06/2010</li>
                    <li><i class="fa fa-road"></i>Rif. interno: 5120</li>

                </ul>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
            <!-- Product item -->
            <div class="product-item hover-img">
                <a href="#" class="product-img">
                    <img src="https://www.belcamion.com/includes/phpThumb/phpThumb.php?src=http://www.belcamion.com/uploads/camion corse 2020/IMG_5585.jpg&w=320&h=190&zc=1"
                        alt="image">
                </a>
                <div class="product-caption">
                    <h4 class="product-name">
                        <a href="#">Oltre 130 Q.li</a><span class="f-18"> 140E18 CUBE</span>
                    </h4>
                </div>
                <ul class="absolute-caption">
                    <li><i class="fa fa-clock-o"></i>IVECO</li>
                    <li><i class="fa fa-car"></i>Rif. interno: 56820</li>
                    <li><i class="fa fa-road"></i>Prima imm.: 26/08/2010</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Banner -->
<div class="banner-item banner-2x banner-bg-9 color-inher m-b-lg-50">
    <h3 class="f-weight-300">VEICOLI INDUSTRIALI e COMMERCIALI </h3>
    <p>CAMION IVECO USATI</p>
    <p>
        Vendita autocarri e furgoni.
        Offerte speciali per concessionari, commercianti e allestitori
    </p>
</div>

<!-- Last news -->



<section class="m-b-lg-50">
    <div class="blog blog-grid overl">
        <div class="heading">
            <h3>Prossimi camion</h3>
        </div>
        <div class="row">
            <div class="owl" data-items="3" data-itemsDesktop="3" data-itemsDesktopSmall="2" data-itemsTablet="2"
                data-itemsMobile="1" data-pag="false" data-buttons="true">
                <div class="col-lg-12">
                    <!-- Blog item -->
                    <div class="blog-item">
                        <a href="#" class="hover-img"><img
                                src="https://www.belcamion.com/includes/phpThumb/phpThumb.php?src=http://www.belcamion.com/uploads/cartella senza nome 11/IMG_6551.jpg&w=320&h=190&zc=1"
                                alt="image"></a>
                        <div class="blog-caption">
        
                            <h3 class="blog-heading">120E25P CUBE E6</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- Blog item -->
                    <div class="blog-item">
                        <a href="#" class="hover-img"><img
                                src="https://www.belcamion.com/includes/phpThumb/phpThumb.php?src=http://www.belcamion.com/uploads/cartella senza nome 11/PHOTO-2020-09-10-12-02-01.jpg&w=320&h=190&zc=1"
                                alt="image"></a>
                        <div class="blog-caption">
                            <!-- <ul class="blog-date">
                                <li><a href="#"><i class="fa fa-calendar"></i>25th May 2016</a></li>
                                <li><a href="#"><i class="fa fa-comment"></i>3 comment</a></li>
                            </ul> -->
                            <h3 class="blog-heading">120E28P CUBE E6</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- blog item -->
                    <div class="blog-item">
                        <a href="#" class="hover-img"><img
                                src="https://www.belcamion.com/includes/phpThumb/phpThumb.php?src=http://www.belcamion.com/uploads/cartella senza nome 11/IMG_7228.jpg&w=320&h=190&zc=1"
                                alt="image"></a>
                        <div class="blog-caption">
                            <!-- <ul class="blog-date">
                                <li><a href="#"><i class="fa fa-calendar"></i>25th May 2016</a></li>
                                <li><a href="#"><i class="fa fa-comment"></i>3 comment</a></li>
                            </ul> -->
                            <h3 class="blog-heading">140E18 CUBE</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- Blog item -->
                    <div class="blog-item">
                        <a href="#" class="hover-img"><img
                                src="https://www.belcamion.com/includes/phpThumb/phpThumb.php?src=http://www.belcamion.com/uploads/cartella senza nome 11/PHOTO-2020-09-10-12-13-00.jpg&w=320&h=190&zc=1"
                                alt="image"></a>
                        <div class="blog-caption">
                            <!-- <ul class="blog-date">
                                <li><a href="#"><i class="fa fa-calendar"></i>25th May 2016</a></li>
                                <li><a href="#"><i class="fa fa-comment"></i>3 comment</a></li>
                            </ul> -->
                            <h3 class="blog-heading">120E18P CUBE</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
