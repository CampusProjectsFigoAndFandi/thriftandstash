@props(['post'])

<div class="card cardIndex">
    <a href="/posts/{{ $post->id }}" class="text-decoration-none text-dark">
        <img src="
        {{ $post->images ? asset('storage/' . $post->images) : asset('/images/imageCap.jpg') }}"
            class="card-img-top" alt="...">
        <div class="card-middle">
            <h5>Rp {{ $post->price }}</h5>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text text-muted">{{ $post->location }}</p>
        </div>
    </a>
</div>
