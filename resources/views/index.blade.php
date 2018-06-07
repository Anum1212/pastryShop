@extends('layouts.app') @section('head') @endsection @section('style')
<style>
    .col {
        border: 2px solid green;
    }

</style>
@endsection @section('body') {{-- Wrapper Start --}} {{-- Landing Start--}}
<div id="landing">
    {{-- NavBar --}} @include('layouts.navBar') {{-- image in css --}}
</div> {{-- Landing End --}} {{-- Divider --}}
<div id="wrapper">
    <div class="divider"></div>

    {{-- About Us start --}}
    <div id="aboutUs" class="joinWithDivider text-center animateSection">

        {{-- Gap --}}
        <div class="gap"></div>

        {{-- Heading Div Start--}}
        <div id="aboutUsHeadingDiv" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            {{-- Heading Start--}}
            <div id="aboutUsHeading" class="playFairDisplay">
                Pastry Love!
            </div> {{-- Heading End --}} {{-- Sub Heading Start --}}
            <div id="aboutUsSubHeading">
                BOULANGERIE & PATTISERIE
            </div> {{-- Sub Heading End --}}
        </div> {{-- Heading Div End --}} {{-- Detail Div Start --}}
        <div id="aboutUsDetailDiv" class="mx-auto col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum autem adipisci alias quia qui iusto ab natus, eius impedit
            quam ipsa! Non perspiciatis inventore excepturi. Nisi repellat illo quidem enim.Nulla soluta quidem nemo sunt
            accusamus magnam ducimus sed voluptatem saepe natus nisi reiciendis rerum minima fugit assumenda temporibus magni
            consectetur, impedit aliquam qui. Quasi minima corrupti nostrum. Placeat, fugit.
        </div> {{-- Detail Div End--}}

    </div> {{-- About Us End --}} {{-- Signature Products Start --}}
    <div id="signatureProducts">

        {{-- Signature Products Heading Div Start --}}
        <div id="signatureProductsHeadingDiv" class="text-center animateSection">
            {{-- signature Products Heading Start--}}
            <div id="signatureProductsHeading" class="playFairDisplay">
                Our Signature Products
            </div>{{-- Signature Products Heading End--}} {{-- Signature Products Sub Heading Start--}}
            <div id="signatureProductsSubHeading" class="nunitoSans">
                SWEET BREAD, CAKES & MUFFINS
            </div>{{-- Signature Products Sub Heading End--}}
        </div>{{-- Signature Products Heading Div End--}} {{-- Breads Div Start--}}
        <div id="breads" class="text-center animateSection">
            {{-- animate whole object div start --}}
            <div class="row animateWholeObjectDiv">
                {{-- Individual Bread 1 Start--}}
                <div class="bread animateObject col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <img src="{{asset('/storage/myAssets/bread1.png')}}" alt="">
                    <div class="hiddenText">
                        <p class="breadName" style="display:none">SWEET PEACH BREAD</p>
                    </div>
                </div>{{-- Individual Bread 1 End--}} {{-- Individual Bread 2 Start--}}
                <div class="bread animateObject col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <img src="{{asset('/storage/myAssets/bread2.png')}}" alt="">
                    <div class="hiddenText">
                        <p class="breadName" style="display:none">SWEET ALMOND BREAD</p>
                    </div>
                </div>{{-- Individual Bread 2 End--}} {{-- Individual Bread 3 Start--}}
                <div class="bread animateObject col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <img src="{{asset('/storage/myAssets/bread3.png')}}" alt="">
                    <div class="hiddenText">
                        <p class="breadName" style="display:none">CHOCO COOKIE BREAD</p>
                    </div>
                </div>{{-- Individual Bread 3 End--}}

            </div> {{-- animate whole object Div End--}}
        </div> {{-- Breads Div End--}} {{-- Muffins Div Start --}}
        <div id="muffins" class="text-center animateSection">
            {{-- animate whole object div start --}}
            <div class="row animateWholeObjectDiv">
                {{-- Individual Muffin 1 Start--}}
                <div class="muffin animateObject col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    {{-- Muffin Img --}}
                    <div class="muffinImg">
                        <img src="{{asset('/storage/myAssets/muffin1.png')}}" alt=""> {{-- Muffin Name --}}
                    </div>
                    <div class="muffinName nunito">
                        CHERRY MUFFIN
                    </div>
                    {{-- Muffin Detail --}}
                    <div class="muffinDetail">
                        These moist chocolate muffins are rich, moist and chocolately.
                    </div>
                    {{-- Muffin Order Button --}}
                    <div class="orderButton">
                        <a href="" class="btn btn-light">Order Here</a>
                    </div>
                </div>{{-- Individual Muffin 1 End --}} {{-- Individual Muffin 2 Start--}}
                <div class="muffin animateObject col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    {{-- Muffin Img --}}
                    <div class="muffinImg">
                        <img src="{{asset('/storage/myAssets/muffin2.png')}}" alt=""> {{-- Muffin Name --}}
                    </div>
                    <div class="muffinName nunito">
                        ALMOND MUFFIN
                    </div>
                    {{-- Muffin Detail --}}
                    <div class="muffinDetail">
                        Leverage agile frameworks to provide a robust synopsis for high.
                    </div>
                    {{-- Muffin Order Button --}}
                    <div class="orderButton">
                        <a href="" class="btn btn-light">Order Here</a>
                    </div>
                </div>{{-- Individual Muffin 2 End --}} {{-- Individual Muffin 3 Start--}}
                <div class="muffin animateObject col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    {{-- Muffin Img --}}
                    <div class="muffinImg">
                        <img src="{{asset('/storage/myAssets/muffin3.png')}}" alt=""> {{-- Muffin Name --}}
                    </div>
                    <div class="muffinName nunito">
                        CHOCO MUFFIN
                    </div>
                    {{-- Muffin Detail --}}
                    <div class="muffinDetail">
                        Iterative approaches to corporate strategy foster collaborative.
                    </div>
                    {{-- Muffin Order Button --}}
                    <div class="orderButton">
                        <a href="" class="btn btn-light">Order Here</a>
                    </div>
                </div>{{-- Individual Muffin 3 End --}} {{-- Individual Muffin 4 Start--}}
                <div class="muffin animateObject col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    {{-- Muffin Img --}}
                    <div class="muffinImg">
                        <img src="{{asset('/storage/myAssets/muffin4.png')}}" alt=""> {{-- Muffin Name --}}
                    </div>
                    <div class="muffinName nunito">
                        PEACH MUFFIN
                    </div>
                    {{-- Muffin Detail --}}
                    <div class="muffinDetail">
                        Capitalize on low hanging fruit to identify a ballpark value added.
                    </div>
                    {{-- Muffin Order Button --}}
                    <div class="orderButton">
                        <a href="" class="btn btn-light">Order Here</a>
                    </div>
                </div>{{-- Individual Muffin 4 End --}}
            </div> {{-- animate whole object Div End --}} {{-- Divider --}}
        </div> {{-- Muffins Div End --}} {{-- Divider --}}
        <div class="divider"></div>
        {{-- Pasteries Div Start --}}
        <div id="pastries" class="joinWithDivider row text-center animateSection">
            {{-- Left Div Start --}}
            <div id="leftDiv" class="col-12">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <button class="btn btn-dark btn-sm" value="1"> 1 </button>
                    </li>
                    <li class="list-inline-item">
                        <button class="btn btn-dark btn-sm" value="2"> 2 </button>
                    </li>
                    <li class="list-inline-item">
                        <button class="btn btn-dark btn-sm" value="3"> 3 </button>
                    </li>
                    <li class="list-inline-item">
                        <button class="btn btn-dark btn-sm" value="4"> 4 </button>
                    </li>
                    <li class="list-inline-item">
                        <button class="btn btn-dark btn-sm" value="5"> 5 </button>
                    </li>
                    <li class="list-inline-item">
                        <button class="btn btn-dark btn-sm" value="6"> 6 </button>
                    </li>
                </ul>
            </div> {{-- Left div end --}} {{-- Right div start --}}
            <div id="rightDiv" class="col-12">
                {{-- Individual pastry 1 start --}}
                <div id="pastry1" class="pastry row">
                    <div class="pastryImage col-xl-7 col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <img src="{{asset('/storage/myAssets/pastry1.jpg')}}" alt=""> {{-- Muffin Name --}}
                    </div>
                    <div class="pastryDetails col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="pastryNameHeading playFairDisplay">
                            Tiramisu
                        </div>
                        <div class="ingredientSubHeading">
                            Ingredients
                        </div>
                        <br>
                        <div class="ingredientDetails text-left col-12">
                            <ul>

                                <li>Coffee</li>
                                <li>Sugar</li>
                                <li>Liqueur</li>
                                <li>Eggs</li>
                                <li>Cream Cheese</li>
                                <li>Whipped Cream</li>
                                <li>Cocoa</li>
                            </ul>
                        </div>
                        <div class="orderButton text-center">
                            <a href="" class="btn btn-light">Order Here</a>
                        </div>
                    </div>
                </div> {{-- Individual Pastry 1 End --}} {{-- Individual pastry 2 start --}}
                <div id="pastry2" class="pastry row" style="display: none;">
                    <div class="pastryImage col-xl-7 col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <img src="{{asset('/storage/myAssets/pastry2.jpg')}}" alt=""> {{-- Muffin Name --}}
                    </div>
                    <div class="pastryDetails col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="pastryNameHeading playFairDisplay">
                            Cooker Cake
                        </div>
                        <div class="ingredientSubHeading">
                            Ingredients
                        </div>
                        <br>
                        <div class="ingredientDetails text-left col-12">
                            <ul>
                                <li>Sugar</li>
                                <li>Liqueur</li>
                                <li>Eggs</li>
                                <li>Bananas</li>
                                <li>Cream Cheese</li>
                                <li>Whipped Cream</li>
                                <li>Cocoa</li>
                            </ul>
                        </div>
                        <div class="orderButton text-center">
                            <a href="" class="btn btn-light">Order Here</a>
                        </div>
                    </div>
                </div> {{-- Individual Pastry 2 End --}} {{-- Individual pastry 3 start --}}
                <div id="pastry3" class="pastry row" style="display: none;">
                    <div class="pastryImage col-xl-7 col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <img src="{{asset('/storage/myAssets/pastry3.jpg')}}" alt=""> {{-- Muffin Name --}}
                    </div>
                    <div class="pastryDetails col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="pastryNameHeading playFairDisplay">
                            Caramello
                        </div>
                        <div class="ingredientSubHeading">
                            Ingredients
                        </div>
                        <br>
                        <div class="ingredientDetails text-left col-12">
                            <ul>
                                <li>Butter</li>
                                <li>Sugar</li>
                                <li>Plain Flour</li>
                                <li>Eggs</li>
                                <li>Cream Cheese</li>
                                <li>Whipped Cream</li>
                                <li>Cocoa Powder</li>
                            </ul>
                        </div>
                        <div class="orderButton text-center">
                            <a href="" class="btn btn-light">Order Here</a>
                        </div>
                    </div>
                </div> {{-- Individual Pastry 3 End --}} {{-- Individual pastry 4 start --}}
                <div id="pastry4" class="pastry row" style="display: none;">
                    <div class="pastryImage col-xl-7 col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <img src="{{asset('/storage/myAssets/pastry4.jpg')}}" alt=""> {{-- Muffin Name --}}
                    </div>
                    <div class="pastryDetails col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="pastryNameHeading playFairDisplay">
                            Waffle cream
                        </div>
                        <div class="ingredientSubHeading">
                            Ingredients
                        </div>
                        <br>
                        <div class="ingredientDetails text-left col-12">
                            <ul>
                                <li>Sugar</li>
                                <li>Raspberry</li>
                                <li>Cup Milk</li>
                                <li>Eggs</li>
                                <li>Cream Cheese</li>
                                <li>Vanilla Extract</li>
                                <li>Coconut Milk</li>
                            </ul>
                        </div>
                        <div class="orderButton text-center">
                            <a href="" class="btn btn-light">Order Here</a>
                        </div>
                    </div>
                </div> {{-- Individual Pastry 4 End --}} {{-- Individual pastry 5 start --}}
                <div id="pastry5" class="pastry row" style="display: none;">
                    <div class="pastryImage col-xl-7 col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <img src="{{asset('/storage/myAssets/pastry5.jpg')}}" alt=""> {{-- Muffin Name --}}
                    </div>
                    <div class="pastryDetails col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="pastryNameHeading playFairDisplay">
                            Stracciatella
                        </div>
                        <div class="ingredientSubHeading">
                            Ingredients
                        </div>
                        <br>
                        <div class="ingredientDetails text-left col-12">
                            <ul>
                                <li>Coffee</li>
                                <li>Sugar</li>
                                <li>Liqueur</li>
                                <li>Eggs</li>
                                <li>Cream Cheese</li>
                                <li>Whipped Cream</li>
                                <li>Lady Fingers</li>
                            </ul>
                        </div>
                        <div class="orderButton text-center">
                            <a href="" class="btn btn-light">Order Here</a>
                        </div>
                    </div>
                </div> {{-- Individual Pastry 5 End --}} {{-- Individual pastry 6 start --}}
                <div id="pastry6" class="pastry row" style="display: none;">
                    <div class="pastryImage col-xl-7 col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <img src="{{asset('/storage/myAssets/pastry6.jpg')}}" alt=""> {{-- Muffin Name --}}
                    </div>
                    <div class="pastryDetails col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="pastryNameHeading playFairDisplay">
                            Strawberry
                        </div>
                        <div class="ingredientSubHeading">
                            Ingredients
                        </div>
                        <br>
                        <div class="ingredientDetails text-left col-12">
                            <ul>
                                <li>Lady Fingers</li>
                                <li>Coffee</li>
                                <li>Sugar</li>
                                <li>Liqueur</li>
                                <li>Eggs</li>
                                <li>Cream Cheese</li>
                                <li>Whipped Cream</li>
                            </ul>
                        </div>
                        <div class="orderButton text-center">
                            <a href="" class="btn btn-light">Order Here</a>
                        </div>
                    </div>
                </div> {{-- Individual Pastry 6 End --}}
            </div> {{-- right div end --}}
        </div> {{-- Pasteries Div End --}}
    </div> {{-- Signature Products End--}} {{-- user Reviews --}}
    <div id="userReviews" class="animateSection">
        <div class="heading text-center playFairDisplay">
            A word from our customers
        </div>
        <div class="gap"></div>
        <div id="slider">

            {{-- slide 1 Start --}}
            <div class="individualSlide">
                {{-- slideHeading --}}
                <div class="slideHeading playFairDisplay text-center">
                    Warm Feelings
                </div>
                {{-- slide detail --}}
                <div class="slideDetail text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nam quia, earum et voluptatum facilis, officia animi, enim
                    non adipisci quae aut autem rem corrupti possimus maxime sequi sapiente repellat!
                </div> {{-- slide detail end --}}
                <div class="border"></div>
            </div> {{-- slide 1 end --}} {{-- slide 2 Start --}}
            <div class="individualSlide">
                {{-- slideHeading --}}
                <div class="slideHeading playFairDisplay text-center">
                    Warm Feelings
                </div>
                {{-- slide detail --}}
                <div class="slideDetail text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nam quia, earum et voluptatum facilis, officia animi, enim
                    non adipisci quae aut autem rem corrupti possimus maxime sequi sapiente repellat!
                </div> {{-- slide detail end --}}
                <div class="border"></div>
            </div> {{-- slide 2 end --}} {{-- slide 3 Start --}}
            <div class="individualSlide">
                {{-- slideHeading --}}
                <div class="slideHeading playFairDisplay text-center">
                    Warm Feelings
                </div>
                {{-- slide detail --}}
                <div class="slideDetail text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nam quia, earum et voluptatum facilis, officia animi, enim
                    non adipisci quae aut autem rem corrupti possimus maxime sequi sapiente repellat!
                </div> {{-- slide detail end --}}
                <div class="border"></div>
            </div> {{-- slide 3 end --}} {{-- slide 4 Start --}}
            <div class="individualSlide">
                {{-- slideHeading --}}
                <div class="slideHeading playFairDisplay text-center">
                    Warm Feelings
                </div>
                {{-- slide detail --}}
                <div class="slideDetail text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nam quia, earum et voluptatum facilis, officia animi, enim
                    non adipisci quae aut autem rem corrupti possimus maxime sequi sapiente repellat!
                </div> {{-- slide detail end --}}
                <div class="border"></div>
            </div> {{-- slide 4 end --}} {{-- slide 5 Start --}}
            <div class="individualSlide">
                {{-- slideHeading --}}
                <div class="slideHeading playFairDisplay text-center">
                    Warm Feelings
                </div>
                {{-- slide detail --}}
                <div class="slideDetail text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nam quia, earum et voluptatum facilis, officia animi, enim
                    non adipisci quae aut autem rem corrupti possimus maxime sequi sapiente repellat!
                </div> {{-- slide detail end --}}
                <div class="border"></div>
            </div> {{-- slide 5 end --}} {{-- slide 6 Start --}}
            <div class="individualSlide">
                {{-- slideHeading --}}
                <div class="slideHeading playFairDisplay text-center">
                    Warm Feelings
                </div>
                {{-- slide detail --}}
                <div class="slideDetail text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nam quia, earum et voluptatum facilis, officia animi, enim
                    non adipisci quae aut autem rem corrupti possimus maxime sequi sapiente repellat!
                </div> {{-- slide detail end --}}
                <div class="border"></div>
            </div> {{-- slide 6 end --}} {{-- slide 7 Start --}}
            <div class="individualSlide">
                {{-- slideHeading --}}
                <div class="slideHeading playFairDisplay text-center">
                    Warm Feelings
                </div>
                {{-- slide detail --}}
                <div class="slideDetail text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nam quia, earum et voluptatum facilis, officia animi, enim
                    non adipisci quae aut autem rem corrupti possimus maxime sequi sapiente repellat!
                </div> {{-- slide detail end --}}
                <div class="border"></div>
            </div> {{-- slide 7 end --}} {{-- slide 8 Start --}}
            <div class="individualSlide">
                {{-- slideHeading --}}
                <div class="slideHeading playFairDisplay text-center">
                    Warm Feelings
                </div>
                {{-- slide detail --}}
                <div class="slideDetail text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nam quia, earum et voluptatum facilis, officia animi, enim
                    non adipisci quae aut autem rem corrupti possimus maxime sequi sapiente repellat!
                </div> {{-- slide detail end --}}
                <div class="border"></div>
            </div> {{-- slide 8 end --}}
        </div>{{-- Slider Div End --}}
    </div> {{-- User Reviews End --}} {{-- divider --}}
    <div class="divider"></div>
    {{-- Site Footer Start--}}
    <div id="siteFooter" class="joinWithDivider animateSection">
        {{-- foter image --}}
        <div id="siteFooterImage">
            <img src="{{asset('/storage/myAssets/bow.png')}}" class="img-responsive">
        </div>
        <div class="gap"></div>
        {{-- footer details Start--}}
        <div id="siteFooterDetails" class="row">
            {{-- div 1 Start--}}
            <div class="offset-xl-3 offset-lg-3"></div>
            <div class="col-4">
                {{-- Heading Start --}}
                <div class="heading playFairDisplay">
                    Treat yourself
                </div>
                {{-- Heading End --}} {{-- Sub Heading Start --}}
                <div class="subHeading nonitoSans">
                    PASTRY LOVE!
                </div>
                {{-- Sub Heading End --}} {{-- Details Start --}}
                <div class="details">
                    Every day we make freshly baked bread, rolls, fresh cakes and gluten free pastries.
                </div>
                {{-- Details End --}}
            </div> {{-- Div 1 end --}} {{-- div 2 Start--}}
            <div class="col-4">
                {{-- Heading Start --}}
                <div class="heading">
                    Pastry Love!
                </div>
                {{-- Heading End --}} {{-- Details Start --}}
                <div class="details">
                    123456789
                    <br> anamamer0@gmail.com
                    <br> Planet Earth
                </div>
                {{-- Details End --}}
            </div> {{-- Div 2 end --}}

        </div> {{-- footer details End--}}
    </div> {{-- Site Footer End --}}

