@extends('layout')
@section('content')
    <main onscroll="aboutNavScroll()">
        <div id="aboutNav">
            <div id="aboutNavBrand">
                <img src="{{ asset('/images/ThriftNew.png') }}" width="140px" alt="">
            </div>
            <a href="/posts">
                <button class="btn btn-primary">
                    <span class="material-symbols-rounded">
                        storefront
                    </span>
                    <span class="material-symbols-rounded">
                        arrow_right_alt
                    </span>
                </button>
            </a>

        </div>
        <div id="aboutMain">
            <div id="aboutMainHeader">


                <h2>
                    About Us
                </h2>

                <img src="{{ asset('/images/ThriftNew.png') }}" alt="">

            </div>
            <div id="desc" class="col-8 offset-2">
                Thrift and Stash adalah website jual beli barang bekas yang dibuat oleh tim kami Achmad Affandi Fauzan dan
                Mohammad Figo Yudhistira Wisesa sebagai tugas Projek di semester 4 dengan dosen pembimbing Pak Faried
                Effendy.

                Kami dapat menawarkan berbagai macam barang bekas berkualitas dengan harga terjangkau dan berkualitas, mulai
                dari perangkat elektronik, properti, hingga kendaraan. Kami juga memiliki slogan Thrift. Find. Delight. yang
                menggambarkan konsep kami untuk memberikan kepuasan kepada pengguna yang dapat menemukan barang bekas idaman
                mereka dengan mudah dan hemat.

            </div>
        </div>
        <div id="aboutFAQ" class="col-6 offset-3">
            <h2>
                Frequently Asked Question (FAQ)
            </h2>
            <div class="faqMain">
                <div class="faqQuestion">
                    Bagaimana proses transaksi di Thrift and Stash?
                    <span class="material-symbols-rounded">
                        expand_more
                    </span>
                </div>
                <div class="faqAnswer faqAnswerHidden">
                    Terdapat tombol call pada setiap iklan, yang akan mengarahkan anda ke chat WhatsApp personal pemilik
                    iklan. Anda akan merasakan transaksi yang fleksibel dan mudah.
                </div>
            </div>
            <div class="faqMain">
                <div class="faqQuestion">
                    Apa Visi dan Misi Thrift and Stash ?
                    <span class="material-symbols-rounded">
                        expand_more
                    </span>
                </div>
                <div class="faqAnswer faqAnswerHidden">
                    Visi kami adalah menjadi website jual beli barang bekas terdepan di Indonesia yang dapat memberikan
                    manfaat bagi lingkungan dan masyarakat.

                    Misi kami adalah menyediakan platform yang mudah, aman, dan nyaman untuk bertransaksi barang bekas,
                    serta memberikan pelayanan yang ramah dan profesional kepada pengguna.

                </div>
            </div>


        </div>
    </main>
@endsection
