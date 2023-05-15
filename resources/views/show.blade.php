@extends('layout')
@section('content')
    @include('partials._nav')
    <main>
        <x-flash-message />
        <div class="container-xxl my-4">
            <div id="gridShow">
                <div class="card cardShowImage">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ $post->images ? asset('storage/' . $post->images) : asset('/images/imageCap.jpg') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('/images/imageCap.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('/images/imageCap.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <!-- <div class="card cardShowImage">
                                                                                                                                                                                                                                                                <img src="/images/imageCap.jpg" class="card-img-top" alt="...">
                                                                                                                                                                                                                                                            </div> -->
                <div class="card cardShowTitle">
                    <div class="card-header">
                        <div class="showPageTitlePost w-100">{{ $post->title }}</div>
                    </div>
                    <div class="card-body">
                        <div class="card-body-section">
                            <h5 class="card-title mb-0 ">Rp {{ $post->price }}</h5>

                        </div>
                        <div class="card-body-section">
                            <span class="material-symbols-rounded me-2 ">
                                location_on
                            </span>
                            <p class="card-text text-muted">{{ $post->location }}</p>
                        </div>
                        <div class="card-body-section">
                            <p class="card-text text-muted fst-italic">Diposting pada : {{ $post->created_at }} WIB</p>
                        </div>
                    </div>
                </div>
                <div class="cardShowSeller">
                    <div class=" card ">
                        <div class="card-body">
                            <a href="/users/{{ $user->id }}/manage">
                                <h5 class="card-title">{{ $user->name }}</h5>
                            </a>

                        </div>
                        <div class="card-footer">

                            <a href=""> <span class="material-symbols-rounded">
                                    call
                                </span></a>
                        </div>
                    </div>
                    <div class=" card ">
                        <div class="card-body">
                            <span>Dilihat {{ $post->viewedTimes }} kali</span>
                        </div>
                    </div>
                    @auth
                        @if ($post->user_id == auth()->user()->id)
                            <a href="/posts/{{ $post->id }}/edit"><button class="btn btn-primary"><span
                                        class="material-symbols-rounded">
                                        edit
                                    </span></button></a>
                            <form action="/posts/{{ $post->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger"><span class="material-symbols-rounded">
                                        delete
                                    </span></button>
                            </form>
                        @endif
                    @endauth
                </div>
                <div class="card cardShowDescription">

                    <h5>Kategori Produk</h5>
                    {{-- changing string of categories separated by space to an arary --}}
                    @php
                        $categories = explode(' ', $post->categories);
                    @endphp
                    <div class="cardShowDescriptionCategories">
                        @foreach ($categories as $category)
                            <a href="/posts/?category={{ $category }}">{{ $category }}</a>
                        @endforeach
                    </div>
                    <h5>Deskripsi Produk</h5>
                    <p class="card-text mb-0">{{ $post->description }}</p>
                </div>
            </div>
        </div>
    </main>
@endsection
