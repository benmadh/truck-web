@extends('front-end.layouts.app')
@section('meta-content')
<meta name="description" content="Auto Ceylon S.R.L. nasce a Verona nel 2019.Attualmente l'azienda conta una flotta superiore ai 50 veicoli di ogni tipologia">
@endsection

@section('title') {{'Veicoli | Auto Ceylon'}} @endsection

@section('content')
<!-- Breadcrumb-->
<div class="hidden-xs">
    <div class="row">
        <div class="col-lg-6">
            <ul class="ht-breadcrumb pull-left">
                <li class="home-act"><a href="{{ route('index') }}"><i class="fa fa-home"></i></a></li>
                <li class="home-act"><a href="#">Veicolo</a></li>
                @if(Request::get('brand') || Request::get('model') || Request::get('type'))
                    <li class="active"> cerca</li>
                @endif
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
                    <div class="select-wrapper m-b-lg-15">
                        <div class="dropdown">
                            <button class="dropdown-toggle form-item" type="button" id="dropdownMenu3"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Marca
                            </button>
                            <ul class="dropdown-menu marca " aria-labelledby="dropdownMenu3">
                                <li>{{ __('-') }}</li>
                                @foreach ($brands as $brand)
                                    @if(Request::get('brand') == $brand->id)
                                        <li value="{{ $brand->id }}">{{ $brand->name }}</li>
                                        @else
                                        <li value="{{ $brand->id }}">{{ $brand->name }}</li>
                                    @endif
                                    
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
                                Categoria
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
                @if(count($vehicles) > 0)
                    @if (isset($vehicles))
                        @foreach ($vehicles as $vehicle)
                            
                            @php 
                                $thumbnail = "";
                                $file_morphs = \App\UploadFileMorph::where('related_id', $vehicle->id)
                                                                    ->where('related_type', '=', 'vehicles')
                                                                    ->orderBy('order','desc')
                                                                    ->get();
                                    
                                $file = "";


                                foreach ($file_morphs as $key => $file_morph) 
                                {

                                    $file_uploads = \App\UploadFile::where('id', $file_morph->upload_file_id)
                                                                    ->orderBy('created_by','desc')
                                                                    ->get();

                                    foreach ($file_uploads as $key => $file_upload) 
                                    {
                                        $file = json_decode($file_upload->formats);
                                    }
                    
                                };


                                $modal = App\VehicleModel::where('id', '=', $vehicle->modal)
                                                            where('published_at', '!=', Null)
                                                        ->first();

                                $brand = App\Brand::where('id', '=', $vehicle->brand)
                                                    where('published_at', '!=', Null)
                                                    ->first();

                                
                                // replace non letter or digits by -
                                $slug = preg_replace('~[^\\pL\d]+~u', '-', $vehicle->type.'-'.$modal->name.'-'.$brand->name);
                                
                                // trim
                                $slug = trim($slug, '-');
                            
                                // transliterate
                                $slug = iconv('utf-8', 'us-ascii//TRANSLIT', $slug);

                                // lowercase
                                $slug = strtolower($slug);

                                // remove unwanted characters
                                $slug = preg_replace('~[^-\w]+~', '', $slug);

                                if (empty($slug))
                                {
                                return 'n-a';
                                }
                                
                            @endphp
                    
                            <div class="product-item hover-img">
                                <div class="row">
                                    <div class="col-sm-12 col-md-5 col-lg-5">
                                        <a href="{{ route('truck.detail',[$slug, $vehicle->id]) }}" class="product-img"><img
                                                src="{{ asset($file->thumbnail->url) }}"
                                                alt="{{ $slug }}"></a>
                                    </div>
                                    <div class="col-sm-12 col-md-7 col-lg-7">
                                        <div class="product-caption">
                                            <h4 class="product-name">
                                                <a href="{{ route('truck.detail',[$slug, $vehicle->id]) }}" class="f-18">{{ $vehicle->number }}</a>
                                            </h4>
                                            <!-- <b class="product-price color-red">$201,000</b> -->
                                            <p class="product-txt m-t-lg-10" style="text-transform: uppercase">{{ $vehicle->type }}
                                            </p>
                                            <ul class="static-caption m-t-lg-20">
                                                <li><i class="fa fa-truck"></i>
                                                {{ __('Marca : ') }} @php echo isset($vehicle->brandId) ? $vehicle->brandId->name : "" @endphp
                                                </li>
                                                <li><i class="fa fa-tachometer"></i>{{ __('Modello :') }} @php echo isset($vehicle->modelId) ? $vehicle->modelId->name : "" @endphp
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    @else
                        <div class="col-md-12 col-sm-12">
                            <div class="alert alert-warning  text-center">
                                 {{ __('Nessun risultato') }}
                            </div>
                        </div>
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
        console.log($(this).text());
        $('#type').val($(this).text());
    });

</script>
@endsection
