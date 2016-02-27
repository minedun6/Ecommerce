@extends('layouts.master')

@section('content')
<h2 class="title-header">List of Products</h2>
@foreach (array_chunk($products->all(),4) as $row)
<div class="item">
    <div class="row">
        @foreach ($row as $product)
        <div class="col-sm-3">
            <div class="col-item">
                <div class="photo">
                    <a href="{{ URL::route('product.view', $product->slug) }}">
                        {{ HTML::image($product->img_url, $product->title, ['class' => 'img-responsive']) }}
                    </a>
                </div>
                <div class="info">
                    <div class="row">
                        <div class="price col-md-12">
                            <h5>{{ $product->title }}</h5>
                            <h5 class="price-text-color">&dollar;{{ $product->price }}</h5>
                        </div>
                    </div>
                    <div class="separator clear-left">
                        {{ Form::open(['route' => 'product.add', 'method' => 'post']) }}
                        {{ Form::hidden('quantity', 1) }}
                        {{ Form::hidden('id', $product->id) }}
                        <p class="btn-add">
                            <i class="fa fa-shopping-cart"></i>
                            <button type="submit" class="btn-link hidden-sm">Add to Cart</button>
                        </p>
                        {{ Form::close() }}

                        <p class="btn-details">
                            <i class="price-text-color fa fa-star"></i>
                            <i class="price-text-color fa fa-star"></i>
                            <i class="price-text-color fa fa-star"></i>
                            <i class="price-text-color fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </p>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<br/>
@endforeach
@stop