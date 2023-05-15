@extends('layout')
@section('content')
    @include('partials._nav')
    <main>
        <x-flash-message />
        <div class="container-xxl my-4">
            <div class="col-6 offset-3">

                <form method="POST" action="/posts/{{ $post->id }}" id="formNew" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h5 class="mb-4 text-center">
                        Jual Barang
                    </h5>
                    <div class="form-floating mb-4">
                        <input name="title" type="text" class="form-control" id="floatingName" placeholder="Nama Barang"
                            value="{{ $post->title }}">
                        <label for="floatingName">Nama Barang</label>
                        @error('title')
                            <div class="ms-1 mt-1 text-start text-danger">
                                {{ $message }}
                            </div>
                        @endError
                    </div>
                    <div class="mb-4">
                        <select name="categories" id="category" class="form-select py-3"
                            aria-label="Default select example">
                            <option value="KategoriLain">Kategori Lain</option>
                            <option value="Elektronik">Elektronik</option>
                            <option value="Perabotan Rumah">Perabotan Rumah</option>
                            <option value="Properti">Properti</option>
                            <option value="Motor">Motor</option>
                            <option value="Mobil">Mobil</option>
                        </select>
                        @error('categories')
                            <div class="ms-1 mt-1 text-start text-danger">
                                {{ $message }}
                            </div>
                        @endError
                    </div>
                    <div class="form-floating mb-4">
                        <textarea name="description" class="form-control" placeholder="Deskripsi" id="floatingDescription">{{ $post->description }}</textarea>
                        <label for="floatingDescription">Deskripsi</label>
                        @error('description')
                            <div class="ms-1 mt-1 text-start text-danger">
                                {{ $message }}
                            </div>
                        @endError
                    </div>
                    <div class="form-floating mb-4">
                        <input name="location" type="text" class="form-control" id="floatingLocation"
                            placeholder="Lokasi" value="{{ $post->location }}">
                        <label for="floatingLocation">Lokasi</label>
                        @error('location')
                            <div class="ms-1 mt-1 text-start text-danger">
                                {{ $message }}
                            </div>
                        @endError
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text">Rp</span>
                        <div class="form-floating">
                            <input name="price" type="text" class="form-control" id="floatingPrice" placeholder="Harga"
                                value="{{ $post->price }}">
                            <label for="floatingPrice">Harga</label>
                        </div>
                    </div>
                    @error('price')
                        <div class="ms-1 mt-1 text-start text-danger">
                            {{ $message }}
                        </div>
                    @endError
                    <div class="mb-4">
                        <label for="formFileMultiple" class="form-label">Foto</label>
                        <input name="images" class="form-control" type="file" id="formFileMultiple" multiple>
                        <img src="{{ $post->images ? asset('storage/' . $post->images) : asset('/images/imageCap.jpg') }}"
                            class="img-thumbnail col-4 my-3" alt="...">
                    </div>
                    <button type="submit" class="btn btn-primary mb-4">Update</button>
                </form>
            </div>
        </div>
    </main>
@endsection
