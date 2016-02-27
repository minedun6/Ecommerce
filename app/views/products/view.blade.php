@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <a href="#" class="thumbnail">
            {{ HTML::image($product->img_url, $product->title, ['class' => 'img-responsive']) }}
        </a>
    </div>
</div>

@stop