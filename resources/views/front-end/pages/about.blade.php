@extends('front-end.layouts.app')

@section('title') {{'Riguardo a noi | Auto Ceylon'}} @endsection

@section('content')
<!-- Breadcrumb-->
<div class="hidden-xs">
    <div class="row">
        <div class="col-lg-6">
            <ul class="ht-breadcrumb pull-left">
                <li class="home-act"><a href="#"><i class="fa fa-home"></i></a></li>
                <li class="active">RIGUARDO A NOI</li>
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
                    <h3>RIGUARDO A NOI</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerciStation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in vo. Sunt in culpa qui
                    officia deserunt mollit anim id est laborut non proident.</p>
                <ul class="list-default">
                    <li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor smet, consectetur adipisicing
                            eli</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i>Lorem tetur asicing eli</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor sit amseing eli</a></li>
                </ul>
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
                        <a href="#" class="hover-img"><img src="https://www.belcamion.com/includes/phpThumb/phpThumb.php?src=http://www.belcamion.com/uploads/cartella senza nome 11/IMG_6551.jpg&w=320&h=190&zc=1" alt="image"></a>
                        <div class="blog-caption">
                            <!-- <ul class="blog-date">
                                <li><a href="#"><i class="fa fa-calendar"></i>25th May 2016</a></li>
                                <li><a href="#"><i class="fa fa-comment"></i>3 comment</a></li>
                            </ul> -->
                            <h3 class="blog-heading"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod temp incidunt ut
                                labore et dolore magna aliqua uat veniama</p>
                            <a href="#" class="ht-btn ht-btn-default">Leggi di più</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- Blog item -->
                    <div class="blog-item">
                        <a href="#" class="hover-img"><img src="https://www.belcamion.com/includes/phpThumb/phpThumb.php?src=http://www.belcamion.com/uploads/cartella senza nome 11/PHOTO-2020-09-10-12-02-01.jpg&w=320&h=190&zc=1" alt="image"></a>
                        <div class="blog-caption">
                            <!-- <ul class="blog-date">
                                <li><a href="#"><i class="fa fa-calendar"></i>25th May 2016</a></li>
                                <li><a href="#"><i class="fa fa-comment"></i>3 comment</a></li>
                            </ul> -->
                            <h3 class="blog-heading"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod temp incidunt ut
                                labore et dolore magna aliqua uat iama</p>
                            <a href="#" class="ht-btn ht-btn-default">Leggi di più</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- blog item -->
                    <div class="blog-item">
                        <a href="#" class="hover-img"><img src="https://www.belcamion.com/includes/phpThumb/phpThumb.php?src=http://www.belcamion.com/uploads/cartella senza nome 11/IMG_7228.jpg&w=320&h=190&zc=1" alt="image"></a>
                        <div class="blog-caption">
                            <!-- <ul class="blog-date">
                                <li><a href="#"><i class="fa fa-calendar"></i>25th May 2016</a></li>
                                <li><a href="#"><i class="fa fa-comment"></i>3 comment</a></li>
                            </ul> -->
                            <h3 class="blog-heading"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod temp incidunt ut
                                labore et dolore magna aliqua uat iama</p>
                            <a href="#" class="ht-btn ht-btn-default">Leggi di più</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- Blog item -->
                    <div class="blog-item">
                        <a href="#" class="hover-img"><img src="https://www.belcamion.com/includes/phpThumb/phpThumb.php?src=http://www.belcamion.com/uploads/cartella senza nome 11/PHOTO-2020-09-10-12-13-00.jpg&w=320&h=190&zc=1" alt="image"></a>
                        <div class="blog-caption">
                            <!-- <ul class="blog-date">
                                <li><a href="#"><i class="fa fa-calendar"></i>25th May 2016</a></li>
                                <li><a href="#"><i class="fa fa-comment"></i>3 comment</a></li>
                            </ul> -->
                            <h3 class="blog-heading"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod temp incidunt ut
                                labore et dolore magna aliqua uat iama</p>
                            <a href="#" class="ht-btn ht-btn-default">Leggi di più</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
