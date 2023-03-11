@extends('pages.main')

@section('content')
    <h4 class="text-center mb-5 text-3xl font-bold text-blue bg-white py-5 text-blue-500">
        Halaman Tambah Data Produk
    </h4>

    <div class="bg-white p-5 rounded-lg shadow-lg border w-[500px]">
        <form action="/products" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="text-xl font-semibold mb-2 block" for="nama-produk">Nama Produk</label>
                <input class="bg-slate-200 p-3 rounded-lg border-2 border-purple-600 block w-full" type="text"
                    name="namaproduk" required>
                @error('namaproduk')
                    <span class="mt-2 text-red-500 block">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="text-xl font-semibold mb-2 block" for="deskripsi">Deskripsi Produk</label>
                <textarea class="bg-slate-200 rounded-lg border-2 border-purple-600 block w-full h-36 p-3" name="deskripsi" required></textarea>
                @error('deskripsi')
                    <span class="mt-2 text-red-500 block">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="text-xl font-semibold mb-2 block" for="harga">Harga Produk</label>
                <input class="bg-slate-200 p-3 rounded-lg border-2 border-purple-600 block w-full" type="number"
                    name="harga" required>
                @error('harga')
                    <span class="mt-2 text-red-500 block">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="text-xl font-semibold mb-2 block" for="gambar">Gambar Produk</label>
                <input class="bg-slate-200 p-2 rounded-lg border-2 border-purple-600 block w-full" type="file"
                    name="gambar" required>
                @error('gambar')
                    <span class="mt-2 text-red-500 block">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg">Simpan</button>
        </form>
    </div>
@endsection
