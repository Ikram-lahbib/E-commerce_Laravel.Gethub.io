@extends('layouts.master')


@section('content')
<div class="banner"></div>
<!-- product right -->
<!-- gallery -->
<div class="gallery" style="">
    <div class="container">
        <h3 class="title-txt"><span>A</span>ll Book</h3>
        <div class="container" style="width:200px;height:160px;position:absolute;">
            <h2 style="text-align:left;color:#040a2e;font-size:30px;">Filter By</h2><br />
            <ul class="list-group" style="width:250px; font-size:20px;">
                <li class="list-group-item active" style="font-size:25px;background-color:yellowgreen;border-color:yellowgreen;">Category</li>
                <li class="list-group-item" style="font-size:20px;color:#0b102b;"><a href="{{url('/getBook')}}">All</a></li>
                @foreach($cats as $cat)
                <li class="list-group-item" style="font-size:20px;color:#0b102b;"><a href="{{url('/')}}">{{$cat->name}}</a></li>
                @endforeach
                
            </ul>
            <ul class="list-group" style="width:250px; font-size:25px;">
                <li class="list-group-item active" style="font-size:20px;background-color:yellowgreen;border-color:yellowgreen;">Price</li>
                <li class="list-group-item" style="font-size:20px;color:#0b102b;"><a href="">Price UP</a></li>
                <li class="list-group-item" style="font-size:20px;color:#0b102b;"><a href="">Price Down</a></li>
            </ul>
        </div>

        <div class="container" style="margin-left:350px;width:1000px;">
            @foreach($books as $book)
                <div class="gallery_gds">
                    <div class="col-md-3 col-sm-6 thumbnail team-w3agile" style="margin-right: 10px;margin-bottom:10px;">
                        <img src="{{asset('storage/'.$book->image)}}" class="img-responsive" alt="" style="width:400px;height:300px;">
                        <div class="team-info">
                            <div class="caption">
                                <h4>{{$book->name}}</h4>
                               <a href="{{'/editBook/'.$book->id}}" style="color:#93c83f;">Update</a>
                            </div>
                            <form action="{{url('/deleteBook/'.$book->id)}}" method="post">
                            	   {{csrf_field()}}
                                   {{method_field('DELETE')}}
                            <div class="w3ls-social-icons">
                                <button type="submit" class="facebook"><span class="fa fa-trash"></span></button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                @endforeach
            <div class="clearfix"> </div>



        </div>
    </div>
</div>
@endsection