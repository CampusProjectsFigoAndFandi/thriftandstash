@extends('layout')
@section('content')
    @include('partials._nav')
    <main>
        <x-flash-message />
        <div class="container-xxl my-4">
            <div class=" card cardManageSeller my-4 mx-3">
                <div class="card-body">
                    Jumlah Post : {{ count($posts) }}
                </div>
                <div class="card-footer">
                    {{-- temporary --}}
                    {{ $user->name }}
                </div>
            </div>
            <div id="gridManage">
                {{-- temporary --}}
                @unless (count($posts) == 0)
                    @foreach ($posts as $post)
                        <x-post-card :post='$post' />
                    @endforeach
                @else
                    <h5 class="color-GreenOnlineThrifting">{{ $user->name }} belum memposting iklan</h5>
                @endunless

            </div>
        </div>
    </main>
@endsection
