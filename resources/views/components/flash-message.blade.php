@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-6 offset-3 my-4 position-absolute" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
