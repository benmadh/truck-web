@extends('front-end.layouts.app')

@section('title') {{'Dettagli del camion | Auto Ceylon'}} @endsection

@section('content')

<!-- Breadcrumb-->
<div class="hidden-xs">
    <div class="row">
        <div class="col-lg-6">
            <ul class="ht-breadcrumb pull-left">
                <li class="home-act"><a href="#"><i class="fa fa-home"></i></a></li>
                <li class="home-act"><a href="#">Veicolo</a></li>
                <li class="home-act" style="text-transform: uppercase"><a href="#">{{ $vehicle->type }}</a></li>
                <li class="active">{{ $vehicle->number }}</li>
            </ul>
        </div>
    </div>
</div>
<!-- Car detail -->

<section class="m-t-lg-30 m-t-xs-0">
    <div class="product_detail no-bg p-lg-0">
        <!-- Car name -->
        <h3 class="product-name color1-f">{{ $vehicle->number }}
        </h3>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <!-- Car image gallery -->
                <div class="product-img-lg bg-gray-f5 bg1-gray-15">
                    <div class="image-zoom row m-t-lg-5 m-l-lg-ab-5 m-r-lg-ab-5">
                        <div class="col-md-12 col-lg-12 p-lg-5">
                            @php
                                $img_path = json_decode($images[0]->formats);
                            @endphp
                            <a
                            href="{{ asset($img_path->medium->url) }}">
                                <img 
                                src="{{ asset($img_path->medium->url) }}"
                                alt="image">
                            </a>
                        </div>
                        @foreach ($images as $img)
                            @php 
                                $large = json_decode($img->formats);
                            @endphp
                            <div class="col-sm-3 col-md-3 col-lg-3 p-lg-5">
                                <a
                                    href="{{ asset($large->large->url) }}">
                                    <img src="{{ asset($large->thumbnail->url) }}"
                                        alt="image">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Car description tabs -->
    <div class="row m-t-lg-30 m-b-lg-50">
        <div class="col-md-8">
            <div class="m-b-lg-30">
                @if($vehicle->description != "")
                    <div class="heading-1 heading-custom">
                        <h3>Caratteristiche</h3>
                    </div>
                    <div class="m-b-lg-30 bg-gray-fa bg1-gray-2 p-lg-30 p-xs-15">
                        <p class="color1-9 text-justify">
                            {{ $vehicle->description }}
                        </p>
                    </div>
                @endif
            </div>

            <!-- Technical Specifications -->
            <div class="m-b-lg-0">
                <div class="bg-gray-fa bg1-gray-2 p-lg-30 p-xs-15">
                    <div class="heading-1 heading-custom">
                        <h3 class="f-18">{{ $vehicle->number }}</h3>
                    </div>
                    
                    <ul class="product_para-1">
                        <li><span>Riferimento interno :</span>IN ARRIVO</li>
                        <li><span>Prima Immatricolazione :</span>12/06/2015</li>
                        <li><span>Peso totale a terra :</span>119,90 Q.li - possibile omologazione 115 Q.li</li>
                        <li><span>Horespower :</span>Mileage</li>
                        <li><span>Normativa inquinamento :</span>6</li>
                        <li><span>Motore :</span>6 cilindri common rail - 6728 cc - 250 Cv</li>
                        <li><span>Cambio :</span>Automatico e sequenziale</li>
                        <li><span>Passo :</span>5670 - possibile adeguamento 3105 - 3690 - 4185</li>
                        <li><span>Allestimento :</span>
                            <p class="text-justify">CASSONE FISSO CON CENTINA FISSA ALLA FRANCESE - dimensioni utili 800
                                * 248 h 275 - SPONDA MONTACARICHI A BATTENTE - possibile vendita anche solo cabinato con
                          eventuale modifica del passo per allestimenti vari</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Dealer Infomation -->
        <div class="col-sm-12 col-md-4 col-lg-4">

            <div class="m-t-lg-30">
                <div class="heading-1">
                    <h3><i class="fa fa-envelope-o"></i>Invia Messaggio</h3>
                </div>
                <div class="bg-gray-fa bg1-gray-2 p-lg-20">
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control form-item" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-item" placeholder="Telefono">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-item" placeholder="Indirizzo">
                        </div>
                        <textarea class="form-control form-item h-200 m-b-lg-10" placeholder="Messaggio"
                            rows="3"></textarea>
                        <button type="submit" class="ht-btn ht-btn-default">Inviare</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Other cars -->
    {{-- <div class="product product-grid product-grid-2 car m-b-lg-15">
        <div class="heading">
            <h3>Altri camion</h3>
        </div>
        <div class="row">
            <div class="owl" data-items="3" data-itemsDesktop="3" data-itemsDesktopSmall="2" data-itemsTablet="2"
                data-itemsMobile="1" data-pag="false" data-buttons="true">
                @foreach ($truck_list as $truck)
                <div class="col-lg-12">
                    <!-- Product item -->
                    <div class="product-item hover-img">
                        <a href="{{ route('truck.detail',[$truck->dealUrl(),$truck->id]) }}" class="product-img">
                            <img src="https://www.belcamion.com/includes/phpThumb/phpThumb.php?src=http://www.belcamion.com/uploads/NUOVE/1.jpg&w=320&h=190&zc=1"
                                alt="image">
                        </a>
                        <div class="product-caption">
                            <h4 class="product-name" style="text-transform: uppercase">
                                <a href="#">{{ $truck->type }}</a><span class="f-18">
                                    {{ $truck->number }}</span>
                            </h4>
                        </div>
                        <ul class="absolute-caption">
                            <li style="text-transform: uppercase"><i class="fa fa-clock-o"></i>{{ $truck->type }}</li>
                            <li><i class="fa fa-road"></i>Marca : {{ $truck->modelId->modelBelongsToBrand->name }}
                            </li>
                            <li><i class="fa fa-car"></i>Modello : {{ $truck->modelId->name }}</li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> --}}

    <section class="m-b-lg-50">
        <div class="blog blog-grid overl">
            <div class="heading">
                <h3>Prossimi camion</h3>
            </div>
            <div class="row">
                <div class="owl" data-items="3" data-itemsDesktop="3" data-itemsDesktopSmall="2" data-itemsTablet="2"
                    data-itemsMobile="1" data-pag="false" data-buttons="true">
                    
                    @foreach ($upcomings as $next_truck)
                        @php $number = (array) $next_truck @endphp
                        @foreach (json_decode($next_truck->formats) as $item)
                            <div class="col-lg-12">
                                <!-- Blog item -->
                                <div class="blog-item">
                                    <img src="{{ asset($item->url) }}" alt="">
                                    <div class="blog-caption">
                                        <h3 class="blog-heading">{{ $number['Number'] }}</h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
