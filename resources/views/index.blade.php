@extends('layout')
@section('content')
    @include('partials._nav')
    <main>
        <x-flash-message />
        <div class="container-xxl d-flex flex-column my-4">
            <div class="d-flex dropdown dropdownSortingIndex mb-3 justify-content-end">
                <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Urutkan
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/posts/?sort=latest">Terbaru</a></li>
                    <li><a class="dropdown-item" href="/posts/?sort=view">Banyak dilihat</a></li>
                </ul>
            </div>
            <div id="gridIndex">
                @unless (count($posts) == 0)
                    @foreach ($posts as $post)
                        <x-post-card :post='$post' />
                    @endforeach
                @else
                    <h5>Iklan tidak ditemukan</h5>
                @endunless
            </div>
            <div class="mt-6 p-4 d-flex justify-content-center">
                {{-- https://stackoverflow.com/questions/64002774/laravel-pagination-is-showing-weird-arrows --}}
                {{ $posts->links() }}
                {{-- Paginator::useBootstrap() in AppServiceProvider.php --}}
                {{-- https://laravel.com/docs/8.x/pagination#using-bootstrap --}}
            </div>
        </div>
    </main>
@endsection
