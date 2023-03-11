@extends('pages.main')

@section('content')
    <h4 class="text-center mb-5 text-3xl font-bold text-blue bg-white py-5 text-blue-500">
        Halaman Kelola Data Produk
    </h4>

    <a class="bg-green-600 px-6 font-semibold py-2 rounded hover:opacity-50 text-white inline-block" href="/products/create">
        Tambah Produk
    </a>
    @if (session()->has('success'))
        <span class="bg-white rounded font-bold text-green-600 px-5 py-2 block mt-5">
            <span class="text-black">
                Notification :
            </span>
            <span>
                {{ session('success') }}
            </span>
        </span>
    @endif

    <div class="mt-5 rounded bg-white overflow-auto">
        <table class="w-full text-center">
            <thead class="bg-fuchsia-600 text-white">
                <tr>
                    <th class="p-3">Id Produk</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $show)
                    <tr>
                        <td>{{ $show->id }}</td>
                        <td>{{ $show->namaproduk }}</td>
                        <td>{{ $show->deskripsi }}</td>
                        <td>Rp. {{ number_format($show->harga, '0', ',', ',') }}</td>
                        <td>
                            <img class="mx-auto rounded border-2 border-white" src="{{ Storage::url($show->gambar) }}"
                                alt="{{ $show->namaproduk }}" width="100">
                        </td>
                        <td class="whitespace-nowrap">
                            <a class="inline bg-yellow-400 px-3 py-2 text-white font-semibold rounded-lg"
                                href="/products/{{ $show->id }}/edit">Edit</a>
                            <form action="/products/{{ $show->id }}" method="POST"
                                class="inline bg-red-600 px-3 py-2 text-white font-semibold rounded-lg">
                                @method('delete')
                                @csrf
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
