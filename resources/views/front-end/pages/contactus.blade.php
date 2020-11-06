@extends('front-end.layouts.app')

@section('meta-content')
 <meta name="description" content="Auto Ceylon S.R.L. nasce a Verona nel 2019.Attualmente l'azienda conta una flotta superiore ai 50 veicoli di ogni tipologia">
@endsection

@section('title') {{'Contattaci | Auto Ceylon'}} @endsection

@section('content')
<!-- Breadcrumb-->
<div class="hidden-xs">
    <div class="row">
        <div class="col-lg-6">
            <ul class="ht-breadcrumb pull-left">
                <li class="home-act"><a href="{{ route('index') }}"><i class="fa fa-home"></i></a></li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </div>
</div>
<!-- Contact -->
<section class="block-contact m-t-lg-30 m-t-xs-0 p-b-lg-50">
    <div class="">
        <div class="row">
            <!-- Contact info -->
            <div class="col-sm-6 col-md-6 col-lg-6 m-b-xs-30">
                <div class="heading">
                    <h3>Informazioni Di Contatto</h3>
                </div>
                <div class="contact-info p-lg-30 p-xs-15 bg-gray-fa bg1-gray-2">
                    <div class="content">
                        
                        <ul class="list-default">
                            <li><i class="fa fa-map-marker"></i>37069 , Dossobuono di Villafranca VR , Italia</li>
                            <li><i class="fa fa-phone"></i>+39 327 088 39 43</li>
                            <li><i class="fa fa-phone"></i>045 96 12 013</li>
                            <li><i class="fa fa-envelope-o"></i>sajithradalage@yahoo.com</li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Contact form -->
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="heading">
                    <h3>Modulo Di Contatto</h3>
                </div>
                <div class="contact-form p-lg-30 p-xs-15 bg-gray-fa bg1-gray-2">
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
                        <button type="submit" class="ht-btn ht-btn-default">Presentare</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                @if(session('success'))
                    <div class="alert alert-success text-center">{{ session('success') }}</div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
