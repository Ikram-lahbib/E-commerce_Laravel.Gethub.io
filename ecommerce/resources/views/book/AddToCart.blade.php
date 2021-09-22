@extends('layouts.app')



@section('content')


<div class="banner"></div>
<div class="container">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%"></th>
            </tr>
        </thead>
        @foreach($carts as $cart)
        <tbody>
             <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-2 hidden-xs"><img src="{{asset('storage/'.$cart->book_image)}}"class="img-responsive" /></div>
                            <div class="col-sm-10">
                                <h4 class="nomargin">{{$cart->book_name}}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{$cart->book_prix}}</td>
                    <td data-th="Quantity">
                        <input type="number" name="Qty" class="form-control text-center" value="1">
                    </td>
                    <td data-th="Subtotal" class="text-center">{{$cart->book_prix}}</td>
                    <td class="actions" data-th="">
                    	<form action="{{url('/deleteFromCart/'.$cart->id)}}" method="post">
                    		{{csrf_field()}}
                            {{method_field('DELETE')}}
                        <a href="RefreshCart" class="btn btn-info btn-sm" ><i class="fa fa-refresh"></i></a>
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
                </tr>
        </tbody>
         @endforeach
        <tfoot>
            <tr class="visible-xs">
                <td class="text-center"><strong>Total 1.99</strong></td>
            </tr>
            <tr>
                <td><a href="{{url('/bookShop')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>Total   DH</strong></td>
                <td><a href="PayBook.jsp" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
            </tr>
        </tfoot>
    </table>
</div>
@endsection