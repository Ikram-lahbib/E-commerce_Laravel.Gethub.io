@extends('layouts.master')


@section('content')

<div class="banner"></div>
<section class="contact" >
    <div class="container">
        <h3 class="title-txt"><span>A</span>dd Category</h3>
        <div class="contact-grids" style="width:1720px; height:720px; margin-left:240px;">
            <div class=" col-md-5 contact-form">
                <h4 class="heading">New Category</h4>
                <form action="{{url('/addCategory')}}" method="post" enctype="multipart/form-data">
                	<!-- generer token (securiser le formulaire)-->
 				       {{csrf_field()}}
 				    <!--end token -->
                    <input type="file" placeholder="Image" name="image"/>
                    <input type="text" placeholder="Category Name" name="name" class="@if($errors->get('name')) has-error  @endif" value="{{old('name')}}"/>
                    @if($errors->get('name'))
                       <div class="alert alert-danger" role="alert">
     	                <ul>
     		                @foreach($errors->get('name') as $msg)
                                <li>{{$msg}}</li>
     		                @endforeach
     	                </ul>
                       </div>
                    @endif
                    <textarea placeholder="Description" name="description" class="@if($errors->get('description')) has-error  @endif">{{old('description')}}</textarea>
                    @if($errors->get('description'))
                     <div class="alert alert-danger" role="alert">
     	                <ul>
     		                @foreach($errors->get('description') as $msg)
                                <li>{{$msg}}</li>
     		                @endforeach
     	                </ul>
     	            </div>
                       
                    @endif
                    <div class="submit1">
                        <input type="submit" value="Add Category">
                    </div>
                </form>
            </div>
      </div>
      </div>
 </section>


@endsection