@extends('Frontend.master')
@section('content')
    @section('site-title')
    Admin | SHOP 
    @endsection
    @section('page-main-title')
    Products
    @endsection

    <main>
        <main class="shop">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-9">
                            <div class="row">
                                @foreach ($newproducts as $item)
                                    
                                    <div class="col-4">
                                        <figure>
                                            <div class="thumbnail">
                                                <div class="status">
                                                    Promotion
                                                </div>
                                                <a href="/productdetail/{{ $item->id }}">
                                                    <img src="{{ url('backend/Images/'.$item->thumbnail) }}" alt="" width="400px" height="450px">
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
                                @endforeach
                                
                                
                                <div class="col-12">
                                    <ul class="pagination">
                                        @if ($cate_id)
                                            @for ($i = 1; $i <= $total_pages; $i++)
                                                <li>
                                                    <a href="/shop?cate={{ $cate_id }}&page={{ $i }}">{{ $i }}</a>
                                                </li>
                                            @endfor
                                        @elseif($price)
                                            @for ($i = 1; $i <= $total_pages; $i++)
                                                <li>
                                                    <a href="/shop?price={{ $price }}&page={{ $i }}">{{ $i }}</a>
                                                </li>
                                            @endfor
                                        @elseif($promotion)
                                            @for ($i = 1; $i <= $total_pages; $i++)
                                                <li>
                                                    <a href="/shop?promotion={{ $promotion }}&page={{ $i }}">{{ $i }}</a>
                                                </li>
                                            @endfor
                                        
                                        @else
                                            @for ($i = 1; $i <= $total_pages; $i++)
                                                <li>
                                                    <a href="/shop?page={{ $i }}">{{ $i }}</a>
                                                </li>
                                            @endfor
                                        @endif
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 filter">
                            <h4 class="title">Category</h4>
                            <ul>
                                <li>
                                    <a href="/shop">ALL</a>
                                </li>
                                @foreach ($category as $cate)
                                    <li>
                                        <a href="/shop?cate={{ $cate->id }}">{{ $cate->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                            
                            <h4 class="title mt-4">Price</h4>
                            <div class="block-price mt-4">
                                <a href="/shop?price=max">High</a>
                                <a href="/shop?price=min">Low</a>
                            </div>
        
                            <h4 class="title mt-4">Promotion</h4>
                            <div class="block-price mt-4">
                                <a href="/shop?promotion=true">Promotion Product</a>
                            </div>
        
                        </div>
                    </div>
                </div>
            </section>
        
        </main>
    </main>
@endsection