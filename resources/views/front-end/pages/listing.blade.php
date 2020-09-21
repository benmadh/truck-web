@extends('front-end.layouts.app')

@section('title') {{'Listato | Auto Ceylon'}} @endsection

@section('content')
<!-- Breadcrumb-->
<div class="hidden-xs">
    <div class="row">
        <div class="col-lg-6">
            <ul class="ht-breadcrumb pull-left">
                <li class="home-act"><a href="#"><i class="fa fa-home"></i></a></li>
                <li class="home-act"><a href="#">Veicolo</a></li>
                <li class="active">Autocarro</li>
            </ul>
        </div>
        
    </div>
</div>
<!-- Car list -->
<section class="block-product m-t-lg-30 m-t-xs-0">
    <div class="row">
        <div class="col-sm-5 col-md-4 col-lg-3">
            <!-- Search option -->
            <div class="search-option m-b-lg-50 p-lg-20">
                <div class="select-wrapper m-b-lg-15">
                    <div class="dropdown">
                        <button class="dropdown-toggle form-item" type="button" id="dropdownMenu1"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Modello
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li>Tutti</li>
                            <li>100E15 EUROCARGO</li>
                            <li>100E17 TECTOR EUROCARGO</li>
                            <li>100E17 TECTOR NEW EUROCARGO STRALIS</li>
                            <li>100E17P TECTOR NEW EUROCARGO STRALIS</li>
                            <li>100E18</li>
                            <li>100E18 CUBE</li>
                            <li>100E18 EUROCARGO</li>
                            <li>100E18 EUROCARGO TECTOR</li>
                            <li>100E18 TECTOR NEW EUROCARGO STRALIS</li>
                        </ul>
                    </div>
                </div>
                
                <div class="select-wrapper m-b-lg-15">
                    <div class="dropdown">
                        <button class="dropdown-toggle form-item" type="button" id="dropdownMenu3"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Marchio
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu3">
                            <li>ADRIA</li>
                            <li>DAF</li>
                            <li>FIAT</li>
                            <li>FORD</li>
                            <li>ISUZU</li>
                            <li>IVECO</li>
                            <li>MAN</li>
                            <li>MERCEDES - BENZ</li>
                            <li>NISSAN</li>
                        </ul>
                    </div>
                </div>
                <div class="select-wrapper m-b-lg-15">
                    <div class="dropdown">
                        <button class="dropdown-toggle form-item" type="button" id="dropdownMenu5"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Prima Immatr.
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu5">
                            <li>Tutti</li>
                            <li>2016</li>
                            <li>2015</li>
                            <li>2014</li>
                            <li>2012</li>
                        </ul>
                    </div>
                </div>
                <div class="m-b-lg-15">
                    <label class="text-white">Peso tot. a terra</label>
                    <input type="text" class="form-control form-item">
                </div>
               
                <!-- <div class="select-wrapper m-b-lg-15">
                    <div class="dropdown">
                        <button class="dropdown-toggle form-item" type="button" id="dropdownMenu6"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Tranmission
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu6">
                            <li>Transition</li>
                            <li>Automatic</li>
                            <li>Manual</li>
                            <li>Semi-automatic</li>
                        </ul>
                    </div>
                </div>
                <input type="text" disabled class="slider_amount m-t-lg-10">
                <div class="slider-range"></div> -->
                <button type="button" class="ht-btn ht-btn-default m-t-lg-30"><i class="fa fa-search"></i>Cerca ora</button>
            </div>
            <div class="clearfix"></div>
            <!-- Banner -->
            <!-- <div class="banner-item banner-bg-4 banner-1x color-inher">
                <h5>Lorem ipsum dolor</h5>
                <h3 class="f-weight-300"><strong>Interior</strong> Accessories</h3>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel</p>
                <a href="#" class="ht-btn ht-btn-default">Shop now</a>
            </div> -->
        </div>
        <div class="col-sm-7 col-md-8 col-lg-9">
            <!-- Car -->
            <div class="product product-list car">
               
                <div class="clearfix"></div>
                <!-- Product item -->
                <div class="product-item hover-img">
                    <div class="row">
                        <div class="col-sm-12 col-md-5 col-lg-5">
                            <a href="{{ route('truck.detail') }}" class="product-img"><img src="https://www.belcamion.com/includes/phpThumb/phpThumb.php?src=http://www.belcamion.com/uploads/NUOVE/120E25P 1.jpg&w=320&h=190&zc=1" alt="image"></a>
                        </div>
                        <div class="col-sm-12 col-md-7 col-lg-7">
                            <div class="product-caption">
                                <h4 class="product-name">
                                    <a href="{{ route('truck.detail') }}" class="f-18">120E25P CUBE E6</a>
                                </h4>
                                <!-- <b class="product-price color-red">$201,000</b> -->
                                <p class="product-txt m-t-lg-10">Veicoli in arrivo
                                </p>
                                <ul class="static-caption m-t-lg-20">
                                    <li><i class="fa fa-clock-o"></i>IVECO</li>
                                    <li><i class="fa fa-tachometer"></i>Rif. interno: IN ARRIVO
</li>
                                    <li><i class="fa fa-road"></i>12/06/2015</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item hover-img">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-5">
                            <a href="{{ route('truck.detail') }}" class="product-img"><img src="https://www.belcamion.com/includes/phpThumb/phpThumb.php?src=http://www.belcamion.com/uploads/NUOVE/1.jpg&w=320&h=190&zc=1" alt="image"></a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-7">
                            <div class="product-caption">
                                <h4 class="product-name">
                                    <a href="{{ route('truck.detail') }}" class="f-18">120E28P CUBE E6</a>
                                </h4>
                                <!-- <b class="product-price color-red">$201,000</b> -->
                                <p class="product-txt m-t-lg-10">Veicoli in arrivo
                                </p>
                                <ul class="static-caption m-t-lg-20">
                                    <li><i class="fa fa-clock-o"></i>IVECO</li>
                                    <li><i class="fa fa-tachometer"></i>Rif. interno: IN ARRIVO
</li>
                                    <li><i class="fa fa-road"></i>Prima imm.: 01/05/2015</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <nav aria-label="Page navigation">
                    <ul class="pagination ht-pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection
