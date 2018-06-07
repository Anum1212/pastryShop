@extends('layouts.app') @section('head') @endsection @section('style') @endsection @section('body') {{-- Landing --}}
<div class="landing fullWidth" id="landing">
    {{-- image in css background --}}
</div>

{{-- About Us --}}
<div class="aboutUs row text-center" id="aboutUs">
    {{-- About Us Divider--}}
    <div class="divider col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
    {{-- About Us Content--}}
    <div class="aboutUsContent row col-lg-12 col-md-12 col-sm-12 col-xs-12 " id="aboutUsContent">
        {{-- About Us Heading div--}}
        <div class="headingDiv col-lg-12 col-md-12 col-sm-12 col-xs-12" id="headingDiv">
            {{-- About Us Heading--}}
            <div class="heading playFairDisplay" id="heading">
                Pastry Love!
            </div>
            {{-- About Us SubHeading--}}
            <div class="subHeading" id="subHeading">
                BOULANGERIE & PATTISERIE
            </div>
        </div>
        {{-- About Us Description--}}
        <div class="description text-center col-lg-12 col-md-12 col-sm-12 col-xs-12" id="description">
            <div>><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem et saepe culpa facere corporis magni
                impedit explicabo, est officiis omnis provident esse sint nobis placeat praesentium consequatur in debitis!
                Dolorum.
            </p>
        </div>
    </div>
</div>




{{-- Signature Products --}}
<div class="signatureProducts row" id="signatureProducts">
    {{-- Signature Products Heading Div --}}
    <div class="signatureProductsHeadingDiv playFairDisplay col-lg-12 col-md-12 col-sm-12 col-xs-12 center-lg center-md center-sm center-xs" id="signatureProductsHeadingDiv">
            {{-- Signature Products Heading --}}
        <div class="signatureProductsHeading column playFairDisplay" id="signatureProductsHeading">
            Our Signature Items
        </div>
        {{-- Signature Products SubHeading--}}
        <div class="signatureProductsSubHeading column" id="signatureProductsSubHeading">
            SWEET BREAD, CAKES & MUFFINS
        </div>
    </div>
    {{-- Signature Products Content--}}
    <div class="signatureProductsContent row col-lg-12 col-md-12 col-sm-12 col-xs-12 center-lg center-md center-sm center-xs" id="signatureProductsContent">
        {{-- Signature Products Content Bread--}}
        <div class="breads fullWidth row col-lg-12 col-md-12 col-sm-12 col-xs-12 center-lg center-md center-sm center-xs" id="breads">
            <div class="column bread col-lg-4 col-md-4 col-sm-4 col-xs-12" id="bread1">
                <img src="{{asset('/storage/myAssets/bread1.png')}}" alt="">
            </div>
            <div class="column bread col-lg-4 col-md-4 col-sm-4 col-xs-12" id="bread2">
                <img src="{{asset('/storage/myAssets/bread2.png')}}" alt="">
            </div>
            <div class="column bread col-lg-4 col-md-4 col-sm-4 col-xs-12" id="bread3">
                <img src="{{asset('/storage/myAssets/bread3.png')}}" alt="">
            </div>
        </div>

        {{-- Signature Products Content Muffins--}}
        <div class="muffins fullWidth row col-lg-12 col-md-12 col-sm-12 col-xs-12 center-lg center-md center-sm center-xs" id="muffins">
            <div class="muffin col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img src="{{asset('/storage/myAssets/muffin1.png')}}" alt="">
            </div>
            <div class="muffin col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img src="{{asset('/storage/myAssets/muffin2.png')}}" alt="">
            </div>
            <div class="muffin col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img src="{{asset('/storage/myAssets/muffin3.png')}}" alt="">
            </div>
            <div class="muffin col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img src="{{asset('/storage/myAssets/muffin4.png')}}" alt="">
            </div>
</div>
        {{-- Signature Products Content Pastry--}}
    </div>

    {{-- Customer Review--}}
    <div class="customerReview fullWidth column" id="customerReview">

    </div>

    {{-- Map--}}
    <div class="map fullWidth column" id="map">

    </div>

    {{-- Footer--}}
    <div class="footer fullWidth column" id="footer">
        <div class="image" id="image">

        </div>

        <div class="details" id="details">

        </div>
    </div>
    @endsection @section('script') @endsection
