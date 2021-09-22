@extends('layouts.master')


@section('content')
<div class="w3-agile-services" style="margin-top:70px;">
    <div class="container">
        <h3 class="title-txt"><span>C</span>ategory</h3>
        <div class="agileits-services">
            <div class="services-right-grids">
            @foreach($cats as $cat)
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
                            	<form action="{{url('deleteCategory/'.$cat->id)}}" method="post">
                            		{{csrf_field()}}
                                   {{method_field('DELETE')}}
                                <button type="submit" class="facebook" ><span class="fa fa-trash"></span>
                                </button>
                                </form>
                            </div>
                    </div>
                    </div>
                </div>
               
                @endforeach
                <div class="clearfix"> </div>
            </div>

        </div>
    </div>
</div>




@endsection