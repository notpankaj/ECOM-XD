@extends('layouts.app')


@section('content')
    <main class="product-container">
        <!-- product -->
        @foreach ($products as $product)
            <section class="product-item">
                <img class="product-img" src="{{ $product->image }}" />
                <span class="product-category">{{ $product->category }}</span>
                <p class="product-title" width="80px" style="text-overflow: ellipsis;">

                    @php
                        if (strlen($product->title) < 20) {
                            echo $product->title;
                        } else {
                            echo substr($product->title, 0, 18) . '...';
                        }
                    @endphp
                </p>
                <div class=" product-action">
                    <span class="sale-price">$ {{ $product->price }} <del class="price">$ {{ $product->price }}
                        </del></span>
                    <form action="/add-to-cart" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" class="cart-btn"><i class="add-icon">+ Add</i></button>
                    </form>
                </div>
            </section>
        @endforeach
    </main>
@endsection
