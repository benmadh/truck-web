@extends('front-end.layouts.app')

@section('title') {{'Veicoli | Auto Ceylon'}} @endsection

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
                <form action="{{ route('listing') }}" method="GET">
                    @csrf
                    <div class="select-wrapper m-b-lg-15">
                        <div class="dropdown">
                            <button class="dropdown-toggle form-item" type="button" id="dropdownMenu3"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Marca
                            </button>
                            <ul class="dropdown-menu marca " aria-labelledby="dropdownMenu3">
                                <li>{{ __('-') }}</li>
                                @foreach ($brands as $brand)
                                    <li value="{{ $brand->id }}">{{ $brand->name }}</li>
                                @endforeach
                            </ul>
                            <input type="hidden" id="selected_val" name="brand">
                        </div>
                    </div>
    
                    <div class="select-wrapper m-b-lg-15">
                        <div class="dropdown">
                            <button class="dropdown-toggle form-item" type="button" id="dropdownMenu1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Modello
                            </button>
                            <ul class="dropdown-menu modello" aria-labelledby="dropdownMenu1">
                                <li>{{ __('-') }}</li>
                                @foreach ($models as $model)
                                    <li value="{{ $model->id }}">{{ $model->name }}</li>
                                @endforeach
                            </ul>
                            <input type="hidden" id="modello-id" name="model">
                        </div>
                    </div>
    
                    <div class="select-wrapper m-b-lg-15">
                        <div class="dropdown">
                            <button class="dropdown-toggle form-item" type="button" id="dropdownMenu5"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Genere
                            </button>
                            <ul class="dropdown-menu type" aria-labelledby="dropdownMenu5">
                                <li>{{ __('-') }}</li>
                                <li value="{{ __('furgoni') }}">{{ __('Furgoni') }}</li>
                                <li value="{{ __('camion') }}">{{ __('Camion') }}</li>
                                <li value="{{ __('auto') }}">{{ __('Auto') }}</li>
                            </ul>
                            <input type="hidden" id="type" name="type">
                        </div>
                    </div>
                    <button type="submit" class="ht-btn ht-btn-default m-t-lg-30"><i class="fa fa-search"></i>Cercaora</button>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-sm-7 col-md-8 col-lg-9">
            <!-- Car -->
            <div class="product product-list car">

                <div class="clearfix"></div>
                <!-- Product item -->
                @if (isset($vehicles))
                    @foreach ($vehicles as $vehicle)
                        <div class="product-item hover-img">
                            <div class="row">
                                <div class="col-sm-12 col-md-5 col-lg-5">
                                    <a href="#" class="product-img"><img
                                            src="https://www.belcamion.com/includes/phpThumb/phpThumb.php?src=http://www.belcamion.com/uploads/NUOVE/120E25P 1.jpg&w=320&h=190&zc=1"
                                            alt="image"></a>
                                </div>
                                <div class="col-sm-12 col-md-7 col-lg-7">
                                    <div class="product-caption">
                                        <h4 class="product-name">
                                            <a href="{{ route('truck.detail',[$vehicle->dealUrl(),$vehicle->id]) }}" class="f-18">{{ $vehicle->number }}</a>
                                        </h4>
                                        <!-- <b class="product-price color-red">$201,000</b> -->
                                        <p class="product-txt m-t-lg-10" style="text-transform: uppercase">{{ $vehicle->type }}
                                        </p>
                                        <ul class="static-caption m-t-lg-20">
                                            <li><i class="fa fa-clock-o"></i>
                                                {{ $vehicle->brandId->name }}
                                            </li>
                                            <li><i class="fa fa-tachometer"></i>Rif. interno: {{ $vehicle->modelId->name }}
                                            </li>
                                            
                                            <li><i class="fa fa-road"></i></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                
               
                <nav aria-label="Page navigation">
                    <ul class="pagination ht-pagination">
                        @if(isset($vehicles))
                            {{ $vehicles->links() }}
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script>
    $('.marca li').click(function () {
        console.log($(this).val());
        $('#selected_val').val($(this).val());
    });

    $('.modello li').click(function () {
        console.log($(this).val());
        $('#modello-id').val($(this).val());
    });

    $('.type li').click(function () {
        console.log($(this).val());
        $('#type').val($(this).val());
    });


    

</script>
@endsection
