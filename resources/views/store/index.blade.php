<!DOCTYPE html>
@extends ('layouts.master')
<html>
<head>
    <title>Lakeland Computers</title>
</head>
<body>
@section('promo')

	<section id="promo">
        <div id="promo-details">
            <h1>Today's Deals</h1>
            <p>Checkout this section of<br />
             products at a discounted price.</p>
            <a href="#" class="default-btn">Shop Now</a>
        </div><!-- end promo-details -->
        {{ Html::image('img/promo.png', 'Promotional Ad')}}
    </section><!-- promo -->

@stop

@section('content')
<div id="products">
	<h2>New Products</h2>


    	@foreach($products as $product)
        <div class="product">
            <a href="/store/view/{{ $product->id }}">
            	{{ Html::image($product->image, $product->title, array('class'=>'feature', 'width'=>'240', 'height'=>'127')) }}
            </a>

            <h3><a href="/store/view/{{ $product->id }}">{{ $product->title }}</a></h3>

            <p>{{ $product->description }}</p>

            <p>
                {{ Form::open(array('url'=>'store/addtocart')) }}
                {{ Form::hidden('quantity', 1) }}
                {{ Form::hidden('id', $product->id) }}
                <button type="submit" class="cart-btn">
                    <span class="price">{{ $product->price }}</span> 
                    {{ Html::image('img/white-cart.gif', 'Add to Cart') }}
                    ADD TO CART
                </button>
                {{ Form::close() }}
            </p>
        </div>
        @endforeach
    </div><!-- end products -->

@stop