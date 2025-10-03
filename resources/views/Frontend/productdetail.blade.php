@extends('Frontend.master')
@section('content')
    @section('site-title')
    Admin | Product 
    @endsection
    @section('page-main-title')
    Products
    @endsection

<main class="product-detail">

    <section class="review">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="thumbnail">
                        <img src="{{url('backend/Images/'.$productdetail->thumbnail)  }}" alt="" width="450px" height="660px">
                    </div>
                </div>
                <div class="col-7">
                    <div class="detail">
                        <div class="price-list">
                            <div class="price d-none">US {{ $productdetail->regular_price }}</div>
                            <div class="regular-price"><strike> US {{ $productdetail->regular_price }}</strike></div>
                            <div class="sale-price">US {{ $productdetail->sale_price }}</div>
                        </div>
                        <h5 class="title">{{ $productdetail->name }}</h5>
                        <div class="group-size">
                            <span class="title">Color Available</span>
                            <div class="group">
                                {{ $productdetail->color }}
                            </div>
                        </div>
                        <div class="group-size">
                            <span class="title">Size Available</span>
                            <div class="group">
                                {{ $productdetail->size }}
                            </div>
                        </div>
                        <div class="group-size">
                            <span class="title">Description</span>
                            <div class="description">
                                {{ $productdetail->description }}
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="main-title">
                        RELATED PRODUCTS
                    </h3>
                </div>
            </div>
            <div class="row">
                @forelse ($related as $item)
                    <div class="col-3">
                        <figure>
                            <div class="thumbnail">
                                <a href="/productdetail/{{ $item->id }}">
                                    <img src="{{ url('backend/Images/'.$item->thumbnail) }}" alt="" width="150px" height="424px">
                                </a>
                            </div>
                            <div class="detail">
                                <div class="price-list">
                                    <div class="price d-none">US {{ $item->regular_price }}</div>
                                    <div class="regular-price "><strike> US {{ $item->regular_price }}</strike></div>
                                    <div class="sale-price ">US {{ $item->sale_price }}</div>
                                </div>
                                <h5 class="title">{{ $item->name }}</h5>
                            </div>
                        </figure>
                    </div>
                @empty
                    <h1>Not Related</h1>
                @endforelse
            </div>
        </div>
    </section>

</main>

@endsection