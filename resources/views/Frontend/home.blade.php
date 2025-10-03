@extends('Frontend.master')
@section('content')
    @section('site-title')
    Admin | Home page
    @endsection
    @section('page-main-title')
    Home
    @endsection


<main class="home">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="main-title">
                        NEW PRODUCTS
                    </h3>
                </div>
            </div>
            <div class="row">
                @forelse ($newproducts as $item)
                    <div class="col-3">
                        <figure>
                            <div class="thumbnail">
                                @if ($item->discount != 0)
                                    <div class="status">
                                        Promotion
                                    </div>
                                @endif
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
                    <h1>No new Products</h1>
                @endforelse
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="main-title">
                        PROMOTION PRODUCTS
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    @forelse ($promotion as $item)
                        <div class="col-3">
                            <figure>
                                <div class="thumbnail">
                                    @if ($item->discount != 0)
                                        <div class="status">
                                            Promotion
                                        </div>
                                    @endif
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
                        <h1>No Promotion</h1>
                    @endforelse
                </div>
            </div>
        </div>
    </section>  

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="main-title">
                        POPULAR PRODUCTS
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    @forelse ($popular as $item)
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
                        <h1>No Promotion</h1>
                    @endforelse
                </div>
                
            </div>
        </div>
    </section>

</main> 
@endsection