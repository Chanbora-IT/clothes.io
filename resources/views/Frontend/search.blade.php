@extends('Frontend.master')
@section('content')
    @section('site-title')
        Admin | SEARCH
    @endsection
    @section('page-main-title')
        Products
    @endsection
    <main class="shop">

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title">
                            Product Result
                        </h3>
                    </div>
                </div>
                <div class="row">
                    @forelse ($search as $item)
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
                    <h1>Don't have name Products</h1>
                @endforelse
                    
                    
                </div>
            </div>
    
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12">
                        <h3 class="main-title">
                            News Result
                        </h3>
                    </div>
                </div>
                <div class="row">
                    @foreach ($NewsSearch as $value)
                        
                        <div class="col-3">
                            <figure>
                                <div class="thumbnail">
                                    <a href="/news_detail/{{ $value->id }}">
                                        <img src="{{ url('backend/Images/'.$value->thumbnail) }}" alt="" width="156px" height="156px">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h5 class="title">{{ $value->title }}</h5>
                                </div>
                            </figure>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    
    </main>


@endsection