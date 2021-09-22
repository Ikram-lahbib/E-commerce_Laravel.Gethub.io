@extends('layouts.master')


@section('content')
<div class="banner"></div>

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
@endsection                