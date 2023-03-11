@extends('pages.main')

@section('content')
    <h4 class="text-center mb-5 text-3xl font-bold text-blue bg-white py-5 text-blue-500">
        Selamat datang di halaman dashboard
        School SMK
        ISFI Banjarmasin
    </h4>

    <div class="p-5 bg-white w-96 text-center rounded-lg border-8 border-y-fuchsia-600 shadow">
        <p class="text-xl font-semibold">Jumlah Data Produk</p>
        <div>
            <h5 class="text-4xl font-bold text-fuchsia-600">{{ $jumlah_produk }}</h5>
            <span class="text-xl font-semibold text-fuchsia-600">Produk</span>
        </div>
    </div>
@endsection
