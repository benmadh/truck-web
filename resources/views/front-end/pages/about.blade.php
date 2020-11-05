@extends('front-end.layouts.app')

@section('title') {{'Chi siamo | Auto Ceylon'}} @endsection

@section('content')
<!-- Breadcrumb-->
<div class="hidden-xs">
    <div class="row">
        <div class="col-lg-6">
            <ul class="ht-breadcrumb pull-left">
                <li class="home-act"><a href="#"><i class="fa fa-home"></i></a></li>
                <li class="active">Chi siamo</li>
            </ul>
        </div>
    </div>
</div>
<!-- About-->
<section class="m-t-lg-30 m-t-xs-0 m-b-lg-50">
    <div>
        <div class="row">
            <div class="col-md-7 col-lg-8 m-b-lg-50">
                <div class="heading">
                    <h3>Chi siamo</h3>
                </div>
                <p style="text-align: justify"> Commercianti e noleggiatori di veicoli usati multimarca.<br><br>
                    Specializzati nel noleggio e nella vendita di veicoli d'importazione provenienti da Francia, Olanda
                    e Germania.<br><br>
                    Auto Ceylon S.R.L. nasce a Verona nel 2019.<br><br>
                    Attualmente l'azienda conta una flotta superiore ai 50 veicoli di ogni tipologia.Auto Ceylon è
                    sempre a disposizione del cliente, dalla scelta del veicolo fino al collaudo in Italia e per quanto
                    riguarda il noleggio dal ritiro del veicolo per tutto il periodo di locazione, fornendo assistenza
                    per qualsiasi inconveniente.
                </p>
            </div>
            <div class="col-sm-12 col-md-5 col-lg-4">
                <img src="{{ asset('front-end/images/img_7.jpg') }}" class="width-100" alt="image">
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <img src="{{ asset('front-end/images/112.jpg') }}" class="imgc width-100" alt="image">
            </div>
        </div> -->
    </div>
</section>
<section class="m-b-lg-50">
    <div class="blog blog-grid overl">
        <div class="heading">
            <h3>Veicoli in arrivo</h3>
        </div>
        <div class="row">
            <div class="owl" data-items="3" data-itemsDesktop="3" data-itemsDesktopSmall="2" data-itemsTablet="2"
                data-itemsMobile="1" data-pag="false" data-buttons="true">
                
                @foreach ($upcoming_data as $upcoming)
                    <div class="col-lg-12">
                        <!-- Blog item -->
                        <div class="blog-item">
                            <img src="{{ $upcoming['files']->thumbnail->url }}" alt="">
                            <div class="blog-caption">
                                <h3 class="blog-heading">{{ $upcoming['number'] }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
</section>
@endsection
