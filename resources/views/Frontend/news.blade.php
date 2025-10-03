@extends('Frontend.master')
@section('content')
    @section('site-title')
    Admin | NEWS 
    @endsection
    @section('page-main-title')
    NEWS
    @endsection

<main class="shop news-blog">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="main-title">
                        NEWS BLOG
                    </h3>
                </div>
            </div>
            <div class="row">
                @foreach ($data as $item)
                    <div class="col-3">
                        <figure>
                            <div class="thumbnail">
                                <a href="/news_detail/{{ $item->id }}">
                                    <img src="{{ url('backend/Images/'.$item->thumbnail) }}" alt="" width="156px" height="156px">
                                </a>
                            </div>
                            <div class="detail">
                                <h5 class="title">{{ $item->title }}</h5>
                            </div>
                        </figure>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection


