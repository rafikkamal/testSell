<!DOCTYPE html>
@extends('layouts.app')

@section('content')

<div class="container banner-container">
    <div id="banner" class="banner">
        <img src="{{asset('img/banner/banner.jpg') }}" alt="banner image" class="img-banner">
    </div>
</div>
<div id="slider" class="container">
    <div id="slider-container" class="slider-container">   
        @for($i = 1; $i < 10; $i++)
        <div class="slider-element" id="slider-element-".$i>
            <div class="slider-element-img">
                <span>15.99%</span>
                <img src="{{asset('img/slider/image_'.$i.'.jpg') }}" alt="slider image" class="img-slider">
            </div>
            <div class="slider-element-info">
                <span class="slider-element-info-name">RX10 III with F2.4-4 large-aperture 24-600mm zoom lens</span>
                <p>
                    Product Detail, lorimer lorim aasnxdkjanscxkj asnkjasx kajusdha sjhqeuiwdas jbasdbaxs
                    Product Detail, lorimer lorim aasnxdkjanscxkj asnkjasx kajusdha sjhqeuiwdas jbasdbaxs
                </p>
                <span class="slider-element-info-available">Availability</span>
                <span class="slider-element-info-stars">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </span>
                <span>(22)</span>
                <hr/>
                <span class="slider-element-info-price">$399.99</span>
            </div>
        </div>
        @endfor
    </div>
</div>

<div class="row seperate-row">
</div>

<div class="container my-product-slider">
    <div class="row">
        <div class="product-navbar">
            <div class="product-title">
                <h3>Product Promo</h3>
            </div>
            <div class="product-nav">
                <img src="{{asset('img/productSlider/left-slider-img.png') }}" id="right-slider-img" onclick="productSlider(this.id)" alt="slider image" class="left-slider-img">
                <img src="{{asset('img/productSlider/left-slider-img.png') }}" id="left-slider-img" onclick="productSlider(this.id)" alt="slider image" class="right-slider-img">
            </div>
        </div>
        <div class="product-slider">
            <div class="product-slider-container" id="product-slider-container">
                @for($i=1;$i<=10;$i++)
                <div class="product-slider-element" id="product-slider-element">
                    <img src="{{asset('img/slider/image_'.$i.'.jpg') }}" alt="slider image" class="product-slider-element-img">
                    <div class="product-slider-element-detail">
                        <span class="product-slider-element-title">RX10 III with F2.4-4 large-aperture 24-600mm zoom lens</span>
                        <p>
                            Product Detail, lorimer lorim aasnxdkjanscxkj asnkjasx kajusdha sjhqeuiwdas jbasdbaxs
                            Product Detail, lorimer lorim aasnxdkjanscxkj asnkjasx kajusdha sjhqeuiwdas jbasdbaxs
                        </p>
                        <span class="product-slider-element-price">$399.99</span>
                        <span class="product-slider-element-icons">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>

@endsection

