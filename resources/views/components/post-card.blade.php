@props(['post'])

<div class="card cardIndex">
    <a href="/posts/{{ $post->id }}" class="text-decoration-none text-dark">
        <div id="carousel{{ $post->id }}" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                {{-- <img src=" {{ asset('/images/imageCap.jpg') }}" class="card-img-top" alt="..."> --}}
                @foreach ($post->images as $image)
                    <div class="carousel-item active">
                        <img src="{{ $image }}" class="card-img-top" alt="...">
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{ $post->id }}"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel{{ $post->id }}"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="card-middle">
            <h5>Rp {{ $post->price }}</h5>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text text-muted">{{ $post->location }}</p>
        </div>
    </a>
</div>
