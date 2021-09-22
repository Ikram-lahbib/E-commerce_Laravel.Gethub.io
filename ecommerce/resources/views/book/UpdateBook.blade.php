
@extends('layouts.master')


@section('content')
<div class="banner"></div>
<section class="contact" >
    <div class="container">
        <h3 class="title-txt"><span>U</span>pdate Book</h3>
        <div class="contact-grids" style="width:1720px; height:797px; margin-left:210px;">
            <div class=" col-md-5 contact-form">
                <h4 class="heading">Update Book</h4>

                <form action="{{url('/updateBook/'.$book->id)}}" method="post" enctype="multipart/form-data">
                	<input type="hidden" name="_method" value="PUT">
                	     {{csrf_field()}}
                    <input type="file" placeholder="Image" name="image" value="{{$book->image}}" class="@if($errors->get('image')) has-error  @endif" />
                    @if($errors->get('image'))
                       <div class="alert alert-danger" role="alert">
     	                <ul>
     		                @foreach($errors->get('image') as $msg)
                                <li>{{$msg}}</li>
     		                @endforeach
     	                </ul>
                       </div>
                    @endif
                    <input type="text" placeholder="Book Name" name="name" value="{{$book->name}}"class="@if($errors->get('name')) has-error  @endif" />

                    @if($errors->get('name'))
                       <div class="alert alert-danger" role="alert">
     	                <ul>
     		                @foreach($errors->get('name') as $msg)
                                <li>{{$msg}}</li>
     		                @endforeach
     	                </ul>
                       </div>
                    @endif
                    <input type="text" placeholder="Book Writer" name="writer" value="{{$book->writer}}" class="@if($errors->get('writer')) has-error  @endif" />
                    @if($errors->get('writer'))
                       <div class="alert alert-danger" role="alert">
     	                <ul>
     		                @foreach($errors->get('writer') as $msg)
                                <li>{{$msg}}</li>
     		                @endforeach
     	                </ul>
                       </div>
                    @endif
                    <select name="category" style="margin: .5em 0;  padding: .7em 1em;font-size: .9em; width: 100%; background: transparent; border: 1px solid #fff; color: #fff;  letter-spacing: 2px;"class="@if($errors->get('writer')) has-error  @endif">
                       
                      @foreach($cats as $cat)
                        	 <option value="{{$cat->id}}">{{$cat->name}}</option>
                       @endforeach	
                   </select>
                   @if($errors->get('category'))
                       <div class="alert alert-danger" role="alert">
     	                <ul>
     		                @foreach($errors->get('category') as $msg)
                                <li>{{$msg}}</li>
     		                @endforeach
     	                </ul>
                       </div>
                    @endif
                    <input type="text" placeholder="Book Price" name="prix" value="{{$book->prix}}"class="@if($errors->get('prix')) has-error  @endif" />



                    @if($errors->get('prix'))
                       <div class="alert alert-danger" role="alert">
     	                <ul>
     		                @foreach($errors->get('prix') as $msg)
                                <li>{{$msg}}</li>
     		                @endforeach
     	                </ul>
                       </div>
                    @endif
                    <input type="text" placeholder="Book Stock" name="stock" value="{{$book->stock}}"class="@if($errors->get('stock')) has-error  @endif" />
                    @if($errors->get('stock'))
                       <div class="alert alert-danger" role="alert">
     	                <ul>
     		                @foreach($errors->get('stock') as $msg)
                                <li>{{$msg}}</li>
     		                @endforeach
     	                </ul>
                       </div>
                    @endif
                    <input type="date" placeholder="Book Date" name="date" value="{{$book->date}}" class="@if($errors->get('date')) has-error  @endif" />

                    @if($errors->get('date'))
                       <div class="alert alert-danger" role="alert">
     	                <ul>
     		                @foreach($errors->get('date') as $msg)
                                <li>{{$msg}}</li>
     		                @endforeach
     	                </ul>
                       </div>
                    @endif
                    <textarea placeholder="Summary" name="summary"class="@if($errors->get('summary')) has-error  @endif">{{$book->summary}}</textarea>
                    @if($errors->get('summary'))
                       <div class="alert alert-danger" role="alert">
     	                <ul>
     		                @foreach($errors->get('summary') as $msg)
                                <li>{{$msg}}</li>
     		                @endforeach
     	                </ul>
                       </div>
                    @endif
                    <div class="submit1">
                        <input type="submit" value="Update Book">
                    </div>
                </form>
            </div>
          </div>
      </div>
 </section>

@endsection