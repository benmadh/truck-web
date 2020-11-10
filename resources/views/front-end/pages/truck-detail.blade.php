@php
    $img_path = json_decode($main_image->formats);

    $specs = json_decode($vehicle->specs);
    $specs_array = (array) $specs;
    $meta_keyword = implode(",",$specs_array);

    $single_img = "";
    $class = "";

    if(isset($img_path->medium) || !empty($img_path->medium))
    {
        $single_img = $img_path->medium->url;

    } else if(isset($img_path->large) || !empty($img_path->large))
    {
        $single_img = $img_path->large->url;

    } else if(isset($img_path->thumbnail) || !empty($img_path->thumbnail))
    {
        $single_img = $img_path->thumbnail->url;
        $class = "d-none";
    }

@endphp
@extends('front-end.layouts.app')

@section('meta-content')
<meta name="description" content="{{ $vehicle->dealUrl($vehicle->type,$vehicle->modelId->name,$vehicle->brandId->name) }} {{ $meta_keyword }}">
@endsection

@section('meta-data')
<!-- Required Open Graph data -->
<meta property="og:title" content=" @php echo(ucfirst($vehicle->brandId->name . $vehicle->modelId->name . $vehicle->number)) @endphp" />
<meta property="og:type" content="{{ $vehicle->type }}" />
<meta property="og:image" content="@php echo (!empty($img_path->medium) ? asset($img_path->medium->url) : !empty($img_path->thumbnail) ? asset($img_path->thumbnail->url) : "") @endphp" />
<meta property="og:url" content="{{ Request::url() }}" />
<!-- Optional Open Graph data -->
<meta property="og:description" content="{{ $vehicle->description }} {{ $meta_keyword }} {{ $vehicle->dealUrl($vehicle->type,$vehicle->modelId->name,$vehicle->brandId->name) }} " />
<meta property="og:site_name" content="AUTO CEYLON S.R.L" />
<meta property="og:locale" content="IT" />

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="AUTO CEYLON S.R.L">
<meta name="twitter:title" content="{{ $vehicle->number }}">
<meta name="twitter:description" content="{{ $vehicle->description }}">
<meta name="twitter:image" content="@php echo (!empty($img_path->medium) ? asset($img_path->medium->url) : !empty($img_path->thumbnail) ? asset($img_path->thumbnail->url) : "") @endphp">


@endsection

@section('title') @php echo(ucfirst(str_replace('-', ' ' ,$vehicle->dealUrl($vehicle->type,$vehicle->modelId->name,$vehicle->brandId->name))) ) @endphp {{' | Auto Ceylon'}} @endsection

@section('content')

<!-- Breadcrumb-->
<div class="hidden-xs">
    <div class="row">
        <div class="col-lg-6">
            <ul class="ht-breadcrumb pull-left">
                <li class="home-act"><a href="{{ route('index') }}"><i class="fa fa-home"></i></a></li>
                <li class="home-act"><a href="{{ route('listing') }}">Veicolo</a></li>
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
                        <div class="col-md-12 col-lg-12 p-lg-5 @php echo($class) @endphp">
                            <a href="{{ asset($single_img) }}">
                                <img src="{{ asset($single_img) }}" alt="{{ $vehicle->dealUrl($vehicle->type,$vehicle->modelId->name,$vehicle->brandId->name) }}">
                            </a>
                        </div>
                        @foreach ($images as $img)
                        @php
                        $large = json_decode($img->formats);

                        $img_url = "";

                        if(isset($large->medium) || !empty($large->medium))
                        {
                            $img_url = $large->medium->url;

                        } else if(isset($large->large) || !empty($large->large))
                        {
                            $img_url = $large->large->url;

                        } else if(isset($large->thumbnail) || !empty($large->thumbnail))
                        {
                            $img_url = $large->thumbnail->url;
                        }
                        @endphp
                        <div class="col-sm-3 col-md-3 col-lg-3 p-lg-5">
                            <a href="{{ $img_url }}">
                                <img src="{{ asset($large->thumbnail->url) }}" alt="{{ $vehicle->dealUrl($vehicle->type,$vehicle->modelId->name,$vehicle->brandId->name) }}">
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
                        @foreach($specs_array as $key=>$spec)
                        <li><span>{{ $key }} :</span>{{ $spec }}</li>
                        @endforeach
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
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control form-item" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-item" name="telefono" placeholder="Telefono" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-item" name="address" placeholder="Indirizzo" required>
                        </div>
                        <textarea class="form-control form-item h-200 m-b-lg-10" name="message" placeholder="Messaggio" 
                            rows="3" required></textarea>
                        <button type="submit" class="ht-btn ht-btn-default">Inviare</button>
                        <input type="hidden" name="url" value="{{ Request::url() }}">
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if(session('success'))
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal("Grazie!","{{ session('success') }}", "success");
        </script>
    @endif
    
    <section class="m-b-lg-50">
        <div class="blog blog-grid overl">
            <div class="heading">
                <h3>In arrivo</h3>
            </div>
            <div class="row">
                <div class="owl" data-items="3" data-itemsDesktop="3" data-itemsDesktopSmall="2" data-itemsTablet="2"
                    data-itemsMobile="1" data-pag="false" data-buttons="true">
                    
                    @foreach ($upcoming_data as $upcoming)
                        <div class="col-lg-12">
                            <!-- Blog item -->
                            <div class="blog-item">
                                <img src="{{ $upcoming['files']->thumbnail->url }}" alt="{{ $upcoming['slug'] }} ">
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
</section>
@endsection