</div> {{-- Wrapper End --}} @endsection @section('script')

<!-- Website Description Section -->
<div class="text-center" id="Website DescriptionFooter">
    <p>
        <b>built using</b>
        <ul style="list-style:none">
            <li>BootStrap4 FrameWork</li>
            <li>Jquery</li>
            <li>Animate Css</li>
        </ul>
        <b>
            <a href="https://github.com/Anum1212/portfolio.git">GitHub Link to code</a>
        </b>
        <br>
        <br>
        <hr>
        <br>
        <b>anamamer0@gmail.com</b>
    </p>
</div>

<script>
    $(document).ready(function () {
        $('#slider').bxSlider();



        // Animation Function
        $.fn.isInViewport = function () {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();
            return elementBottom > viewportTop &&
                elementTop < viewportBottom;
        };
        $(window).on('resize scroll', function () {
            $('.animateSection').each(function () {
                if ($(this).isInViewport()) {
                    $(this).addClass(
                        'animated fadeIn').css({
                        // animationDelay: '1s',
                        animationDuration: '2s',
                        animationIterationCount: '1'
                    });
                    $(this).find('.animateWholeObjectDiv').addClass(
                        'animated slideInLeft').css({
                        animationDelay: '1s',
                        animationDuration: '2s',
                        // animationIterationCount: '1'
                    });
                }
            });
        });

        $('.animateObject').hover(function () {
                $(this).toggleClass('animated pulse').css({
                    animationDuration: '2s'
                });
                $(this).find('p').css({
                    display: 'inline-block'
                });
            },
            function () {
                $(this).find('p').css({
                    display: 'none'
                })
            });

        $('.btn').click(function () {
            $('.pastry').hide();
            var divId = $(this).val();
            $('#pastry' + divId).toggle();
        });
    });

</script>
@endsection
