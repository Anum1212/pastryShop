@extends('layouts.landingPage') @section('head') @endsection @section('style')
@endsection @section('body') 
<div id="wrapper">
    {{-- Wrapper Start --}}
    @include('includes.landing') 
    {{-- Divider --}}
    <div class="divider"></div>

    {{-- About Us start --}}
    <div id="aboutUs" class="joinWithDivider text-center animateSection">

        {{-- Gap --}}
        <div class="gap"></div>

        {{-- Heading Div Start--}}
        <div id="aboutUsHeadingDiv">
            {{-- Heading Start--}}
            <div id="aboutUsHeading" class="playFairDisplay">
                Pastry Love!
            </div> {{-- Heading End --}} {{-- Sub Heading Start --}}
            <div id="aboutUsSubHeading">
                BOULANGERIE & PATTISERIE
            </div> {{-- Sub Heading End --}}
        </div> {{-- Heading Div End --}} {{-- Detail Div Start --}}
        <div id="aboutUsDetailDiv" class="mx-auto col-md-6">
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
                <div class="bread animateObject col-lg-4 col-md-6">
                    <img src="{{asset('/storage/myAssets/bread1.png')}}" alt="">
                    <p class="breadName">SWEET PEACH BREAD</p>
                    {{-- Muffin Price --}}
                    <span class="playFairDisplay" style="color:brown; font-size: 1.6em"><b>Rs</b>100</span>
                        <div class="orderButton marginBotttom">
                            <a href="{{ route('cart.add', ['productId'=>'b1', 'productName'=>'Sweet Peach Bread', 'productPrice'=>'100']) }}" class="btn btn-secondary">Order Here</a>
                        </div>
                </div>{{-- Individual Bread 1 End--}} {{-- Individual Bread 2 Start--}}
                <div class="bread animateObject col-lg-4 col-md-6">
                    <img src="{{asset('/storage/myAssets/bread2.png')}}" alt="">
                    <p class="breadName">SWEET ALMOND BREAD</p>
                    {{-- Muffin Price --}}
                    <span class="playFairDisplay" style="color:brown; font-size: 1.6em"><b>Rs</b>150</span>
                        <div class="orderButton marginBotttom">
                            <a href="{{ route('cart.add', ['productId'=>'b2', 'productName'=>'Sweet Almond Bread', 'productPrice'=>'150']) }}" class="btn btn-secondary">Order Here</a>
                        </div>
                </div>{{-- Individual Bread 2 End--}} {{-- Individual Bread 3 Start--}}
                <div class="bread animateObject col-lg-4 col-md-6">
                    <img src="{{asset('/storage/myAssets/bread3.png')}}" alt="">
                    <p class="breadName">CHOCO COOKIE BREAD</p>
                    {{-- Muffin Price --}}
                    <span class="playFairDisplay" style="color:brown; font-size: 1.6em"><b>Rs</b>200</span>
                        <div class="orderButton marginBotttom">
                            <a href="{{ route('cart.add', ['productId'=>'b3', 'productName'=>'Choco Cookie Bread', 'productPrice'=>'200']) }}" class="btn btn-secondary">Order Here</a>
                        </div>
                </div>{{-- Individual Bread 3 End--}}

            </div> {{-- animate whole object Div End--}}
        </div> {{-- Breads Div End--}} {{-- Muffins Div Start --}}
        <div id="muffins" class="text-center animateSection">
            {{-- animate whole object div start --}}
            <div class="row animateWholeObjectDiv">
                {{-- Individual Muffin 1 Start--}}
                <div class="muffin animateObject col-lg-3 col-sm-6 col-xs-12">
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
                    {{-- Muffin Price --}}
                    <span class="playFairDisplay" style="color:brown; font-size: 1.6em"><b>Rs</b>100</span>
                    {{-- Muffin Order Button --}}
                    <div class="orderButton">
                        <a href="{{ route('cart.add', ['productId'=>'m1', 'productName'=>'Cherry Muffin', 'productPrice'=>'100']) }}" class="btn btn-light">Order Here</a>
                    </div>
                </div>{{-- Individual Muffin 1 End --}} {{-- Individual Muffin 2 Start--}}
                <div class="muffin animateObject col-lg-3 col-sm-6 col-xs-12">
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
                    {{-- Muffin Price --}}
                    <span class="playFairDisplay" style="color:brown; font-size: 1.6em"><b>Rs</b>150</span>
                    {{-- Muffin Order Button --}}
                    <div class="orderButton">
                        <a href="{{ route('cart.add', ['productId'=>'m2', 'productName'=>'Almond Muffin', 'productPrice'=>'150']) }}" class="btn btn-light">Order Here</a>
                    </div>
                </div>{{-- Individual Muffin 2 End --}} {{-- Individual Muffin 3 Start--}}
                <div class="muffin animateObject col-lg-3 col-sm-6 col-xs-12">
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
                    {{-- Muffin Price --}}
                    <span class="playFairDisplay" style="color:brown; font-size: 1.6em"><b>Rs</b>200</span>
                    {{-- Muffin Order Button --}}
                    <div class="orderButton">
                        <a href="{{ route('cart.add', ['productId'=>'m3', 'productName'=>'Choco Muffin', 'productPrice'=>'200']) }}" class="btn btn-light">Order Here</a>
                    </div>
                </div>{{-- Individual Muffin 3 End --}} {{-- Individual Muffin 4 Start--}}
                <div class="muffin animateObject col-lg-3 col-sm-6 col-xs-12">
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
                    {{-- Muffin Price --}}
                    <span class="playFairDisplay" style="color:brown; font-size: 1.6em"><b>Rs</b>250</span>
                    {{-- Muffin Order Button --}}
                    <div class="orderButton">
                        <a href="{{ route('cart.add', ['productId'=>'m4', 'productName'=>'Peach Muffin', 'productPrice'=>'250']) }}" class="btn btn-light">Order Here</a>
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
                    <div class="pastryImage col-sm-7 col-xs-12">
                        <img src="{{asset('/storage/myAssets/pastry1.jpg')}}" alt=""> {{-- Muffin Name --}}
                    </div>
                    <div class="pastryDetails col-sm-3 col-xs-12">
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
                        <span class="playFairDisplay" style="color:brown; font-size: 1.6em"><b>Rs</b>100</span>
                        <div class="orderButton text-center">
                            <a href="{{ route('cart.add', ['productId'=>'p1', 'productName'=>'Tiramisu', 'productPrice'=>'100']) }}" class="btn btn-light">Order Here</a>
                        </div>
                    </div>
                </div> {{-- Individual Pastry 1 End --}} {{-- Individual pastry 2 start --}}
                <div id="pastry2" class="pastry row" style="display: none;">
                    <div class="pastryImage col-sm-7 col-xs-12">
                        <img src="{{asset('/storage/myAssets/pastry2.jpg')}}" alt=""> {{-- Muffin Name --}}
                    </div>
                    <div class="pastryDetails col-sm-3 col-xs-12">
                        <div class="pastryNameHeading playFairDisplay">
                            Cooker Cake <span>
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
                        <span class="playFairDisplay" style="color:brown; font-size: 1.6em"><b>Rs</b>120</span>
                        <div class="orderButton text-center">
                            <a href="{{ route('cart.add', ['productId'=>'p2', 'productName'=>'Cooker Cake', 'productPrice'=>'120']) }}" class="btn btn-light">Order Here</a>
                        </div>
                    </div>
                </div> {{-- Individual Pastry 2 End --}} {{-- Individual pastry 3 start --}}
                <div id="pastry3" class="pastry row" style="display: none;">
                    <div class="pastryImage col-sm-7 col-xs-12">
                        <img src="{{asset('/storage/myAssets/pastry3.jpg')}}" alt=""> {{-- Muffin Name --}}
                    </div>
                    <div class="pastryDetails col-sm-3 col-xs-12">
                        <div class="pastryNameHeading playFairDisplay">
                            Caramello <span>
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
                        <span class="playFairDisplay" style="color:brown; font-size: 1.6em"><b>Rs</b>140</span>
                        <div class="orderButton text-center">
                            <a href="{{ route('cart.add', ['productId'=>'p3', 'productName'=>'Caramello', 'productPrice'=>'140']) }}" class="btn btn-light">Order Here</a>
                        </div>
                    </div>
                </div> {{-- Individual Pastry 3 End --}} {{-- Individual pastry 4 start --}}
                <div id="pastry4" class="pastry row" style="display: none;">
                    <div class="pastryImage col-sm-7 col-xs-12">
                        <img src="{{asset('/storage/myAssets/pastry4.jpg')}}" alt=""> {{-- Muffin Name --}}
                    </div>
                    <div class="pastryDetails col-sm-3 col-xs-12">
                        <div class="pastryNameHeading playFairDisplay">
                            Waffle cream <span>
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
                        <span class="playFairDisplay" style="color:brown; font-size: 1.6em"><b>Rs</b>160</span>
                        <div class="orderButton text-center">
                            <a href="{{ route('cart.add', ['productId'=>'p4', 'productName'=>'Waffle cream', 'productPrice'=>'160']) }}" class="btn btn-light">Order Here</a>
                        </div>
                    </div>
                </div> {{-- Individual Pastry 4 End --}} {{-- Individual pastry 5 start --}}
                <div id="pastry5" class="pastry row" style="display: none;">
                    <div class="pastryImage col-sm-7 col-xs-12">
                        <img src="{{asset('/storage/myAssets/pastry5.jpg')}}" alt=""> {{-- Muffin Name --}}
                    </div>
                    <div class="pastryDetails col-sm-3 col-xs-12">
                        <div class="pastryNameHeading playFairDisplay">
                            Stracciatella <span>
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
                        <span class="playFairDisplay" style="color:brown; font-size: 1.6em"><b>Rs</b>180</span>
                        <div class="orderButton text-center">
                            <a href="{{ route('cart.add', ['productId'=>'p5', 'productName'=>'Stracciatella', 'productPrice'=>'180']) }}" class="btn btn-light">Order Here</a>
                        </div>
                    </div>
                </div> {{-- Individual Pastry 5 End --}} {{-- Individual pastry 6 start --}}
                <div id="pastry6" class="pastry row" style="display: none;">
                    <div class="pastryImage col-sm-7 col-xs-12">
                        <img src="{{asset('/storage/myAssets/pastry6.jpg')}}" alt=""> {{-- Muffin Name --}}
                    </div>
                    <div class="pastryDetails col-sm-3 col-xs-12">
                        <div class="pastryNameHeading playFairDisplay">
                            Strawberry <span>
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
                        <span class="playFairDisplay" style="color:brown; font-size: 1.6em"><b>Rs</b>200</span>
                        <div class="orderButton text-center">
                            <a href="{{ route('cart.add', ['productId'=>'p6', 'productName'=>'Strawberry', 'productPrice'=>'200']) }}" class="btn btn-light">Order Here</a>
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
            <div class="offset-sm-3 col">
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
            <div class="col">
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

<footer>
        <div class="container">
          <b> get in touch</b>
          <br>
          <a href="mailto:anamamer0@gmail.com" class="my-email">Anum Amir(anamamer0@gmail.com)</a>
          <br>
          <a href="https://github.com/Anum1212/pastryShop" class="my-project-code">Source Code</a>
          <br>
          <a href="http://aua.net.pk" class="my-other-projects">Other Projects</a>
        </div>
      </footer>
</div> {{-- Wrapper End --}} @endsection @section('script')





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
                        animationDuration: '2s',
                        animationIterationCount: '1'
                    });
                    $(this).find('.animateWholeObjectDiv').addClass(
                        'animated slideInLeft').css({
                        animationDelay: '1s',
                        animationDuration: '2s',
                    });
                }
            });
        });

        $('.animateObject').hover(function () {
            $(this).toggleClass('animated pulse').css({
                animationDuration: '2s'
            });
        });

        $('.btn').click(function () {
            $('.pastry').hide();
            var divId = $(this).val();
            $('#pastry' + divId).toggle();
        });
    });

</script>
@endsection
