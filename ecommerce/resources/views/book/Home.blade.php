@extends('layouts.app')


@section('content')
<div class="slider" style="margin-top: 140px;">
    <div class="callbacks_container">
        <ul class="rslides" id="slider3">
            <li>
                <div class="slider-img1">
                    <div class="container">
                        <div class="slider_banner_info_w3ls">
                            <h4> Book & You  <span>Learn</span></h4>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="slider-img2">
                    <div class="container">
                        <div class="slider_banner_info_w3ls">
                            <h4>Book & You   <span>Learn</span></h4>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="slider-img3">
                    <div class="container">
                        <div class="slider_banner_info_w3ls">
                            <h4>Book & You  <span>Learn</span></h4>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</div>
<div class="clearfix"> </div>
<!--Category-->
<div class="w3-agile-services" style="margin-top:70px;">
    <div class="container">
        <h3 class="title-txt"><span>C</span>ategory</h3>
        <div class="agileits-services">
            <div class="services-right-grids">    
                @foreach($categories as $cat)
                <div class="col-sm-4 services-right-grid thumbnail team-w3agile">
                    <div class="se-top" style="height:340px; width:350px">
                        <div class="services-icon">
                            <img src="{{asset('storage/'.$cat->image)}}" style="width:100px;height:100px;">
                        </div>
                        <div class="services-icon-info">
                            <h5><a href="">{{ $cat->name}}</a></h5>
                            <p>{{ $cat->description}}</p>
                        </div>
                    </div>
                    <div class="team-info" style="width:350px">
                            <div class="w3ls-social-icons">
                                <a class="facebook" href=""><span class="fa fa-eye"></span></a>
                            </div>
                    </div>
                    </div>    
                    </div>           
                @endforeach
                

                </div>
                
                
                <div class="clearfix"> </div>
            </div>

        </div>
    </div>
</div>
<!-- /category -->
<!--Month'sbook-->
<script type="text/javascript" >
$(document).ready (function(){
    $('.multiple-items').slick({
        infinite: true,
          slidesToShow:4,
          slidesToScroll:4
    });
});
</script>
<div class="events-section">
    <div class="team">
        <div class="container">
            <h3 class="title-txt two"><span>B</span>ook Month's</h3>
            <div class="multiple-items">
            <div class="row team-row">
            @foreach($books as $book)
                    <div class="col-md-3 col-sm-6 thumbnail team-w3agile">
                        <img src="{{asset('storage/'.$book->image)}}" class="img-responsive" style="width:350px;height:370px;">
                        <div class="team-info">
                            <div class="caption">
                                <h4>{{$book->name}}</h4>
                                <p>{{$book->prix}}$</p>
                            </div>
                            <div class="w3ls-social-icons">
                                <a class="facebook" href="{{url('/showBook/'.$book->id)}}" ><span class="fa fa-eye"></span></a>
                            </div>
                        </div>
                    </div>
            @endforeach
            <div class="clearfix"> </div>
            </div>
            </div>
        </div>


    </div>
</div>
<!-- //bestbook -->
<!-- Testimonials -->
<div class="testimonials">
    <div class="container">
        <h3 class="title-txt"><span>B</span>est Book</h3>
        <div class="col-md-6 testimonials-main" style="width:960px;padding-left:100px;">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="inner-testimonials-w3ls">
                                
                                    <a asp-action="ShowBook" asp-route-id="1"><img src="{{asset('ass/images/cd.jpg')}}" alt=" " class="img-responsive" /></a>
                                    <div class="testimonial-info-wthree">
                                        <h5>Power of Hapits</h5>
                                        <span>writher name</span>
                                        <p class="para-w3ls">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis hendrerit lobortis elementum, Quis nostrum exercitationem
                                            ullam corporis suscipit laboriosam.
                                        </p>
                                    </div>
                            </div>
                        </li>
                        <li>
                            <div class="inner-testimonials-w3ls">

                                <a asp-action="ShowBook" asp-route-id="1"><img src="{{asset('ass/images/cd.jpg')}}" alt=" " class="img-responsive" /></a>
                                <div class="testimonial-info-wthree">
                                    <h5>Candid</h5>
                                    <span>Voltaire</span>
                                    <p class="para-w3ls">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis hendrerit lobortis elementum, Quis nostrum exercitationem
                                        ullam corporis suscipit laboriosam.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="inner-testimonials-w3ls">

                                <a asp-action="ShowBook" asp-route-id="1"><<img src="{{asset('ass/images/bm.jpg')}}" alt=" " class="img-responsive" /></a>
                                <div class="testimonial-info-wthree">
                                    <h5>Boite à Mervaille</h5>
                                    <span>Ahmed Sefrioui</span>
                                    <p class="para-w3ls">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis hendrerit lobortis elementum, Quis nostrum exercitationem
                                        ullam corporis suscipit laboriosam.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //Testimonials -->
<!--about-->
<div class="about">
    <div class="container">
        <div class="about-main">
            <div class="about-right">
                <h3 class="subheading-w3-agile">About Us</h3>
                <p class="para-w3-agileits">
                    Books play a significant role in our life.They say that When you open a book, you open a new world,I believe that everyone would agree with this statement as books have become inevitable to mankind.
                    For the majority of people, books are part of their everyday life,
                    A book is like a best friend who will never walk away from you.So our Web Site BookTime Offer for you a lot of the Book in different Category.
                </p>
                <!-- stats -->
                <div class="stats">
                    <div class="stats_inner">
                        <div class="col-md-6 col-sm-6 col-xs-6 stat-grids">
                            <p class="counter-agileits-w3layouts">100</p>
                            <div class="stats-text-wthree">
                                <h3>BOOK</h3>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 stat-grids">
                            <p class="counter-agileits-w3layouts">6</p>
                            <div class="stats-text-wthree">
                                <h3>CATYGORY</h3>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 stat-grids">
                            <p class="counter-agileits-w3layouts">100</p>
                            <div class="stats-text-wthree">
                                <h3> PRICE</h3>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 stat-grids">
                            <p class="counter-agileits-w3layouts">45</p>
                            <div class="stats-text-wthree">
                                <h3>SRVICES</h3>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <!-- //stats -->

            </div>
        </div>

    </div>
</div>


@endsection