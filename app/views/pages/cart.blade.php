@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-12 col-md-12">
        <table class="table">
            <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th class="text-center">Price</th>
                <th class="text-center">Total</th>
                <th> </th>
            </tr>
            </thead>
            <tbody>
            @if (!is_null($cart))
            @foreach ($cart as $cart_item)
            <tr>
                <td class="col-md-6">
                    <div class="media">
                        <a class="thumbnail pull-left" href="#"> 
                            <img class="media-object" src="{{ $cart_item->image }}" style="width: 72px; height: 72px;">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">{{ $cart_item->name }}</a></h4>
                            <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                            <span>Status: </span><span class="text-warning"><strong>Leaves warehouse in 2 - 3
                                    weeks</strong></span>
                        </div>
                    </div>
                </td>
                <td class="col-md-1" style="text-align: center">
                    <input type="text" class="form-control" value="{{$cart_item->quantity}}">
                </td>
                <td class="col-md-1 text-center"><strong>&euro;{{ $cart_item->price }}</strong></td>
                <td class="col-md-1 text-center"><strong>&euro;{{ $cart_item->price * $cart_item->quantity }}</strong></td>
                <td class="col-md-1">
                    <button type="button" class="btn btn-danger">
                        <span class="glyphicon glyphicon-remove"></span> Remove
                    </button>
                </td>
            </tr>
            @endforeach
            @endif
            <tr>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td><h5>Subtotal</h5></td>
                <td class="text-right"><h5><strong>&euro;{{ Cart::totalWithoutTax() }}</strong></h5></td>
            </tr>
            <tr>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td><h5>Tax</h5></td>
                <td class="text-right"><h5><strong>&euro;{{ Cart::tax() }}</strong></h5></td>
            </tr>
            <tr>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td><h3>Total</h3></td>
                <td class="text-right"><h3><strong>&euro;{{ Cart::total() }}</strong></h3></td>
            </tr>
            <tr>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                    </button>
                </td>
                <td>
                    <button type="button" class="btn btn-success">
                        Checkout <span class="glyphicon glyphicon-play"></span>
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

@stop