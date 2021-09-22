
@extends('layouts.app')
@section('content')
<div class="testimonials">
    <div class="container">
        <h3 class="title-txt"><span>Y</span>our Book</h3>
        <div class="col-md-6 testimonials-main" style="width:960px;padding-left:100px;">
            <div class="flexslider">
                <div class="inner-testimonials-w3ls">
                    <img src="{{asset('storage/'.$book->image)}}"class="img-responsive" />
                    <div class="testimonial-info-wthree" style="padding-top:20px;">
                        <h5>Book Name </h5><samp>{{$book->name}}</samp>
                        <h5>Writer Name </h5><span>{{$book->writer}}</span>
                        <h5>Summary </h5>
                        <p class="para-w3ls">
                            {{$book->summary}}
                        </p>
                        <h5>Price</h5><span>{{$book->prix}}$</span>
                        <h5>Catygory</h5> <span>{{$cat->name}}</span>
                        <h5>Stock</h5> <span>{{$book->stock}}</span>
                        <button style="width:200px;height:40px;border:10px;color:white;background-color:#93c83f;">
                            <a href="{{url('/addToCart/'.$book->id)}}" style="color:white;font-family:sans-serif;font-size:20px;"> Add To Cart</a>
                        </button>                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection